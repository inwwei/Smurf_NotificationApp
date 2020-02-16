
<?php include "controller.php" ?>
<?php include "header.php" ?>

<?php
$action = new Action();
$rows = $action->get_item();
?>
        <div class="container">
            <hr>
            <h2>รายการอุปกรณ์</h2>
            <hr>
            <?php foreach($rows as $row){ ?>

                    <div>
                        <p>ID : <?=$row['Id']?></p>
                        <p>ชื่อ : <?=$row['Name']?></p>
                        <p>ชนิด : <?=$row['TypeId']?></p>
                        <p>รูป : <img src="image/<?=$row['img'];?>" width="100" height="100"></p>
                        <p>ราคา : <?=$row['Price']?></p>
                        <p>สถานะ : <?=$row['Status']?></p>
                        <p><hr></p>
                    </div>
            <?php } ?>
            <div style="clear: both"></div>
            <hr>
        </div>
<?php include "footer.php"?>