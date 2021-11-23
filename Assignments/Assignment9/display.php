<?php
    $output = "";
    if(count($_POST) > 0){
        require_once 'Crud.php';
        $getNotes = new Crud();
        $output = $getNotes->getNotes();
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
  <title>Display Notes</title>
  <body>
        <div class= "container">
            <h1>Display Notes</h1>
            <p><a href="index.php">Add Note</a></p>
            
            <form id="dirForm" action="display.php" method="post">
                <div class="form-group">
                    <div class="row g-3">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="startdatetime" class="form-label">Start Date and Time</label>
                                <input type="datetime-local" class="form-control" id="startdatetime" name="startdatetime" placeholder="mm/dd/yyyy --:-- --">
                        </div>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="datetime" class="form-label">End Date and Time</label>
                                <input type="datetime-local" class="form-control" id="enddatetime" name="enddatetime" placeholder="mm/dd/yyyy --:-- --">
                        </div>
                        <div class="col-sm-auto">
                            <button type="submit" class="btn btn-primary" name="submit">Get Notes</button>
                        </div>
                    </div>
                </div>
            </form>
            <?php echo $output?>
        </div>
    </body>
</html>

