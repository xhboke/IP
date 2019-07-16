# IP签名档源码
<h2>说在前面</h2>
自从论坛IP签名档开放以来，访问量达到1806287，一百八十多万，由于证书过期和懒得维护。今特开源。
<h2>演示效果</h2>
<img src="https://apa.me/news/" alt="" width="550" height="250" class="alignnone size-full wp-image-862" />
<h2>原帖地址</h2>
https://www.xhboke.com/858.html
<h2>修复</h2>
<h3>2019.7.16<h3>
修复并发量限制
<h3>2018.6.11<h3>
$url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip; <br>
$country = $data['data']['country']; <br>
$region = $data['data']['region']; <br>
$city = $data['data']['city'];<br>
