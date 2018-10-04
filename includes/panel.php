<?php $stmt = $pdo->query("SELECT * FROM $days[$i] LIMIT 3"); ?>
<?php include 'delete.php'?>
<div class="panel ">
        <h2><?php echo $days[$i]?></h2>
        <?php while(($row = $stmt->fetch(PDO::FETCH_ASSOC))): ?>
            <div class="panel__inner">
                <div class="svg-container">
                    <?php include './images/'.$row['activity'].'.svg'?>
                </div>
            
            <div class="panel__inner--left">
                <h3><?php echo $row['from']?></h3>
                <p><?php echo $row['activity']?></p>
            </div>
            <div class="panel__inner--right">
                <p>
                <?php echo ($row['to']-$row['from']).' min'?>
                </p>
                <a href="">
                    <i class="fas fa-ellipsis-h"></i>
                </a>
               
            </div>
            
        </div>
        <hr>
    <?php endwhile; ?>
    <?php include 'handleForm.php'?>
        <form action="<?php  $_SERVER['PHP_SELF']; ?>" method="POST">
        
            <input type="text" name="id" style="display: none;" value="<?php echo $days[$i]?>">
            <input type="submit" name="switch" value="view">
        </form>
</div>
