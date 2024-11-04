// JavaScript to open and close the sign-in modal
function openSignIn() {
    document.getElementById("signInModal").style.display = "flex";
}

function closeSignIn() {
    document.getElementById("signInModal").style.display = "none";
}

// Close the modal if the user clicks outside of it
window.onclick = function(event) {
    const modal = document.getElementById("signInModal");
    if (event.target === modal) {
        modal.style.display = "none";
    }
}
