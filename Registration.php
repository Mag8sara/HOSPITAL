
<?php

$title = "التسجيل";
include 'Header.php';
include 'connect-db.php';
//session_start();

if(!isset($_SESSION['admin']))
{
    header('Location: error.php');
}
?>

<html>
    <head>
        <title><?php echo $title; ?> - حجز مواعيد</title>
        <!-- Connecting to CSS file for styling  -->
    <link  href="style1.css" rel="stylesheet" type="text/css"/></head>

<div id="reg1"  class="formreg" >
    <br><br>
    <h1 id="oneH1" ><strong>التسجيل</strong></h1>
    <br>
    <img src="Img/reges.png"  alt="icon" width="150" height="150" align="middle"  >
    <form id="reg5" name="reg" method="POST" action="Reg-process.php" enctype="multipart/form-data" onsubmit="return validate();" >


        <h3>:المعلومات الشخصية</h3>
        <label title="fname" class="align" ><h2 style="color: red; display :inline">* </h2>:الاسم الأول</label><br>
        <input type="text" name="fname"  required placeholder="أدخل اسمك الأول" />
        <span class="error" id="0">مطلوب</span>
        <br><br>
        <label title="lname" class="align"><h2 style="color: red; display :inline">* </h2>:الاسم الأخير</label><br>
        <input type="text" name="lname" required placeholder="ادخل اسمك الأخير"/>
        <span class="error" id="1">مطلوب</span>
        <br><br>
        <label title="Natio" class="align"><h2 style="color: red; display :inline">* </h2>:الجنسيه</label><br>
        <select name='Natio' id='Natio' required  style="width:170px; height: 23px;">
                        <option value="default"> </option>
                        <option value='saudi'>سعودي
