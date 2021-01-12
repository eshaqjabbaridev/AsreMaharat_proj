<?php
session_start();
$ClientStr=$_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'];
if (!isset($_SESSION['username']))
{
    header("location:../login.php");
}
?>
<?php include('../theme/header.php')?>

<?php include('../theme/sidebar.php')?>
<!-- سمت چپ -->
<div id="content">
    <p id="subject">رزومه كارجو</p>
    <p class="subjectlevel2">اطلاعات شخصي</p>
    <?php
    $con=mysqli_connect('localhost','root','','jobfind');
$sql="select * from applicant where ApplicantId='".$_GET['id']."'";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res))
{
    echo "نام: <b>".$row['FirstName']."</b><br>";
    echo "نام خانوادگی: <b>".$row['LastName']."</b><br>";
    echo "نام پدر: <b>".$row['FotherName']."</b><br>";
    echo "شماره شناسنامه: <b>".$row['SHsh']."</b><br>";
    echo "تاریخ تولد: <b>".$row['BirthDate']."</b><br>";
    echo "صادره از: <b>".$row['BirthLocation']."</b><br>";
    echo "جنسیت: <b>".$row['Gender']."</b><br>";
    echo "وضعیت تاهل: <b>".$row['MaritalStatus']."</b><br>";
    echo "<p class='subjectlevel2'>مشخصات محل زندگي</p>";
    echo "شهر محل زندگی: <b>".$row['HCity']."</b><br>";
    echo "تلفن: <b>".$row['HPhone']."</b><br>";
    echo "موبایل: <b>".$row['Mobile']."</b><br>";
    echo "<p class='subjectlevel2'>سوابق کاری</p><br>";    
    echo "شهر آخرین شغل: <b>".$row['LJCity']."</b><br>";
    echo "شرکت آخرین محل کار: <b>".$row['LJCompanyName']."</b><br>";
    echo "تلفن آخرین محل کار: <b>".$row['LJPhone']."</b><br>";
    echo "عنوان آخرین شغل: <b>".$row['LJTitle']."</b><br>";
    echo "<p class='subjectlevel2'>سوابق شغلی</p><br>";
    echo "مدرک: <b>".$row['Degree']."</b><br>";
    echo "رشته تحصیلی: <b>".$row['Major']."</b><br>";
    echo "دانشگاه: <b>".$row['UniversityName']."</b><br>";
    echo "سال فارغ التحصیلی: <b>".$row['YearOfGraduation']."</b><br>";
    echo "معدل کل: <b>".$row['Average']."</b><br>";
}
echo "<a href='GetApplicants.php'>بازگشت</a>";
    ?>
</div>
<?php include('../theme/footer.html')?>
