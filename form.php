<?php
//session_start();
$title = "إنشاء إحالة جديدة";
include 'Header.php';
include 'connect-db.php';


if(!isset($_SESSION['clinic']))
{
    header('Location: error.php');
}

if (isset($_POST['submit'])) {
            //create variables
            $subject = $_POST['subject'];
            $priority = $_POST['priority'];
            $birth = $_POST['birth'];
            $gender = $_POST['gender'];
            $Natio = $_POST['Natio'];
            $idnamber = $_POST['idnamber'];
            $phone = $_POST['phone'];
            $opd = $_POST['opd'];
            $Mname = $_POST['Mname'];
            $message = $_POST['message'];
            $ememail = $_POST['ememail'];
            
   
            //create query
           $query = "INSERT INTO patient (subject,priority,birth,gender,Natio,idnamber,phone,opd,Mname,message,ememail) VALUES ('$subject','$priority','$birth','$gender','$Natio','$idnamber','$phone','$opd','$Mname','$message','$ememail')";
           //run query
           $res = mysqli_query($con, $query);
           
           if($res==1)
            {
                 header('Location: regmsg.php');
             exit();
                
            }
            else
            {
                echo'خطأ في الارسال لم يتم بالشكل الصحيح حاول مرة اخرى';
            }

    

        
}


?>


<html>
    <head> 
        <title><?php echo $title; ?> - حجز مواعيد</title>
         <!-- Connecting to CSS file for styling  -->
        <link  href="style1.css" rel="stylesheet" type="text/css"/></head>
    <body>
        <div>
<div class='right_content'>
	<div class="widget">
            <div class="widgetTop"><div class="news" ></div><center>إنشاء إحالة جديدة</center></div><!--End WidgetTop-->
        <div class="widgetContent">
        <div class="text">

            <form name="formm" id="form1" method='post' onsubmit='return validate_form(this)' lang="arb" dir="rtl">
		<input type='hidden' name='department' value='2' />
	<h1>العيادات الخارجية</h1>
	<table width='100%' cellpadding='0' cellspacing='0'>
		<tr>
		<td class='option1'><label for='subject'>إسم المريض</label></td>
		<td class='row1'><input type='text' name='subject' id='subject' value='' size='35'  required/> <span class="error" id="0">مطلوب</span> </td>
	</tr>           
        
	<tr>
		<td class='option2'><label for='priority'>الأهمية</label></td>
		<td class='row2'><select name='priority' id='priority' required>   <option value="default"> </option> <option value='1'>منخفضة</option><option value='2'>متوسطة</option><option value='3'>عالية</option><option value='4'>عاجلة</option></select><span class="error" id="1">مطلوب</span>  </td>
	</tr>
				<tr>
		<td class='option1'><label for='birth'>تاريخ الميلاد</label></td>
		<td class='row1'><input type='date' name='birth' id='birth' value='' size='45' required /> <span class="error" id="2">مطلوب</span> </td>
	</tr>
				<tr>
		<td class='option2'><label for='gender'>الجنس</label></td>
		<td class='row2'><select name='gender' id='gender'  required> <option value="default"> </option> <option value='male'>ذكر
</option><option value='female'>انثى</option></select> <span class="error" id="3">مطلوب</span>   </td>
	</tr>
				<tr>
		<td class='option1'><label for='Natio'>الجنسية</label></td>
		<td class='row1'><select name='Natio' id='Natio' required >
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
</option><option value='else'>أخرى</option></select>  <span class="error" id="4">مطلوب</span>  </td>
	</tr>
				<tr>
		<td class='option2'><label for='idnamber'>رقم الهوية - الإقامة</label></td>
		<td class='row2'><input type='text' name='idnamber' id='idnamber' value='' size='45'  maxlength="10" minlength="10" required /> <span class="error" id="5">مطلوب</span>  </td>
	</tr>
				<tr>
		<td class='option1'><label for='phone'>هاتف المريض</label></td>
		<td class='row1'><input type='text' name='phone' id='phone' value='' size='45'  required/> <span class="error" id="6">مطلوب</span> </td>
	</tr>
				<tr>
		<td class='option2'><label for='opd'>العيادة المحول لها</label></td>
		<td class='row2'><select name='opd' id='opd' required>
                        <option value="default"></option>
                        <option value='ENT'>أنف وأذن وحنجرة
