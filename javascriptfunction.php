<html>
<head>
<title>JavaScript Function</title>
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

    /* BUTTON */
    button {
      background-color: transparent;
      color: #00ffff;
      border: 2px solid #00ffff;
      padding: 10px 20px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      box-shadow: 0 0 10px #00ffff;
      transition: all 0.3s ease;
      display: block;
      margin: 20px auto;
    }

    button:hover {
      background-color: #00ffff;
      color: #000;
      box-shadow: 0 0 20px #00ffff;
    } 
  </style>
</head>
<body>
  <section>
    <h1>JavaScript Function</h1>
    <p>Functions are blocks of code that perform a particular task.</p>
    <button onclick="greet()">Click to Greet</button>
    <p id="greeting"></p>
    <script>
      function greet() {
        document.getElementById("greeting").innerText = "Hello! Welcome to JavaScript Functions.";
      }
    </script>
  </section>
</body>
</html>
