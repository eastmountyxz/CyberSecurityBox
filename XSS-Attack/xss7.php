<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FOX-XSS闯关-第七关</title>
</head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body,td,th {
	color: #F00;
}
</style>

<hr>
<h1>FOX-XSS闯关-第七关</h1><hr>
<h3>提示：以get传递name参数名，如xxs7.php?name=fox<br>
任务要求：<br>
绕过过滤,成功执行js脚本即成功<br>
靶场说明：通过xss绕过技术执行恶意脚本<br>
<a href="https://wpa.qq.com/msgrd?v=1&uin=79335929&site=houdao.com&menu=yes">联系作者</a>
</strong>
Hello
<script>
	var $a= '<?php echo htmlentities($_GET["name"]); ?>';
</script>
</body>
</html>