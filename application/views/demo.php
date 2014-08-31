<?php

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ceshi</title>
<link href="/css/history.css" rel="stylesheet" />
</head>
<body>


<div class="head-warp">
  <div class="head">
        <div class="nav-box">
          <ul>
              <li class="cur" style="text-align:center; font-size:62px; font-family:'微软雅黑', '宋体';">用生命说爱你</li>
          </ul>
        </div>
  </div>
</div>
<!-- 以上内容为header标题 -->

<div class="main">
   <div class="history" >
       <div class="history-date">
          <ul>
         	<h2 class="first"><a href="#nogo">杨子鳄的告白</a></h2>
             <?php
             foreach ($data as $value){
             	echo 	"<li class='bounceInDown' style='-webkit-animation: 2s ease 0ms both;'>";
				echo	"<h3 style='display: block;'>";
				echo	$value['time'];
				echo	"<span>2012</span>";
				echo	"</h3>";
				echo	"<!--时间展示-->";
				echo	"<dl style='display: block;'>";
				echo	"<dt>".$value['content']."</dt>";
				echo	"</dl>";
				echo	"<!-- 主要内容 -->";
				echo	"</li>";
             }
             ?>
             <!-- 具体到某一列 -->
          </ul>
          <!-- 使用UL陈列 -->
       </div>
       <!-- 以上内容为区域中的一小块-->
   </div>
  <!-- 以上内容为区域中的一大块 -->
</div>
<!-- 以上内容为页面主要区域 -->
  
<script src="http://lib.sinaapp.com/js/jquery/1.4.1/jquery.min.js"></script> 
<script src="/js/main.js"></script>
</body>
</html>