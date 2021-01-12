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
    <p id="subject">صفحه خانگي مدير سايت</p>
    <?php
    $con=mysqli_connect('localhost','root','','jobfind');
$date=date("Y-m-d")." ".date("h:i:s");
$sql="UPDATE `users` SET `UserLastLoginDateTime`='".$date."',`UserLastLoginIp`='127.0.0.1' WHERE `UserLoginName`='".$_SESSION['username']."'";
mysqli_query($con,$sql);
    ?>
    <table>
        <tr>
            <td>
                <a href="GetEmployers.php">
                    <img src="../Images/employer.png" width="50" height="50">
                    <br>نمایش کارفرمایان
                </a>
            </td>
            <td>
                <a href="GetApplicants.php">
                    <img src="../Images/applicant.png" width="50" height="50">
                    <br>نمایش کار جویان
                </a>
            </td>
            <td>
                <a href="../Logout.php">
                    <img src="../Images/close.png" width="50" height="50">
                    <br>خروج از حساب کاربری
                </a>
            </td>
        </tr>
    </table>
</div>
<?php include('../theme/footer.html')?>