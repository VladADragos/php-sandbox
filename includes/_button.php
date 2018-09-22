<div class="buttons" id="<?php echo $row['id']?>">
<form action="<?php  $_SERVER['PHP_SELF']; ?>" method="POST">
        <button class="delete" type="submit" name="editButton">
            edit
        </button>
        <input type="text" name="id" style="display: none;" value="<?php echo $row['id']?>">
        
    </form>
        

    <form action="<?php  $_SERVER['PHP_SELF']; ?>" method="POST">
        <button class="delete" type="submit" name="deleteButton">
            delete
        </button>
        <input type="text" name="id" style="display: none;" value="<?php echo $row['id']?>">
    </form>

</div>