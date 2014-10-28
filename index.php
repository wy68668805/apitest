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
		修改用户密码
	</legend>
	<form action="http://localhost/aodshop/api/editUserPassword" method="post" enctype="multipart/form-data">
		<label>用户名</label>
		<br />
		<input type="text" value="4" name="userid" />
		<br />
		<label>key</label>
		<br />
		<input type="text" value="eeccb4ba093eed7e281f729a2b8af30cbb8e694f" name="appkey" />
		<br />
		<label>旧密码</label>
		<br />
		<input type="password" name="oldpassword" />
		<br />
		<label>新密码</label>
		<br />
		<input type="password" name="newpassword" />
		<br />
		<label>重复密码</label>
		<br />
		<input type="password" name="repassword" />
		<br />
		<input type="submit" value="submit" />
	</form>
</fieldset>

<fieldset>
	<legend>
		修改用户信息
	</legend>
	<form action="http://localhost/aodshop/api/editUserInfo" method="post" enctype="multipart/form-data">
		<label>用户名</label>
		<br />
		<input type="text" value="4" name="userid" />
		<br />
		<label>key</label>
		<br />
		<input type="text" value="eeccb4ba093eed7e281f729a2b8af30cbb8e694f" name="appkey" />
		<br />
		<label>区域id</label>
		<br />
		<input type="text" value="1" name="district_id" />
		<br />
		<label>真实姓名</label>
		<br />
		<input type="text" value="Leon" name="realname" />
		<br />
		<label>email</label>
		<br />
		<input type="text" value="wy8817399@vip.qq.com" name="email" />
		<br />
		<label>手机</label>
		<br />
		<input type="text" value="13382188373" name="phone" />
		<br />
		<label>公司名称</label>
		<br />
		<input type="text" value="中华公司" name="company_name" />
		<br />
		<label>公司地址</label>
		<br />
		<input type="text" value="中国" name="company_addr" />
		<br />
		<label>用户分类id</label>
		<br />
		<input type="text" value="1" name="user_cat_id" />
		<br />
		<input type="submit" value="submit" />
	</form>
</fieldset>

<fieldset>
	<legend>
		修改用户头像
	</legend>
	<form action="http://localhost/aodshop/api/uploadAvatar" method="post" enctype="multipart/form-data">
		<label>用户名</label>
		<br />
		<input type="text" value="4" name="userid" />
		<br />
		<label>key</label>
		<br />
		<input type="text" value="eeccb4ba093eed7e281f729a2b8af30cbb8e694f" name="appkey" />
		<br />
		<label>上传图片</label>
		<br />
		<input type="file" name="avatar" />
		<br />
		<input type="submit" value="submit" />
	</form>
</fieldset>

<fieldset>
	<legend>
		获取用户信息
	</legend>
	<form action="http://localhost/aodshop/api/getUserInfo" method="post">
		<label>用户名</label>
		<br />
		<input type="text" value="4" name="userid" />
		<br />
		<label>key</label>
		<br />
		<input type="text" value="eeccb4ba093eed7e281f729a2b8af30cbb8e694f" name="appkey" />
		<br />
		<input type="submit" value="submit" />
	</form>
</fieldset>

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