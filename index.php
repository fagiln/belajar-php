
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <link rel="stylesheet" href="b.v5/css/bootstrap.css" />

    <style>
      p {
        color: white;
      }

      .bg-img {
        background-image: url("assets/img/image.jpg");
        position: absolute;
        top: 0;
        left: 0;
        min-height: 100vh;
        background-size: cover;
        background-position: center;
        z-index: -1;
        /* filter: blur(10px); */
      }
    </style>
  </head>
  <body>
    <div class="bg-img w-100"></div>
    <div class="vh-100 d-flex justify-content-center flex-column">
      <p
        class="title fs-custom fw-bolder text-center pb-3"
        style="font-size: 90px"
      >
        WELCOME TO
      </p>
      <?php
    // Kode PHP dapat ditambahkan di sini jika diperlukan
    ?>
      <p class="fs-1 title fw-bold text-center pb-3" style="font-size: 80px">
        FagiLTE
      </p>
      <div class="d-flex justify-content-center p-5">
        <div class="d-flex justify-content-between" style="width: 400px">
          <a href="dashboard.php" class="btn btn-warning fw-bold px-5"
            >Dashboard</a
          >
          <a href="login.php" class="btn btn-warning px-5 fw-bold">Login</a>
        </div>
      </div>
    </div>
  </body>
</html>
