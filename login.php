<?php include('database.php')?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/login/main.css?v=<?php echo time();?>" />
    <title>Lèo Léo Leo</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" method="POST" class="sign-in-form">
            <h2 class="title">Đăng Nhập</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required/>
            </div>
            <input type="submit" value="Đăng Nhập" class="btn solid" name="dangnhap"/>
            <!-- <p class="social-text">Or Sign in with social platforms</p> -->
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" method="POST"class="sign-up-form ">
            <h2 class="title">Đăng Ký</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="text" placeholder="Số điện thoại" name="phone" required/>
            </div>
            <input type="submit" class="btn" value="Đăng Ký" name="dangky" />
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Chưa Có Tài Khoản?</h3>
            <p>
              Hãy đăng ký ngay cho mình một tài khoản để có thể trải nghiệm một cách mới mẻ và tối ưu hơn
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Đăng ký
            </button>
          </div>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Đã Có Tài Khoản?</h3>
            <p>
              Vậy hãy đăng nhập ngay và trải nghiệm
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Đăng Nhập
            </button>
          </div>
        </div>
      </div>
    </div>
    
    <script src="app.js?v=<?php echo time();?>"></script>
  </body>
</html>
