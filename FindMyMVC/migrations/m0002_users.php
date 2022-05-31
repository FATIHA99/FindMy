<?php 

class m0002_users 
{

    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE users(
                id INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(50) NOT NULL,
                user_password VARCHAR(50) NOT NULL,
                fk_user_role INT DEFAULT 1,
                     FOREIGN KEY(fk_user_role) 
                     REFERENCES roles(id)
                     ON DELETE CASCADE
                    ) ENGINE=INNODB; 
            ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE users;";
        $db->pdo->exec($SQL);
    }

}