<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Messenger</title>
<link rel="stylesheet" href="messageBox.css">
</head>
<body>

<div class="messenger-box">
    <div class="message-container">
        <div class="message">
            <img src="profileIcon.png" alt="Profile Photo" class="profile-photo">
            <div class="message-content">
                <p>Hello there!</p>
                <span class="message-time">10:30 AM</span>
            </div>
        </div>
        <div class="message">
            <img src="profileIcon.png" alt="Profile Photo" class="profile-photo">
            <div class="message-content">
                <p>Hi! How are you?</p>
                <span class="message-time">10:35 AM</span>
            </div>
        </div>
        <!-- More messages can be added here -->
    </div>
    
    <div class="message-input">
        <textarea placeholder="Type your message here..."></textarea>
        <button class="send-button">Send</button>
    </div>
</div>

</body>
</html>
