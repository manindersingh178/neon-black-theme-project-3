<html>
<head>
  <title>What is HTML?</title>
<style>
/* GLOBAL */
body {
  background-color: #000;       /* Black background */
  color: #39ff14;              /* Neon green text */
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  padding:10px;
}

/* HEADINGS */
h1, h2 {
  color: #39ff14;
  text-align: center;
  text-shadow: 0 0 10px #39ff14;
  margin-bottom: 20px;
}

/* PARAGRAPHS */
p {
  font-size: 16px;
  margin: 10px 0;
  text-shadow: 0 0 5px #39ff14;
}

/* BOLD/STRONG */
strong {
  color: #ff00ff; /* Neon pink for emphasis */
  text-shadow: 0 0 8px #ff00ff;
}

/* CODE BLOCKS */
pre {
  background-color: #111;
  color: #39ff14;
  border: 2px solid #39ff14;
  padding: 15px;
  border-radius: 8px;
  font-family: 'Courier New', monospace;
  box-shadow: 0 0 15px #39ff14;
  overflow-x: auto;
  text-shadow: 0 0 5px #39ff14;
}

/* LINKS (if you add later) */
a {
  color: #39ff14;
  text-decoration: none;
  text-shadow: 0 0 5px #39ff14;
  transition: 0.3s;
}

a:hover {
  background-color: #39ff14;
  color: #000;
  padding: 2px 6px;
  border-radius: 4px;
  box-shadow: 0 0 10px #39ff14;
}
</style>
</head>
<body>
  <h1>What is HTML?</h1>
  <p>HTML stands for <strong>HyperText Markup Language</strong>.</p>
  <p>It is the standard language used to create and structure web pages.</p>

  <h2>Example:</h2>
  <pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;&lt;title&gt;Page&lt;/title&gt;&lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, World!&lt;/h1&gt;
  &lt;/body&gt;
&lt;/html&gt;
  </pre>
</body>
</html>
