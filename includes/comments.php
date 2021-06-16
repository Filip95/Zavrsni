<?php include_once('header.php') ?>

<?php

$sql = "SELECT comments.author AS nameOfAuthor, comments.text FROM comments LEFT JOIN posts ON posts.id=comments.post_id WHERE comments.post_id={$_GET['id']}";
$statement = $connection->prepare($sql);

$statement->execute();

$statement->setFetchMode(PDO::FETCH_ASSOC);

$comments = $statement->fetchAll();

?>
<h1> Comment section</h1>
<?php

foreach($comments as $comment){

    ?>

    <div class="comment-box">
        <ul class="comment-content">
            <li><?php echo($comment['text'])?></br>
            by <strong><?php echo($comment['nameOfAuthor'])?></strong></li>
        </ul>
        <hr>
    </div>
<?php

}
?>


<div class="comment-area">
        <form>
            <div class="form-group">
                <label for="commentName">Name</label>
                    <input type="text" name="name" class="form-control" id="commentName" placeholder="Name">  
            </div>    

            <div class="form-group">
                <label for="commentText">Comment</label>
                    <textarea cols="80" rows="10" name="comment" id="commentText" class="form-control"></textarea>
            </div>
            <button type="submit" name="post_comment" class="btn btn-primary"> Post Comment</button>
            <?php
                
                if(isset($_POST["submit"]))
                {   
                    try { 
                        $dbConnection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        echo "Connected successfully";
                      } catch (PDOException $error) {
                        echo 'Connection error: ' . $error->getMessage();
                    }
                    $commentName = $_POST['name'];
                    $commentText = $_POST['comment'];
                    $postId = $_GET['id'];
                    $insertStatement = $dbConnection->prepare("INSERT INTO comments (author,text,post_id) VALUES ('$commentName','$commentText',$postId)");
                    if ($insertStatement->execute()) {
                        echo "New record created successfully";
                      } else {
                        echo "Unable to create record";
                      } 
                }    
            ?>
        </form> 
            
        
</div>


