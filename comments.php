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
        </form> 
            
        
</div>
