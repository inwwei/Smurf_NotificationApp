<!--------------------Header---------------------------->
<?php 
    session_start();
      if(isset($_SESSION['userName'])){

    }else{
        header("location:index.php");

    }
?>
<?php include "headtest.php" ?>
<div class="container "><br>


    <!--------------------Header---------------------------->

    <!----ส่วนที่ใช้ดึงข้อมูล---->
    <?php
	ini_set('display_errors', 1);
	error_reporting(~0);
	date_default_timezone_set("Asia/Bangkok");
	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
    <?php
	ini_set('display_errors', 1);
	error_reporting(~0);
	date_default_timezone_set("Asia/Bangkok");
	$sechKeyword = null;

	if(isset($_POST["secKeyword"]))
	{
		$sechKeyword = $_POST["secKeyword"];
	}
?>

    <?php
	ini_set('display_errors', 1);
	error_reporting(~0);
	date_default_timezone_set("Asia/Bangkok");
	$TypKeyword = null;

	if(isset($_POST["TypeKeyword"]))
	{
		$TypKeyword = $_POST["TypeKeyword"];
	}
?>
    <?php
//    $serverName = "localhost";
//    $userName = "root";
//    $userPassword = "";

   $serverName = "10.199.66.227";
   $userName = "20S2_g4";
   $userPassword = "Dwg7Q6UQ";
   $dbName = "20S2_g4";
    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    mysqli_set_charset($conn, "utf8");
	$sql = "SELECT item.IDs,item.ItemID,item.ItemName,type.TypeName,item.Statusref,item.Building FROM item , type where  item.TypeID = type.ID AND ItemName LIKE '%".$sechKeyword."%'AND Statusref LIKE '%".$strKeyword."%'AND TypeName LIKE '%".$TypKeyword."%' AND StudentRight = 'อนุญาต' "   ;
	$query = mysqli_query($conn,$sql);
?>

    <div class="page-content">
        <img src="image/Untitled-2.jpg" />
    </div><br>

    <div class="container">
        <div class="row newfont">
            <div class="col">
                <div>
                    <h2>&nbsp;รายการครุภัณฑ์</h2>
                </div>
            </div>
            <div class="row">
                <!--ส่วนบอกสถานะว่าง-ไม่ว่าง-->

                <form class="form-inline" name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
                    <h6>ประเภทครุภัณฑ์ :</h6>&nbsp;&nbsp;
                    <select class="custom-select d-block " id="TypeKeyword" name="TypeKeyword">

                        <option value="">ประเภทครุภัณฑ์</option>
                        <?php
                        $serverName = "10.199.66.227";
                        $userName = "20S2_g4";
                        $userPassword = "Dwg7Q6UQ";

                        // $serverName = "localhost";
                        // $userName = "root";
                        // $userPassword = "";

                        $dbName = "20S2_g4";
                        $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
                        mysqli_set_charset($conn, "utf8");
                        $strSQL = "SELECT * FROM type ";
                        $result = mysqli_query($conn, $strSQL);
                        while($objResuut= mysqli_fetch_array($result)) 
                        {
                            echo "<option value='" .$objResuut['ID'] . "'>" .$objResuut['TypeName'] . "</option>";
                        }
                        ?>


                        </select>&nbsp;&nbsp;
                    <h6>สถานะครุภัณฑ์ :</h6>&nbsp;&nbsp;
                    <select class="custom-select d-block " id="txtKeyword" name="txtKeyword">
                        <option value="">รายการทั้งหมด</option>
                        <option value="ปกติ">ปกติ</option>
                        <option value="ไม่ว่าง">ไม่ว่าง</option>
                        <option value="ซ่อมบำรุง">ซ่อมบำรุง</option>
                        <option value="ปลดระวาง">ปลดระวาง</option>
                    </select>&nbsp;&nbsp;
                    <!--ส่วนค้นหารายการ
                    <input class="form-control " name="secKeyword" type="text" id="secKeyword"
                        placeholder="กรอกชื่ออุปกรณ์ที่จะค้นหา" value="">&nbsp;&nbsp;-->
                    <button type="submit" class="btn btn-secondary my-1"
                        id="search">ค้นหา</button>&nbsp;&nbsp;&nbsp;&nbsp;
                </form><br>
            </div>

        </div><br>
        <!--ส่วนตารางเเสดงข้อมูล-->

        <table class="table container center tcenter newfont">
            <tr style="background-color: #ff9999">
                <th scope="col" class="zen" style="width: 10px;">ลำดับ</th>
                <th scope="col" class="zen" style="width: 150px;">รหัสครุภัณฑ์</th>
                <th scope="col" class="zen" style="width: 290px;">รายละเอียด</th>
                <th scope="col" class="zen" style="width: 150px;">ประเภท</th>
                <th scope="col" class="zen" style="width: 85px;">สถานะ</th>
                <th scope="col" class="zen" style="width: 105px;">ตำแหน่ง</th>
                <th scope="col" class="zen" style="width: 120px;"></th>
            </tr>
        </table>

        <div style=" height: 400px; overflow-y: scroll;">

            <table class="table container center table-hover">

                <?php 
                $number = 1;
				$temp=0;
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
                <tr>
                    <td class="zen tcenter" style="width: 65px;"><?=$number?></td>
                    <td class="zen tcenter" style="width: 150px;"><?=$row['ItemID']?></td>
                    <td class="zen " style="width: 285px;"><?=$row['ItemName']?></td>
                    <td class="zen tcenter" style="width: 150px;"><?=$row['TypeName']?></td>
                    <td class="zen tcenter" style="width: 85px;"><?=$row['Statusref']?></td>
                    <td class="zen tcenter" style="width: 105px;"><?=$row['Building']?></td>
                    <td scope="row" class="zen tcenter" style="width: 100px;"><button name="lent" type="submit"
                            class="btn btn-secondary mb-2">ยืม</button>
                </tr>

                <?php
                $temp++;
                $number++;
				}?>
                <?php if ($temp == 0){
					echo  "<p> <font color=red font face='verdana' size='5pt'>ไม่มีรายการอุปกรณ์ที่ค้นหา</font> </p>";
				} ?>

            </table>
        </div>

    </div>
    <!--------------------Footer---------------------------->
    <?php include "foottest.php"?>
    <!--------------------Footer---------------------------->