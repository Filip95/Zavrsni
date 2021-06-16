<aside class="col-sm-3 ml-sm-auto blog-sidebar">
<div class ="sidebar-module-inset">
            <h4>Search</h4>
            <hr>
                <form method="post" action="search_form.php" class="search-module">
                    <div class ="search-module">
                        <input type = "text" name="search" required class="sidebar-module-inset" id="searchBlog" placeholder="search blog posts...">
                    </div>
                </form>        
            </div>

            <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>

            <div class ="sidebar-module">
            <h4>Subscribe</h4>
            <hr>
                <form method="post" action="subscribe.php">
                    <div class="form-group">
                        <input type ="text" name="name" class="sidebar-module-inset" id="inputName" placeholder ="Name">
                    </div>
                    <div class ="form-group">
                        <input type="email" name="email" class="sidebar-module-inset" id="inputEmail" placeholder="Email">
                    </div>

                    <button type="submit" class="btn-primary" name="subscribe" required value="<?php echo $userEmail ?>">Subscribe</button>
                </form>
            </div>


            <div class="sidebar-module">
                <h4>Archives</h4>
                <ol class="list-unstyled">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>
            <div class="sidebar-module">
                <h4>Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->