<?php

class DbConnect
{
   private  $host;
   private  $dbname;
   private  $username;
   private  $password;

    public function __construct($host, $dbname, $username, $password){
        $this-> host = $host;
        $this-> dbname = $dbname;
        $this-> username = $username;
        $this-> password = $password;

    }
    public function connectDB(){
        $dsn = 'pgsql:host=' .$this->host.';dbname=' . $this->dbname;
      
        try {
          $pdo =  new PDO($dsn, $this->username, $this->password);
        //   $sqlList = [
        //     'CREATE TABLE countries (
        //     id INT PRIMARY KEY NOT NULL,
        //     name  varchar(40) NOT NULL,
        //     code INT NOT NULL
        //     );'
        //     ];
        //     foreach($sqlList as $sql){
        //         $pdo->exec($sql);
        //     }
            echo "Connected to $this->dbname at $this->host successfully.";
        } catch (PDOException $pe) {
            die("Could not connect to the database $this->dbname :" . $pe->getMessage());
        }
        
    }
    
    
}
    