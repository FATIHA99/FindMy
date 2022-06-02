<?php 

class m0003_objetPerdu 
{

    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE objetsTrouve (
        id INT AUTO_INCREMENT PRIMARY KEY,
        declaration VARCHAR(50) CHECK(declaration='privé' OR declaration='public'),
        objet VARCHAR(50) NOT NULL,
        categorie VARCHAR(50) NOT NULL,
        dateDeTrouve DATE,
        ville VARCHAR(50) NOT NULL,
        adresse  VARCHAR(50) NOT NULL,
        details VARCHAR(50),
        tele VARCHAR(50),
        despo VARCHAR(50),
        typeImg VARCHAR(50),
        nameImg VARCHAR(50),
        dataImg LONGBLOB , 
        fk_user INT ,
        FOREIGN KEY(fk_user) 
        REFERENCES users(id)
        ON DELETE CASCADE
        ) ENGINE=INNODB; ";
          
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE objetsTrouve;";
        $db->pdo->exec($SQL);
    }

}