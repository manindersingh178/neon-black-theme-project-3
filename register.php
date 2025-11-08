<html>
<head>
<title>Registration Form</title>
<style>
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #000; /* black background */
  color: #39ff14; /* neon green text */
}

.form-container {
  background-color: #000; /* black form box */
//margin: 40px auto;
width:100%:
  border-radius: 12px;
  box-shadow: 0 0 20px #39ff14;
  border: 2px solid #39ff14;
}

h2 {
  text-align: center;
  color: #39ff14;
  margin-bottom: 20px;
  text-shadow: 0 0 8px #39ff14;
}

table {
  width: 100%;
  border-collapse: collapse;
  color: #39ff14;
}

td {
  padding: 10px 8px;
  vertical-align: top;
  font-weight: bold;
  text-shadow: 0 0 5px #39ff14;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="password"],
input[type="date"],
select {
  width: 100%;
  padding: 8px;
  border: 2px solid #39ff14;
  border-radius: 6px;
  background-color: #000;
  color: #39ff14;
  font-size: 14px;
  box-shadow: 0 0 8px #39ff14;
  outline: none;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="tel"]:focus,
input[type="password"]:focus,
input[type="date"]:focus,
select:focus {
  box-shadow: 0 0 15px #39ff14, 0 0 25px #39ff14;
}

input[type="radio"],
input[type="checkbox"] {
  accent-color: #39ff14; /* modern browsers */
  transform: scale(1.2);
  margin-right: 6px;
}

select {
  background-color: #000;
}

.submit-btn {
  background-color: #39ff14;
  color: #000;
  padding: 12px 20px;
  font-size: 14px;
  font-weight: bold;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  box-shadow: 0 0 10px #39ff14;
  transition: all 0.3s ease;
}

.submit-btn:hover {
  background-color: #000;
  color: #39ff14;
  border: 2px solid #39ff14;
  box-shadow: 0 0 20px #39ff14, 0 0 30px #39ff14;
}
}
</style>
</head>
<div class="form-container">
<h2>Registration Form</h2>
<form name="form1" method="post" action="reg-form.php">
<table border="1" cellpadding="5" cellspacing="0">
<tr>
<td>Enter Full Name:<br>
<input type="text" id="fullname" name="fullname" required/></td>
<td>Date of Birth:<br>
<input type="date" id="dob" name="dob" required/></td>
<td>Enter Email:<br>
<input type="email" id="email" name="email" required/></td>
</tr>
<tr>
<td>Enter Phone No.<br>
<input type="tel" id="phone" name="phone" required/></td>
<td>Enter Password:<br>
<input type="password" id="password" name="password" required/></td>
<td>Gender:<br>
<input type="radio" id="male" name="gender" value="male" required/>Male
<input type="radio" id="female" name="gender" value="female" required/>Female
</td>
</tr>
<tr>
<td>Enter Your Country:<br>
<select id="country" name="country" required>
<option value="">--Select--</option>
<option value="india">INDIA</option>
<option value="usa">USA</option>
<option value="uk">UK</option>
<option value="can">CANADA</option>
<option value="uae">UAE</option>
<option value="aus">AUSTRALIA</option>
</select>
</td>
<td colspan="2"><input type="checkbox" id="terms" name="terms" required/>
I agree to the Terms & Conditions</td>
</tr>
<tr>
<td colspan="3" style="text-align:center;"><input type="submit" value="SUBMIT" class="submit-btn"/></td>
</tr>
</table>
</form>
</div>
</html>