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
    <p id="subject">ليست كارفرمايان</p>
    <?php
    $con=mysqli_connect('localhost','root','','jobfind');
$sql="SELECT * FROM `employer`";
$res=mysqli_query($con,$sql);
echo '<table class="tbl_employers">
<tr class="tbl_employers_header">
<td class="emp_name">نام</td>
<td class="emp_lname">نام خانوادگي</td>
<td class="c_name">نام شركت</td>
<td class="c_city">شهر</td>
<td class="otherinfo">بقيه اطلاعات</td>
</tr>';
while($row=mysql_fetch_assoc($res))
{
    '<tr class="row">';
    echo '<td class="emp_name">'.$row['FirstName'].'</td>';
    echo '<td class="emp_lname">'.$row['LastName'].'</td>';
    echo '<td class="c_name">'.$row['CName'].'</td>';
    echo '<td class="c_city">'.$row['CCity'].'</td>';
    echo "<td>
    <a href='ShowEmployerDescription.php?id=".$row['EmployerId']."'>مشاهده رزومه...</a>
    </td>";
    echo '</tr>';
}
echo '</table>';
    ?>
</div>
<?php include('../theme/footer.html')?>
