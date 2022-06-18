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
// ! to insert 
    public function save()
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => ":$attr", $attributes ); // usename   ===  :username
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
    public  function findOne($where)   // ['username'=> $this -> username]
    {  
      $tableName = $this->tableName(); 
      $attributes = array_keys($where);
      $sql=  implode("AND",array_map(fn($attr)=>"$attr=:$attr", $attributes));
      $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");
      foreach($where as  $key => $item )
      {
        $statement -> bindValue(":$key",$item);
      }
      $statement -> execute();
      return $statement -> fetchObject(static::class); // return one row from users  username ='fatiha' , password = 'dfgv'
    }

  // ! to render all information
    public function selectAll()
    {
        $tableName = $this->tableName();
        $statement = self::prepare("SELECT * FROM  $tableName");
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

    // for update
    public function selectobjects(int $id)
    {
        $tableName = $this->tableName();
        $statement = self::prepare("SELECT * FROM $tableName where id = $id");
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
// !update
   public function update(int $id)
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => "$attr=:$attr", $attributes );
        $statement = self::prepare("UPDATE $tableName SET  
                   ".implode(',', $params)." WHERE id = $id");
        foreach($attributes as $attribute){
            $statement->bindValue(":$attribute", $this->{$attribute});
        }
        $statement->execute();
        return true;
    }

// ! statistique 

    public function countRow()
    {
        $tableName = $this->tableName();
        $statement = self::prepare("SELECT count(*) as countRow FROM $tableName");
        $statement->execute();
        return  $statement -> fetch();
    }
 
    // ! recerch par categori
    public function search($where)
    {
        $tableName = $this->tableName();
        $attributes =array_keys($where);
        $sql=  implode("AND",array_map(fn($attr)=>"$attr=:$attr",$attributes));
        $statement = self::prepare("  SELECT * from $tableName WHERE $sql");
        foreach($where as  $key => $item )
        {
          $statement -> bindValue(":$key",$item);
        }
        $statement -> execute();
        return $statement -> fetchAll();
    }


}