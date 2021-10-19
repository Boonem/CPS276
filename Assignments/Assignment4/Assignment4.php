<?php
    $output = "";
    if(count($_POST) > 0){
        require_once 'addNameProc.php';
        $addName = new AddNamesProc();
        $output = $addName->addClearNames();
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
  <title>Add Names</title>
  <body>
        <div class= "container">
            <h1>Add Names</h1>
            <form id="nameForm" action="Assignment4.php" method="post">
                <div class="form-group">
                    <div class="row g-3">
                        <div class="col-sm-auto">
                            <button type="submit" class="btn btn-primary" name="addName">Add Name</button>
                        </div>
                        <div class="col-sm-auto">
                            <button type="submit" class="btn btn-primary" name="clearNames">Clear Names</button>
                        </div>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="enterName" class="form-label">Enter Name</label>
                                <input type="text" class="form-control" id="enterName" name="enterName">
                        </div>
                        <div class="row g-3">
                            <div class="col-12">
                            <label for="nameList" class="form-label">List of Names</label>
                            <textarea style="height: 500px;" class="form-control" id="nameList" name="nameList"><?php echo $output ?></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>


