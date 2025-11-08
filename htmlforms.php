<html>
<head>
    <title>HTML Forms</title>
    <style>
  /* GLOBAL */
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #000;  /* Black background */
  color: #39ff14;          /* Neon green text */
  margin: 0;
  padding: 30px;
  line-height: 1.6;
}

/* SECTION */
section {
  background-color: #111; /* Dark container */
  padding:15px;
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
  margin-bottom: 20px;
  text-shadow: 0 0 6px #39ff14;
}

/* LABELS */
label {
  display: block;
  margin: 12px 0 6px;
  font-weight: bold;
  color: #39ff14;
  text-shadow: 0 0 6px #39ff14;
}

/* INPUT FIELDS */
input[type="text"],
input[type="email"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 2px solid #39ff14;
  border-radius: 6px;
  background: #000;
  color: #39ff14;
  font-size: 14px;
  outline: none;
  box-shadow: 0 0 8px #39ff14;
  transition: 0.3s ease;
}

input[type="text"]:focus,
input[type="email"]:focus {
  box-shadow: 0 0 15px #39ff14, 0 0 30px #39ff14;
  background: #111;
}

/* SUBMIT BUTTON */
input[type="submit"] {
  width: 100%;
  padding: 12px;
  border: 2px solid #39ff14;
  border-radius: 6px;
  background: #000;
  color: #39ff14;
  font-weight: bold;
  cursor: pointer;
  font-size: 16px;
  text-shadow: 0 0 6px #39ff14;
  box-shadow: 0 0 10px #39ff14;
  transition: all 0.3s ease;
}

input[type="submit"]:hover {
  background: #39ff14;
  color: #000;
  text-shadow: none;
  box-shadow: 0 0 20px #39ff14, 0 0 40px #39ff14;
}
 
    </style>
</head>
<body>
    <section>
        <h1>HTML Forms</h1>
        <p>HTML Forms are used to collect user input.</p>
        <form action="/submit" method="post" autocomplete="off">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <input type="submit" value="Submit">
        </form>
    </section>
</body>
</html>
