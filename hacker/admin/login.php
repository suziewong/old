<?


$username = trim($_POST["username"]);


$spassword = $_POST["password"];




require("../inc.php");
require("../inc/Mysql.inc");

$mysql = new Mysql($host, $user, $password, $database, false);


if($username == "\'or\'=\'or\'" || $username == "\'or\' = \'or\'" || $spassword  == "\'or\'=\'or\'" || $spassword  == "\'or\' = \'or\'"){
	hint("万能密钥对 php 来说一般不成功， 因为 php 默认对提交的文字转义。");	
} else if(strpos($username, "\'") !== FALSE) {
	hint(" php 会对' 转义");	
}

$query = $mysql->query("select * from users where username='$username' and password='$spassword' limit 1");

echo "2";
$result =  $mysql->fetch_array($query);


if(!$result){
	echo "用户名或密码错误";
	echo "<script>setTimeout(function(){ location.href='index.php'; }, 800)</script>";	
} else {
	$_SESSION["a"] =   $username;
	echo "登陆成功";
	echo "<script>setTimeout(function(){ location.href='main.php'; }, 2000)</script>";
}