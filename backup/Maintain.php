<!--------------------Header---------------------------->
<?php include "headtest.php" ?>
<div class="container"><br>
 
    <?php
        $serverName = "10.199.66.227";
        $userName = "20S2_g4";
        $userPassword = "Dwg7Q6UQ";
        $dbName = "20S2_g4";
        $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
        mysqli_set_charset($conn, "utf8");
        $sql = "SELECT * FROM item , type where item.TypeID = type.ID "  ;
        $query = mysqli_query($conn,$sql);
     
    ?>
    <div class="page-content">
        <img src="image/Untitled-2.jpg" >
    </div><br>

    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <h2>&nbsp;รายการอุปกรณ์</h2> 
                    <a href='Add.php' ><button name="add" type="submit" class="btn btn-success mb-2" href="Add.php">เพิ่มครุภัณฑ์</button></a>

                </div>
            </div>
        </div>
        <!--ส่วนตารางเเสดงข้อมูล-->
        <div style=" height: 500px; overflow-y: scroll;">

        <table class="table container center table-hover">
            <thead >
            <tr class="bg-warning">
                <th scope="col" >รหัสอุปกรณ์</th>
                <th scope="col" >ชื่อ</th>
                <th scope="col" >รายละเอียด</th>
                <th scope="col" >ประเภท</th>
                <th scope="col" >สถานะ</th>
                <th scope="col" >สถานที่</th>
                <th scope="col" >ราคา</th>
                <th scope="col" >สิทธิ์อาจารย์</th>
                <th scope="col" >สิทธิ์บุคลากร</th>
                <th scope="col" >สิทธิ์นักศึกษา</th>
                <th scope="col" >วันที่เพิ่ม</th>
                <th scope="col" >วันที่แก้ไข</th>
                <!-- <th scope="col" >วันที่ลบ</th> -->
                <th scope="col" >การจัดการ</th>
            </tr>
            </thead>
            <tbody>
            <?php 
		
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
                <tr>
                
                    <td scope="row"><?=$row['ItemID']?></td>
                    <td scope="row"><?=$row['ItemName']?></td>
                    <td scope="row"><?=$row['Detail']?></td>
                    <td scope="row"><?=$row['TypeName']?></td>
                    <td scope="row"><?=$row['Status']?></td>
                    <td scope="row"><?=$row['Building']?></td>
                    <td scope="row"><?=$row['Price']?></td>
                    <td scope="row"><?=$row['TeacherRight']?></td>
                    <td scope="row"><?=$row['StaffRight']?></td>
                    <td scope="row"><?=$row['StudentRight']?></td>
                    <td scope="row"><?=$row['AddDate']?></td>
                    <td scope="row"><?=$row['EditDate']?></td>
                   
                    <td scope="row">
                        <a href='editform.php?ItemID=<?php echo $row['ItemID'] ?> '><button name="edit" type="button" class="btn btn-outline-success">แก้ไข</button></a>
                        <a href='FuncDelete.php?ItemID=<?php echo $row['ItemID'] ?> 'onclick="return confirm('คุณต้องการลบครุภัณฑ์นี้ใช่หรือไม่!!!')"><button name="delete" type="submit" class="btn btn-danger mb-2">ลบ</button>
                    </td>
                </tr>
                <?php  }   ?>
            </tbody>
            </table>
            <?php
            mysql_close($objConnect);
            ?>
        </div>

    </div>

    <!--------------------Footer---------------------------->
    <?php include "foottest.php"?>
    <!--------------------Footer---------------------------->