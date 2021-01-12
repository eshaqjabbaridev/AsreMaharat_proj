<?php include('theme/header.php')?>

<?php include('theme/sidebar.php')?>
<!-- سمت چپ -->
<div id="content">
    <?php
    if (isset($_POST['RegisterApp'])) 
    {
        $con=mysqli_connect('localhost','root','','jobfind');
        $date=date("Y-m-d")." ".date("h:i:s");
        $q1="INSERT INTO `users`(`UserId`, `UserLoginName`,
        `UserPassword`,`UserRegisterTime`, `UserEmail`, `UserLastLoginDateTime`,
        `UserLastLoginIp`,`UserRole`)VALUES
('','".$_POST['UserName']."','".$_POST['Password']."','".$date."','".$_POST['EMail']."','".$date."','127.0.0.1','2')";
        $r1=mysqli_query($con,$q1);
        $q2="INSERT INTO `applicant`(`ApplicantId`,
        `UserLoginName`,`FirstName`,`LastName`,`FotherName`, `BirthDate`, `BirthLocation`,
        `SHsh`, `NationalCode`,`Gender`,`MaritalStatus`, `Khedmat`, `Mobile`, `HCity`,
        `HPhone`, `LJCity`,`LJCompanyName`, `LJPhone`, `LJTitle`, `UniversityName`,
        `UniversityCity`,`Degree`, `Major`, `YearOfGraduation`, `Average`)
VALUES('','".$_POST['UserName']."','".$_POST['Name']."','".$_POST['SurName']."','".$_POST['FaName']."','".$_POST['bd'].$_POST['bm'].$_POST['by']."','".$_POST['BirthLoc']."','".$_POST['Birthcert']."','".$_POST['NationalCode']."','".$_POST['Gander']."','".$_POST['MS']."','".$_POST['Khedmat']."','".$_POST['Mobile']."','".$_POST['City']."','".$_POST['Phone']."','".$_POST['J-City']."','".$_POST['Com']."','".$_POST['J-Phone']."','".$_POST['J-Name']."','".$_POST['Uni']."','".$_POST['U-City']."','".$_POST['Degree']."','".$_POST['Major']."','".$_POST['YearofGrd']."','".$_POST['Avrg']."')";
        $r2=mysqli_query($con,$q2);
        if ($r1 && $r2) {
            echo '<p id="subject">تبریک</p>
            <p>
            کاربر گرامی<b>'.$_POST['UserName'].'</b> 
            ثبت نام شما با موفقیت در کاریابی اینترنتی تربچه انجام شد<br>
            <center>
            <a href="index.php">بازگشت به صفحه اصلی</a> | <a href="Login.php">ورود</a>
            </center>
            </p>';
        }
        else 
        {
            die("ثبت نام با مشکل مواجه شد<br>کد خطا: ".mysqli_errno()."<br>توضیح خطا:".mysqli_error());
        }
    } else if (isset($_POST['RegisterEmp'])) 
    {
        $con=mysqli_connect('localhost','root','','jobfind');
        $date=date("Y-m-d")." ".date("h:i:s");
        $q1="INSERT INTO `users`(`UserId`, `UserLoginName`,
        `UserPassword`,`UserRegisterTime`, `UserEmail`, `UserLastLoginDateTime`,
        `UserLastLoginIp`,`UserRole`)VALUES
('','".$_POST['UserLoginName']."','".$_POST['Password']."','".$date."','".$_POST['EMail']."','".$date."','127.0.0.1','3')";
        $r1=mysqli_query($con,$q1);
        $q2="INSERT INTO `employer`(`EmployerId`, `UserLoginName`, `FirstName`, `LastName`, `Gender`, `NationalCode`, `SHsh`, `JobTitle`, `Mobile`, `CAddress`, `CCity`, `CFax`, `CName`, `CPostalCode`, `CTelephone`) VALUES ('','".$_POST['UserLoginName']."','".$_POST['Name']."','".$_POST['SurName']."','".$_POST['gander']."','".$_POST['NatinoalNo']."','".$_POST['Birthcert']."','".$_POST['Job']."','".$_POST['Mobile']."','".$_POST['CAdd']."','".$_POST['CCity']."','".$_POST['CFax']."','".$_POST['CName']."','".$_POST['CPC']."','".$_POST['CPhone']."')";
        $r2=mysqli_query($con,$q2);
        if ($r1 && $r2) {
            echo '<p id="subject">تبریک</p>
            <p>
            کاربر گرامی<b>'.$_POST['UserLoginName'].'</b> 
            ثبت نام شما با موفقیت در کاریابی اینترنتی تربچه انجام شد<br>
            <center>
            <a href="index.php">بازگشت به صفحه اصلی</a> | <a href="Login.php">ورود</a>
            </center>
            </p>';
        }
        else 
        {
            die("ثبت نام با مشکل مواجه شد<br>کد خطا: ".mysqli_errno()."<br>توضیح خطا:".mysqli_error());
        }
    } else 
    {
        header('location:PermissionError.php');
    }
mysqli_close($con);
    ?>
</div>
<?php include('theme/footer.html')?>