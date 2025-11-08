<html>
<head>
<title>What is CSS</title>
    <style>
  /* GLOBAL */
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #000;   /* Black background */
  color: #39ff14;           /* Neon green text */
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

/* PARAGRAPH */
p {
  margin-bottom: 15px;
  text-shadow: 0 0 6px #39ff14;
}

/* STRONG */
strong {
  color: #0ff; /* Neon cyan for emphasis */
  text-shadow: 0 0 8px #0ff, 0 0 15px #0ff;
}

/* CODE BLOCK */
code {
  display: block;
  background-color: #000;
  color: #ff00ff; /* Neon magenta for code text */
  padding: 15px;
  border-radius: 8px;
  border: 1px solid #39ff14;
  box-shadow: 0 0 12px #39ff14;
  font-family: Consolas, monospace;
  white-space: pre-wrap;
  text-shadow: 0 0 8px #ff00ff;
}

    </style>
</head>
<body>
    <section>
        <h1>What is CSS?</h1>
        <p>CSS (Cascading Style Sheets) is used to style and layout web pages. It allows you to control colors, fonts, spacing, positioning, and much more.</p>
        <p><strong>Example:</strong></p>
        <code>
            &lt;style&gt;<br>
            &nbsp;&nbsp;p { color: blue; font-size: 18px; }<br>
            &lt;/style&gt;<br>
            &lt;p&gt;Styled paragraph&lt;/p&gt;
        </code>
    </section>
</body>
</html>
