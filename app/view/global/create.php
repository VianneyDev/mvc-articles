<?php
     
    require '../../../core/database/Database';
 
    if ( !empty($_POST)) {
        // keep track validation errors
        $titleError = null;
        $textError = null;
        $dateError = null;
        $categorieError = null;
         
        // keep track post values
        $title = $_POST['title'];
        $text = $_POST['emtextail'];
        $date = $_POST['date'];
        $categorie = $_POST['categorie'];
         
        // validate input
        $valid = true;
        if (empty($title)) {
            $titleError = 'Please enter Title';
            $valid = false;
        }
         
        if (empty($text)) {
            $textError = 'Please enter some content';
            $valid = false;
        } 
         
        if (empty($date)) {
            $dateError = 'Please enter a date';
            $valid = false;
        }

        if (empty($categorie)) {
            $categorieError = 'Please put a categorie for it';
            $valid = false;
        }
         
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = 'INSERT INTO `articles` (`title`, `text`, `date`, `categorie_id`) values(?, ?, ?, ?)';
            $q = $pdo->prepare($sql);
            $q->execute(array($title,$text,$date,$categorie));
            Database::disconnect();
            header("Location: home.php");
        }
    }
?>

<div class="container">
    <div class="span10 offset1">
        <div class="row">
            <h3>Create an Article</h3>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-success">Create</button>
             <a class="btn" href="home.php">Back</a>
         </div>
    </div>
</div> 