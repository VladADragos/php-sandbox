<?php include 'handleForm.php'; ?>
<div class="panel">
<form action="<?php  $_SERVER['PHP_SELF']; ?>" method="POST">
        
            <div class="panel__inner">
                <div class="svg-container">
                    <?php include './images/php.svg'?>
                </div>
            
            <div class="panel__inner--left">
            <input  type="text" name="from" value="<?php echo $editFrom;?>">
            <input  type="text" name="activity" value="<?php echo $editActivity;?>">
            <input type="text" name="id" style="display: none;" value="<?php echo $row['id']?>">
            </div>
            <div class="panel__inner--right">
            <input  type="text" name="to" value="<?php echo $editTo;?>">
            <input class="button" type="submit" name="editSubmit" value="update"> 
               
            </div>
            
        </div>
        
        </form>

</div>


