<?php
namespace app\models;
use app\core\DbModel;

class User extends DbModel
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;
//    insciption 
    public int $id = 0;
    public string $username = '';
    public string $user_password = '';
    public int $fk_user_role = 0;
    public string $confirmPassword = '';
    
    public function tableName(): string
    {
        return 'users';
    }
    public function primaryKey():string
    {
        return 'id'; 
    }

    public function save()
    {
        $this->status = self::STATUS_INACTIVE;
        // $this->user_password = password_hash($this->user_password, PASSWORD_DEFAULT);
        return parent::save();
    }

    public function rules(): array
    {
        return [
            'username' => [self::RULE_REQUIRED], 
            'user_password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 4], [self::RULE_MAX, 'max' => 24]],
            'confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'user_password']]
        ];
    }

    public function attributes(): array
    {
        return ['username', 'user_password'];
    }
    
    public function labels(): array
    {
        return[
            'username'=>'nom de utilisateur ',
            'user_password'=>'mot de passe ',
            'confirmPassword'=>'Confirmation ',

        ];
    } 
  
}