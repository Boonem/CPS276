<?php
    $output = "";
    if(count($_POST) > 0){
        require_once 'Crud.php';
        $addNote = new Crud();
        $output = "<p>" . ($addNote->addNote()) . "</p>";
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
  <title>Add Note</title>
  <body>
        <div class= "container">
            <h1>Add Note</h1>
            <?php echo $output ?>
            <p><a href="display.php">Display Notes</a></p>
            <form id="dirForm" action="index.php" method="post">
                <div class="form-group">
                    <div class="row g-3">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="datetime" class="form-label">Date and Time</label>
                                <input type="datetime-local" class="form-control" id="datetime" name="datetime" placeholder="mm/dd/yyyy --:-- --">
                        </div>
                        <div class="row g-3">
                            <div class="col-12">
                            <label for="note" class="form-label">Note</label>
                            <textarea style="height: 200px;" class="form-control" id="note" name="note"></textarea>
                        </div>
                        <div class="col-sm-auto">
                            <button type="submit" class="btn btn-primary" name="submit">Add Note</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

