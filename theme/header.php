<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="../css/reset.css" type="text/css" rel="stylesheet" />
        <link href="../css/menu.css" type="text/css" rel="stylesheet" media="all" />
        <link href="../css/original.css" type="text/css" rel="stylesheet" media="all" />
        <link href="../css/form.css" type="text/css" rel="stylesheet" media="all" /> 
        <link href="../css/login.css" rel="stylesheet" type="text/css" />
        <link href="../css/vacan.css" rel="stylesheet" type="text/css" />      
        <link href="../css/app.css" rel="stylesheet" type="text/css" />        
        <link href="../css/emp.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="scripts/jQuery/jQuery.js"></script>
        <script src="scripts/validatelogin.js" type="text/javascript"></script>
        <script src="../scripts/date-shamsi.js" type="text/javascript"></script>        
        <title>Online Job Finder :: تربچه :: کاریابی اینترنتی</title>
    </head>
    <body>
        <div id="parent">
            <div id="header"></div>
            <div id="nav">
                <ul>
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo "<li><a href='../Logout.php'>خروج</a></li>
                        <li><a href='../AboutUs.php'>درباره ما</a></li>";
                    }
                    else {
                        echo "<li><a href='index.php'>صفحه اصلی</a></li>
                        <li><a href='Vacancies.php'>فرصتهاي شغلي</a></li>
                        <li><a href='RegisterEmployer.php'>ثبت نام كارفرما</a></li>
                        <li><a href='RegisterApplicant.php'>ثبت نام كارجو</a></li>
                        <li><a href='Login.php'>ورود به سايت</a></li>
                        <li><a href='../AboutUs.php'>درباره ما</a></li>";
                    }
                    ?>
                </ul>
            </div>
            <div id="mainarea">