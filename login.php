<html>
<head>
<title>Login Page</title>
<style>
 body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #000; /* black background */
  color: #39ff14; /* neon green text */
}

h2 {
  color: #39ff14;
  text-shadow: 0 0 8px #39ff14;
}

.table {
  margin-top: 30px;
}

table {
  background-color: #000; /* black table */
  border: 2px solid #39ff14; /* neon border */
  border-radius: 10px;
  box-shadow: 0 0 20px #39ff14;
  padding: 20px;
  color: #39ff14;
}

table td {
  padding: 12px;
  font-weight: bold;
  text-shadow: 0 0 5px #39ff14;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 8px;
  background-color: #000;
  border: 2px solid #39ff14;
  border-radius: 6px;
  color: #39ff14;
  font-size: 14px;
  box-shadow: 0 0 8px #39ff14;
  outline: none;
}

input[type="text"]:focus,
input[type="password"]:focus {
  box-shadow: 0 0 15px #39ff14, 0 0 25px #39ff14;
}

input[type="button"] {
  width: 100%;
  padding: 10px;
  background-color: #39ff14;
  color: #000;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  box-shadow: 0 0 10px #39ff14;
  transition: all 0.3s ease;
}

input[type="button"]:hover {
  background-color: #000;
  color: #39ff14;
  border: 2px solid #39ff14;
  box-shadow: 0 0 20px #39ff14, 0 0 30px #39ff14;
}

</style>

<script>

function isAlphabets(str)
{
var alphabets,i;
alphabets="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

for(i=0;i<str.length;i++)
{
if(alphabets.indexOf(str[i])===-1)
{
return false;
}
}
return true;
}

function Login()
{
var enteredName=document.getElementById("txtname").value;
var enteredPass=document.getElementById("txtpassword").value;

var nameError=document.getElementById("nameError");
var passError=document.getElementById("passError");

nameError.innerHTML="";
passError.innerHTML="";

if(enteredName==="")
{
nameError.innerHTML="Username is required";
}

if(!isAlphabets(enteredName))
{
document.getElementById("nameError").innerHTML="Only Alphabets are Allowed.";
return;
}

if(enteredPass==="")
{
passError.innerHTML="Password is required";
}

if(enteredName===""||enteredPass==="")
{
return;
}

var usernames=["admin","abc","xyz","demo","guest"];
var passwords=["admin123","abc123","xyz123","demo123","guest123"];

var i;
for(i=0;i<usernames.length;i++)
{
if(enteredName===usernames[i]&&enteredPass===passwords[i])
{
window.location.href="mydashboard.php";
return;
}
}
alert("Username or Password are incorrect");
}

</script>

</head>
<body>
<center><h2>Login</h2></center>
<div class="table">
<table style="width:100%;" align="center" border="1" cellpadding="5" cellspacing="0">
<tr>
<td>User Name :</td>
<td><input id="txtname" autocomplete="off" type="text" required/><span id="nameError" style="color:white; font-size:15px;"></span></td>
</tr>
<tr>
<td>Password :</td>
<td><input id="txtpassword" autocomplete="off" type="password" required/><span id="passError" style="color:white; font-size:15px;"></span></td>
</tr>
<tr>
<td colspan="2"><input type="button" value="LOGIN" onclick="Login()"/></td>
</tr>
</table>
</div>
</body>
</html>