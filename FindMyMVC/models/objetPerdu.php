<?php
namespace app\models;
use app\core\DbModel;

class objetPerdu extends DbModel
{
    // 13 ATTRIBUTES
    public int $id =0;
    public string $declaration = '';
    public string $objet = '';
    public string $categorie =  '';
    public string $dateDePerd = '';
    public string $ville = '';
    public string $adresse = '';
    public string $details = '';
    public string $tele = '';
    public string $image = '';
    public string $fk_user = '';

    public function tableName(): string
    {
        return 'objetsPerdu';
    }
// ! affichage 
    public function selectAll()
    {
        return parent::selectAll();
    }

// ! insert  
    public function insertObjetPerdu()
    {
      
        return parent::save();
    }
//  ! delete
    public function delete(int $matricule)
    {
        return parent::delete($matricule);
    }

    // ! update 
    public function update($id)
    {
        return parent::update($id);
    }

// ! select one 
    public function selectobjects($i)
    {
      return parent::selectobjects($i);
    }
// ! validation  rules 
    public function rules(): array
    {
        return [
            // 'nom' => [self::RULE_REQUIRED],
            // 'genre' => [self::RULE_REQUIRED],
            // 'job' => [self::RULE_REQUIRED],
            // 'adresse' =>  [self::RULE_REQUIRED],
            // 'phone' =>  [self::RULE_REQUIRED],
        ];
    }

    // ! table des attributs
    public function attributes(): array
    {
        return ['id','declaration', 'objet', 'categorie', 'dateDePerd', 'ville','adresse','details','tele', 'image','fk_user'];
    }

 
}

