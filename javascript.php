<html>
<head>
<title>What is JavaScript</title>
  <style>
  /* GLOBAL */
body {
  font-family: Arial, sans-serif;
  background-color: #000;     /* Black background */
  color: #39ff14;             /* Neon green text */
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

/* BUTTON */
button {
  background: #000;
  color: #ff00ff;  /* Neon magenta */
  border: 2px solid #ff00ff;
  padding: 12px 25px;
  font-size: 16px;
  font-weight: bold;
  border-radius: 6px;
  cursor: pointer;
  text-shadow: 0 0 8px #ff00ff;
  box-shadow: 0 0 15px #ff00ff;
  transition: all 0.3s ease-in-out;
}

button:hover {
  background: #ff00ff;
  color: #000;
  text-shadow: none;
  box-shadow: 0 0 25px #ff00ff, 0 0 40px #ff00ff;
}
  
  </style>
</head>
<body>
  <section>
    <h1>What is JavaScript?</h1>
    <p>JavaScript is a programming language that enables interactive behavior on websites. It can change HTML content, validate forms, handle events, and more.</p>
    <p><strong>Example:</strong></p>
    <button onclick="alert('Hello from JavaScript!')">Click Me</button>
  </section>
</body>
</html>
