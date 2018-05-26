<?php include 'function.php';?>
<?php
		header("Content-type:text/json; charset=utf-8");
		$weekarray=array("日","一","二","三","四","五","六"); //先定义一个数组
		$ip = $_SERVER["REMOTE_ADDR"];//获取IP
		$url="http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip=".$ip; 
		$UserAgent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; .NET CLR 3.5.21022; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';  
		$curl = curl_init(); 
		curl_setopt($curl, CURLOPT_URL, $url); 
		curl_setopt($curl, CURLOPT_HEADER, 0);  
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);  
		curl_setopt($curl, CURLOPT_ENCODING, '');  
		curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);  
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);  
		$data = curl_exec($curl);
		$data = json_decode($data, true);
		$country =  $data['country'];
		$province = $data['province'];
		$city = $data['city'];//获取地址数据
  		$array = ['country' => $country,'province' => $province,'city' => $city,'ip' => $ip,];//位置JSON_UNESCAPED_UNICODE
		$array1 = ['date' => date('Y年n月j日'),'week' => '星期'.$weekarray[date("w")]];//日期
		$array2 = ['system' => $os,'week' => $bro];//操作系统和浏览器
		$arr=array('Location'=>$array,'Time'=>$array1,'Browser'=>$array2);
		$json = json_encode($arr,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
		echo $json;
?>