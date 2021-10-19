<?php

class AddNamesProc {
    function __construct(){
        
    }
    function addClearNames(){
        if (isset($_POST["clearNames"])) {
            return "";
        }
        elseif (isset($_POST["enterName"]) && isset($_POST["nameList"])) {
            $newName = $_POST["enterName"];
            $newNameList = explode("\n",$_POST["nameList"]);
            $newNameList[] = $this->formatName($newName);
            sort($newNameList);
            return implode("\n", $newNameList);
        }
        elseif (isset($_POST["enterName"])) {
            return $this->formatName($_POST["enterName"]);
        }
    }

    function formatName ($inputName) {
        $namesArray = explode(" ",$inputName);
        $firstName = $namesArray[0];
        $namesArray[0] = $namesArray[1];
        $namesArray[1] = $firstName;
        $formattedName = implode(", ",$namesArray);
        return $formattedName;
    }
}