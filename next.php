<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p><strong>
 
    
    
  
  

    
  
    
</p>
<p><center>
  <input type="image" name="imageField" id="imageField" src="logo.jpg"width="500" height="200">
</center></p>
<center>
<form id="form1" name="form1" method="post">
  <p><strong>
    <input type="image" name="imageField5" id="imageField5" src="1.jpg"width="200" height="80">
  </strong></p>
   <p>
   
   
     <?php
if(isset($_POST['field_select'])) {
	$id=$_POST['field_select'];
	if($id=='big'){
		
	echo"เส้นใหญ่";
}
if($id=='small'){
		
	echo"    เส้นเล็ก";
}
if($id=='mee'){
		
	echo"    เส้นหมี่ขาว";
}
if($id=='bamee'){
		
	echo"    บะหมี่";
}
if($id=='woon'){
		
	echo"    วุ้นเส้น";
}
}
?>
   </p>
   <p>
     <input type="image" name="imageField2" id="imageField2" src="52659.gif">
   </p>
   <p>
     <input type="image" name="imageField6" id="imageField6" src="Originals/2.jpg" width="200" height="80">
   </p>
   <p>
     <?php
if(isset($_POST['select1'])) {
	$id=$_POST['select1'];
	$value=$_POST['select3'];
	if($id=='sai'){
		
	echo"น้ำใส";
}
if($id=='tumyum'){
		
	echo"    น้ำต้มยำ";
	if($value=='noy'){
		echo"(เผ็ดน้อย)";
	}
	else if ($value=='medium'){
	echo"(เผ็ดปานกลาง)";
	}
	else if ($value=='mak'){
	echo"(เผ็ดมาก)";
	}
}}
?>
   </p>
   <p>
     <input type="image" name="imageField3" id="imageField3" src="52659.gif">
   </p>
   <p>
     <input type="image" name="imageField7" id="imageField7" src="3.jpg" width="200" height="80">
   </p>
   <p>
     <?php 
  
$name=$_POST['select2'];  
$data_type=$_POST['type'];  
$data_more=$_POST['more'];  
  $shrimp='55';
  $sum_shrimp='0';
  $squid='55';
  $sum_squid='0';
  $egg='15';
  $sum_egg='0';
  $field_select='35';
  $sum='0';
  
  if(count($name)>0){  
    foreach($name as $key=>$value){  
       if($value =='0'){
		   $sum_shrimp=$shrimp*$data_more[0];}
		   if($value =='1'){
		    $sum_squid=$squid*$data_more[1];}
		   if($value =='2'){
		   $sum_egg=$egg*$data_more[2];}
        echo $data_type[$value]." จำนวน ".$data_more[$value]."ตัว"."<br>";  
		
    }  
	$sum = $sum_shrimp+$sum_squid+$sum_egg+$field_select;  
echo "<br>"."ราคา".$sum."บาท";   
}


else
{
	$sum = $field_select;  
echo "<br>"."ราคารวมทั้งหมด : ".$sum."บาท";}

  
?>  
   </p>
   <p>
     <input type="image" name="imageField4" id="imageField4" src="52659.gif">
   </p>
   <p>
    <input type="image" name="imageField8" id="imageField8" src="4.jpg" width="200" height="80">
  </p>
   <table width="200" height="66" border="1">
     <tr>
       <th scope="col"><?php
   $comment=$_POST['comment'];
   echo $comment;
   ?></th>
     </tr>
   </table>
   <p>&nbsp;</p>
   
   <p><a href="index.php">BACK</a></p></p>
</form> 
</center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>

</body>


</html>