<?php
   session_start();
?>
<?php include('theme/header.php')?>

<?php include('theme/sidebar.php')?>
<!-- سمت چپ -->
<div id="content">
    <p id="subject">ورود كاربران</p>
    <?php
    if (isset($_POST['Login']))
    {
        $con=mysqli_connect('localhost','root','','jobfind');
                $sql="SELECT * FROM `users` WHERE `UserLoginName`='".$_POST['UserName']."' AND `UserPassword`='".$_POST['Password']."'";
        $res=mysqli_query($con,$sql);
        if (mysqli_num_rows($res)==1)
        {
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = $_POST['UserName'];
            $row=mysqli_fetch_array($res);
            switch ($row['UserRole'])
            {
                case "1":
                    header('Location: Admin/Default.php');
                    break;
                case "2":
                    header('Location: Applicant/Default.php');
                    break;
                case "3":
                    $res=mysql_query("SELECT `EmployerId` FROM `employer` WHERE `UserLoginName` in (SELECT `UserLoginName` FROM `users` WHERE `UserLoginName`='".$_POST['UserName']."')");
                    $row=mysql_fetch_array($res);
                    $_SESSION['Emp_Id']=$row['EmployerId'];
                    header('Location: Employer/Default.php');
                    break;
            }
        }
        else {
            echo '<p style="width:300px; padding: 10px; background:#ce0000; border:1px
            solid #ff0000; border-radius:3px; color:#fff;">نام کاربری یا کلمه عبور را درست 
            وارد نکرده اید</p>';
        }
    }
    ?>
    <form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="field">
            نام كاربري:
            <input name="UserName" type="text">
        </div>
        <div class="field">
            کلمه عبور:            
            <input name="Password" type="password">
        </div>

        <input type="submit" name="Login" value="ورود"/>
    </form>
</div>

<?php include('theme/footer.html')?>