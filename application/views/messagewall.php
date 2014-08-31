<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>微信强</title>

</head>
<body>
    <div id="result"></div>

<?php 
echo "<table border=1>";
echo "<tr><td>id</td><td>事件</td><td>内容</td><td>你才</td></tr>";
foreach ($data as $value){
	 
	echo "<tr>";

	foreach ($value as$key=>$item){
		echo "<td>".$item."</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
    <script>
if(typeof(EventSource)!=="undefined")
  {
  var source=new EventSource("http://1.wall1192.sinaapp.com/index.php/jumplink/yibu");
  source.onmessage=function(event)
    {
    document.getElementById("result").innerHTML+=event.data + "<br />";
    };
  }
else
  {
  document.getElementById("result").innerHTML="Sorry, your browser does not support server-sent events...";
  }
</script>
</body>
</html>
