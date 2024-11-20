<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="notification.css">
  <title>Contact Us</title>
  <style>
    body {
      font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    h1{
        font-size: 30px;
    }

    .contact-container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      max-width: 400px;
      width: 100%;
      text-align: center;
      margin-top: 120px;
    }

    h2 {
      color: #590e68;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    label {
      margin: 10px 0;
      text-align: left;
      width: 100%;
    }

    input, textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      box-sizing: border-box;
      border-radius: 5px;
    }

    button {
      background-color: #a360af;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #5c3064;
    }
  </style>
</head>
<body>

  <nav>
    <a href="homePage.php" class="logo"><img src="newLogo.png"></a>
    <div class="link">
      <a href="homePage.php" class="link">Home</a>
      <a href="About.php" class="link">About Us</a>
      <a href="annoncement.php" class="link">Events</a>
      <a href="contact.php" class="link">Contact</a>
      
      
<div class="notification-container">
 <img src= "bell-fill.svg" class="notification-btn" alt=""  width="25px" height="25px">
  <div class="notification-content">
      <a href="#">You have submitted the registration form</a>
      <a href="#">Notification 2</a>
      <a href="#">Notification 3</a>
  </div>
</div>
      

      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
        <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
      </svg>
  
    </div>
    <div class="notification-container">
    <img src="reProfileIcon.png" class="notification-btn"  width="50px" height="50px">
    <div class="notification-content">
      <a href="userProfile.php" id="profile-link">Profile</a>
      <a href="index.php">LogOut</a>
    </div>
    </div>
  </nav>
<div class="contact-container">
  <h1>Contact Us</h1>
  <form>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea>

    <button type="submit">Submit</button>
  </form>
</div>

</body>
</html>
