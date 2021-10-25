<?php
    $output = "";
    if(count($_POST) > 0){
        require_once 'Directories.php';
        $addDir = new Directories();
        $output = $addDir->createReadme();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  </head>
  <title>File and Directory Assignment</title>
  <body>
        <div class= "container">
            <h1>File and Directory Assignment</h1>
            <p>Enter a folder name and the contents of a file. Folder names should contain alpha numeric characters only.</p>
            <?php echo $output?>
            <form id="dirForm" action="Assignment5.php" method="post">
                <div class="form-group">
                    <div class="row g-3">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="dirName" class="form-label">Folder Name</label>
                                <input type="text" class="form-control" id="dirName" name="dirName">
                        </div>
                        <div class="row g-3">
                            <div class="col-12">
                            <label for="readmeText" class="form-label">File Content</label>
                            <textarea style="height: 200px;" class="form-control" id="readmeText" name="readmeText"></textarea>
                        </div>
                        <div class="col-sm-auto">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>


