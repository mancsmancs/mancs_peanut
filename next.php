<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<strong><?php
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
</strong>


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


<?php
if(isset($_POST['select2'])) {
	$id=$_POST['select2'];
	if($id=='shrimp'){
		
	echo"เพิ่มกุ้ง";
}
if($id=='squid'){
		
	echo"    เพิ่มปลาหมึก";
}
if($id=='egg'){
		
	echo"    เพิ่มไข่ยางมะตูม";
}

}
?>



 
  <p>&nbsp;</p>
  <p><a href="index.php">BACK</a></p>
</form>
<p>&nbsp;</p>

</body>


</html>