<?

if(!isset($_SESSION["a"]))
	exit("  未验证");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../assets/styles/core.css" rel="stylesheet" type="text/css">
<title>难度 2/5。</title>
</head>

<body>

<p>恭喜你成功进入后台。 </p>
<p>&nbsp;</p>
<form method="post" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="file" />
  </p>
  <p>
    <input type="submit" value="上传"/>
  </p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&copy; xuld 友情制作</p>
</body>
</html>