<form action='' method='post'>

    <p><label>Title</label><br />
    <input type='text' name='Title' value='<?php if(isset($error)){ echo $_POST['title'];}?>' required></p>

    <p><label>Date</label><br />
    <input type='text' name='Date' value='<?php if(isset($error)){ echo
    $_POST['created_at'];}?>' required></p>

    <p><label>Author</label><br />
    <input name='author'value='<?php if(isset($error)){ echo $_POST['postCont'];}?>' required></p>

    <p><label>Body</label><br />
    <textarea name='body' cols='80' rows='10' required><?php if(isset($error)){ echo $_POST['created_at'];}?></textarea></p>

    <p><input type='submit' name='submit' value='Submit'></p>

</form>