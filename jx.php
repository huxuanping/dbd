<?php

$id=$_SERVER["QUERY_STRING"];
$url="http://stream.slave.jxtvnet.tv:14311/playurl?accesstoken=R5D84BAC8U309F5104K7735B493I496D8875PBM3380BD1V1020DZ57EA5W15C622AF2FB1D3F1&playtype=live&protocol=http&playtoken=&auth=no&program";
$scr=$url.$id;




header('location:'.urldecode($scr));
?>