<?php if(isset($_POST['submit'])){
  $myfile = fopen("file.txt", "a") or die("Unable to open file!");
  $txt = $_POST['nama'].",".'"' . $_POST['comment'] . '"' ;
  fwrite($myfile, $txt);
  fclose($myfile);
} ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Sunrise Autos</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body class="is-preload homepage">
    <div id="page-wrapper">
      <!-- Header -->
      <div id="header-wrapper">
        <header id="header" class="container">
          <!-- Logo -->
          <div>
            <img src="images/logo.png" width="100" height="100" />
          </div>

          <!-- Nav -->
          <nav id="nav">
            <ul>
              <li class="current"><a href="index.html">Home</a></li>
            </ul>
          </nav>
        </header>
      </div>

      <!-- Banner -->
      <div id="banner-wrapper">
        <div id="banner" class="box container">
          <div class="row">
            <div class="col-7 col-12-medium">
              <h2>Please Fill <br />in Guest Book</h2>
            </div>
            <div class="col-5 col-12-medium">
              <form id="form" action="" method="post">
              <ul>
                <h5><label for="nama">Yourname:</label></h5>
                <li><input type="text" id="nama" name="nama" /></li>
                <h5><label for="comment">Message:</label></h5>
                <li><input type="text" id="comment" name="comment" /></li>
                <br />
                <li><button id="btn-submit" type="submit" name="submit" value="submit" class="button">Submit</button></li>
              </form>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Features -->
      <div id="features-wrapper">
        <div class="container">
          <h3>Which Vehicle Do You Like?</h3>
          <p>Choose Your Favorite Car</p>
          <div class="row" id="result"></div>
        </div>
      </div>
    </div>
  </body>
  <footer>
    <script src="js/jquery.js"></script>
    <script>
      $(document).ready(function () {
        function getData() {
          $.ajax({
            type: 'GET',
            url: '/pemweb/tugas/proses.php?aksi=all',
            data: {
              format: 'json',
            },
          }).done(function (data) {
            var obj = jQuery.parseJSON(data);
            $.each(obj, function (index, item) {
              var mydate = new Date(item.tanggal);
              var month = [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July',
                'August',
                'September',
                'October',
                'November',
                'December',
              ][mydate.getMonth()];
              var str =
                mydate.getDate() + ' ' + month + ' ' + mydate.getFullYear();              
              $('#result').append(
                `<div class="col-4 col-12-medium">
                <!-- Box -->
                <section class="box feature">
                  <a href="detail.php?detail=${item.id_artikel}" class="image featured"
                    ><img src="${item.thumbnail}" alt=""
                  /></a>
                  <div class="inner">
                    <header>
                      <h2>${item.judul}</h2>
                      <p>Click image to find out more</p>
                    </header>
                  </div>
                </section>
              </div>`
              );
            });
          });
        }
        getData();
      });
    </script>
  </footer>
</html>
