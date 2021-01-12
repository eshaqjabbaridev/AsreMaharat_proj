<?php
session_start();
?>
<?php include('../theme/header.php')?>

<?php include('../theme/sidebar.php')?>
<!-- سمت چپ -->
<div id="content">
    <p id="subject">جزئيات كارفرما</p>

    <p class="subjectlevel2">اطلاعات كاربري</p>
        <?php
    $con=mysqli_connect('localhost','root','','jobfind'); 
$sql="SELECT * FROM `employer` WHERE `EmployerId`='".$_GET['id']."'";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res))
{
    echo "نام كاربري: <b>".$row['UserLoginName']."</b><br>";
    echo "<p class=subjectlevel2>اطلاعات شخصي كارفرما</p>";
    echo "نام: <b>".$row['FirstName']."</b><br />";
    echo "نام خانوادگي: <b>".$row['LastName']."</b><br/>";
    echo "جنسیت: <b>".$row['Gender']."</b><br/>";
    echo "کد ملی: <b>".$row['NationalCode']."</b><br/>";
    echo "شماره شناسنامه: <b>".$row['SHsh']."</b><br/>";
    echo "ردیف شغلی: <b>".$row['JobTitle']."</b><br/>";
    echo "شماره همراه: <b>".$row['Mobile']."</b><br/>";
    echo "<p class='subjectlevel2'>اطلاعات سازمان/شركت</p>";
    echo "نام سازمان/شرکت: <b>".$row['CName']."</b><br/>";
    echo "آدرس سازمان/شركت: <b>".$row['CAddress']."</b><br/>";
    echo "کد پستی سازمان/شركت: <b>".$row['CPostalCode']."</b><br/>";
    echo "تلفن سازمان/شركت: <b>".$row['CTelephone']."</b><br/>";
    echo "شهر سازمان/شركت: <b>".$row['CCity']."</b><br/>";
    echo "قکس سازمان/شركت: <b>".$row['CFax']."</b><br/>";    
}
echo "<a href='GetEmployers.php'>بازگشت</a>";
    ?>
</div>
<?php include('../theme/footer.html')?>