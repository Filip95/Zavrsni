
<?php 
    include_once('includes/header.php');
    ?>

<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
        <?php 
            $sql = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 5";
            $statement = $connection->prepare($sql);

            $statement->execute();

            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $posts = $statement->fetchAll();
            
            ?>

            <?php
            foreach ($posts as $post) {
            ?>
            <div>
                <h2><a class="blog-title" href="single-post.php?id=<?php echo ($post['id']) ?>"> <?php echo $post['title'];?></a></h2>
                <p class="blog-post-meta"><?php echo $post['created_at']?> by <a href="#"><?php echo $post['author']?></a></p>

                <p><?php 
                    $body = $post['body'];
                    echo substr($body,0,400) . "...";
                ?></p>
                <a href="single-post.php?id=<?php echo ($post['id']) ?>" class="btn btn-primary">Read More</a>
                <hr>
            </div>
            <?php } ?>

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>
        </div>
        <?php include('includes/sidebar.php') ?>
    </div>
</main>
<?php include('includes/footer.php')?>