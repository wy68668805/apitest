<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
  <title>index</title>
  
</head>


<fieldset>
	<legend>注册</legend>
	<form action="http://localhost/aodshop/api/register" method="post">
		<label>用户名</label><br />
		<input type="text" name="username" /><br />
		<label>密码</label><br />
		<input type="text" name="password" /><br />
		<label>区域</label><br />
		<input type="text" name="district_id" /><br />
		<input type="submit" value="submit" />
	</form>
</fieldset>


<fieldset>
	<legend>登录</legend>
	<form action="http://localhost/aodshop/api/login" method="post">
		<label>用户名</label><br />
		<input type="text" name="username" /><br />
		<label>密码</label><br />
		<input type="text" name="password" /><br />
		<input type="submit" value="submit" />
	</form>
</fieldset>


