<?php

class CONTROLL extends PDO {


   protected $hasActiveTransaction = false;
   

   function beginTransaction () {
      if ( $this->hasActiveTransaction ) {
         return false;
      } else {
         $this->hasActiveTransaction = parent::beginTransaction ();
         return $this->hasActiveTransaction;
      }
   }

   function commit () {
      parent::commit ();
      $this->hasActiveTransaction = false;
   }

   function rollback () {
      parent::rollback ();
      $this->hasActiveTransaction = false;
   }

}


?>