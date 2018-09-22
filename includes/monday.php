<?php $stmt = $pdo->query("SELECT * FROM $days[$i]"); ?>
<?php include 'delete.php'?>
<?php include 'handleForm.php'; ?>

<div class="panel panel--long">
    <h2><?php echo $days[$i] ?></h2>
    
    <?php while(($row = $stmt->fetch(PDO::FETCH_ASSOC))): ?>
            <div class="panel__inner" id="<?php echo 'edit'.$row['id']?>">
                <div class="svg-container">
                    <?php include './images/'.$row['activity'].'.svg'?>
                </div>
            
            <div class="panel__inner--left">
                <h3><?php echo $row['from']?></h3>
                <p><?php echo $row['activity']?></p>
            </div>
            
            <?php include '_button.php'?>
            <div class="panel__inner--right">
                <p>
                <?php echo ($row['to']-$row['from']).' min'?>
                </p>

                    <i onclick="crud<?php echo $row['id']?>()" class="fas fa-ellipsis-h"></i>

            </div>
            <script>
                
                let isShown<?php echo $row['id']?>  = true;
                let crud<?php echo $row['id']?> =()=>{
                let button = document.getElementById('<?php echo $row['id']?>');

                if(isShown<?php echo $row['id']?> ==true){
                    button.style.display="flex";
                    isShown<?php echo $row['id']?>=false;
                    
                }else if(isShown<?php echo $row['id']?> ==false){
                    button.style.display="none";
                    isShown<?php echo $row['id']?>=true;
                }
                
                }

                



            </script>
        </div>
        <hr>
       
        
    <?php endwhile; ?>
    <?php if($editt == false){
        include '_form.php';
    } elseif($editt == true){
        include '_edit.php';
        
    }
        
        ?>
    
  
</div>
