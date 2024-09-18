<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome to WeRoomies!</title>
  <meta name="description" content="The small framework with powerful features">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="/project.png">
    
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
<style>
body {
  font-family: "Karla", sans-serif;
  background-color: #0d546a;
  min-height: 100vh;
  margin-top: 20px;
  margin-bottom: 20px;
}
span{
  font-family: "garamond";
  color: "dark cyan";
}
.brand-wrapper {
  margin-bottom: 19px; }
  .brand-wrapper .logo {
    height: 200px;
    width: 50; }

.login-card {
  border: 0;
  border-radius: 27.5px;
  box-shadow: 0 10px 30px 0 rgba(172, 168, 168, 0.43);
  overflow: hidden; 
}
  .login-card-img {
    border-radius: 0;
    position: absolute;
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover; }
  .login-card .card-body {
    padding: 85px 60px 60px; }
    @media (max-width: 422px) {
      .login-card .card-body {
        padding: 35px 24px; } }
  .login-card-description {
    font-size: 25px;
    color: #000;
    font-weight: normal;
    margin-bottom: 23px; }
  .login-card form {
    max-width: 326px; 
  }
  .login-card .form-control {
    border: 1px solid #d5dae2;
    padding: 15px 25px;
    margin-bottom: 20px;
    min-height: 45px;
    font-size: 13px;
    line-height: 15;
    font-weight: normal; }
    .login-card .form-control::-webkit-input-placeholder {
      color: #919aa3; }
    .login-card .form-control::-moz-placeholder {
      color: #919aa3; }
    .login-card .form-control:-ms-input-placeholder {
      color: #919aa3; }
    .login-card .form-control::-ms-input-placeholder {
      color: #919aa3; }
    .login-card .form-control::placeholder {
      color: #919aa3; }
  .login-card .login-btn {
    padding: 13px 20px 12px;
    background-color: #0d546a;
    border-radius: 4px;
    font-size: 17px;
    font-weight: bold;
    line-height: 20px;
    color: #fff;
    margin-bottom: 24px; }
    .login-card .login-btn:hover {
      background-color: #000;
      color: #fff; }
  .login-card .forgot-password-link {
    font-size: 14px;
    color: #919aa3;
    margin-bottom: 12px; }
  .login-card-footer-text {
    font-size: 16px;
    color: #0d2366;
    margin-bottom: 60px; }
    @media (max-width: 767px) {
      .login-card-footer-text {
        margin-bottom: 24px; } }
  .login-card-footer-nav a {
    font-size: 14px;
    color: #919aa3; 
  }
</style>
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?php echo base_url('./login.jpg'); ?>" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <span class="brand-wrapper">
                <img src="<?php echo base_url('./project.png'); ?>" alt="logo" class="logo">
              </span>
              <p class="login-card-description">Which Type of user are you?</p>
              <form action="loginadmin" method=''>
                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Admin">
              </form>
              <form action="loginowner" method=''>
                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Owner">
              </form>
              <form action="/clogin" method=''>
                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Customer">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>   
  </main>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>