<html>
<head>
<title>JavaScript Conditional Statements</title>
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
    <h1>JavaScript Conditional Statements</h1>
    <p>Conditional statements control the flow of your code based on conditions.</p>
    <ul>
      <li><code>if</code></li>
      <li><code>else</code></li>
      <li><code>else if</code></li>
      <li><code>switch</code></li>
    </ul>
    <p id="result"></p>
    <script>
      var age =19;
      if (age >= 18) {
        document.getElementById("result").innerText = "You are an adult.";
      } else {
        document.getElementById("result").innerText = "You are a minor.";
      }
    </script>
  </section>
</body>
</html>
