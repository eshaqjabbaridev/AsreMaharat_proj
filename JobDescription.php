<?php
session_start();
$ClientStr=$_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'];
if (!isset($_SESSION['username']))
{
    header("location:../OnlineJobFinding/login.php");
}
?>
<?php include('theme/header.php')?>

<?php include('theme/sidebar.php')?>
<!-- سمت چپ -->
<div id="content">                        
    <p id="subject">جزئيات فرصت شغلي</p>
    <?php
    $con=mysqli_connect('localhost','root','','jobfind');
$sql="select * from job where JobId ='".$_GET['id']."'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
echo "كد فرصت شغلي: <b>".$row['JobId']."</b><br>";
echo "عنوان فرصت شغلي: <b>".$row['Title']."</b><br>";
echo "گروه: <b>".$row['Category']."</b><br>";
echo "شهر: <b>".$row['City']."</b><br>";
echo "تاریخ انقضا: <b>".$row['DateClosing']."</b><br>";
echo "توضیحات: <b>".$row['Description']."</b><br>";
echo "احتیاجات: <b>".$row['Requirements']."</b><br>";
echo "میزان حقوق: <b>".$row['Salary']."</b><br>";
echo "نوع کار: <b>".$row['Type']."</b><br>";
    ?>
</div>
<?php include('theme/footer.html')?>
