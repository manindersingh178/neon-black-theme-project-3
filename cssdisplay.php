<html>
<head>
<title>CSS Display</title>
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
  color: #39ff14;
  text-shadow: 0 0 12px #39ff14, 0 0 20px #39ff14;
  margin-bottom: 20px;
}

/* INLINE ELEMENT */
.inline {
  display: inline;
  color: #00ffff;   /* Neon cyan */
  font-weight: bold;
  border-bottom: 2px dashed #00ffff;
  text-shadow: 0 0 8px #00ffff;
}

/* BLOCK ELEMENT */
.block {
  display: block;
  margin-top: 10px;
  padding: 10px;
  background: #222;
  border: 2px solid #ff00ff;   /* Neon magenta */
  border-radius: 6px;
  text-align: center;
  color: #ff00ff;
  font-weight: bold;
  text-shadow: 0 0 8px #ff00ff;
  box-shadow: 0 0 12px #ff00ff;
}

/* NONE ELEMENT */
.none {
  display: none; /* hidden */
}

    </style>
</head>
<body>
    <section>
        <h1>CSS Display</h1>
        <p><span class="inline">Inline Element</span> appears on the same line.</p>
        <div class="block">Block Element appears on a new line.</div>
        <p class="none">This paragraph is hidden using <code>display: none;</code></p>
    </section>
</body>
</html>
