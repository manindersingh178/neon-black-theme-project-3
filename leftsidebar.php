<html>
<head>
<title>LeftSideBar Page</title>
<style>
body, html {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  background-color: #000; /* Black background for whole page */
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

h2 {
  color: #39ff14; /* Neon green header */
  text-align: center;
  text-shadow: 0 0 8px #39ff14;
  //margin-top: 20px;
  margin-bottom: 20px;
}

.leftsidebar {
  background-color: #000; /* solid black */
  //border-right: 2px solid #39ff14;
  box-shadow: 0 0 15px #39ff14;
  width: 300px;
  height: 70vh;
  padding: 20px 15px;
  opacity: 1; /* remove opacity for crisp colors */
  overflow-y: auto;
//overflow-x:auto;
}

.leftsidebar ul {
  list-style: none;
  margin: 0 0 25px 0;
  padding: 0;
}

.leftsidebar li {
  margin-bottom: 12px;
  font-weight: 600;
  color: #39ff14;
  text-shadow: 0 0 4px #39ff14;
}

.leftsidebar ol {
  list-style: decimal;
  margin: 8px 0 0 20px;
  padding: 0;
}

.leftsidebar ol a {
  color: #39ff14;
  text-decoration: none;
  font-weight: 500;
  display: block;
  padding: 4px 0;
  transition: all 0.3s ease;
  text-shadow: 0 0 3px #39ff14;
}

.leftsidebar ol a:hover {
  color: #000;
  background-color: #39ff14;
  border-radius: 4px;
  padding-left: 10px;
  text-decoration: none;
  box-shadow: 0 0 10px #39ff14;
}

.leftsidebar a {
  color: #39ff14;
  text-decoration: none;
  transition: all 0.3s ease;
}

.leftsidebar a:hover {
  text-decoration: underline;
  color: #000;
  background-color: #39ff14;
  padding-left: 6px;
  border-radius: 3px;
  box-shadow: 0 0 8px #39ff14;
}

/* Neon Green Scrollbar */
.leftsidebar::-webkit-scrollbar {
  width: 10px; /* scrollbar width */
}

.leftsidebar::-webkit-scrollbar-track {
  background: #000; /* track color (black) */
  box-shadow: inset 0 0 5px #39ff14;
  border-radius: 8px;
}

.leftsidebar::-webkit-scrollbar-thumb {
  background: #39ff14; /* neon green handle */
  border-radius: 8px;
  box-shadow: 0 0 10px #39ff14;
}

.leftsidebar::-webkit-scrollbar-thumb:hover {
  background: #32cd12; /* brighter green on hover */
  box-shadow: 0 0 15px #39ff14, 0 0 30px #39ff14;
}


</style>
</head>
<body>
<div class="leftsidebar">
<h2>Tutorial</h2>
<ul>
<li><a href="home.php?page=11">HTML</a> 
<ol><a href="home.php?page=12">Html Introduction</a></ol>
<ol><a href="home.php?page=13">Html Attributes</a></ol>
<ol><a href="home.php?page=14">Html Tags</a></ol>
<ol><a href="home.php?page=15">Html Div</a></ol>
<ol><a href="home.php?page=16">Html Forms</a></ol>
</li>
</ul>
<br>
<ul>
<li><a href="home.php?page=17">CSS</a> 
<ol><a href="home.php?page=18">CSS Introduction</a></ol>
<ol><a href="home.php?page=19">CSS Colors</a></ol>
<ol><a href="home.php?page=20">CSS Border</a></ol>
<ol><a href="home.php?page=21">CSS Float</a></ol>
<ol><a href="home.php?page=22">CSS Display</a></ol>
</li>
</ul>
<br>
<ul>
<li><a href="home.php?page=23">JavaScript</a> 
<ol><a href="home.php?page=24">JavaScript Introduction</a></ol>
<ol><a href="home.php?page=25">JavaScript Operators</a></ol>
<ol><a href="home.php?page=26">JavaScript  Conditional Statements</a></ol>
<ol><a href="home.php?page=27">JavaScript Array</a></ol>
<ol><a href="home.php?page=28">JavaScript  Function</a></ol>
</li>
</ul>
<br>
<ul>
<li><a href="home.php?page=29">PHP</a> 
<ol><a href="home.php?page=30">PHP Introduction</a></ol>
<ol><a href="home.php?page=31">PHP Operators</a></ol>
<ol><a href="home.php?page=32">PHP  Conditional Statements</a></ol>
<ol><a href="home.php?page=33">PHP Array</a></ol>
<ol><a href="home.php?page=34">PHP  Function</a></ol>
</li>
</ul>
</div>
</body>
</html>