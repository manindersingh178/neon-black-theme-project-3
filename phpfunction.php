<html>
<head>
    <title>PHP Function</title>
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

        /* PARAGRAPHS */
        p {
            color: #39ff14;
            text-shadow: 0 0 6px #39ff14;
            font-weight: bold;
}

        /* STRONG TEXT */
        strong {
            color: #ffff00; /* Bright yellow */
            text-shadow: 0 0 6px #ffff00;
        }

        /* INLINE CODE */
        code {
            color: #ff00ff;
            text-shadow: 0 0 5px #ff00ff;
        }
    </style>
</head>
<body>
<section>
    <h1>PHP Function</h1>
    <p>Functions are reusable blocks of code that perform specific tasks.</p>
    <p>
        <?php
            function greet($name) 
	{
                return "Hello, $name!";
              }

            echo greet("Alice");
        ?>
    </p>
</section>
</body>
</html>
