<html>
<head>
<title>Header File</title>
<head>
<style>
*
{
margin:0;
padding:0;
}
.header {
  
  height: 120px;
  display: flex;
  align-items: center;
  background-color: #000; /* pure black */
  justify-content: space-between;
  width: 100%;
  box-sizing: border-box;
  //box-shadow: 0 0 10px #39ff14; /* subtle neon glow */
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.image {
  display: flex;
  min-width: 200px;
  align-items: center;
}

.image img {
  height:90px;
  width:350px;
  display: block;
  filter: drop-shadow(0 0 5px #39ff14);
}

.links {
  display: flex;
}

.links ul {
  list-style: none;
  margin: 0;
  padding: 15px;
  display: flex;
}

.links li {
  margin-left: 25px;
}

.links li a {
  border: 2px solid #39ff14;
  text-decoration: none;
  color: #39ff14;
  font-weight: 700;
  padding: 10px 25px;
  border-radius: 6px;
  transition: all 0.3s ease;
  text-shadow: 0 0 5px #39ff14;
  box-shadow: 0 0 8px #39ff14;
}

.links li a:hover {
  color: #000;
  background-color: #39ff14;
  padding-left: 35px;
  text-shadow: none;
  box-shadow: 0 0 20px #39ff14, 0 0 30px #39ff14;
  border-color: #39ff14;
  text-decoration: none;
  transition: all 0.3s ease;
}

#displayTime {
  font-family:sans-serif;
  font-size: 24px;
  font-weight: bold;
  color: #39ff14;
  padding: 12px 24px;
  border: 2px solid #39ff14;
  border-radius: 8px;
  background-color: #000;
  box-shadow: 0 0 10px #39ff14, 0 0 20px #39ff14 inset;
  text-shadow: 0 0 6px #39ff14;
  margin-right: 30px;
  transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
}

#displayTime:hover {
  background-color: #111;
  color: #39ff14;
  box-shadow: 0 0 20px #39ff14, 0 0 40px #39ff14 inset;
}

</style>
<script>

function updateTime()
{
var now=new Date();
var hh=now.getHours();
var mm=now.getMinutes();
var ss=now.getSeconds();
var ampm="AM"
if(hh>=12) ampm="PM"
hh=hh%12;
if(hh===0) hh=12;

var time=hh+":"+mm+":"+ss+" "+ampm;

document.getElementById("displayTime").innerHTML=time;

setTimeout(updateTime,1000);
}
</script>
</head>
<body onload="updateTime()">
<div class="header">
  <div class="image"><img src="avapl.png" alt="avaptech" /></div>
<div id="displayTime"></div>  
<div class="links">
    <ul>
      <li><a href="home.php?page=1">Login</a></li>
      <li><a href="home.php?page=2">Register</a></li>
    </ul>
  </div>
</div>

</body>
</html>