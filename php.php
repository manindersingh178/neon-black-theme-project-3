<html>
<head>
    <title>What is PHP?</title>
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

        /* INLINE CODE (Optional) */
        code {
            color: #ff00ff;
            text-shadow: 0 0 5px #ff00ff;
        }   
    </style>
</head>
<body>
<section>
    <h1>What is PHP?</h1>
    <p>PHP stands for <strong>Hypertext Preprocessor</strong>. It is a server-side scripting language used for web development.</p>
    <p>PHP code is executed on the server, and the result is sent to the browser as plain HTML.</p>
    <p><strong>Example:</strong></p>
    <p>
        <?php
            echo "Hello from PHP!";
        ?>
    </p>
</section>
</body>
</html>
