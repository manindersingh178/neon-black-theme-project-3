<html>
<head>
<title>CSS Introduction</title>
    <style>
/* GLOBAL */
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #000;   /* Black background */
  color: #39ff14;           /* Neon green text */
  margin: 0;
  padding: 30px;
  line-height: 1.6;
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

/* PARAGRAPH */
p {
  margin-bottom: 15px;
  text-shadow: 0 0 6px #39ff14;
}

/* UL LIST */
ul {
  list-style-type: square;
  padding-left: 25px;
}
li {
  margin-bottom: 8px;
  color: #0ff; /* Neon cyan for variety */
  text-shadow: 0 0 8px #0ff, 0 0 15px #0ff;
}

/* STYLED TEXT */
.styled-text {
  color: #ff00ff; /* Neon magenta */
  font-weight: bold;
  padding: 10px;
  border-radius: 6px;
  border: 1px solid #ff00ff;
  background-color: #000;
  box-shadow: 0 0 12px #ff00ff;
  text-shadow: 0 0 8px #ff00ff, 0 0 15px #ff00ff;
}

    </style>
</head>
<body>
    <section>
        <h1>CSS Introduction</h1>
        <p>CSS can be applied in 3 ways:</p>
        <ul>
            <li>Inline</li>
            <li>Internal</li>
            <li>External</li>
        </ul>
        <p class="styled-text">This text is styled using internal CSS!</p>
    </section>
</body>
</html>
