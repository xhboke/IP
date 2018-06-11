# IP签名档源码
<h2>说在前面</h2>
自从论坛IP签名档开放以来，访问量达到1806287，一百八十多万，由于证书过期和懒得维护。今特开源。
<h2>演示效果</h2>
<a href="https://www.xhboke.com/wp-content/uploads/2018/05/20180526175459.png"><img src="https://www.xhboke.com/wp-content/uploads/2018/05/20180526175459.png" alt="" width="550" height="250" class="alignnone size-full wp-image-862" /></a>
<h2>原帖地址</h2>
https://www.xhboke.com/858.html
<h2>修复</h2>
<h3>6.11<h3>
$url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip; <br>
$country = $data['data']['country']; <br>
$region = $data['data']['region']; <br>
$city = $data['data']['city'];<br>
