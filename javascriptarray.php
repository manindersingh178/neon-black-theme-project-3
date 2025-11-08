<html>
<head>
<title>JavaScript Array</title>
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
    <h1>JavaScript Array</h1>
    <p>Arrays are used to store multiple values in a single variable.</p>
    <p id="arrayOutput"></p>
    <script>
      var fruits = ["Apple", "Banana", "Mango", "Orange"];
      document.getElementById("arrayOutput").innerText = "Fruits: " + fruits.join(", ");
    </script>
  </section>
</body>
</html>
