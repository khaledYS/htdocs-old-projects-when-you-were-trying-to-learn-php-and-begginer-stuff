<?php
$name = "Deadpool 2";
$age = " • للكبار فقط, يحتوى على مشاهد فاضحة او عنيفة.";
$type = "أكشن * مغامرة * كوميديا  " ;
$time = "(2) ساعتان تقريبا";
$trans = "مترجم * translated";
$title = "deadpool-2"

?>
<html>
	<head>
		<meta charset="utf-8" >
		<title><?php echo $title ; ?></title>
		<style>body{
	background-color: antiquewhite;
	overflow: scroll;
}
table, th, td {
  border: 3px solid black;
	padding: 17px;
}
table{
	display: inline-block;
	text-align: center;
	margin-left: auto;
	margin-right: auto;
}
video{
	display: block;
	padding: 0px;
	text-align: center;
	margin-left: auto;
	margin-right: auto;
	margin: 0px;
}
img{
	display: block;
	text-align: center;
	margin-left: auto;
	margin-right: auto;
}
#movie{
	text-align: center;
	margin-left: auto;
	margin-right: auto;
}
h1{
	margin: 0px;
}
#con{
	border: 20px groove;
}
#up{
	text-align: center;
	margin-left: auto;
	margin-right: auto;
}</style>
		<link rel="icon" type="image/png" href="../img/87ca7887-c2d8-4c3a-9cf7-3cb2a1fd7201_200x200.png"00 >
	</head>
	<body><div id="con">
		<div id="up" >
			<img width="200" height="150" src="https://collider.com/wp-content/uploads/2018/02/deadpool-2-poster.jpg" alt="the movie pic صورة الفيلم" >
			<table>
				<tr >
					<td><h2><?php echo $name; ?></h2></td>
					<td><h2> : الأسم</h2></td>
				</tr >
								<tr>
									<td><h2><?php echo $age; ?></h2></td>
									<td><h2> : التصنيف</h2></td>
				</tr>
				<tr>
					<td ><h2><?php echo $type; ?></h2></td>
					<td><h2> : النوع</h2></td>
				</tr>
				<tr>
					<td ><h2><?php echo $time; ?></h2></td>
					<td><h2> : المدة</h2></td>
				</tr>
				<tr>
					<td ><h2><?php echo $trans; ?></h2></td>
					<td> <h2>: الترجمة</h2></td>

				</tr>
			</table><!--
	<tr>
					<td >deadpool</td>
					<td> : النوع</td>
				</tr>
-->
		</div>
		<div id="movie" >

			<center>	
				<video width="380" height="240" controls autoplay >
					<source src="https://icecube-eu-284.icedrive.io/download?p=3I8r3N7CE0NFDn5MHikKI2yPjZmG_ifrXuiiZM03XNLcBNezHrzPpDtqZ_rFKEGZ_rrcXYt56Ffpb.MBn7AhgKScofh09bKf8B3DaEG5imkFS1Ut0UlzK6EfpsYnlanFJ42_NFApXl5Ir3f78VgpwdFPhZk.DdGDG3kYCeFPs3w7p7Sfa8EPr2Z4.CiEoRdZKJkaXfnd1x2apmFImsyBq7ByQTDWSCpHG9EJX_WZOSTnsLHwhCjDKyUPL31mYfn8" >					
					<!--<source src="https://icecube-eu-283.icedrive.io/download?p=3I8r3N7CE0NFDn5MHikKI2yPjZmG_ifrXuiiZM03XNKp3a.ERCe1XnQEVbtDL_tc_rrcXYt56Ffpb.MBn7AhgKScofh09bKf8B3DaEG5immq62zKpbzLrSjsQljJZofty5uVoaED_bFHJfRrjoa._R0b2w19N4roayMzu05B7bU7p7Sfa8EPr2Z4.CiEoRdZe5P4JI55XGGnesbooOdr11bJvTZn5sbaLjZd0ysoKAfOW.1NtDbXVTvkyXczNrvQ" >-->
			
				</video>
			</center>
		</div>
		</div>
	</body>
</html>
</html>