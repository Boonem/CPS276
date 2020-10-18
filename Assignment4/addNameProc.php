<?php
/*if(count($_POST) > 0){
    require_once('addNameProc.php');
    $addName = new AddNamesProc();
    $output = $addName->addClearNames($_POST);
} */
class AddNamesProc {
    public static $names;
    public static $namesCounter;
    public function __construct(){
        self::$namesCounter = 0;
    }
    public function __toString() {
        return self::$names;
    } 
    public function addClearNames($input){
        if ($input["clearBtn"] == "clear"){
            self::$names = "";
        }
        else{
            self::$names = ((self::$names . "\n") . $input[nameInput]);
            self::$namesCounter++;
        }
        return self::$names;
    }
}
?>