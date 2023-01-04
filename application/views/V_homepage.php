<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tubes Webpro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5435c6937b.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <?php $this->load->view('komponen/navbar');?>
    <div class="container-fluid banner">
        <div class="container text-center">
            <h4 class="display-6"> Welcome To Our Coffee</h4>
            <h3 class="display-1">Ichsan Coffee</h3>
            <a href="#menu">
                <button type= "button"class="btn btn-danger btn-lg">View Menu</button>
            </a>
        </div>
        
    </div>
    <div class="container-fluid home pt-5 pb-5 bg-light">
        <div class="container text-center">
            <h2 class="display-3"id="home">HOME</h2>
            <p>Selamat Datang Ke Coffee Shop termegah dan teragung se antero galaksi Bojongsoang</p>
            
            <div class="row pt-4">
                <div class="col-md-4">
                    <span class="lingkaran">
                        <i class="fa-solid fa-mug-hot fa-5x"></i>
                    </span>
                    <h3 class="mt-3">Best Tasting Coffee</h3>
                    <p>Biji kopi yang di seleksi oleh master coffee agar menghasilkan kopi terbaik</p>
                </div>
                <div class="col-md-4">
                    <span class="lingkaran">
                        <i class="fa-solid fa-hotdog fa-5x"></i>
                    </span>
                    <h3 class="mt-3">Delicious Food</h3>
                    <p>Tidak hanya sekedar kopi, kami juga menyajikan aneka makanan pendamping agar kopi menjadi terasa sempurna</p>
                </div>
                <div class="col-md-4">
                    <span class="lingkaran">
                        <i class="fa-solid fa-people-arrows fa-5x"></i>
                    </span>
                    <h3 class="mt-3">Comfort Place</h3>
                    <p>Tempat indah nan nyaman untuk bercanda tawa hingga rapat

                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5 pb-5 ">
        <div class="container text-center">
            <h2 class="display-3" id="gallery">Gallery</h2>
            <p>Mengabadikan moment merupakan salah satu hal yang penting, karena moment tidak bisa diulang</p>
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-3">
                    <div class="card crop-img" style="width: 16rem;">
                        <img src="<?php echo base_url().'assets/img/moment1.jpg';?>" class="card-img-top" alt="foto belum tersedia"
                        width="200"
                        height="200">
                        <div class="card-body">
                          <h5 class="card-title">Customer Moment</h5>
                          <p class="card-text">Diabadikan di store bojongsoang pada saat sore hari sambil menikmati senja</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card crop-img" style="width: 16rem;">
                        <img src="<?php echo base_url().'assets/img/moment2.jpg';?>" class="card-img-top" alt="foto belum tersedia"
                        width="200"
                        height="200">
                        <div class="card-body">
                          <h5 class="card-title">Customer Moment</h5>
                          <p class="card-text">Diabadikan di store bojongsoang pada saat sore hari sambil menikmati senja</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card crop-img" style="width: 16rem;">
                        <img src="<?php echo base_url().'assets/img/moment3.jpg';?>" class="card-img-top" alt="foto belum tersedia"
                        width="200"
                        height="200">
                        <div class="card-body">
                          <h5 class="card-title">Customer Moment</h5>
                          <p class="card-text">Diabadikan di store bojongsoang pada saat sore hari sambil menikmati senja</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card crop-img" style="width: 16rem;">
                        <img src="<?php echo base_url().'assets/img/moment4.jpg';?>" class="card-img-top" alt="foto belum tersedia"
                        width="200"
                        height="200">
                        <div class="card-body">
                          <h5 class="card-title">Customer Moment</h5>
                          <p class="card-text">Diabadikan di store bojongsoang pada saat sore hari sambil menikmati senja</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card crop-img" style="width: 16rem;">
                        <img src="<?php echo base_url().'assets/img/moment5.jpg';?>" class="card-img-top" alt="foto belum tersedia"
                        width="200"
                        height="200">
                        <div class="card-body">
                          <h5 class="card-title">Customer Moment</h5>
                          <p class="card-text">Diabadikan di store bojongsoang pada saat sore hari sambil menikmati senja</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card crop-img" style="width: 16rem;">
                        <img src="<?php echo base_url().'assets/img/moment6.jpg';?>" class="card-img-top" alt="foto belum tersedia"
                        width="200"
                        height="200">
                        <div class="card-body">
                          <h5 class="card-title">Customer Moment</h5>
                          <p class="card-text">Diabadikan di store bojongsoang pada saat sore hari sambil menikmati senja</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card crop-img" style="width: 16rem;">
                        <img src="<?php echo base_url().'assets/img/moment7.jpg';?>" class="card-img-top" alt="foto belum tersedia"
                        width="200"
                        height="200">
                        <div class="card-body">
                          <h5 class="card-title">Customer Moment</h5>
                          <p class="card-text">Diabadikan di store bojongsoang pada saat sore hari sambil menikmati senja</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card crop-img" style="width: 16rem;">
                        <img src="<?php echo base_url().'assets/img/moment8.jpg';?>" class="card-img-top" alt="foto belum tersedia"
                        width="200"
                        height="200">
                        <div class="card-body">
                          <h5 class="card-title">Customer Moment</h5>
                          <p class="card-text">Diabadikan di store bojongsoang pada saat sore hari sambil menikmati senja</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>

    </div>
    

    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container">
        <h2 class="display-3 text-center" id="about">About us</h2>
        <p class="text-center"> Sejarah outlet kami dari masa ke masa.
        </p>
        <div class="clearfix pt-5">
          <img src="<?php echo base_url().'assets/img/about.jpg';?>" class="col-md-6 float-md-end mb-3 crop-img" width="300" height="300"/>
          <p>Ichsan Coffee didirikan sebelum abad peprangan romawi kuno, yang mana ini diawali oleh kakek buyut yang bernama ichsan yang menjadi seorang barista pertama di indonesia. lalu resep ini turun temurun hingga saat ini, sehingga rasa otentik masih menyelimuti dalam setiap tuangan kopi</p>
        </div>

      </div>
    </div>
    <div class="container-fluid pt-5 pb-5 contact">
      <div class="container">
        <h2 class="display-3 text-center" id="contact">
          Contact Us
        </h2>
        <p class="text-center">
          Untuk reservasi tempat silahkan mengisi form dibawah ini :
        </p>
        <div class="row pb-3">
          <div class="col-md-6">
            <input type="text" class="form-control form-control-lg mb-3" placeholder="Subjek"
            />
            <input type="text" class="form-control form-control-lg mb-3" placeholder="Nama Lengkap"
            />
            <input type="text" class="form-control form-control-lg mb-3" placeholder="Email"
            />
        </div>
        <div class="col-md-6">
          <textarea class= "form-control form-control-lg" rows="5" placeholder="Keterangan..."></textarea>
        </div>
      </div>
      <div class="col-md-3 mx-auto text-center">
        <button type="button" class="btn btn-danger btn-lg">
          Send Message
        </button>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    
</body>
</html>