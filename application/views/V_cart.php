<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tubes Webpro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5435c6937b.js" crossorigin="anonymous"></script>
</head>
<body>
<?php $this->load->view('komponen/navbar');?>
<section class="h-100 h-custom" style="background-color: gray;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="d-flex justify-content-between align-items-center mb-5">
                    <h1 class="fw-bold mb-0 text-black">ORDER PRODUCT</h1>
                    <h6 class="mb-0 text-muted">3 items</h6>
                  </div>
                  <hr class="my-4">

                  
                    <?php 
                    foreach ($menu as $m){
                        echo '<div class="row mb-4 d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                        <img
                            src="image/beef.jpg"
                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted">'.$m->kategori_menu.'</h6>
                        <h6 class="text-black mb-0">'.$m->nama_menu.'</h6>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <form action="'; echo base_url('Cart/AddItem'); echo'" method="post">
                        <input name="id_menu" value = "'.$m->id.'" hidden>
                        <input name="opt" value = "min" hidden>
                        <button type="submit" class="btn btn-link px-2"
                            >
                            <i class="fas fa-minus"></i>
                        </button>
                        </form>';
                        foreach($relasi as $r){
                            if($r->id_menu == $m->id){
                                echo '<input id="form1" min="0" name="quantity" value="'.$r->qty.'" style =" width : 80px ; " type="number"
                            class="form-control" />';
                            }
                            
                            
                        }
                        echo '
                        <form action="'; echo base_url('Cart/AddItem'); echo'" method="post">
                        <input name="id_menu" value = "'.$m->id.'" hidden>
                        <input name="opt" value = "plus" hidden>
                            <button type="submit" class="btn btn-link px-2"
                            >
                            <i class="fas fa-plus"></i>
                        </button>
                        </form>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">'.$m->harga.'</h6>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                        </div>
                    </div><hr class="my-4">';
                    }
                    ?>
                    

                  

                  

                  

                  <div class="pt-5">
                    <h6 class="mb-0"><a href="index.html#home" class="text-body"><i
                          class="fas fa-long-arrow-alt-left me-2"></i>Back to home</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 bg-grey">
                <div class="p-5">
                  <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                  <hr class="my-4">

                  <div class="d-flex justify-content-between mb-4">
                    <h5 class="text-uppercase">items 3</h5>
                    <h5>Rp. 67.000</h5>
                  </div>

                  <h5 class="text-uppercase mb-3">METODE PEMBAYARAN</h5>

                  <div class="mb-4 pb-2">
                    <select class="select">
                      <option value="1">Transfer BANK</option>
                      <option value="2">E-Banking</option>
                      <option value="3">QRIS</option>
                      <option value="4">Gopay</option>
                      <option value="5">Dana</option>
                    </select>
                  </div>

                  <h5 class="text-uppercase mb-3">KODE PROMO</h5>

                  <div class="mb-5">
                    <div class="form-outline">
                      <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea2">Enter your code</label>
                    </div>
                  </div>

                  <hr class="my-4">

                  <div class="d-flex justify-content-between mb-5">
                    <h5 class="text-uppercase">Total price</h5>
                    <h5>Rp. 67.000</h5>
                  </div>

                  <button type="button" class="btn btn-dark btn-block btn-lg"
                    data-mdb-ripple-color="dark">Register</button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
		if(isset($error)) { echo"
			<div class='modal fade' id='errorPopUp' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
			<div class='modal-dialog' role='document'>
				<div class='modal-content'>
				<div class='modal-header'>
					<h5 class='modal-title'>Terima kasih</h5>
					<img class='closebtn' src='http://localhost/MedStory/assets/Error.png' style='width:35px;'
						type='button' data-dismiss='modal' aria-label='Close' onClick=''>
				</div>
				<div class='modal-body'>
					<img src='http://localhost/MedStory/assets/icon/Appreciation.gif' alt='Hello.gif' style='display: block;
						margin-left: auto; margin-right: auto; width: 70%; height: 70%;'>
					<h5 class='' style='text-align:center; font-color:whitesmoke;'>".$error."</h5>
				</div>		
				</div>
			</div>
			</div>";
		}	
	?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
    <script>
      $(window).on('load', function() {
			$('#errorPopUp').modal('show');
		});

		$('#errorPopUp').modal({
			backdrop: 'static', 
			keyboard: false
		});  
    </script>

</body>
</html>


<!--  -->




