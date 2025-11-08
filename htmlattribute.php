<html>
<head>
    <title>HTML Attributes</title>
    <style>
    /* GLOBAL */
body {
  background-color: #000;       /* Black background */
  color: #39ff14;              /* Neon green text */
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 20px;
  line-height: 1.6;
}

/* SECTION CONTAINER */
section {
 
  margin: auto;
  padding: 20px;
  border: 2px solid #39ff14;
  border-radius: 10px;
  box-shadow: 0 0 20px #39ff14;
  background-color: #111; /* dark inner background */
}

/* HEADINGS */
h1 {
  text-align: center;
  color: #39ff14;
  text-shadow: 0 0 15px #39ff14, 0 0 25px #39ff14;
  margin-bottom: 20px;
}

/* PARAGRAPH */
p {
  font-size: 16px;
  margin-bottom: 15px;
  text-shadow: 0 0 6px #39ff14;
}

/* INLINE CODE */
p code {
  background: #111;
  padding: 2px 6px;
  border-radius: 4px;
  color: #ff00ff; /* neon magenta for inline attributes */
  text-shadow: 0 0 6px #ff00ff;
  font-family: 'Courier New', monospace;
  font-size: 14px;
}

/* BLOCK CODE */
section > code {
  display: block;
  background: #000;
  padding: 5px;
  border: 2px solid #39ff14;
  border-radius: 8px;
  font-family: 'Courier New', monospace;
  font-size: 14px;
  white-space: pre-line;
  
  box-shadow: 0 0 15px #39ff14;
  color: #00ffff; /* cyan code text */
  text-shadow: 0 0 8px #00ffff;
}
 
    </style>
</head>
<body>
    <section>
        <h1>HTML Attributes</h1>
        <p>Attributes provide additional information about HTML elements.</p>
        <code>
            &lt;img src="image.jpg" alt="A beautiful image" width="300"&gt;
        </code>
        <p>Here, <code>src</code>, <code>alt</code>, and <code>width</code> are attributes of the <code>&lt;img&gt;</code> tag.</p>
    </section>
</body>
</html>
