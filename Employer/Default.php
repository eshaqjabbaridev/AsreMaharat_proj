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
    <p id="subject">صفحه خانگي كارفرما</p>
    <?php
    $con = mysql_connect('localhost','root','');
mysql_select_db('jobfind',$con);
$date=date("Y-m-d")." ".date("h:i:s");
$sql="UPDATE `users` SET `UserLastLoginDateTime`='".$date."',`UserLastLoginIp`='127.0.0.1' WHERE `UserLoginName`='".$_SESSION['username']."'";
    ?>
        <table>
        <tr>
            <td>
                <a href="../Vacancies.php">
                    <img src="../Images/vac.png" width="100" height="100">
                    <br>فرصت های شغلی
                </a>
            </td>
            <td>
                <a href="MyVacancies.php">
                    <img src="../Images/vac.png" width="100" height="100">
                    <br>فرصت های شغلی من
                </a>
            </td>            
            <td>
                <a href="PostJob.php">
                    <img src="../Images/vac.png" width="100" height="100">
                    <br>فرصت های شغلی جدید
                </a>
            </td>                        
            <td>
                <a href="../Logout.php">
                    <img src="../Images/close.png" width="100" height="100">
                    <br>خروج از حساب کاربری
                </a>
            </td>
        </tr>
    </table>
</div>
<?php include('../theme/footer.html')?>