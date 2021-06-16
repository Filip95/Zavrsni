<?php
    if(isset($_POST['search'])){
        require ("search.php");
    }
    if(count($results) > 0){
        foreach($results as $r){
        ?>    
            <!--printf("<div>%s</div>",$r['title']);-->
            <div>
            <h2><a class="blog-title" href="single-post.php?id=<?php echo ($r['id']) ?>"> <?php echo $r['title'];?></a></h2>
                <p class="blog-post-meta"><?php echo $r['created_at']?> by <a href="#"><?php echo $r['author']?></a></p>

                <p><?php 
                    echo $r['body'];   
                ?></p>
            </div>        
        <?php } ?>
<?php
    } else{
        echo "No results found";
    }
?>