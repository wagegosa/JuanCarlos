<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Selim Doyranlı Tarafından Hazırlanmıştır : 08.10.2016 | Material Form -->
<!-- https://selimdoyranli.com -->
<!-- http://www.radkod.com -->
<!-- https://www.sanalyer.com -->

<!DOCTYPE HTML>
<html lang="es">
<head>
</head>
<style type="text/css">
  body
  {
    background: url('img/CR.png') fixed;
    background-size: cover;
    padding: 0;
    margin: 0;
  }

  .wrap
  {
    width: 100%;
    height: 100%;
    min-height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 99;
  }

  p.form-title
  {
    font-family: 'Open Sans' , sans-serif;
    font-size: 20px;
    font-weight: 600;
    text-align: center;
    color: #FFFFFF;
    margin-top: 5%;
    text-transform: uppercase;
    letter-spacing: 4px;
  }

  form
  {
    width: 250px;
    margin: 0 auto;
  }

  form.login input[type="text"], form.login input[type="password"]
  {
    width: 100%;
    margin: 0;
    padding: 5px 10px;
    background: 0;
    border: 0;
    border-bottom: 1px solid #FFFFFF;
    outline: 0;
    font-style: italic;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 5px;
    color: #FFFFFF;
    outline: 0;
  }

  form.login input[type="submit"]
  {
    width: 100%;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 500;
    margin-top: 16px;
    outline: 0;
    cursor: pointer;
    letter-spacing: 1px;
  }

  form.login input[type="submit"]:hover
  {
    transition: background-color 0.5s ease;
  }

  form.login .remember-forgot
  {
    float: left;
    width: 100%;
    margin: 10px 0 0 0;
  }
  form.login .forgot-pass-content
  {
    min-height: 20px;
    margin-top: 10px;
    margin-bottom: 10px;
  }
  form.login label, form.login a
  {
    font-size: 12px;
    font-weight: 400;
    color: #FFFFFF;
  }

  form.login a
  {
    transition: color 0.5s ease;
  }

  form.login a:hover
  {
    color: #2ecc71;
  }

  .pr-wrap
  {
    width: 100%;
    height: 100%;
    min-height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 999;
    display: none;
  }

  .show-pass-reset
  {
    display: block !important;
  }

  .pass-reset
  {
    margin: 0 auto;
    width: 250px;
    position: relative;
    margin-top: 22%;
    z-index: 999;
    background: #FFFFFF;
    padding: 20px 15px;
  }

  .pass-reset label
  {
    font-size: 12px;
    font-weight: 400;
    margin-bottom: 15px;
  }

  .pass-reset input[type="email"]
  {
    width: 100%;
    margin: 5px 0 0 0;
    padding: 5px 10px;
    background: 0;
    border: 0;
    border-bottom: 1px solid #000000;
    outline: 0;
    font-style: italic;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 5px;
    color: #000000;
    outline: 0;
  }

  .pass-reset input[type="submit"]
  {
    width: 100%;
    border: 0;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 500;
    margin-top: 10px;
    outline: 0;
    cursor: pointer;
    letter-spacing: 1px;
  }

  .pass-reset input[type="submit"]:hover
  {
    transition: background-color 0.5s ease;
  }
  .posted-by
  {
    position: absolute;
    bottom: 26px;
    margin: 0 auto;
    color: #FFF;
    background-color: rgba(0, 0, 0, 0.66);
    padding: 10px;
    left: 45%;
  }
</style>
<body>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pr-wrap">
          <div class="pass-reset">
            <label>
            Enter the email you signed up with</label>
            <input type="email" placeholder="Email" />
            <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
          </div>
        </div>
        <div class="wrap">
          <p class="form-title">
          Sign In</p>
          <form class="login">
            <input type="text" placeholder="Username" />
            <input type="password" placeholder="Password" />
            <input type="submit" value="Sign In" class="btn btn-success btn-sm" />
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>