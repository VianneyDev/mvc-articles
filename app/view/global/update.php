<?php
    require '../../../core/database/Database';
 
    $article_id = null;
    if ( !empty($_GET['article_id'])) {
        $id = $_REQUEST['article_id'];
    }
     
    if ( null==$article_id ) {
        header("Location: home.php");
    }
     
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
         
        // update data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = 'UPDATE `articles` set `title` = ?, `text` = ?, `date` =?, `categorie_id` WHERE `article_id` = ?';
            $q = $pdo->prepare($sql);
            $q->execute(array($title,$text,$date,$categorie_id,$article_id));
            Database::disconnect();
            header("Location: home.php");
        }
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM customers where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $name = $data['name'];
        $email = $data['email'];
        $mobile = $data['mobile'];
        Database::disconnect();
    }
?>

<div class="container">
    <div class="span10 offset1">
        <div class="row">
            <h3>Update an Article</h3>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-success">Update</button>
             <a class="btn" href="home.php">Back</a>
         </div>
    </div>
</div> 