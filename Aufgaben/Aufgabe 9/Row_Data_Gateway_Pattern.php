<?php
class Post extends CONTROLL
{
        
        private $connection;
        private $name;
        private $vorname;
        private $alter;
        
           
           
        public function findByID($id) {
                $result = $this->connection->query("SELECT * FROM tbl_person WHERE id = ".$id)->fetch();
                $this->setname($result["name"]);
                $this->setvorname($result["vorname"]);
                $this->setalter($result["alter"]);
        }

        public function insert() {
                $this->connection->exec("INSERT INTO tbl_person (name, vorname, alter) VALUES ('".$this->name."', '".$this->vorname."', '".$this->alter."')");
        }

        public function update() {
                $this->connection->exec("UPDATE FROM tbl_person WHERE alter = '".$this->alter."'");
        }

        public function delete() {
                $this->connection->exec("DELETE FROM tbl_person WHERE alter = '".$this->alter."'");
        }
        
        public function setname($name) {
                $this->name = $name;
        }
        
        public function setvorname($vorname) {
                $this->vorname = $vorname;
        }
        
        public function setalter($alter) {
                $this->alter = $alter;
        }
}
?>