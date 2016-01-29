<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Login GIPHY</title>
  <link rel="stylesheet" type="text/css" href="css/log-sign.css">
</head>
<body>
    <div class="wrapper">
        <div class="login-content">
            <h1>GIPHY</h1>
            <h2 style="color: red;"><?=$e;?></h2>
            <form action="?page=upload" method="POST" enctype="multipart/form-data">
                <input type="file" class="input inpfile" name="fileUpload" value="1" />
                <input type="text" class="input" name="imgTitle" placeholder="Nhập tiêu đề ảnh" />
                <input class="input button" type="submit" value="Upload" />
            </form>
        </div>
    </div>
</body>
</html>