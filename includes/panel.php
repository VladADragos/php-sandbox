<?php $stmt = $pdo->query("SELECT * FROM $days[$i] LIMIT 3"); ?>

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
                <i class="fas fa-ellipsis-h"></i>
            </div>
            
        </div>
        <hr>
        
    <?php endwhile; ?>
</div>
