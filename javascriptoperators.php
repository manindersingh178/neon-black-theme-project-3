<html>
<head>
<title>JavaScript Operators</title>
  <style>
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

    /* Inline code styling */
    code {
      color: #ffff00; /* Bright yellow for code snippets */
      text-shadow: 0 0 5px #ffff00;
    }
  </style>
</head>
<body>
  <section>
    <h1>JavaScript Operators</h1>
    <p>Operators are used to perform operations on variables and values.</p>
    <ul>
      <li>Arithmetic: <code>+ - * / %</code></li>
      <li>Assignment: <code>= += -=</code></li>
      <li>Comparison: <code>== === != &lt; &gt; &gt;= &lt;=</code></li>
      <li>Logical: <code>&& || !</code></li>
    </ul>
    <p id="output"></p>
    <script>
      var x = 10;
      var y = 5;
      document.getElementById("output").innerText = "x + y = " + (x + y);
    </script>
  </section>
</body>
</html>
