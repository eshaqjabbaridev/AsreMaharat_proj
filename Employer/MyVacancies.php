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
    <style>
        .tbl_vacancies {width: 100%;}
        .tbl_vacancies td {border: 1px solid #000;}
        .tbl_vacancies_header {background: #999; color: #fff; text-align: center;}        
        .row {background: rgb(255,255,255);}
        .row:hover td {background: rgb(221, 249, 93); cursor: pointer;}
        .v_title {padding: 5px 5px 5px 0;}
        .v_city {}
        .v_dateposted {text-align: left; padding: 5px 0 5px 5px;}
        .v_dateclosing {text-align: left; padding: 5px 0 5px 5px;}
        .v_company {padding: 5px 5px 5px 0px;}
        .v_otherinfo {text-align:center;}
    </style>
    <p id="subject">ليست فرصتهاي شغلي من</p>
    <?php
    echo "<table class='tbl_vacancies'>
        <tr class='tbl_vacancies_header'>
            <td class='v_title'>عنوان</td>
            <td class='v_city'>شهر</td>
            <td class='v_dateposted'>تاريخ ارسال</td>
            <td class='v_dateclosing'>تاريخ انقضاء</td>
            <td class='v_otherinfo'>بقيه اطلاعات</td>
        </tr>";
$con = mysql_connect('localhost','root','');
mysql_query("SET NAMES 'utf8'", $con);
mysql_select_db('jobfind',$con);
$query="SELECT * FROM `job` WHERE `EmployerId` in (SELECT `EmployerId` from employer where UserLoginName in (select UserLoginName from users where UserLoginName='".$_SESSION['username']."'))";
$res=mysql_query($query);
while($row=mysql_fetch_assoc($res))
{
    echo "<tr class='row'>";
    echo "<td class='v_title'>".$row['Title']."</td>";
    echo "<td class='v_city'>".$row['City']."</td>";
    echo "<td class='v_dateposted'>".$row['DatePosted']."</td>";
    echo "<td class='v_dateclosing'>".$row['DateClosing']."</td>";
    echo "<td class='v_otherinfo'><a href='#'>نمايش ...</a></td>";
    echo "</tr>";
}
echo "</table>"
    ?>
</div>
<?php include('../theme/footer.html')?>   

