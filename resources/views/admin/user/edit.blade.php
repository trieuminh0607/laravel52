<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="QuocTuan.Info" />
    <link rel="stylesheet" href="templates/css/style.css" />
	<title>Admin Area :: Trang chính</title>
</head>

<body>
<div id="layout">
    <div id="top">
        Admin Area :: Trang chính
    </div>
	<div id="menu">
		<table width="100%">
			<tr>
				<td>
					<a href="">Trang chính</a> | <a href="">Quản lý user</a> | <a href="">Quản lý danh mục</a> | <a href="">Quản lý tin</a>
				</td>
				<td align="right">
					Xin chào admin | <a href="">Logout</a>
				</td>
			</tr>
		</table>
	</div>
    <div id="main">
		<form action="" method="POST" style="width: 650px;">
			<fieldset>
				<legend>Thông Tin User</legend>
				<span class="form_label">Username:</span>
				<span class="form_item">
					<input type="text" name="txtUser" class="textbox" />
				</span><br />
				<span class="form_label">Password:</span>
				<span class="form_item">
					<input type="password" name="txtPass" class="textbox" />
				</span><br />
				<span class="form_label">Confirm password:</span>
				<span class="form_item">
					<input type="password" name="txtRepass" class="textbox" />
				</span><br />
				<span class="form_label">Level:</span>
				<span class="form_item">
					<input type="radio" name="rdoLevel" value="1" /> Admin 
					<input type="radio" name="rdoLevel" value="2" checked="checked" /> Member
				</span><br />
				<span class="form_label"></span>
				<span class="form_item">
					<input type="submit" name="btnUserEdit" value="Sửa User" class="button" />
				</span>
			</fieldset>
		</form>    
	</div>
    <div id="bottom">
        Copyright © 2016 by QuocTuan.Info & QHOnline.Edu.Vn 
    </div>
</div>
</body>
</html>