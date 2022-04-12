<?php
include_once('file.php');
if(isset($_GET['detail'])){
  include_once('koneksi.php');
  $id = $_GET['detail'];
  $sql = "SELECT * FROM `01-artikel` where id_artikel ='$id'";
  $result = $conn->query($sql);
  $rows = array();
  while($row = $result->fetch_assoc()) {
      // echo "id: " . $row["id_artikel"]. " - Judul: " . $row["judul"]. " - Deskripsi: " . $row["deskripsi"]. "<br>";
      $rows[] = $row;
  }
  $conn->close();
  echo count($rows);
}
;?>
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
    <link rel="stylesheet" href="assets/css/comment.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    />
  </head>
  <body class="is-preload left-sidebar">
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

      <!-- Main -->
      <div id="main-wrapper">
        <div class="container">
          <div class="row gtr-200">
            <?php
            if(count($rows) > 0){                        
            ?>
            <div class="col-4 col-12-medium">
              <div id="sidebar">            
                <section><br /><img src="images/c-3.jpg" alt="" /></section>
              </div>
            </div>
            <div class="col-8 col-12-medium imp-medium">
              <div id="content">
                <!-- Content -->
                <article>
                  <br />
                  <h2><?php echo $rows[0]['judul'] ?></h2>

                  <?php echo $rows[0]['deskripsi'] ?>

                </article>
              </div>
            </div>
          </div>
       <?php } else{ ?>
        <div class="col-12">
          <h1 class="text-center">NO DATA</h1>
        </div>
       <?php } ?>
           
          <div class="col-12" id="comment">
            <div class="card mt-5">           
              <div class="card-body">
                <h5 class="card-title">Honary Guest Message</h5>
                <?php
                
                for ($i=0; $i <count($finalOutput)-1 ; $i++) { ?>
                <div class="media mt-3"> <a class="pr-3" href="#"><img class="rounded-circle" alt="Bootstrap Media Another Preview" src="https://i.imgur.com/HjKTNkG.jpg" /></a>
                  <div class="media-body">
                      <div class="row">
                          <div class="col-12 d-flex">
                              <h5><?php echo($finalOutput[$i][0]); ?></h5> 
                          </div>
                      </div> <?php echo($finalOutput[$i][1]); ?>
                  </div>
                </div>
                <?php }     
                 ?>                      
              </div>             
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
