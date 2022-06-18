<?php

namespace app\core;

abstract class Model
{
    public const RULE_REQUIRED = 'required';
    public const RULE_EMAIL = 'email';
    public const RULE_MIN = 'min';
    public const RULE_MAX = 'max';
    public const RULE_MATCH = 'match';
    public const RULE_UNIQUE = 'unique';

    public array $errors = [];
    abstract public function rules(): array;
    
//  ! load data from form to the attributes
    public function loadData($data)
    {   // data = [image => car.png,
        //       objet=> car ]

        foreach($data as $key => $value) {
            if(property_exists($this, $key)) {
                $this->{$key} = $value;
              //  $this -> image = 'car.png'; 
            }
        }
    }

    //! labels methode 
    public function labels():array
    {
        return [];
    }

// ! validation method
    public function validate()
    {
        foreach($this->rules() as $attribute => $rules)
       {
            $value = $this->{$attribute}; //objet : 'fatiha' 

            foreach($rules as $rule) //!'user_password' => [  self::RULE_REQUIRED  ,   [self::RULE_MIN, 'min' => 4],  [self::RULE_MAX, 'max' => 24]    ],
            {  // rule = "required";
                
                $ruleName = $rule; // [self::RULE_MIN, 'min' => 4]
                if(!is_string($ruleName)) 
                {
                    $ruleName = $rule[0];
                }

                if ($ruleName === self::RULE_REQUIRED && !$value) 
                {
                    $this->addError($attribute, self::RULE_REQUIRED);
                }

                if ($ruleName === self::RULE_EMAIL && !filter_var($value, FILTER_VALIDATE_EMAIL)) 
                {
                    $this->addError($attribute, self::RULE_EMAIL);
                }

                if ($ruleName === self::RULE_MIN && strlen($value) < $rule['min'])
                {
                    $this->addError($attribute, self::RULE_MIN, $rule);
                }

                if ($ruleName === self::RULE_MAX && strlen($value) > $rule['max'])
                {
                    $this->addError($attribute, self::RULE_MAX, $rule);
                }
                
                if ($ruleName === self::RULE_MATCH && $value !== $this->{$rule['match']})
                {
                    $this->addError($attribute, self::RULE_MATCH, $rule);
                }

                if ($ruleName === self::RULE_UNIQUE) 
                {
                    $className = $rule['class'];
                    $uniqueAttribute  = $rule['attribute'] ?? $attribute;
                    $tableName = $className::tableName();
                    $statement = Application::$app->db->prepare("SELECT * FROM $tableName WHERE $uniqueAttribute = :attr");
                    $statement->bindValue(":attr", $value);
                    $statement->execute();
                    $record = $statement->fetchObject();

                    if ($record ) 
                    {
                        $this->addError($attribute, self::RULE_UNIQUE, ['field' => $attribute]);
                    }
                }
            }
        }
        return empty($this->errors);
    }
// ! add error            username   self::RULE_MIN  [self::RULE_MIN, 'min' => 4]
    private function addError(string $attribute, string $rule, $params = [])
    {  // [0]min [min] =>4
       
        $message = $this->errorMessages()[$rule] ?? '';

        foreach($params as $key => $value) {
            $message = str_replace("{{$key}}", $value, $message);
            // min ,4,message 
        }
        $this->errors[$attribute][ ] = $message;
    }
    // !message 
    public function errorMessages() 
    {
        return [
            self::RULE_REQUIRED => 'This field is required',
            self::RULE_EMAIL => 'This field must be valid email address',
            self::RULE_MIN => 'Min length of this field must be {min}',
            self::RULE_MAX => 'Max length of this field must be {max}',
            self::RULE_MATCH => 'This field must be the same as {match}',
            self::RULE_UNIQUE => 'Record with this {field} all ready exists',
        ];
    }


    

    // ! error 
    public function Error(string $attribute, string $message)
    {
        $this->errors[$attribute][] = $message;
    }
    public function hasError($attribute)
    {
        return $this->errors[$attribute] ?? false;
    }

    public function getFirstError($attribute)
    {
        return  $this->errors[$attribute][0] ?? false;
    }
}