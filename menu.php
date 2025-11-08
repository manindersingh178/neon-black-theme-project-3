<html>
<head>
<title>Menu Page</title>
<style>
body {
  margin: 0;
  padding: 0;
  background-color: #000; /* Black background */
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.menubar {
  background-color: #000; /* Pure black */
  height: 80px;
  //border-bottom: 2px solid #39ff14; /* Neon green bottom border */
  //box-shadow: 0 0 10px #39ff14; /* Subtle neon glow */
}

.menubar ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
}

.menubar ul li {
  flex: 1;
  text-align: center;
}

.menubar ul li a {
  text-decoration: none;
  color: #39ff14; /* Neon green text */
  font-weight: bold;
  margin-top: 10px;
  display: inline-block;
  padding: 8px 20px;
  border: 2px solid #39ff14;
  border-radius: 6px;
  text-shadow: 0 0 6px #39ff14;
  box-shadow: 0 0 8px #39ff14;
  transition: all 0.3s ease;
}

.menubar ul li a:hover {
  background-color: #39ff14; /* Neon green background on hover */
  color: #000; /* Black text on hover */
  padding-left: 30px;
  box-shadow: 0 0 20px #39ff14, 0 0 30px #39ff14; /* Stronger glow */
  border-color: #39ff14;
  text-decoration: none;
}

</style>
</head>
<body>
<div class="menubar">
<ul>
<li><a href="home.php?page=3">Home</a></li>
<li><a href="home.php?page=4">About US</a></li>
<li><a href="home.php?page=5">Contact Us</a></li>
<li><a href="home.php?page=6">FAQ</a></li>
</ul>
</div>
</body>
</html>