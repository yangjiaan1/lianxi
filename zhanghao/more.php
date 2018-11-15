<?php
header('content-type:text/html;charset=utf8');
$pdo=new PDO('mysql:host=localhost','dbname=zhanghao','root','root');
$pdo = exec('set names utf8');
$name = $_GET['user'];
$name = $_GET['mima'];
$name = $_GET['mimakey'];
$name = $_GET['sex'];
$name = $_GET['phone'];
$name = $_GET['email'];
$name = $_GET['diqu'];
$name = $_GET['gsname'];
$name = $_GET['address'];
$name = $_GET['zhiwei'];
$name = $_GET['yuexin'];
$sql = "inseret into user valuee(NULL'$user','$mima','$mimakey','$sex','$phone','$email','$diqu','$gsnam','$address','$zhiwei','$yuexin')"
$data = $pdo->exec($sql);
//添加入库
if($data){
	echo"<script>alert('添加成功')localhost->show.php</script>"
}else{
	echo"<script>alert('添加失败')localhost->show.php</script>"
}
?>