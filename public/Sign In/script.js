const { data } = require("autoprefixer");

document.getElementById("signin-form").addEventListener("submit",function(event){
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    if (!email || !password) {
        event.preventDefault();
        alert("Please enter both email and password");
    }
});

//Initialize Google Sign-In
function onSignIn(googleUser){
    const profile = googleUser.getBasicProfile();
    const idToken = googleUser.getAuthResponse().id_token;
}

//Send ID token to your server
fetch("google_signin.php",{
    method: "POST",
    headers: {"Content-Type": "application/json"},
    body: JSON.stringify({idToken})
}).then(response => response.text)
  .then(data => alert(data));

gapi.load('auth2',function(){
    gapi.auth2.init({
        client_id: 'YOUR_GOOGLE_CLIENT_ID',
    }).then(function(auth2){
        document.getElementById('google-signin').addEventListener('click',function(){
            auth2.signIn().then(onSignIn);
        });
    });
});

// Initialize Facebook SDK
window.fbAsyncInit = function() {
    FB.init({
      appId      : 'YOUR_FACEBOOK_APP_ID', // replace with your Facebook App ID
      cookie     : true,
      xfbml      : true,
      version    : 'v16.0'
    });
  
    document.getElementById('facebook-signin').addEventListener('click', function() {
      FB.login(function(response) {
        if (response.status === 'connected') {
          FB.api('/me', {fields: 'name,email'}, function(profile) {
            // Send profile to server
            fetch("facebook_signin.php", {
              method: "POST",
              headers: { "Content-Type": "application/json" },
              body: JSON.stringify({ accessToken: response.authResponse.accessToken })
            }).then(response => response.text())
              .then(data => alert(data));
          });
        }
      }, {scope: 'email'});
    });
  };
  