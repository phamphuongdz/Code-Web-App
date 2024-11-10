// app.js

// Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyACAc3hXgn5JNvt7Zt3qlUMS_tdAA6aWJ0",
  authDomain: "signinauthencation.firebaseapp.com",
  projectId: "signinauthencation",
  storageBucket: "signinauthencation.firebasestorage.app",
  messagingSenderId: "87471213336",
  appId: "1:87471213336:web:aed87e889f782e72e56c6d",
  measurementId: "G-6B8FHH196X"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);
const auth = firebase.auth();

// Email/Password Sign-In
document.getElementById('signInForm').addEventListener('submit', (e) => {
    e.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    auth.signInWithEmailAndPassword(email, password)
        .then((userCredential) => {
            alert('Signed in successfully!');
            // Redirect to dashboard or homepage
        })
        .catch((error) => {
            alert(`Error: ${error.message}`);
        });
});

// Google Sign-In
document.getElementById('googleSignIn').addEventListener('click', () => {
    const provider = new firebase.auth.GoogleAuthProvider();
    auth.signInWithPopup(provider)
        .then((result) => {
            alert('Signed in with Google!');
            // Redirect to dashboard or homepage
        })
        .catch((error) => {
            alert(`Error: ${error.message}`);
        });
});

// Facebook Sign-In
document.getElementById('facebookSignIn').addEventListener('click', () => {
    const provider = new firebase.auth.FacebookAuthProvider();
    auth.signInWithPopup(provider)
        .then((result) => {
            alert('Signed in with Facebook!');
            // Redirect to dashboard or homepage
        })
        .catch((error) => {
            alert(`Error: ${error.message}`);
        });
});
