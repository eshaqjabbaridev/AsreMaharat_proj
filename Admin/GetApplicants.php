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
    <p id="subject">ليست كليه كارجويان</p>
    <?php
    $con=mysqli_connect('localhost','root','','jobfind');
$sql="select * from applicant";
$res=mysqli_query($con,$sql);
echo "<table class='tbl_applicants'>
<tr class='tbl_header'>
<td>نام</td>
<td>نام خانوادگي</td>
<td>نام كاربري</td>
<td>بقيه اطلاعات</td>
</tr>";
while($row=mysqli_fetch_assoc($res))
{
    echo "<tr class='row'>";
    echo "<td>".$row['FirstName']."</td>";
    echo "<td>".$row['LastName']."</td>";
    echo "<td>".$row['UserLoginName']."</td>";
    echo "<td>
    <a href='ShowApplicantCV.php?id=".$row['ApplicantId']."'>مشاهده رزومه...</a>
    </td>";
    echo "</tr>";
}
echo "</table>";
    ?>
</div>
<?php include('../theme/footer.html')?>
