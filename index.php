<!doctype html>
<html>
<head>
<title>Login page</title>
</head>
<body>
<center>
<h1 style="font-family:Comic Sans Ms;text-align="center";font-size:20pt; color:#00FF00;>
Login Page
</h1>
<form name="login"><br/>
Username: <input type="text" name="userid"/><br/>
Password: <input type="password" name="pswrd"/><br/><br/>
<input type="button" method="post" onclick="check(this.form)" value="Login"/>
</form>
<script language="javascript">
function check(form)
{
 if(form.userid.value == "adrianos" && form.pswrd.value == "pass")
  {
    location="game.php";
  }
 else
 {
   alert("Incorrect Password, please try again!")
  }
}
</script>
</center>
</body>
</html>
