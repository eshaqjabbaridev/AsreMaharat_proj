<?php include('theme/header.php')?>

<?php include('theme/sidebar.php')?>
<!-- سمت چپ -->
<div id="content">
    <p id="subject">ثبت نام كارجو</p>
    <form action="SuccessCreateUser.php" method="post">
        <p class="subjectlevel2">مشخصات كاربري</p>
        <div class="filed">
            <label>نام كاربري:</Label>
            <input type="text" name="UserName">
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
        
        <p class="subjectlevel2">مشخصات فردي</p>
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
            <input type="text" name="NationalCode">
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
            <select name="Gander" style="width:auto;">
                <option>زن</option>
                <option>مرد</option>            
            </select>
        </div>
    
    <div class="filed">
        <label>وضعیت تاهل:</Label>        
        <select name="MS" style="width:auto;">
            <option>مجرد</option>
            <option>متاهل</option>            
        </select>
    </div>

    <div class="filed">
        <label>وضعیت خدمت:</Label>        
        <select name="Khedmat" style="width:auto;">
            <option>مشمول</option>
            <option>در حال خدمت</option>
            <option>داراي كارت معافيت موقت</option>
            <option>داراي كارت معافيت دائم</option>
            <option>داراي كارت پايان خدمت</option>
        </select>
    </div>

    <p class="subjectlevel2">مشخصات محل زندگي</p>
    <div class="field">
        <Label>شهر:</Label>
        <input type="text" name="City">
        <label style="color:red">*</label>        
    </div>
    
    <div class="field">
        <Label>تلفن منزل:</Label>
        <input type="tel" name="Phone">
        <label style="color:red">*</label>        
    </div>
    
    <div class="field">
        <Label>موبایل:</Label>
        <input type="tel" name="Mobile">
        <label style="color:red">*</label>        
    </div>
    
    <p class="subjectlevel2">مشخصات شغل فعلي:</p>
    <div class="field">
        <Label>شهر:</Label>
        <input type="text" name="J-City">
        <label style="color:red">*</label>        
    </div>
    
    <div class="field">
        <Label>نام شرکت:</Label>
        <input type="text" name="Com">
        <label style="color:red">*</label>        
    </div>

    <div class="field">
        <Label>تلفن شرکت:</Label>
        <input type="tel" name="J-Phone">
        <label style="color:red">*</label>        
    </div>

    <div class="field">
        <Label>نام شغل:</Label>
        <input type="text" name="J-Name">
        <label style="color:red">*</label>        
    </div>

    <p class="subjectlevel2">مشخصات تحصيلي</p>
    <div class="field">
        <Label>دانشگاه:</Label>
        <input type="text" name="Uni">
        <label style="color:red">*</label>        
    </div>

    <div class="field">
        <Label>شهر:</Label>
        <input type="text" name="U-City">
        <label style="color:red">*</label>        
    </div>

    <div class="filed">
        <label>مدرک تحصیلی:</Label>        
        <select name="Degree" style="width:auto;">
            <option>بی سواد</option>
            <option>پنجم ابتدایی</option>
            <option>سوم راهنمایی</option>
            <option>دیپلم</option>
            <option>کاردانی</option>
            <option>کارشناسی</option>
            <option>کارشناسی ارشد</option>
            <option>دکترا</option>
        </select>
    </div>

    <div class="field">
        <Label>رشته تحصیلی:</Label>
        <input type="text" name="Major">
        <label style="color:red">*</label>        
    </div>

    <div class="field">
        <Label>سال اخذ مدرک:</Label>
        <input type="text" name="YearofGrd">
        <label style="color:red">*</label>        
    </div>

    <div class="field">
        <Label>معدل:</Label>
        <input type="text" name="Avrg">
        <label style="color:red">*</label>        
    </div>
        <input type="submit" name="RegisterApp" value="ثبت نام" />
    </form>
</div>
<?php include('theme/footer.html')?>

