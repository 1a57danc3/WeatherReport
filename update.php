<?php
	/*天气更新，接口处在每天的18点更新，cron定时可以考虑稍微晚点，比如18点30或19点等*/
	header("Content-type: text/html; charset=utf-8");
	
	function combineNum($num) {
		$temp = (int)$num;
		
		if ($temp > 9) {
			$l = $temp % 10;
			$h = (int)($temp / 10);
			$temp = $l + $h;
			$temp = (string)($temp);
			return $temp;
		} else {
			return $num;
		}
	}

	function rewriteTemp($temp) {
		$temp = str_replace("℃", "", $temp);
		return $temp."°C";
	}
	
	$cityidArray = array(
		"101010100", /*beijing*/
		"101020100", /*shanghai*/
		"101280101", /*guangzhou*/
		"101230201", /*xiamen*/
		"101210101", /*hangzhou*/
		"101270101", /*chengdu*/
		"101280601", /*shenzhen*/
		"101250101", /*changsha*/
		"101110101", /*xian*/
		"101050101", /*haerbing*/
		"101030100", /*tianjing*/
		"101040100", /*chongqing*/
		"101120101" /*jinan*/
	);
	
	$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	mysql_select_db(SAE_MYSQL_DB, $con);
	
	for ($i = 0; $i < 13; $i++) {
		$url = "http://m.weather.com.cn/data/".$cityidArray[$i].".html";
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, true); 
		$data = curl_exec($ch);
		$data = json_decode($data, true);
	
		$weatherinfo = $data["weatherinfo"];
		$cityid = $weatherinfo["cityid"];
		$temp2 = rewriteTemp($weatherinfo["temp2"]);
		$temp3 = rewriteTemp($weatherinfo["temp3"]);
		$temp4 = rewriteTemp($weatherinfo["temp4"]);
		$temp5 = rewriteTemp($weatherinfo["temp5"]);
		$temp6 = rewriteTemp($weatherinfo["temp6"]);
		$img1 = combineNum($weatherinfo["img1"]);
		$img2 = combineNum($weatherinfo["img3"]);
		$img3 = combineNum($weatherinfo["img5"]);
		$img4 = combineNum($weatherinfo["img7"]);
		$img5 = combineNum($weatherinfo["img9"]);
		$img6 = combineNum($weatherinfo["img11"]);
		
		//$query = "insert into weather (cityid, temp1, temp2, temp3, temp4, temp5, temp6, img1, img2, img3, img4, img5, img6) values ('$cityid', '$temp1', '$temp2', '$temp3', '$temp4', '$temp5', '$temp6', '$img1', '$img2', '$img3', '$img4', '$img5', '$img6')";
		$query = "update weather set temp2 = '$temp2', temp3 = '$temp3', temp4 = '$temp4', temp5 = '$temp5', temp6 = '$temp6', img1 = '$img1', img2 = '$img2', img3 = '$img3', img4 = '$img4', img5 = '$img5', img6 = '$img6' where cityid = '$cityid'";
		mysql_query($query);
	}

	mysql_close($con);
?>