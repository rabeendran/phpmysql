<?php

$newRow = new Post("tbl_person");  

class Post
{
        
        private $connection;
        private $tbl_name;
        private $id;
        
        
        function __construct($tbl_name) {
                $this->tbl_name = $tbl_name;
                $this->connection = new PDO('mysql:host=localhost;dbname=loc_orm', 'loc_orm', '12341234');
                echo "Datenbank ok";
        }
        
        public function findByID($id) {
                $result = $this->connection->query("SELECT * FROM ".$this->tbl_name." WHERE id = ".$id)->fetch();
                echo "ID: ".$result["id"]."<br />";
                echo "Name: ".$result["name"]."<br />";
                echo "Vorname: ".$result["vorname"]."<br />";
                echo "Alter: ".$result["alter"]."<br />";

                echo "findByID ok";
        }

        public function insert($name, $vorname, $alter) {
                $this->connection->exec("INSERT INTO ".$this->tbl_name." (name, vorname, alter) VALUES ('".$name."', '".$vorname."', '".$alter."')");
        }

        public function update() {
                $this->connection->exec("UPDATE FROM ".$this->tbl_name." WHERE id = '".$id."'");
        }

        public function delete($id) {
                $this->connection->exec("DELETE FROM ".$this->tbl_name." WHERE id = '".$id."'");
        }

}


?>