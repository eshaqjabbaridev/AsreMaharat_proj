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
    <p id="subject">ارسال فرصت شغلي</p>
    <?php
    if (isset($_POST['PostJob']))
    {
        $con = mysql_connect('localhost','root','');
        mysql_query("SET NAMES 'utf8'", $con);
        mysql_select_db('jobfind',$con);
        $date=date("Y-m-d")." ".date("h:i:s");
        $sql="INSERT INTO `job`(`JobId`, `EmployerId`, `Category`, `City`, `DatePosted`, `DateClosing`, `Description`, `Requirements`, `Salary`, `Title`, `Type`) VALUES ('','".$_SESSION['Emp_Id']."','".$_POST['Category']."','".$_POST['City']."','".date("Y-m-d")."',
'".$_POST['ye']."-".$_POST['mo']."-".$_POST['da']."','".$_POST['Description']."','".$_POST['Req']."','".$_POST['Salary']."','".$_POST['Title']."','".$_POST['JobType']."')";
        if (mysql_query($sql))
        {
            echo '<p style="width:300px; padding: 10px; background:#1c9400; border:1px
            solid #2bdf02; border-radius:3px; color:#fff;">فرصت شغلی ثبت شد</p>';
        }
        else
        {
            echo '<p style="width:300px; padding: 10px; background:#ce0000; border:1px
            solid #ff0000; border-radius:3px; color:#fff;">ثبت فرصت شغلی با مشکل مواجه شد</p>';
        }
    }
    ?>
    <form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="field">
            گروه:
            <select name="Category">
                    <option>برنامه نويس</option>
                    <option>استاد و معلم</option>
                    <option>گرافيست و طراح</option>
                    <option>حمل و نقل</option>
                    <option>بازارياب</option>
                    <option>پزشك</option>
                    <option>پرستار</option>
                    <option>برق و الكترونيك</option>
                    <option>نفت و گاز</option>
                </select>
        </div>
        <div class="field">
            شهر:
            <input type="text" name="City">
        </div>
        <div class="field">
            تاريخ انقضا:
            <select name="da" style="width:auto;">
                <script type="text/javascript">
                    var d;
                    for (d=1;d<=31;d++)
                    {
                        document.write("<option>" + d);document.write("</option>");
                    }
                </script>
            </select>
            /
            <select name="mo" style="width:auto;">
                <script type="text/javascript">
                    var m;
                    for (m=1;m<=12;m++)
                    {
                        document.write("<option>" + m);document.write("</option>");
                    }
                </script>
            </select>
            /
            <select name="ye" style="width:auto;">
                <script type="text/javascript">
                    var y;
                    for (y=1395;y>=1300;y--)
                    {
                        document.write("<option>" + y);document.write("</option>");
                    }
                </script>
            </select>
        </div>
        <div class="field">
            توضيحات:
            <input type="text" name="Description">
        </div>
        <div class="field">
            احتياجات:
            <input type="text" name="Req">
        </div>
        <div class="field">
            حقوق:
            <input type="text" name="Salary">
        </div>
        <div class="field">
            عنوان:
            <input type="text" name="Title">
        </div>
        <div class="field">
            نوع كار:
            <select name="JobType">
                <option>پاره وقت</option>
                <option>تمام وقت</option>
                <option>پروژه اي</option>
                <option>قراردادي</option>
            </select>
        </div>
        <input type="submit" name="PostJob" value="ثبت شغل" />
    </form>
</div>
<?php include('../theme/footer.html')?>