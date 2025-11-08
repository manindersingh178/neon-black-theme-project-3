<html>
<head>
<title>JavaScript Introduction</title>
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
}

/* HEADING */
h1 {
  text-align: center;
  color: #00ffff; /* Neon cyan */
  text-shadow: 0 0 12px #00ffff, 0 0 20px #00ffff;
  margin-bottom: 20px;
}

/* LIST */
ul {
  list-style-type: square;
  padding-left: 20px;
}

li {
  color: #ff00ff; /* Neon magenta bullets */
  text-shadow: 0 0 6px #ff00ff;
  margin-bottom: 8px;
}

/* SCRIPT OUTPUT */
p {
  color: #39ff14;
  text-shadow: 0 0 6px #39ff14;
  font-weight: bold;
}
 
  </style>
</head>
<body>
  <section>
    <h1>JavaScript Introduction</h1>
    <p>JavaScript can be used in three ways:</p>
    <ul>
      <li>Inline</li>
      <li>Internal (inside &lt;script&gt; tags)</li>
      <li>External (linked JS files)</li>
    </ul>
    <script>
      document.write("<p>This is written using internal JavaScript!</p>");
    </script>
  </section>
</body>
</html>
