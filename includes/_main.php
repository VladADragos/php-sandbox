<?php // Dag array
$days = array("monday","tuesday","wednesday","thursday","friday","saturday","sunday");
?>
<!--  tar in config fil    -->
<?php include 'config.php'?>
<!--   start av main block   -->
<main class="main">
       <!--  startar for loop som loopar genom dag arrayen   -->
        <?php for ($i = 0; $i <7; $i++):?>
        <?php 
        
        //if sats för att lägga in rätt container // och i griden

        if($i==0){

            // lägger container för den långa panelen
            // och lägger 

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
<!--  slut av main block    -->