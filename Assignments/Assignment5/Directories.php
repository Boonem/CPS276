<?php

class Directories {

    function createReadme() {
        if (isset($_POST["dirName"])) {
            $dirPath = "directories/" . $_POST["dirName"];
            if (file_exists($dirPath)) {
                return "<p>A directory already exists with that name.</p>";
            }
            else {
                mkdir($dirPath);
                chmod($dirPath,0777);
                $file = fopen($dirPath . "/readme.txt", "w");
                fwrite($file, $_POST["readmeText"]);
                fclose($file);
                if (file_exists($dirPath)) {
                    return ("<p>File and directory were created\n</p><a href = \"" . $dirPath . "/readme.txt\">Path where file is located</a>");
                }
                else {
                    return "<p>Error: File could not be created.</p>";
                }
            }
        }
    }

}