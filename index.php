<?php include('theme/header.php')?>

<?php include('theme/sidebar.php')?>
<!-- سمت چپ -->
<div id="content">
    <p id="subject">به تربچه خوش آمدید</p>
    <p>
        تربچه مكانيست براي معرفي كمپاني ها و سازمانهاي ارائه دهنده فرصتهاي
        شغلي.<br>
        كمپاني ها و سازمانهايي كه عضو تربچه شوند مي توانند فرصتهاي شغلي خود را به سايت ارسال كنند.
        در اين صورت كارجويان مي توانند با مراجعه به بخش ليست فرصتهاي شغلي شغلها را ببينند و در
        صورت علاقه به شغل اعلام علاقه كنند.
    </p>
    <p id="subject">جستجوی شغل</p>
    <p>
    <form action="search-res.php" method="post">
        کلمه کلیدی:
        <input name="Keyword" type="text" placeholder="به عنوان مثال: برقکار" />
        شهر:
        <select name="city">
            <?php
    $con=mysqli_connect('localhost','root','','jobfind');
mysqli_query('SET NAMES utf8'); 
$sql="SELECT DISTINCT `City` FROM `job`";
$res=mysql_query($sql);
while($row=mysqli_fetch_assoc($res))
{
    echo "<option>".$row['City']."</option>";
}
?>
        </select>
        <input type="submit" name="J-Search" value="جستجو" />
    </form>
    </p>
    <p id="subject">جدیدترین فرصت های شغلی</p>
    <?php
$con=mysql_connect('localhost','root','');
mysql_select_db('jobfind',$con);
mysql_query('SET NAMES utf8'); 
$sql="SELECT * FROM `job` LIMIT 10";
$res=mysql_query($sql);
echo "<table class=tbl_vacancies>
    <tr class=tbl_vacancies_header>                        
    <td class=v_title>عنوان</td>
    <td class=v_city>شهر</td>
    <td class=v_dateclosing>تاريخ انقضاء</td>
    <td class=v_otherinfo>بقيه اطلاعات</td>
    </tr>";
    while($row=mysql_fetch_assoc($res))
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
<?php include('theme/footer.html')?>