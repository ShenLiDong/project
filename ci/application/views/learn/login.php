<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta http-equiv="Pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-cache"> 
<meta http-equiv="Expires" content="0"> 
<title>后台登录</title> 
<link href="/resource/login/login.css" type="text/css" rel="stylesheet"> 
</head> 
<body> 

<div class="login">
    <div class="message">品牌名称-管理登录</div>
    <div id="darkbannerwrap"></div>
    <!-- <form></form> -->
    <form action="index.php/entrance/login" method="post" >
		<input name="action" value="login" type="hidden">
		<input  id="username"name="username" placeholder="用户名" required="" type="text">
		<hr class="hr15">
		<input  id="password" name="password" placeholder="密码" required="" type="password">
		<hr class="hr15">
		<input  id="login" value="登录" style="width:100%;" type="submit">
		<hr class="hr20">
		<!-- 帮助 <a onClick="alert('请联系管理员')">忘记密码</a> -->
	</form>

	
</div>

</body>
</html>

<script src="/resource/jq/jquery-3.2.1.min.js"></script>
<script src="/resource/jq/load.js"></script>
<script type="text/javascript">
	// $(function(){
	// 	$("#login").click(function(){
	// 		var username = $("#username").val();
	// 		var password = $("#password").val();
	// 		if( !(username&&password) ){
	// 			alert('用户名和密码不能为空');
	// 			return;
	// 		}

	// 		var res = load(123,{'username':username,'password':password},function(result){
	// 			console.log(result);
	// 		});
			

	// 	});
	// });

</script>