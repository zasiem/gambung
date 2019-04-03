<?php
require "partition/header.php";
?>

<body class="bg-light">
  <form method="post" action="daftar.php">
    <div class="login">
      <h2>Masuk</h2>
      <hr>
      <img src="image/image.png" alt="logo" height="200px">
      <div class="forminside">
        <div class="form-group">
          <input type="email" class="form-control" id="email" placeholder="Email / Nomor Telephone">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <p>Lupa Password ? <a href="#">Klik disini</a></p>

        <a href="index.php"><button class="btn btn-light">Daftar</button></a>

        <button type="submit" class="btn btn-primary">Login</button>
          </form>
      </div>
    </div>

</body>

<!-- <?php
require "partition/footer.php";
 ?> -->

</html>
