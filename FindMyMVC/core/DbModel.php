<?php

namespace app\core;
use app\models\User;
use PDO;

use function PHPSTORM_META\type;

abstract class DbModel extends Model
{
    public $dataList = [];
    abstract public function tableName(): string;
    abstract public function attributes(): array;
    // abstract public function  primaryKey(): string;

// ! to insert 
    public function save()
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => ":$attr", $attributes );
        $statement = self::prepare("INSERT INTO $tableName (".implode(',', $attributes).")  VALUES (".implode(',', $params).") ");
        foreach($attributes as $attribute)
        {
            $statement->bindValue(":$attribute", $this->{$attribute});
        }
        $statement->execute();
        return true;
    }
  // !prepare
    public static function prepare($sql)
    {
        return Application::$app->db->pdo->prepare($sql); 
    }
// ! find one user
    public  function findOne($where)
    {

      $tableName= static::tableName();
      $attributes =array_keys($where);
      $sql=  implode("AND",array_map(fn($attr)=>"$attr=:$attr",$attributes));
      $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");
      foreach($where as  $key => $item )
      {
        $statement -> bindValue(":$key",$item);
      }
      $statement -> execute();
      return $statement -> fetchObject(static::class);
    }

  // ! to reder all information
    public function selectAll()
    {
        $tableName = $this->tableName();
        $statement = self::prepare("SELECT * FROM $tableName");
        $statement->execute();
        return  $this->dataList =  $statement->fetchAll();

    }
//  ! afficher les objet  d'un seul user 
    public function select(int $id)
    {
        $tableName = $this->tableName();
        $statement = self::prepare("SELECT * FROM $tableName where fk_user = $id");
        $statement->execute();
      
       return  $this->dataList = $statement->fetchAll();
    }

  // ! delete  
   
  public function delete(int $id)
  {
      $tableName = $this->tableName();
      $statement = self::prepare("DELETE FROM $tableName WHERE id = $id");
      $statement->execute();
      return true;
  }

  
   // public function update(int $id)
    // {
    //     $tableName = $this->tableName();
    //     $attributes = $this->attributes();
    //     $params = array_map(fn($attr) => "$attr=:$attr", $attributes );
    //     $statement = self::prepare("UPDATE $tableName SET  
    //                ".implode(',', $params)." WHERE id = $id");
    //     foreach($attributes as $attribute){
    //         $statement->bindValue(":$attribute", $this->{$attribute});
    //     }

    //     $statement->execute();
    //     return true;
    // }
 

}