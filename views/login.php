<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login GIPHY</title>
  <link rel="stylesheet" type="text/css" href="css/log-sign.css">
</head>
<body>
    <div class="wrapper">
        <div class="login-content">
            <h1>GIPHY</h1>
            <form action="?page=login" method="POST">
                <input type="text" class="input" name="account" placeholder="Email hoặc tài khoản" />
                <input type="password" class="input" name="pass" placeholder="Password" />
                <input class="input button" type="submit" value="Đăng nhập" />
            </form>
			<div class="create-acc">
				<a href="?page=sign">Tạo tài khoản mới</a>
			</div>
        </div>
    </div>
</body>
</html>