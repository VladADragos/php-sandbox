<?php // Dag array
$days = array("monday","tuesday","wednesday","thursday","friday","saturday","sunday");
session_start();

if(!isset($_SESSION['days'])){
    
    echo "session not set";
    $_SESSION['days'] = $days;
}elseif(isset($_SESSION['days'])){
    echo "session is set";
}



?>
<!--  tar in config fil    -->
<?php include 'config.php'?>

<?php
$data=$_SESSION['days'];
if(isset($_POST['switch'])){
        
            
            $incoming = $_POST['id'];
            
            
            
             
                
            
            for($searchIterator = 0;$searchIterator<7;$searchIterator++){
                if($_SESSION['days'][$searchIterator] == $incoming){
                    $_SESSION['days'][$searchIterator] = $_SESSION['days'][0];
                    $_SESSION['days'][0]= $incoming;
                }
            }
            
            
            
            
        }
        
?>
<!--   start av main block   -->
<main class="main">
       <!--  startar for loop som loopar genom dag arrayen   -->
        <?php for ($i = 0; $i <7; $i++):?>
        <?php 
        $days = $data;
       
        
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