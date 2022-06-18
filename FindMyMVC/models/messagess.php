<?php
namespace app\models;
use app\core\Model;

use app\core\Application;
use app\core\DbModel;

class messagess extends DbModel
{
    public int $id=0;
    public string $name='';
    public string $email='';
    public string $tele='';
    public string $msg='';
    public function tableName(): string
    {
        return 'messages';
    }
    // ! affichage 
    public function selectAll()
    {
        return parent::selectAll();
    }

// ! insert  
    public function addMsg()
    {
      
        return parent::save();
    }
// ! validation  rules 
public function rules(): array
{
    return [];
}
  // ! table des attributs
  public function attributes(): array
  {
      return ['id','name', 'email', 'tele','msg'];
  }
    
}