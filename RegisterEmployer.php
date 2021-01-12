<?php include('theme/header.php')?>

<?php include('theme/sidebar.php')?>
<div id="content"> 
    <p id="subject">ثبت نام كارفرما</p>
    <form action="SuccessCreateUser.php" method="post">    
    <p class="subjectlevel2">اطلاعات كاربري</p>
    <div class="field">
        <label>نام كاربري:</label>
        <input type="text" name="UserLoginName">
        <label style="color:red">*</label>
    </div>
    <div class="filed">
        <label>کلمه عبور:</Label>        
        <input type="password" name="Password">
        <label style="color:red">*</label>
    </div>
    <div class="filed">
        <label>ایمیل:</Label>        
        <input type="email" name="EMail">
        <label style="color:red">*</label>
    </div>

    <p class="subjectlevel2">اطلاعات شخصي كارفرما</p>
    <div class="filed">
        <label>نام:</Label>        
        <input type="text" name="Name">
        <label style="color:red">*</label>
    </div>
    <div class="filed">
        <label>نام خانوادگی:</Label>        
        <input type="text" name="SurName">
        <label style="color:red">*</label>
    </div>    
    <div class="filed">
        <label>نام پدر:</Label>        
        <input type="text" name="FaName">
        <label style="color:red">*</label>
    </div>
    <div class="filed">
        <label>کد ملی:</Label>        
        <input type="text" name="NatinoalNo">
        <label style="color:red">*</label>
    </div>

    <div class="filed">
        <label>شماره شناسنامه:</Label>        
        <input type="text" name="Birthcert">
        <label style="color:red">*</label>
    </div>
    
    <div class="filed">
        <label>تاریخ تولد:</Label>        
        <select name="bd" style="width:auto;">
            <script type="text/javascript">
                var d;
                for (d=1;d<=31;d++)
                {
                    document.write("<option>" + d);
                    document.write("</option>");
                }
            </script>
        </select>
        /
        <select name="bm" style="width:auto;">
            <script type="text/javascript">
                var m;
                for (m=1;m<=12;m++)
                {
                    document.write("<option>" + m);
                    document.write("</option>");
                }
            </script>
        </select>
        /
        <select name="by" style="width:auto;">
            <script type="text/javascript">
                var y;
                for (y=1300;y<=1377;y++)
                {
                    document.write("<option>" + y);
                    document.write("</option>");
                }
            </script>
        </select>
    </div>

    <div class="field">
        <Label>صادره از:</Label>
        <input type="text" name="BirthLoc">
        <label style="color:red">*</label>        
    </div>
    
    <div class="filed">
        <label>جنسیت:</Label>        
        <select name="gander" style="width:auto;">
            <option>زن</option>
            <option>مرد</option>            
        </select>
    </div>


    <p class="subjectlevel2">اطلاعات سازمان/شركت</p>
        <div class="field">
        <Label>نام سازمان/شرکت:</Label>
        <input type="text" name="CName">
        <label style="color:red">*</label>        
    </div>
    <div class="field">
        <Label>آدرس سازمان/شرکت:</Label>
        <input type="text" name="CAdd">
        <label style="color:red">*</label>        
    </div>
    <div class="field">
        <Label>کد پستی سازمان/شرکت:</Label>
        <input type="text" name="CPC">
        <label style="color:red">*</label>        
    </div>
    <div class="field">
        <Label>شهر سازمان/شرکت:</Label>
        <input type="text" name="CCity">
        <label style="color:red">*</label>        
    </div>
    <div class="field">
        <Label>تلفن سازمان/شرکت:</Label>
        <input type="text" name="CPhone">
        <label style="color:red">*</label>        
    </div>
    <div class="field">
        <Label>فکس سازمان/شرکت:</Label>
        <input type="text" name="CFax">
        <label style="color:red">*</label>        
    </div>
    <div class="field">
        <Label>شغل کارفرما:</Label>
        <input type="text" name="Job">
        <label style="color:red">*</label>        
    </div>    
    <div class="field">
        <Label>شماره همراه کارفرما:</Label>
        <input type="text" name="Mobile">
        <label style="color:red">*</label>        
    </div>
    <input type="submit" name="RegisterEmp" value="ثبت نام" />
    </form>
</div>
<?php include('theme/footer.html')?>