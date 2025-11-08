<html>
<head>
    <title>HTML Div</title>
    <style>
/* GLOBAL */
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #000;   /* Black background */
  color: #39ff14;           /* Neon green */
  margin: 0;
  padding: 30px;
  line-height: 1.6;
}

/* SECTION */
section {
  background-color: #111; /* Dark panel */
  padding: 20px;
  border-radius: 10px;
  border: 2px solid #39ff14;
  box-shadow: 0 0 20px #39ff14;
  margin: auto;
}

/* HEADING */
h1 {
  text-align: center;
  color: #39ff14;
  text-shadow: 0 0 15px #39ff14, 0 0 25px #39ff14;
  margin-bottom: 20px;
}

/* PARAGRAPH */
p {
  margin-bottom: 15px;
  text-shadow: 0 0 6px #39ff14;
}

/* INLINE CODE */
p code {
  background: #000;
  padding: 2px 6px;
  border-radius: 4px;
  font-family: 'Courier New', monospace;
  color: #ff00ff; /* Neon magenta */
  text-shadow: 0 0 8px #ff00ff;
}

/* BLOCK CODE */
section > code {
  display: block;
  background: #000;
  padding:5px;
  border-radius: 8px;
  border: 2px solid #39ff14;
  margin-top: 15px;
  font-family: 'Courier New', monospace;
  font-size: 14px;
  color: #00ffff; /* Neon cyan */
  text-shadow: 0 0 8px #00ffff;
  box-shadow: 0 0 15px #39ff14;
  white-space: pre-line;
}
      
    </style>
</head>
<body>
    <section>
        <h1>HTML Div</h1>
        <p>The <code>&lt;div&gt;</code> tag is used to group elements together for styling or layout.</p>
        <code>
            &lt;div style="background-color:#d9edf7; padding:10px;"&gt;<br>
            &nbsp;&nbsp;&lt;h3&gt;Inside a Div&lt;/h3&gt;<br>
            &nbsp;&nbsp;&lt;p&gt;This content is grouped together.&lt;/p&gt;<br>
            &lt;/div&gt;
        </code>
    </section>
</body>
</html>
