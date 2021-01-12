<?php include('theme/header.php')?>

<?php include('theme/sidebar.php')?>
<!-- سمت چپ -->
<div id="content">                        
    <p id="subject">ليست فرصتهاي شغلي</p>
        <?php
    $con=mysqli_connect('localhost','root','','jobfind');
$sql="SELECT * FROM `job`";
$res=mysqli_query($con,$sql);
    echo "<table class=tbl_vacancies>
    <tr class=tbl_vacancies_header>                        
    <td class=v_title>عنوان</td>
    <td class=v_city>شهر</td>
    <td class=v_dateclosing>تاريخ انقضاء</td>
    <td class=v_otherinfo>بقيه اطلاعات</td>
    </tr>";
while($row=mysqli_fetch_assoc($res))
{
    echo "<tr class=row>";
    echo "<td>".$row['Title']."</td>";
    echo "<td>".$row['City']."</td>";
    echo "<td>".$row['DateClosing']."</td>";
    echo "<td><a href='JobDescription.php?id=".$row['JobId']."'>جزییات</a></td>";
    echo "</tr>";
}
echo "</table>";
mysql_close($con);
    ?>
</div>
<?php include('theme/footer.html');?>