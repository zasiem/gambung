<?php
require "partition/header.php";
?>

<body class="bg-light">
  <form method="post" action="login.php">
    <div class="login">
      <h2>Daftar</h2>
      <hr>
      <img src="image/image.png" alt="logo" height="200px">
      <div class="forminside">
        <div class="form-group">
          <input type="text" class="form-control" id="nama_depan" placeholder="Nama Depan">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="nama_depan" placeholder="Nama Belakang">
        </div>
        <div class="form-group">
          <input type="date" class="form-control" id="nama_depan" placeholder="Tanggal Lahir">
        </div>
        <div class="form-group">
          <textarea name="alamat" rows="5" cols="80" class="form-control" placeholder="Alamat"></textarea>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="nama_depan" placeholder="Nomor Telephone">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary daftar">Daftar</button>
        </form>
      </div>
    </div>

</body>

<!-- <?php
require "partition/footer.php";
 ?> -->

</html>
