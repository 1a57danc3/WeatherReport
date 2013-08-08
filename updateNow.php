<?php
	/*温度更新，每20分钟更新一次*/
	header("Content-type: text/html; charset=utf-8");

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
		$url = "http://www.weather.com.cn/data/sk/".$cityidArray[$i].".html";
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, true); 
		$data = curl_exec($ch);
		$data = json_decode($data, true);
	
		$weatherinfo = $data["weatherinfo"];
		$cityid = $weatherinfo["cityid"];
		$temp1 = $weatherinfo["temp"]."℃";
		
		$query = "update weather set temp1 = '$temp1' where cityid = '$cityid'";
		mysql_query($query);
	}

	mysql_close($con);
?>