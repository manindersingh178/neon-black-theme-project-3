<html>
<head>
<title>CSS Colors</title>
    <style>
/* GLOBAL */
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #000;   /* Black background */
  color: #39ff14;           /* Neon green as default text */
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

/* CODE BLOCK */
code {
  background: #000;
  color: #ff00ff; /* Neon magenta inside code */
  padding: 2px 6px;
  border-radius: 4px;
  text-shadow: 0 0 6px #ff00ff;
}

/* EXAMPLES */
.red {
  color: red;
  text-shadow: 0 0 8px red, 0 0 15px red; /* Neon red effect */
}

.blue-bg {
  background-color: blue;
  color: #fff; /* White text for readability */
  padding: 8px;
  border-radius: 6px;
  box-shadow: 0 0 12px blue, 0 0 20px blue;
}

    </style>
</head>
<body>
    <section>
        <h1>CSS Colors</h1>
        <p class="red">This text is red using <code>color: red;</code></p>
        <p class="blue-bg">This has a blue background using <code>background-color: blue;</code></p>
    </section>
</body>
</html>
