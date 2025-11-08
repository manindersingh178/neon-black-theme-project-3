<html>
<head>
<title>My Dashboard - AVAPTECH</title>
<style>
  /* Reset */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body, html {
    height: 100%;
    background-color: #000;
    color: #39ff14;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  header {
    padding: 20px 40px;
    background-color: #000;
    box-shadow: 0 0 15px #39ff14 inset;
    border-bottom: 2px solid #39ff14;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  header h1 {
    font-weight: 700;
    font-size: 2rem;
    text-shadow: 0 0 8px #39ff14;
  }

  .user-info {
    font-weight: 600;
    font-size: 1rem;
    text-shadow: 0 0 6px #39ff14;
    border: 2px solid #39ff14;
    padding: 12px 45px;
    border-radius: 8px;
    box-shadow: 0 0 10px #39ff14 inset;
    white-space: nowrap;
  }
.user-info:hover
{
box-shadow: 0 0 25px #39ff14, 0 0 40px #39ff14 inset;
}
  .container {
    flex: 1;
    display: flex;
    background-color: #000;
  }

  /* Left Sidebar */
  nav.leftsidebar {
    width: 220px;
    background-color: #000;
    border-right: 2px solid #39ff14;
    box-shadow: 2px 0 15px #39ff14 inset;
    display: flex;
    flex-direction: column;
    padding-top: 40px;
  }

  nav.leftsidebar a {
    color: #39ff14;
    text-decoration: none;
    font-weight: 600;
    padding: 15px 25px;
    border-left: 4px solid transparent;
    transition: all 0.3s ease;
    text-shadow: 0 0 6px #39ff14;
  }

  nav.leftsidebar a:hover,
  nav.leftsidebar a.active {
    background-color: #111;
    border-left: 4px solid #39ff14;
    box-shadow: 0 0 15px #39ff14;
    color: #39ff14;
  }

  /* Main Content */
  main.content {
    flex: 1;
    display: flex;
    justify-content: center; /* center horizontally */
    align-items: flex-start; /* align top */
    padding: 40px;
  }

  .content-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    width: 100%;
    max-width: 1000px;
  }

  .card {
    background-color: #111;
    border: 2px solid #39ff14;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 0 15px #39ff14 inset;
    transition: box-shadow 0.3s ease;
    flex: 1 1 280px; /* flexible card width */
    min-width: 280px;
  }

  .card:hover {
    box-shadow: 0 0 25px #39ff14, 0 0 40px #39ff14 inset;
  }

  .card h2 {
    font-size: 1.5rem;
    margin-bottom: 15px;
    text-shadow: 0 0 6px #39ff14;
  }

  .card p {
    color: #7fff7fcc;
    line-height: 1.5;
  }

  footer {
    padding: 20px 40px;
    text-align: center;
    color: #39ff14;
    border-top: 2px solid #39ff14;
    box-shadow: 0 -2px 10px #39ff14 inset;
    font-weight: 600;
  }

</style>
</head>
<body>

<header>
  <h1>Welcome to AVAPTECH Dashboard</h1>
  <div class="user-info"><strong>User-Info</strong></div>
</header>

<div class="container">
  <nav class="leftsidebar">
    <a href="#profile" class="active">Profile</a>
    <a href="#settings">Settings</a>
    <a href="#notifications">Notifications</a>
    <a href="home.php">Logout</a>
  </nav>

  <main class="content">
    <div class="content-wrapper">
      <section class="card">
        <h2>Profile</h2>
        <p>Manage your personal information, update your contact details, and change your password.</p>
      </section>

      <section class="card">
        <h2>Settings</h2>
        <p>Configure your account preferences, notification settings, and privacy controls.</p>
      </section>

      <section class="card">
        <h2>Notifications</h2>
        <p>View your recent alerts, messages, and system updates in one place.</p>
      </section>

      <section class="card">
        <h2>Logout</h2>
        <p>Securely sign out of your account to protect your information.</p>
      </section>
    </div>
  </main>
</div>

<footer>
  &copy; 2025 AVAPTECH. All rights reserved.
</footer>

</body>
</html>
