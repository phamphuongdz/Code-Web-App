<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Contact Us</title>
</head>
<body>
    <div class="contact-container">
        <h2>Contact Us</h2>
        <p>We're here to answer your questions and help you with any issues you may have.</p>

        <form id="contactForm" class="contact-form">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required placeholder="Your Full Name">
            <small class="error-message" id="nameError"></small>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required placeholder="Your Email Address">
            <small class="error-message" id="emailError"></small>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="Your Phone Number">
            <small class="error-message" id="phoneError"></small>

            <label for="subject">Subject:</label>
            <select id="subject" name="subject">
                <option value="general">General</option>
                <option value="membership">Membership</option>
                <option value="tickets">Tickets</option>
                <option value="merchandise">Merchandise</option>
                <option value="sponsorship">Sponsorship</option>
            </select>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required placeholder="Your message here..." rows="5"></textarea>
            <small class="error-message" id="messageError"></small>

            <button type="submit" class="sumbit-btn">Send Message</button>
            <p id="formStatus" class="form-status"></p>
        </form>
    </div>

    <script src="./script.js"></script>
</body>
</html>