<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">

        <form action="validation.php" class="sign-in-form" method="POST">
          <h2 class="title">Sign in</h2>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="user" placeholder="Username" required />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required />
          </div>

          <input type="submit" value="Login" class="btn solid" />
        </form>


        <form action="registation.php" class="sign-up-form" method="POST">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="name" name="user" placeholder="Name" required />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required />
          </div>
          <input type="submit" class="btn" value="Sign up" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Welcome to Life At NUB</h3>
          <p>
            Remember: A real friend is one who walks in when the rest of the
            world walks out.
          </p>
          <button class="btn transparent" id="sign-up-btn">Sign up</button>
        </div>
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Hello Buddies</h3>
          <p>
            Friendship is the wine of life & all about a sweet
            responsibility,never an opportunity.
          </p>
          <button class="btn transparent" id="sign-in-btn">Sign in</button>
        </div>
      </div>
    </div>
  </div>
  <script>
  const sign_in_btn = document.querySelector('#sign-in-btn')
  const sign_up_btn = document.querySelector('#sign-up-btn')
  const container = document.querySelector('.container')

  sign_up_btn.addEventListener('click', () => {
    container.classList.add('sign-up-mode')
  })

  sign_in_btn.addEventListener('click', () => {
    container.classList.remove('sign-up-mode')
  })
  </script>
</body>

</html>