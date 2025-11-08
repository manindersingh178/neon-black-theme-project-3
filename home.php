<html>
<head>
  <title>Website</title>
  <style>
 * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      overflow-x: hidden;
      background-color: #000; /* black background */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #39ff14; /* default neon green text */
    }

    /* CONTAINER */
    .container {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* HEADER */
    .header {
      width: 100%;
      flex-shrink: 0;
      //box-sizing: border-box;
    }

    /* MENUBAR */
    .menubar {
      background: #000;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 50px;
      //border-bottom: 2px solid #39ff14;
      //box-shadow: 0 0 10px #39ff14;
    }

    .menubar ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    .menubar li {
      margin: 0;
      padding: 0;
    }

    .menubar a {
      display: block;
      padding: 14px 20px;
      color: #39ff14;
      text-decoration: none;
      font-weight: bold;
      text-shadow: 0 0 5px #39ff14;
      transition: all 0.3s ease;
    }

    .menubar a:hover {
      background: #39ff14;
      color: #000;
      box-shadow: 0 0 20px #39ff14;
    }

    /* MAIN AREA */
    .main {
      display: flex;
      flex: 1;
    }

    /* LEFT SIDEBAR */
    .leftsidebar {
      width: 300px;
      background: #000;
      color: #39ff14;
      padding: 20px;
      flex-shrink: 0;
      //border-right: 2px solid #39ff14;
      //box-shadow: 2px 0 10px #39ff14;
    }

    /* CONTENT */
    .content {
      flex: 1;
      position: relative;
      background-color: #000;
      padding: 40px 20px;
    }

    .overlay {
      background: rgba(0, 0, 0, 0.85);
      padding: 20px;
      border-radius: 10px;
      color: #39ff14;
      text-shadow: 0 0 5px #39ff14;
      box-shadow: 0 0 20px #39ff14;
      width: auto;
      max-width: 90%;
      max-height: 100vh;
      overflow-y: auto;
      margin: auto;
    }

    .overlay a {
      color: #39ff14;
      text-decoration: none;
    }

    .overlay a:hover {
      color: #000;
      background-color: #39ff14;
      padding: 2px 5px;
      border-radius: 4px;
      box-shadow: 0 0 10px #39ff14;
    }

    /* FOOTER */
    .footer {
      background: #000;
      padding: 15px 20px;
      text-align: center;
      //border-top: 2px solid #39ff14;
      //box-shadow: 0 -2px 10px #39ff14;
      color: #39ff14;
    }
  </style>
</head>
<body>
  <div class="container">

    <!-- HEADER -->
    <div class="header">
      <?php include("head.php"); ?>
    </div>

    <!-- MENU BAR -->
    <nav class="menubar">
      <?php include("menu.php"); ?>
    </nav>

    <!-- MAIN LAYOUT -->
    <div class="main">

      <!-- LEFT SIDEBAR -->
      <aside class="leftsidebar">
        <?php include("leftsidebar.php"); ?>
      </aside>

      <!-- CONTENT -->
      <section class="content">
        
        <div class="overlay">
          <?php
          if(isset($_GET["page"])) {
            switch($_GET["page"]) {
              case 1: include("login.php"); break;
              case 2: include("register.php"); break;
              case 3: include("homemenu.php"); break;
              case 4: include("aboutusmenu.php"); break;
              case 5: include("contactusmenu.php"); break;
              case 6: include("faqmenu.php"); break;
              case 7: include("footerhome.php"); break;
              case 8: include("footeraboutus.php"); break;
              case 9: include("footercontactus.php"); break;
              case 10: include("footerfaq.php"); break;
              case 11: include("html.php"); break;
              case 12: include("htmlintro.php"); break;
              case 13: include("htmlattribute.php"); break;
              case 14: include("htmltags.php"); break;
              case 15: include("htmldiv.php"); break;
              case 16: include("htmlforms.php"); break;
              case 17: include("css.php"); break;
              case 18: include("cssintro.php"); break;
              case 19: include("csscolors.php"); break;
              case 20: include("cssborder.php"); break;
              case 21: include("cssfloat.php"); break;
              case 22: include("cssdisplay.php"); break;
              case 23: include("javascript.php"); break;
              case 24: include("javascriptintro.php"); break;
              case 25: include("javascriptoperators.php"); break;
              case 26: include("javascriptconditional.php"); break;
              case 27: include("javascriptarray.php"); break;
              case 28: include("javascriptfunction.php"); break;
 case 29: include("PHP.php"); break;
 case 30: include("phpintro.php"); break;
 case 31: include("phpoperators.php"); break;
 case 32: include("phpconditional.php"); break;
 case 33: include("phparray.php"); break;
 case 34: include("phpfunction.php"); break;
            }
          }
 else {
echo '<div style="text-align: center;">
  <pre style="font-family:Courier New;font-size: 22px;font-weight: bold;color: #39ff14;background-color: #000;padding: 20px 40px;border: 2px solid #39ff14;border-radius: 12px;display: inline-block;text-shadow: 0 0 5px #39ff14, 0 0 10px #39ff14, 0 0 20px #39ff14;box-shadow: 0 0 10px #39ff14, 0 0 30px #39ff14 inset;">
* * * * * * * * * * * * * *
*                           *
*  WELCOME TO AVAPTECH  *
*                           *
* * * * * * * * * * * * * *
  </pre>
</div>';
}
?>

        </div>
      </section>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
      <?php include("footer.php"); ?>
    </footer>

  </div>
</body>
</html>