</option><option value='pedia'>قلب الأطفال 
</option><option value='CER'>جراحة
</option><option value='ORTHO'>عظام
</option><option value='NSA'>النساء والولادة
</option><option value='OP'>عيون
</option><option value='M'>مسالك بولية
</option><option value='P9'>باطنية
</option><option value='JL'>جلدية
</option><option value='MK'>مخ واعصاب
</option><option value='TG'>جراحة التجميل
</option><option value='G9'>جراحةالصدر
</option><option value='GR7'>جراحة المخ والأعصاب 
</option><option value='T3'>التغذية
</option><option value='GA'>جراحة الأوعية الدموية 
</option><option value='9'>الصدر
</option><option value='GAA'>قلب الأطفال
</option><option value='GHA'>جراحة الأطفال</option></select> <span class="error" id="7">مطلوب</span>   </td>
   
        
	</tr>
        <tr>
            <td><label title="Mname" class="align">المركز الصحي</label></td>
         
            <td><select name='Mname' id=Mname style="width: 180px; height: 22px;" required >
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
        </select>  <span class="error" id="8">مطلوب</span> </td>
        </tr>
       
        
        
        <tr>
		<td class='option1'><label for='ememail'>إيميل الموظف</label></td>
		<td class='row1'><input type='text' name='ememail' id='ememail' value='' size='35'  required/> <span class="error" id="9">مطلوب</span> </td>
	</tr>           
        
        
        
            
            
				<tr>
                                    <td class='add-comment' colspan='2'><br /><textarea name='message' id='message' placeholder="أكتب معلومات الحجز , يوم الحجز, تاريخ الحجز , بالإضافة إلى باقي التفاصيل" rows='8' cols='100' style='width: 95%; height: 140px;'></textarea></td>
	</tr>
		
				</table>
	<div class='add-comment-do'><input type='submit' name='submit' id='send' value='ارسل الإحالة' class='button' onclick=" return validate_formm();"/></div>
	</form>
</div></div></div></div>
		
		
		
		



</div>
</body>
</html>

<script>
    function validate_formm()
    {
    var x= document.formm.subject.value;
    var x1= document.formm.priority.value;
    var x2= document.formm.birth.value;
    var x3= document.formm.gender.value;
    var x4= document.formm.Natio.value;
    var x5= document.formm.idnamber.value;
    var x6= document.formm.phone.value;
    var x7= document.formm.opd.value;
    var x8= document.formm.Mname.value; 
    var x9= document.formm.ememail.value;
                 
                  
                  
                  
    var spans = document.getElementsByTagName("span");

//cheacking if all the fileds are empty then show span 
        if (x === "")
        {
            spans[0].style.visibility = "visible";}
        
           
  
        if (x1 === "default")
        {
          spans[1].style.visibility = "visible";}
        
           
               if (x2 === "")
        {
           spans[2].style.visibility = "visible";}
        
            if (x3 === "default")
        {
           spans[3].style.visibility = "visible";}
        
            
        if(x4=== "default")
        {
          spans[4].style.visibility = "visible";}
        
         
        if (x5 === "")
        {
           spans[5].style.visibility = "visible";}
        
        
        
        if (x6 === "")
        {
            spans[6].style.visibility = "visible";}
        
          
   
       
                if (x7 === "default")
        {
           spans[7].style.visibility = "visible";}
       
       
              if (x8 === "default")
        {
           spans[8].style.visibility = "visible";}
         
    
    
    
        if (x9 === "")
        {
            spans[9].style.visibility = "visible";}
        
    }   
    
</script>

<?php
include 'footer.php';
?>




