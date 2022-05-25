<?php

namespace app\models;

use app\core\DbModel;


class TeacherModel extends DbModel
{
 
        public int $id;
        public string $matricule = '';
        public string $firstname = '';
        public string $lastname = '';
        public string $gender =  '';
        public string $matiere = '';
        public string $phone = '';

    public function tableName(): string
    {
        return 'teachers';
    }

    public function rules(): array
    {
        return [
            'matricule' => [self::RULE_REQUIRED, [
                self::RULE_UNIQUE, 'class' => self::class
            ]],            
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'gender' => [self::RULE_REQUIRED],
            'matiere' => [self::RULE_REQUIRED],
            'phone' => [self::RULE_REQUIRED,[
                self::RULE_UNIQUE, 'class' => self::class
            ]],  
        ];
    }

    public function attributes(): array
    {
        return [ 
            'matricule',            
        'firstname' ,
        'lastname',
        'gender',
        'matiere',
        'phone'];
    }

    public function update(int $id)
    {
        return parent::update($id);
    }

    public function selectAll()
    {
        return parent::selectAll();
    }

    public function select(int $id)
    {
        return parent::select($id);
    }

    public function delete(int $id)
    {
        return parent::delete($id);
    }

    public function save()
    {
        return parent::save();
    }

}