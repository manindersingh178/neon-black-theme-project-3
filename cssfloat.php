<html>
<head>
<title>CSS Float</title>
    <style>
/* GLOBAL */
body {
  font-family: Arial, sans-serif;
  background-color: #000;    /* Black background */
  color: #39ff14;            /* Neon green text */
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
  overflow: auto;  /* clears float automatically */
}

/* HEADING */
h1 {
  text-align: center;
  color: #39ff14;
  text-shadow: 0 0 12px #39ff14, 0 0 20px #39ff14;
  margin-bottom: 20px;
}

/* FLOATING BOX */
.box {
  float: left;
  width: 200px;
  height: 120px;
  margin: 0 20px 10px 0;
  background-color: #000;
  border: 2px solid #ff00ff;   /* Neon magenta border */
  border-radius: 8px;
  color: #fff;
  text-align: center;
  line-height: 120px;
  font-weight: bold;
  text-shadow: 0 0 8px #ff00ff;
  box-shadow: 0 0 15px #ff00ff, inset 0 0 10px #ff00ff;
}

/* TEXT AREA */
.text p {
  color: #39ff14;
}

    </style>
</head>
<body>
    <section>
        <h1>CSS Float</h1>
        <div class="box">Floating box</div>
        <div class="text">
            <p>This text flows around the floated box. Float is often used for images or columns.</p>
        </div>
    </section>
</body>
</html>
