<div class="panel">
<form action="<?php  $_SERVER['PHP_SELF']; ?>" method="POST">
        
            <div class="panel__inner">
                <div class="svg-container">
                    <?php include './images/php.svg'?>
                </div>
            
            <div class="panel__inner--left">
            <input placeholder="from" type="text" name="from">
            <?php include '_select.php'?>
            </div>
            <div class="panel__inner--right">
            <input placeholder="to" type="text" name="to">
            <input class="button" type="submit" name="submit" value="add"> 
               
            </div>
            
        </div>
        
        </form>
        
</div>


