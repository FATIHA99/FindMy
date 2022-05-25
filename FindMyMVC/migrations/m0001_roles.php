<?php 

class m0001_roles
{

    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE roles(
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    role VARCHAR(50) NOT NULL
                    ) ENGINE=INNODB; 
            ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE roles;";
        $db->pdo->exec($SQL);
    }

}