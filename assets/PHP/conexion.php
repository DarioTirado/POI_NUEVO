<?php

class ConectionDB{
    function connect(){
     $conn =  new mysqli("localhost", "root", "","bdm");
     return $conn;
    }
 }

?>