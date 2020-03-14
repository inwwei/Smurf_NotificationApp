

<!--------------------Header---------------------------->
<?php 
    session_start();
      if(isset($_SESSION['userName'])){

    }else{
        header("location:index.php");

    }
?>
<?php include "HeadAdmin.php" ?>

<div class="container"><br>
        <div class="row newfont">
            <div class="col">
                <h2 class="my-3">รายการที่รออนุมัติ</h2>
            </div>
            
            </div>
        </div>
        <br>

        
          


<div style="display: flex;justify-content: center;">
    <table class="table center tcenter newfont" style="width: 1400px">
        <tr style="background-color: #ff9999">
            <th scope="col" class="zen" style="width: 140px;">รหัสครุภัณฑ์</th>
            <th scope="col" class="zen" style="width: 210px;">ชื่อครุภัณฑ์</th>
            <th scope="col" class="zen" style="width: 140px;">รายละเอียด</th>
            <th scope="col" class="zen" style="width: 140px;">รหัสนักศึกษา</th>
            <th scope="col" class="zen" style="width: 140px;">ชื่อนักศึกษา</th>
            <th scope="col" class="zen" style="width: 60px;">เหตุผลการยืม</th>
            
            
            <!-- <th scope="col" >ปุ่ม</th> -->
            <th scope="col" class="zen" style="width: 115px;">การจัดการ</th>
        </tr>
    </table>
</div>
<div style="display: flex;justify-content: center;">
    <!--ส่วนตารางเเสดงข้อมูล-->
    <div style=" width:1400px; height: 460px; overflow-y: scroll;">
        
        <table class="table center table-hover">

            <tbody>
                <?php

                $sql = "SELECT * FROM borrowtransection, item, useraccount 
                WHERE borrowtransection.itemID = item.IDs 
                AND borrowtransection.userID = useraccount.idus 
                AND statuswork LIKE '%รอดำเนินการ%'";
                $query = mysqli_query($conn,$sql);
                
              
                ?>
                <?php 
                $temp=0;
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
                <tr>

                    <td scope="row" class="zen" style="width: 150px;"><?=$row['ItemID']?></td>
                    <td scope="row" class="zen" style="width: 220px;"><?=$row['ItemName']?></td>
                    <td scope="row" class="zen" style="width: 180px;"><?=$row['Detail']?></td>
                    <td scope="row" class="zen" style="width: 160px;"><?=$row['userID']?></td>
                    <td scope="row" class="zen" style="width: 140px;"><?=$row['firstName']?>&nbsp;&nbsp;<?=$row['lastName']?></td>
                    <td scope="row" class="zen" style="width: 80px;"><?=$row['reason']?></td>
 

                    <td scope="row" class="zen" style="width: 100px;">
                        <a href='FuncApprove.php?ID=<?php echo $row['ID']?>'
                            onclick="return confirm('คุณต้องการอนุมัติคำร้องนี้ใช่หรือไม่!!!')"><button name="delete"
                                type="submit" class="btn btn-success mb-2" style="width: 70px">อนุมัติ</button>
                        <a href='FuncNotApprove.php?ID=<?php echo $row['ID'] ?> '
                            onclick="return confirm('คุณต้องการปฏิเสธคำร้องนี้ใช่หรือไม่!!!')"><button name="delete"
                                type="submit" class="btn btn-danger mb-2" style="width: 70px">ไม่อนุมัติ</button>
                    </td>
                </tr>
                <?php  
                $temp++;
                }?>
            </tbody>
        </table>
                
    </div>
</div>
    <?php if ($temp == 0){
		echo  "<p> <font color=red font face='verdana' size='5pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ไม่มีรายการคำขออนุมัติ</font> </p>";
			}else{
                 echo  "<p> <font color=black font face='verdana' size='5pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รวมทั้งหมด </font>
                        <font color=red font face='verdana' size='5pt'>$temp </font>
                        <font color=black font face='verdana' size='5pt'>รายการ</font> </p>";
                    } 
    ?>

<!--------------------Footer---------------------------->
<?php include "foottest.php"?>
<!--------------------Footer---------------------------->






