<html>
<head>
<title>CSS Border</title>
    <style>
/* GLOBAL */
body {
  font-family: Arial, sans-serif;
  background-color: #000;   /* Black background */
  color: #39ff14;           /* Neon green default text */
  margin: 0;
  padding: 30px;
 
}

/* SECTION */
section {
  background-color: #111;
  padding: 25px;
  border-radius: 12px;
  border: 2px solid #39ff14;
  box-shadow: 0 0 20px #39ff14;
margin: auto;
}

/* HEADING */
h1 {
  text-align: center;
  color: #39ff14;
  text-shadow: 0 0 12px #39ff14, 0 0 20px #39ff14;
  margin-bottom: 20px;
}

/* CODE BOX EXAMPLE */
.box {
  margin-top: 15px;
  padding: 15px;
  border: 2px solid #ff00ff;   /* Neon magenta border */
  border-radius: 8px;
  background-color: #000;
  color: #fff;
  text-shadow: 0 0 6px #ff00ff;
  box-shadow: 0 0 15px #ff00ff, inset 0 0 10px #ff00ff;
}

    </style>
</head>
<body>
    <section>
        <h1>CSS Border</h1>
        <p>Borders can be styled with width, style, and color.</p>
        <div class="box">This div has a 2px solid border.</div>
    </section>
</body>
</html>
