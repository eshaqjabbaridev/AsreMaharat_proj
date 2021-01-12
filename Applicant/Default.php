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
    <p id="subject">صفحه خانگي كارجو</p>
    <table>
        <tr>
            <td>
                <a href="../Vacancies.php">
                    <img src="../Images/vac.png" width="100" height="100">
                    <br>فرصت های شغلی
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
