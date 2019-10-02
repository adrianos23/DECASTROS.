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
Username<input type="text" name="userid"/><br/>
Password<input type="password" name="pswrd"/><br/><br/>
<input type="button" onclick="check(this.form)" value="Login"/>
</form>
<script language="javascript">
function check(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
 if(form.userid.value == "adrianos" && form.pswrd.value == "pass")
  {
    window.open('game.php')/*opens the target page while Id & password matches*/
  }
 else
 {
   alert("Error Password or Username")
  }
}
</script>
</center>
</body>
</html>
