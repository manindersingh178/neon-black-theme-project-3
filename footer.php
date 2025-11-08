<html>
<head>
<title>Footer Page</title>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  margin: 0;
  padding: 0;
  background-color: #000; /* black background */
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.footer {
  background-color: #000; /* pure black */
  opacity: 1; /* no opacity for crisp neon */
  width: 100vw;
  clear: both;
  font-weight: bold;
  text-align: center;
  position: relative;
  //border-top: 2px solid #39ff14; /* neon green top border */
 //box-shadow: 0 -0 15px #39ff14;
  color: #39ff14;
}

.footer ul {
  list-style: none;
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  margin-bottom: 10px;
}

.footer ul li {
  flex: 1;
  text-align: center;
}

.footer ul li a {
  text-decoration: none;
  color: #39ff14; /* neon green links */
  font-weight: bold;
  display: inline-block;
  padding: 6px 10px;
  border: 2px solid #39ff14;
  border-radius: 6px;
  text-shadow: 0 0 6px #39ff14;
  box-shadow: 0 0 8px #39ff14;
  transition: all 0.3s ease;
}

.footer ul li a:hover {
  background-color: #39ff14; /* neon green background */
  color: #000; /* black text */
  text-decoration: none;
  box-shadow: 0 0 20px #39ff14, 0 0 30px #39ff14;
  border-color: #39ff14;
}

.marquee, .marquee a {
  color: #39ff14;
  text-shadow: 0 0 6px #39ff14;
  text-decoration: none;
  transition: all 0.3s ease;
}

.marquee a:hover {
  color: #000;
  background-color: #39ff14;
  padding: 2px 6px;
  border-radius: 4px;
  box-shadow: 0 0 15px #39ff14;
  text-decoration: none;
}

</style>
</head>
<body>
<div class="footer">
<ul>
<li><a href="home.php?page=7">Home</a></li>
<li><a href="home.php?page=8">About US</a></li>
<li><a href="home.php?page=9">Contact Us</a></li>
<li><a href="home.php?page=10">FAQ</a></li>
</ul>
<br>
<div class="marquee">
<marquee onmouseover="this.stop();" onmouseout="this.start();">&copy;All rights are reserved with <a href="https://avaptech.com/" target="_blank">Avaptech</a></marquee>
</div>
</div>
</body>
</html>