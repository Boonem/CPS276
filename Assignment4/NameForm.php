<?php
Var_Dump($_POST);
if(count($_POST) > 0){
    require_once('addNameProc.php');
    $addName = new AddNamesProc();
    $output = $addName->addClearNames($_POST);
} 
?>
<html>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<body>
<div class=container>
    <h1>Add Names</h1>
    <form action = "NameForm.php" method="post">
        <button type="submit" class="btn btn-primary">Add Name</button>
        <button type="submit" class="btn btn-primary" name="clearBtn" value="clear">Clear Names</button>
        <br>
        <div class="form-group">
            <label for="nameInput">Enter Name</label>
            <br>
            <input type="text" name="nameInput">
        </div>
        <label for="namelist">List of Names</label>
        <br>
        <textarea style="height: 500px;" type="password" class="formcontrol" id="namelist" name="namelist"><?php echo $output?></textarea> 
    </form>
</div>
</body>
</html>