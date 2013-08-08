<?php
	header("Content-type: text/html; charset=utf-8");
		
	$temp1 = array();
	$temp2 = array();
	$temp3 = array();
	$temp4 = array();
	$temp5 = array();
	$temp6 = array();
	$img1 = array();
	$img2 = array();
	$img3 = array();
	$img4 = array();
	$img5 = array();
	$img6 = array();
	$day = array(); //存放接下来5天的日期
	
	for($i = 1; $i <= 5; $i++){
		$date = date('j',strtotime($i.' day'));
		array_push($day, $date);
	}
	
	$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	mysql_select_db(SAE_MYSQL_DB, $con);
	$query = "select * from weather";
	$result = mysql_query($query, $con);
	
	while ($row = mysql_fetch_object($result)) {
		array_push($temp1, $row->temp1);
		array_push($temp2, $row->temp2);
		array_push($temp3, $row->temp3);
		array_push($temp4, $row->temp4);
		array_push($temp5, $row->temp5);
		array_push($temp6, $row->temp6);
		
		array_push($img1, $row->img1);
		array_push($img2, $row->img2);
		array_push($img3, $row->img3);
		array_push($img4, $row->img4);
		array_push($img5, $row->img5);
		array_push($img6, $row->img6);
	}
	mysql_close($con);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>WeatherReport</title>
		<link rel="stylesheet" href="css/style.css" />
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/ie.css" />
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="header">
				<h1>WeatherReport</h1>
			</div>
			<div class="main">
				<ul class="grid">
					<li class="span2 li1">
						<h3>北京</h3>
						<span class="temp"><?php echo $temp1[0]; ?></span>
						<span class="icon"><?php echo $img1[0]; ?></span>
						<div class="overlay">
							<span class="close">&times;</span>
							<div class="wrap" id="wrap1">
								<div class="today_weather div1">
									<span class="city">北京</span>
									<span class="icon"><?php echo $img1[0]; ?></span>
									<span class="overlay-temp"><?php echo $temp1[0]; ?></span>
								</div>
								<div class="div2">
									<span class="weekday"><?php echo $day[0]; ?></span>
									<span class="weekday-icon"><?php echo $img2[0]; ?></span>
									<span class="weekday-temp"><?php echo $temp2[0]; ?></span>
								</div>
								<div class="div3">
									<span class="weekday"><?php echo $day[1]; ?></span>
									<span class="weekday-icon"><?php echo $img3[0]; ?></span>
									<span class="weekday-temp"><?php echo $temp3[0]; ?></span>
								</div>
								<div class="div4">
									<span class="weekday"><?php echo $day[2]; ?></span>
									<span class="weekday-icon"><?php echo $img4[0]; ?></span>
									<span class="weekday-temp"><?php echo $temp4[0]; ?></span>
								</div>
								<div class="div5">
									<span class="weekday"><?php echo $day[3]; ?></span>
									<span class="weekday-icon"><?php echo $img5[0]; ?></span>
									<span class="weekday-temp"><?php echo $temp5[0]; ?></span>
								</div>
								<div class="div6">
									<span class="weekday"><?php echo $day[4]; ?></span>
									<span class="weekday-icon"><?php echo $img6[0]; ?></span>
									<span class="weekday-temp"><?php echo $temp6[0]; ?></span>
								</div>
							</div>
						</div>
					</li>
					<li class="span1 li2">
						<h3>上海</h3>
						<span class="temp"><?php echo $temp1[1]; ?></span>
						<span class="icon"><?php echo $img1[1]; ?></span>
						<div class="overlay">
							<span class="close">&times;</span>
							<div class="wrap" id="wrap2">
								<div class="today_weather div1">
									<span class="city">上海</span>
									<span class="icon"><?php echo $img1[1]; ?></span>
									<span class="overlay-temp"><?php echo $temp1[1]; ?></span>
								</div>
								<div class="div2">
									<span class="weekday"><?php echo $day[0]; ?></span>
									<span class="weekday-icon"><?php echo $img2[1]; ?></span>
									<span class="weekday-temp"><?php echo $temp2[1]; ?></span>
								</div>
								<div class="div3">
									<span class="weekday"><?php echo $day[1]; ?></span>
									<span class="weekday-icon"><?php echo $img3[1]; ?></span>
									<span class="weekday-temp"><?php echo $temp3[1]; ?></span>
								</div>
								<div class="div4">
									<span class="weekday"><?php echo $day[2]; ?></span>
									<span class="weekday-icon"><?php echo $img4[1]; ?></span>
									<span class="weekday-temp"><?php echo $temp4[1]; ?></span>
								</div>
								<div class="div5">
									<span class="weekday"><?php echo $day[3]; ?></span>
									<span class="weekday-icon"><?php echo $img5[1]; ?></span>
									<span class="weekday-temp"><?php echo $temp5[1]; ?></span>
								</div>
								<div class="div6">
									<span class="weekday"><?php echo $day[4]; ?></span>
									<span class="weekday-icon"><?php echo $img6[1]; ?></span>
									<span class="weekday-temp"><?php echo $temp6[1]; ?></span>
								</div>
							</div>
						</div>
					</li>
					<li class="span1 li3">
						<h3>广州</h3>
						<span class="temp"><?php echo $temp1[2]; ?></span>
						<span class="icon"><?php echo $img1[2]; ?></span>
						<div class="overlay">
							<span class="close">&times;</span>
							<div class="wrap" id="wrap3">
								<div class="today_weather div1">
									<span class="city">广州</span>
									<span class="icon"><?php echo $img1[2]; ?></span>
									<span class="overlay-temp"><?php echo $temp1[2]; ?></span>
								</div>
								<div class="div2">
									<span class="weekday"><?php echo $day[0]; ?></span>
									<span class="weekday-icon"><?php echo $img2[2]; ?></span>
									<span class="weekday-temp"><?php echo $temp2[2]; ?></span>
								</div>
								<div class="div3">
									<span class="weekday"><?php echo $day[1]; ?></span>
									<span class="weekday-icon"><?php echo $img3[2]; ?></span>
									<span class="weekday-temp"><?php echo $temp3[2]; ?></span>
								</div>
								<div class="div4">
									<span class="weekday"><?php echo $day[2]; ?></span>
									<span class="weekday-icon"><?php echo $img4[2]; ?></span>
									<span class="weekday-temp"><?php echo $temp4[2]; ?></span>
								</div>
								<div class="div5">
									<span class="weekday"><?php echo $day[3]; ?></span>
									<span class="weekday-icon"><?php echo $img5[2]; ?></span>
									<span class="weekday-temp"><?php echo $temp5[2]; ?></span>
								</div>
								<div class="div6">
									<span class="weekday"><?php echo $day[4]; ?></span>
									<span class="weekday-icon"><?php echo $img6[2]; ?></span>
									<span class="weekday-temp"><?php echo $temp6[2]; ?></span>
								</div>
							</div>
						</div>
					</li>
					<li class="span1 li4">
						<h3>厦门</h3>
						<span class="temp"><?php echo $temp1[3]; ?></span>
						<span class="icon"><?php echo $img1[3]; ?></span>
						<div class="overlay">
							<span class="close">&times;</span>
							<div class="wrap" id="wrap4">
								<div class="today_weather div1">
									<span class="city">厦门</span>
									<span class="icon"><?php echo $img1[3]; ?></span>
									<span class="overlay-temp"><?php echo $temp1[3]; ?></span>
								</div>
								<div class="div2">
									<span class="weekday"><?php echo $day[0]; ?></span>
									<span class="weekday-icon"><?php echo $img2[3]; ?></span>
									<span class="weekday-temp"><?php echo $temp2[3]; ?></span>
								</div>
								<div class="div3">
									<span class="weekday"><?php echo $day[1]; ?></span>
									<span class="weekday-icon"><?php echo $img3[3]; ?></span>
									<span class="weekday-temp"><?php echo $temp3[3]; ?></span>
								</div>
								<div class="div4">
									<span class="weekday"><?php echo $day[2]; ?></span>
									<span class="weekday-icon"><?php echo $img4[3]; ?></span>
									<span class="weekday-temp"><?php echo $temp4[3]; ?></span>
								</div>
								<div class="div5">
									<span class="weekday"><?php echo $day[3]; ?></span>
									<span class="weekday-icon"><?php echo $img5[3]; ?></span>
									<span class="weekday-temp"><?php echo $temp5[3]; ?></span>
								</div>
								<div class="div6">
									<span class="weekday"><?php echo $day[4]; ?></span>
									<span class="weekday-icon"><?php echo $img6[3]; ?></span>
									<span class="weekday-temp"><?php echo $temp6[3]; ?></span>
								</div>
							</div>
						</div>
					</li>
					<li class="span1 li5">
						<h3>杭州</h3>
						<span class="temp"><?php echo $temp1[4]; ?></span>
						<span class="icon"><?php echo $img1[4]; ?></span>
						<div class="overlay">
							<span class="close">&times;</span>
							<div class="wrap" id="wrap5">
								<div class="today_weather div1">
									<span class="city">杭州</span>
									<span class="icon"><?php echo $img1[3]; ?></span>
									<span class="overlay-temp"><?php echo $temp1[4]; ?></span>
								</div>
								<div class="div2">
									<span class="weekday"><?php echo $day[0]; ?></span>
									<span class="weekday-icon"><?php echo $img2[4]; ?></span>
									<span class="weekday-temp"><?php echo $temp2[4]; ?></span>
								</div>
								<div  class="div3">
									<span class="weekday"><?php echo $day[1]; ?></span>
									<span class="weekday-icon"><?php echo $img3[4]; ?></span>
									<span class="weekday-temp"><?php echo $temp3[4]; ?></span>
								</div>
								<div class="div4">
									<span class="weekday"><?php echo $day[2]; ?></span>
									<span class="weekday-icon"><?php echo $img4[4]; ?></span>
									<span class="weekday-temp"><?php echo $temp4[4]; ?></span>
								</div>
								<div class="div5">
									<span class="weekday"><?php echo $day[3]; ?></span>
									<span class="weekday-icon"><?php echo $img5[4]; ?></span>
									<span class="weekday-temp"><?php echo $temp5[4]; ?></span>
								</div>
								<div class="div6">
									<span class="weekday"><?php echo $day[4]; ?></span>
									<span class="weekday-icon"><?php echo $img6[4]; ?></span>
									<span class="weekday-temp"><?php echo $temp6[4]; ?></span>
								</div>
							</div>
						</div>
					</li>
					<li class="span1 li6">
						<h3>成都</h3>
						<span class="temp"><?php echo $temp1[5] ?></span>
						<span class="icon"><?php echo $img1[5]; ?></span>
						<div class="overlay">
							<span class="close">&times;</span>
							<div class="wrap" id="wrap6">
								<div class="today_weather div1">
									<span class="city">成都</span>
									<span class="icon"><?php echo $img1[5]; ?></span>
									<span class="overlay-temp"><?php echo $temp1[5]; ?></span>
								</div>
								<div class="div2">
									<span class="weekday"><?php echo $day[0]; ?></span>
									<span class="weekday-icon"><?php echo $img2[5]; ?></span>
									<span class="weekday-temp"><?php echo $temp2[5] ?></span>
								</div>
								<div class="div3">
									<span class="weekday"><?php echo $day[1]; ?></span>
									<span class="weekday-icon"><?php echo $img3[5]; ?></span>
									<span class="weekday-temp"><?php echo $temp3[5] ?></span>
								</div>
								<div class="div4">
									<span class="weekday"><?php echo $day[2]; ?></span>
									<span class="weekday-icon"><?php echo $img4[5]; ?></span>
									<span class="weekday-temp"><?php echo $temp4[5] ?></span>
								</div>
								<div class="div5">
									<span class="weekday"><?php echo $day[3]; ?></span>
									<span class="weekday-icon"><?php echo $img5[5]; ?></span>
									<span class="weekday-temp"><?php echo $temp5[5] ?></span>
								</div>
								<div class="div6">
									<span class="weekday"><?php echo $day[4]; ?></span>
									<span class="weekday-icon"><?php echo $img6[5]; ?></span>
									<span class="weekday-temp"><?php echo $temp6[5] ?></span>
								</div>
							</div>
						</div>
					</li>
					<li class="span1 li7">
						<h3>深圳</h3>
						<span class="temp"><?php echo $temp1[6]; ?></span>
						<span class="icon"><?php echo $img1[6]; ?></span>
						<div class="overlay">
							<span class="close">&times;</span>
							<div class="wrap" id="wrap7">
								<div class="today_weather div1">
									<span class="city">深圳</span>
									<span class="icon"><?php echo $img1[6]; ?></span>
									<span class="overlay-temp"><?php echo $temp1[6]; ?></span>
								</div>
								<div class="div2">
									<span class="weekday"><?php echo $day[0]; ?></span>
									<span class="weekday-icon"><?php echo $img2[6]; ?></span>
									<span class="weekday-temp"><?php echo $temp2[6]; ?></span>
								</div>
								<div class="div3">
									<span class="weekday"><?php echo $day[1]; ?></span>
									<span class="weekday-icon"><?php echo $img3[6]; ?></span>
									<span class="weekday-temp"><?php echo $temp3[6]; ?></span>
								</div>
								<div class="div4">
									<span class="weekday"><?php echo $day[2]; ?></span>
									<span class="weekday-icon"><?php echo $img4[6]; ?></span>
									<span class="weekday-temp"><?php echo $temp4[6]; ?></span>
								</div>
								<div class="div5">
									<span class="weekday"><?php echo $day[3]; ?></span>
									<span class="weekday-icon"><?php echo $img5[6]; ?></span>
									<span class="weekday-temp"><?php echo $temp5[6]; ?></span>
								</div>
								<div class="div6">
									<span class="weekday"><?php echo $day[4]; ?></span>
									<span class="weekday-icon"><?php echo $img6[6]; ?></span>
									<span class="weekday-temp"><?php echo $temp6[6]; ?></span>
								</div>
							</div>
						</div>
					</li>
					<li class="span1 li8">
						<h3>长沙</h3>
						<span class="temp"><?php echo $temp1[7]; ?></span>
						<span class="icon"><?php echo $img1[7]; ?></span>
						<div class="overlay">
							<span class="close">&times;</span>
							<div class="wrap" id="wrap8">
								<div class="today_weather div1">
									<span class="city">长沙</span>
									<span class="icon"><?php echo $img1[7]; ?></span>
									<span class="overlay-temp"><?php echo $temp1[7]; ?></span>
								</div>
								<div class="div2">
									<span class="weekday"><?php echo $day[0]; ?></span>
									<span class="weekday-icon"><?php echo $img2[7]; ?></span>
									<span class="weekday-temp"><?php echo $temp2[7]; ?></span>
								</div>
								<div class="div3">
									<span class="weekday"><?php echo $day[1]; ?></span>
									<span class="weekday-icon"><?php echo $img3[7]; ?></span>
									<span class="weekday-temp"><?php echo $temp3[7]; ?></span>
								</div>
								<div class="div4">
									<span class="weekday"><?php echo $day[2]; ?></span>
									<span class="weekday-icon"><?php echo $img4[7]; ?></span>
									<span class="weekday-temp"><?php echo $temp4[7]; ?></span>
								</div>
								<div class="div5">
									<span class="weekday"><?php echo $day[3]; ?></span>
									<span class="weekday-icon"><?php echo $img5[7]; ?></span>
									<span class="weekday-temp"><?php echo $temp5[7]; ?></span>
								</div>
								<div class="div6">
									<span class="weekday"><?php echo $day[4]; ?></span>
									<span class="weekday-icon"><?php echo $img6[7]; ?></span>
									<span class="weekday-temp"><?php echo $temp6[7]; ?></span>
								</div>
							</div>
						</div>
					</li>
					<li class="span2 li9">
						<h3>西安</h3>
						<span class="temp"><?php echo $temp1[8]; ?></span>
						<span class="icon"><?php echo $img1[8]; ?></span>
						<div class="overlay">
							<span class="close">&times;</span>
							<div class="wrap" id="wrap9">
								<div class="today_weather div1">
									<span class="city">西安</span>
									<span class="icon"><?php echo $img1[8]; ?></span>
									<span class="overlay-temp"><?php echo $temp1[8]; ?></span>
								</div>
								<div class="div2">
									<span class="weekday"><?php echo $day[0]; ?></span>
									<span class="weekday-icon"><?php echo $img2[8]; ?></span>
									<span class="weekday-temp"><?php echo $temp2[8]; ?></span>
								</div>
								<div class="div3">
									<span class="weekday"><?php echo $day[1]; ?></span>
									<span class="weekday-icon"><?php echo $img3[8]; ?></span>
									<span class="weekday-temp"><?php echo $temp3[8]; ?></span>
								</div>
								<div class="div4">
									<span class="weekday"><?php echo $day[2]; ?></span>
									<span class="weekday-icon"><?php echo $img4[8]; ?></span>
									<span class="weekday-temp"><?php echo $temp4[8]; ?></span>
								</div>
								<div class="div5">
									<span class="weekday"><?php echo $day[3]; ?></span>
									<span class="weekday-icon"><?php echo $img5[8]; ?></span>
									<span class="weekday-temp"><?php echo $temp5[8]; ?></span>
								</div>
								<div class="div6">
									<span class="weekday"><?php echo $day[4]; ?></span>
									<span class="weekday-icon"><?php echo $img6[8]; ?></span>
									<span class="weekday-temp"><?php echo $temp6[8]; ?></span>
								</div>
							</div>
						</div>
					</li>
					<li class="span1 li10">
						<h3>哈尔滨</h3>
						<span class="temp"><?php echo $temp1[9]; ?></span>
						<span class="icon"><?php echo $img1[9]; ?></span>
						<div class="overlay">
							<span class="close">&times;</span>
							<div class="wrap" id="wrap10">
								<div class="today_weather div1">
									<span class="city">哈尔滨</span>
									<span class="icon"><?php echo $img1[9]; ?></span>
									<span class="overlay-temp"><?php echo $temp1[9]; ?></span>
								</div>
								<div class="div2">
									<span class="weekday"><?php echo $day[0]; ?></span>
									<span class="weekday-icon"><?php echo $img2[9]; ?></span>
									<span class="weekday-temp"><?php echo $temp2[9]; ?></span>
								</div>
								<div class="div3">
									<span class="weekday"><?php echo $day[1]; ?></span>
									<span class="weekday-icon"><?php echo $img3[9]; ?></span>
									<span class="weekday-temp"><?php echo $temp3[9]; ?></span>
								</div>
								<div class="div4">
									<span class="weekday"><?php echo $day[2]; ?></span>
									<span class="weekday-icon"><?php echo $img4[9]; ?></span>
									<span class="weekday-temp"><?php echo $temp4[9]; ?></span>
								</div>
								<div class="div5">
									<span class="weekday"><?php echo $day[3]; ?></span>
									<span class="weekday-icon"><?php echo $img5[9]; ?></span>
									<span class="weekday-temp"><?php echo $temp5[9]; ?></span>
								</div>
								<div class="div6">
									<span class="weekday"><?php echo $day[4]; ?></span>
									<span class="weekday-icon"><?php echo $img6[9]; ?></span>
									<span class="weekday-temp"><?php echo $temp6[9]; ?></span>
								</div>
							</div>
						</div>
					</li>
					<li class="span1 li11">
						<h3>香港</h3>
						<span class="temp"><?php echo $temp1[10]; ?></span>
						<span class="icon"><?php echo $img1[10]; ?></span>
						<div class="overlay">
							<span class="close">&times;</span>
							<div class="wrap" id="wrap11">
								<div class="today_weather div1">
									<span class="city">香港</span>
									<span class="icon"><?php echo $img1[10]; ?></span>
									<span class="overlay-temp"><?php echo $temp1[10]; ?></span>
								</div>
								<div class="div2">
									<span class="weekday"><?php echo $day[0]; ?></span>
									<span class="weekday-icon"><?php echo $img2[10]; ?></span>
									<span class="weekday-temp"><?php echo $temp2[10]; ?></span>
								</div>
								<div class="div3">
									<span class="weekday"><?php echo $day[1]; ?></span>
									<span class="weekday-icon"><?php echo $img3[10]; ?></span>
									<span class="weekday-temp"><?php echo $temp3[10]; ?></span>
								</div>
								<div class="div4">
									<span class="weekday"><?php echo $day[2]; ?></span>
									<span class="weekday-icon"><?php echo $img4[10]; ?></span>
									<span class="weekday-temp"><?php echo $temp4[10]; ?></span>
								</div>
								<div class="div5">
									<span class="weekday"><?php echo $day[3]; ?></span>
									<span class="weekday-icon"><?php echo $img5[10]; ?></span>
									<span class="weekday-temp"><?php echo $temp5[10]; ?></span>
								</div>
								<div class="div6">
									<span class="weekday"><?php echo $day[4]; ?></span>
									<span class="weekday-icon"><?php echo $img6[10]; ?></span>
									<span class="weekday-temp"><?php echo $temp6[10]; ?></span>
								</div>
							</div>
						</div>
					</li>
					<li class="span1 li12">
						<h3>澳门</h3>
						<span class="temp"><?php echo $temp1[11]; ?></span>
						<span class="icon"><?php echo $img1[11]; ?></span>
						<div class="overlay">
							<span class="close">&times;</span>
							<div class="wrap"  id="wrap12">
								<div class="today_weather div1">
									<span class="city">澳门</span>
									<span class="icon"><?php echo $img1[11]; ?></span>
									<span class="overlay-temp"><?php echo $temp1[11]; ?></span>
								</div>
								<div class="div2">
									<span class="weekday"><?php echo $day[0]; ?></span>
									<span class="weekday-icon"><?php echo $img2[11]; ?></span>
									<span class="weekday-temp"><?php echo $temp2[11]; ?></span>
								</div>
								<div class="div3">
									<span class="weekday"><?php echo $day[1]; ?></span>
									<span class="weekday-icon"><?php echo $img3[11]; ?></span>
									<span class="weekday-temp"><?php echo $temp3[11]; ?></span>
								</div>
								<div class="div4">
									<span class="weekday"><?php echo $day[2]; ?></span>
									<span class="weekday-icon"><?php echo $img4[11]; ?></span>
									<span class="weekday-temp"><?php echo $temp4[11]; ?></span>
								</div>
								<div class="div5">
									<span class="weekday"><?php echo $day[3]; ?></span>
									<span class="weekday-icon"><?php echo $img5[11]; ?></span>
									<span class="weekday-temp"><?php echo $temp5[11]; ?></span>
								</div>
								<div class="div6">
									<span class="weekday"><?php echo $day[4]; ?></span>
									<span class="weekday-icon"><?php echo $img6[11]; ?></span>
									<span class="weekday-temp"><?php echo $temp6[11]; ?></span>
								</div>
							</div>
						</div>
					</li>
					<li class="span2 li13">
						<h3>台北</h3>
						<span class="temp"><?php echo $temp1[12]; ?></span>
						<span class="icon"><?php echo $img1[12]; ?></span>
						<div class="overlay">
							<span class="close">&times;</span>
							<div class="wrap" id="wrap13">
								<div class="today_weather div1">
									<span class="city">台北</span>
									<span class="icon"><?php echo $img1[12]; ?></span>
									<span class="overlay-temp"><?php echo $temp1[12]; ?></span>
								</div>
								<div class="div2">
									<span class="weekday"><?php echo $day[0]; ?></span>
									<span class="weekday-icon"><?php echo $img2[12]; ?></span>
									<span class="weekday-temp"><?php echo $temp2[12]; ?></span>
								</div>
								<div class="div3">
									<span class="weekday"><?php echo $day[1]; ?></span>
									<span class="weekday-icon"><?php echo $img3[12]; ?></span>
									<span class="weekday-temp"><?php echo $temp3[12]; ?></span>
								</div>
								<div class="div4">
									<span class="weekday"><?php echo $day[2]; ?></span>
									<span class="weekday-icon"><?php echo $img4[12]; ?></span>
									<span class="weekday-temp"><?php echo $temp4[12]; ?></span>
								</div>
								<div class="div5">
									<span class="weekday"><?php echo $day[3]; ?></span>
									<span class="weekday-icon"><?php echo $img5[12]; ?></span>
									<span class="weekday-temp"><?php echo $temp5[12]; ?></span>
								</div>
								<div class="div6">
									<span class="weekday"><?php echo $day[4]; ?></span>
									<span class="weekday-icon"><?php echo $img6[12]; ?></span>
									<span class="weekday-temp"><?php echo $temp6[12]; ?></span>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
		var flag = 0; //是否弹出弹出层
		
		var resizeCallback = function() {
			if (flag == 1) {
				$(".overlay").each(function() {
					if ($(this).css("display") == "block") {
						//窗口大小改变时重新改变弹出层字体大小
						var font_size = (parseInt($(window).width() * 0.3) / 6);
						$(this).find(".overlay-temp").css("font-size", font_size + "px");
						$(this).find(".weekday-temp").css("font-size", (font_size * 0.45) + "px");
						$(this).find(".wrap").find(".icon").css("font-size", (font_size * 4) + "px");
						$(this).find(".wrap").find(".weekday-icon").css("font-size", (font_size * 2) + "px");
						$(this).find(".city").css("font-size", font_size + "px");
						return ;
					}
				});
			}
		}
		
		function debounce(callback, delay, context){
			if (typeof(callback) !== "function") {
				return;
			}

			delay = delay || 150;
			context = context || null;
			var timeout;
			var runIt = function(){
					callback.apply(context);
				};
			return (function(){
				//延时响应resize，防止执行两次
				window.clearTimeout(timeout);
				timeout = window.setTimeout(runIt, delay);
			});
		}
		
		$(function() {
			$(".grid > li").click(function() {
				$("body").attr("scroll", "no"); //for IE but 不管用啊貌似= =。。。
				$(this).children(".overlay").css({
					"display": "block",
					"z-index": "9999"
				});

				//字体大小调整
				var font_size = (parseInt($(window).width() * 0.3) / 6);
				$(this).find(".overlay-temp").css("font-size", font_size + "px");
				$(this).find(".weekday-temp").css("font-size", (font_size * 0.45) + "px");
				$(this).find(".wrap").find(".icon").css("font-size", (font_size * 4) + "px");
				$(this).find(".wrap").find(".weekday-icon").css("font-size", (font_size * 2) + "px");
				$(this).find(".city").css("font-size", font_size + "px");

				//动画效果，从左向右
				$(this).children(".overlay").animate({
					"left": "0"
				}, 300, function() {
					$("body").css("overflow-y", "hidden");										
					flag = 1;
				});
			});

			//阻止冒泡，防止在弹出层中点击触发在.grid > li的事件（会导致字体抖动一下）
			$(".overlay").click(function(event) {
				event.stopPropagation();
			});
			
			$(".close").click(function(event) {
				event.stopPropagation(); //阻止冒泡，防止触发上面的点击事件
				$("body").css("overflow-y", "visible");

				var $this = $(this);

				//动画效果，从右向左
				$(this).parent(".overlay").animate({
					"left": "-100%"
				}, 400, function() {
					$(".overlay").css({
						"display": "none",
						"z-index": "-1"
					});
					
					$("body").removeAttr("scroll");
					
					flag = 0;
				});
			});	

			//延时响应resize，以防触发两次
			window.onresize = debounce(resizeCallback, 300);
		});
	</script>
	</body>
</html>