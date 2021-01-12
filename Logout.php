<?php include('theme/header.php')?>

<?php include('theme/sidebar.php')?>
<!-- سمت چپ -->
<div id="content">                        
    <p id="subject">خروج</p>
    <?php
    session_start();
unset($_SESSION["username"]);
unset($_SESSION['valid']);
unset($_SESSION['timeout']);
unset($_SESSION['Emp_Id']);
echo '<p>شما با موفقيت از حساب كاربري خود خارج شديد.</p>';
header('Refresh: 2; URL=login.php');
session_destroy();
    ?>
</div>
<?php include('theme/footer.html')?>
