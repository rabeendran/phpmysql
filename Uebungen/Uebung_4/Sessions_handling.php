<?php
  function myInArray($array, $value, $key){
    //loop through the array
    foreach ($array as $val) {
      //if $val is an array cal myInArray again with $val as array input
      if(is_array($val)){
        if(myInArray($val,$value,$key))
          return true;
      }
      //else check if the given key has $value as value
      else{
        if($array[$key]==$value)
          return true;
      }
    }
    return false;
  }
?>