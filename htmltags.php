<html>
<head>
    <title>HTML Tags</title>
    <style>
     /* GLOBAL */
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #000;   /* Pure black */
  color: #39ff14;           /* Neon green text */
  margin: 0;
  padding: 30px;
  line-height: 1.6;
}

/* SECTION */
section {
  background-color: #111; /* Dark grey-black */
  padding: 20px;
  border-radius: 10px;
  border: 2px solid #39ff14;
  box-shadow: 0 0 20px #39ff14;
  margin: auto;
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
  margin-bottom: 15px;
  text-shadow: 0 0 6px #39ff14;
}

/* LIST */
ul {
  padding-left: 20px;
}

ul li {
  margin-bottom: 10px;
  color: #39ff14;
  text-shadow: 0 0 5px #39ff14;
}

/* INLINE CODE */
li code {
  background: #000;
  padding: 2px 6px;
  border-radius: 4px;
  font-family: 'Courier New', monospace;
  font-size: 14px;
  color: #ff00ff; /* Neon magenta for inline tags */
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
  color: #00ffff; /* Cyan for block code */
  text-shadow: 0 0 8px #00ffff;
  box-shadow: 0 0 15px #39ff14;
  white-space: pre-line;
}

    </style>
</head>
<body>
    <section>
        <h1>HTML Tags</h1>
        <p>HTML tags define the structure and content of web pages.</p>
        <ul>
            <li><code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code> – Headings</li>
            <li><code>&lt;p&gt;</code> – Paragraph</li>
            <li><code>&lt;a&gt;</code> – Anchor/Link</li>
            <li><code>&lt;img&gt;</code> – Image</li>
            <li><code>&lt;br&gt;</code> – Line Break</li>
        </ul>
        <code>
            &lt;h2&gt;Welcome!&lt;/h2&gt;<br>
            &lt;p&gt;This is a paragraph.&lt;/p&gt;<br>
            &lt;a href="https://example.com"&gt;Visit Example&lt;/a&gt;
        </code>
    </section>
</body>
</html>
