<?php
 
    $id = $_POST["id"];
    $pass = $_POST["pass"];
 
    if($id ==="fuka" && $pass === "0210"){
        A();
    }else{
        B();
    }
 
    function A(){
        echo " モードはA です。";
    }
    function B(){
        echo " モードはB です。";
    }
    function C(){
        echo " どのモードでもありません。";
    }
