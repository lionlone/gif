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
            <form action="?page=sign" method="POST">
                <input type="text" class="input" name="email" placeholder="Địa chỉ Email" />
				<input type="text" class="input" name="username" placeholder="Tài khoản" />
                <input type="password" class="input" name="password" placeholder="Password" />
                <input class="input button" type="submit" value="Đăng kí" />
            </form>
			<div class="create-acc">
				<a href="?page=login">Đăng nhập</a>
			</div>
        </div>
    </div>
</body>
</html>