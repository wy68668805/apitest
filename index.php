<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<title>index</title>

</head>

<?php
	$array = array('conditions' => array('id' => 1,'username' => 'wy'), 'fields' => array('id','name'));

	$conditions = json_encode($array);

	pr($conditions);
?>

<fieldset>
	<legend>
		注册
	</legend>
	<form action="http://localhost/aodshop/api/register" method="post">
		<label>用户名</label>
		<br />
		<input type="text" name="username" />
		<br />
		<label>密码</label>
		<br />
		<input type="text" name="password" />
		<br />
		<label>区域</label>
		<br />
		<input type="text" name="district_id" />
		<br />
		<input type="submit" value="submit" />
	</form>
</fieldset>

<fieldset>
	<legend>
		登录
	</legend>
	<form action="http://localhost/aodshop/api/login" method="post">
		<label>用户名</label>
		<br />
		<input type="text" name="username" />
		<br />
		<label>密码</label>
		<br />
		<input type="text" name="password" />
		<br />
		<input type="submit" value="submit" />
	</form>
</fieldset>

<fieldset>
	<legend>
		获取特定数据
	</legend>
	<form action="http://localhost/aodshop/api/getSpecificData" method="post">
		<label>用户id</label>
		<br />
		<input type="text" name="userid" />
		<br />
		<label>用户key</label>
		<br />
		<input type="text" name="appkey" />
		<br />
		<label>模型名</label>
		<br />
		<input type="text" name="model" />
		<br />
		<label>查询等级</label>
		<br />
		<input type="text" name="recursive" />
		<br />
		<label>查询条件</label>
		<br />
		<input type="hidden" value="<?php echo htmlspecialchars($conditions); ?>" name="conditions" />
		<br />
		<input type="submit" value="submit" />
	</form>
</fieldset>

<?php
function pr($var) {
		echo '<pre>';
		print_r($var);
		echo '</pre>';
}
?>