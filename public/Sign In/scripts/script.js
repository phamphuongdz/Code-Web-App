document
        .querySelector("form")
        .addEventListener("submit", function (event) {
          event.preventDefault();
          window.location.href = ".././HTML/home-page.html";
        });
      document
        .querySelector('a[href="./Sign Up/index.html"]')
        .addEventListener("click", function (event) {
          event.preventDefault();
          // Remove the login form
          document.querySelector(".main").innerHTML = `
      <h1>Sign Up</h1>
      <form id="sign-up">
        <label for="username"> Username: </label>
        <input type="text" id="username" name="username" placeholder="Enter your Username" required />
        <label for="password"> Password: </label>
        <input type="password" id="password" name="password" placeholder="Enter your Password" required />
        <label for="email"> Email: </label>
        <input type="email" id="email" name="email" placeholder="Enter your Email" required />
        <div class="wrap">
          <button type="submit">Register</button>
        </div>
        <span style="font-size: small">Or </span>
        <a href="https://www.facebook.com/?locale=vi_VN"><i class="fa-brands fa-facebook fa-xl" style="color: rgb(35, 35, 35)" title="Facebook"></i></a>
        <a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-twitter fa-xl" style="color: rgb(35, 35, 35)" title="Twitter"></i></a>
        <a href="https://accounts.google.com/"><i class="fa-brands fa-google fa-xl" style="color: rgb(35, 35, 35)" title="Google"></i></a>
      </form>
      <div>
        <div class="g-recaptcha" data-sitekey="6LcBun4qAAAAAEy9Jae_d2mw16U5lwh4CGweZgY"></div>
      </div>
      <p>
        Already Registered?
        <a href=".././HTML/login.html" style="color: rgb(35, 35, 35)">Sign in</a>
      </p>
      <p>
        Forgot Password?
        <a href=".././HTML/forgotPassword.html" style="color: rgb(35, 35, 35)">Forgot Password</a>
      </p>
    `;
        });