<?php
    require '../../../core/database/Database';
    $article_id = 0;
     
    if ( !empty($_GET['article_id'])) {
        $id = $_REQUEST['article_id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $article_id = $_POST['article_id'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM `articles`  WHERE `article_id` = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("Location: home.php");
         
    }
?>

<div class="container">
    <div class="span10 offset1">
        <div class="row">
            <h3>Delete an Article</h3>
        </div>

        <form class="form-horizontal" action="delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>"/>
            <p class="alert alert-error">Are you sure to delete ?</p>
            <div class="form-actions">
                <button type="submit" class="btn btn-danger">Yes</button>
                <a class="btn" href="index.php">No</a>
            </div>
        </form>
    </div>
</div> 