</option><option value='EMARATIS'>اماراتي
</option><option value='Bahraini'>بحريني
</option><option value='Omani'>عماني
</option><option value='Qatar'>قطري
</option><option value='kuwaiti'>كويتي
</option><option value='Forigner'>مقيم
</option><option value='Jordian'>أردني
</option><option value='Tunisian'>تونسي
</option><option value='Algerian'>جزائري
</option><option value='Moon Islands'>جزر القمر
</option><option value='Gebotian'>جيبوتي
</option><option value='Sudanese'>سوداني
</option><option value='Syrian'>سوري
</option><option value='Sumalese'>صومالي
</option><option value='Iraqian'>عراقي
</option><option value='Palastenean'>فلسطيني
</option><option value='Lebanon'>لبناني
</option><option value='Libian'>ليبي
</option><option value='Egyptian'>مصرى
</option><option value='Morroco'>مغربي
</option><option value='Moritanian'>موريتاني
</option><option value='Yamani'>يمني
</option><option value='Eretrian'>اريتيري
</option><option value='Aphganistanian'>افغانستاني
</option><option value='Albanean'>ألباني
</option><option value='Indonisian'>أندونيسي
</option><option value='Ozbakistan'>أوزبكستاني
</option><option value='Iranean'>إيراني
</option><option value='Pakstanian'>باكستاني
</option><option value='Bronay'>برونايي
</option><option value='Bangladish'>بنجلادشي
</option><option value='Bosnean'>بوسني
</option><option value='Turkemanistanian'>تركمانستاني
</option><option value='Turkish'>تركى
</option><option value='Tshadian'>تشادي
</option><option value='Tanzanian'>تنزاني
</option><option value='Maladif Islands'>جزر الملاديف
</option><option value='Sangalian'>سنغالي
</option><option value='Tagakistanian'>طاجاكستاني
</option><option value='Ghenian'>غيني
</option><option value='Kasakhistanian'>قازاخستاني
</option><option value='Kargheezian'>قرعيزي
</option><option value='Malian'>مالي
</option><option value='Malisian'>ماليزي
</option><option value='Nigerian'>نيجيري
</option><option value='Philppinean'>فلبيني
</option><option value='Vitnam'>فياتنامي
</option><option value='South Korea'>كوري جنوبي
</option><option value='East Korea'>كوري شمالي
</option><option value='Nibalian'>نيبالي
</option><option value='Indian'>هندي
</option><option value='Jabanese'>ياباني
</option><option value='KENYAN'>كيني
</option><option value='Ethiobian'>أثيوبي
</option><option value='NAIJIRIAN'>نيجيري
</option><option value='CHADI'>تشادي
</option><option value='BIDON'>بدون
</option><option value='else'>أخرى</option></select>
        <span class="error" id="2">مطلوب</span>
        <br><br>
        <label title="email" class="align"><h2 style="color: red; display :inline">* </h2>:عنوان البريد الالكتروني</label><br>
        <input type="email" name="email" autocomplete="on"  required placeholder="ادخل بريدك الالكتروني"/>
        <span class="error" id="3">مطلوب</span>
        <br><br>
        <label title="Pnumber" class="align"><h2 style="color: red; display :inline">* </h2>:رقم الجوال</label><br>
        <input  type="tel" name="Pnumber" required placeholder="05********"  maxlength="10" min="10"/>
        <span class="error" id="4">مطلوب</span>
        <br><br>
        <label title="" class="align"<h2 style="color: red; display :inline">* </h2> هل انت</label><br>
            <input title="hos" type="radio" value="hospital" name="group">موظف المستشفى
            <br>
            <input title="hos" type="radio" value="clinic" name="group">موظف المركز الصحي
            <span class="error" id="7">مطلوب</span><br>

        <label title="Mname" class="align"><br>:اذا كنت من المركز الصحي الرجاء اختيار احدى المراكز التالية</label><br>

         <select name='Mname' id=Mname style="width: 180px; height: 25px;">
             <option value="default"></option>
            <option value="AlGrain">القرين</option>
            <option value="Hazm El Mabraz">حزم المبرز</option>
            <option value="Jolaijelah">جليجله</option>
            <option value="Mahasen">محاسن</option>
            <option value="AlMteerfi">المطيرفي</option>
            <option value="Shamal El Mabraz">شمال المبرز</option>
            <option value="Al Oyouni">العيوني</option>
            <option value="Al Rashedeyyah">الراشدية</option>
            <option value="Al Shogaig">الشقيق</option>
            <option value="Kora Alsho'ben">قرى الشعبة</option>
            <option value="Sho'bat AlMabraz">شعبة المبرز</option>
            <option value="Ghasibah">عصيبة</option>
            <option value="AL Yahya">اليحيى</option>
            <option value="Al Oyoun">العيون</option>
            <option value="AlJern">الجرن</option>
            <option value="AlMarah">المراح</option>
            <option value="AlWazeyyah">الوزية</option>
            <option value="AlHaras AlWatani">الحرس الوطني</option>
        </select>


            <br><br>


        <h3> :معلومات الدخول</h3>
        <label title="uname" class="align"><h2 style="color: red; display :inline">* </h2>:اسم المستخدم</label><br>
        <input type="text" name="uname" required placeholder="استخدم رقم سجلك المدني" maxlength="10" minlength="10"/>
        <span class="error" id="5">مطلوب</span>
        <br><br>
        <label title="password" class="align"><h2 style="color: red; display :inline">* </h2>:كلمة المرور</label><br>
        <input type="password" name="password" required  placeholder=" كلمة المرور"  minlength="4"/>
        <span class="error" id="6">مطلوب</span>
        <br><br>





        <input  type="Submit" name='sub'  value="تسجيل" onclick=" return validate();"/><br><br>
       
    </form>
     <br>
        <a  href="delete.php" style="color: blue; font-size: 20px;" > لحذف موظف اضغط هنا </a>
</div>
</html>
<script>
    function validate()
    {
        var fname = document.reg.fname.value;
        var lname = document.reg.lname.value;
        var Natio = document.reg.Natio.value;
        var email = document.reg.email.value;
        var Pnumber = document.reg.Pnumber.value;
        var uname = document.reg.uname.value;
        var password = document.reg.password.value;
       var group = document.reg.group.value;





        var spans = document.getElementsByTagName("span");
//cheacking if all the fileds are empty then show span 
        if (fname === "")
        {
            spans[0].style.visibility = "visible";}




        if (lname === "")
        {
          spans[1].style.visibility = "visible";}



        (Natio === "default")
        {
          spans[2].style.visibility = "visible";}




        if (email === "")
        {
           spans[3].style.visibility = "visible";}





        if (Pnumber === "")
        {
           spans[4].style.visibility = "visible";}





        if (uname === "")
        {
            spans[5].style.visibility = "visible";}




        if (password === "")
        {
           spans[6].style.visibility = "visible";
       }

        if (group === "")
        {
           spans[7].style.visibility = "visible";}






    }
</script>




<?php
include 'footer.php';
?>
