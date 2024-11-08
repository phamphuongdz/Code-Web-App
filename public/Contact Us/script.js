document.getElementById("contactForm").addEventListener("submit", function(event){
    event.preventDefault();//Prevent form sumbittion
    let isValid = true;

    //Clear previous error messages
    document.querySelectorAll(".error-message").forEach(el => el.style.display = "none");

    //Full Name Validation
    const name = document.getElementById("name").value.trim();
    if(name.length < 3){
        document.getElementById("nameError").textContent = "Full name must be at least 5 characters long.";
        document.getElementById("nameError").style.display = "block";
        isValid = false;
    }
    // Email validation
    const email = document.getElementById("email").value.trim();
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!emailPattern.test(email)) {
        document.getElementById("emailError").textContent = "Please enter a valid email address.";
        document.getElementById("emailError").style.display = "block";
        isValid = false;
    }

    // Phone number validation (optional, checks for numeric values only)
    const phone = document.getElementById("phone").value.trim();
    if (phone && !/^\d{10,15}$/.test(phone)) {
        document.getElementById("phoneError").textContent = "Phone number must be numeric and between 10 to 15 digits.";
        document.getElementById("phoneError").style.display = "block";
        isValid = false;
    }

    //Message validation
    const message = document.getElementById("message").value.trim();
    if (message.length < 10){
        document.getElementById("messageError").textContent = "Message must be at least 10 characters.";
        document.getElementById("messageError").style.display ="block";
        isValid = false;
    }

    //If form is valid, submit the form
    if (isValid){
        document.getElementById("formStatus").textContent = "Message sent successfully!";
        //Here you can add your form submission code
    } else {
        document.getElementById("formStatus").textContent = "Please fill in errors above";
        document.getElementById("formStatus").style.color = "red";
    }

});