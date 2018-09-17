<?php 

$days = array("monday","tuesday","wednesday","thursday","friday","saturday","sunday");

?>
<?php include 'config.php'?>

<main class="main">
    
    
       <!--      -->
        <?php for ($i = 0; $i <7; $i++):?>

        <?php 
        
        if($i==0){
           echo "<div class=\"main__panel--long\">";
           include 'monday.php';
           echo "</div>";
           echo "<div class=\"main__panel__grid\">";
        } else{
            
            include 'panel.php';
        
        }
        ?>
        
            
            
        <?php endfor?>
        <?php echo "</div>";?>

       <!--      -->
    
</main>