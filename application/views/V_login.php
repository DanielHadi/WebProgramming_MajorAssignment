<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Login Akun</title>
  </head>
  <body>
    <?php $this->load->view('komponen/navbar');?>
    <div class="container" style="margin-top: 50px">
      <div class="row">
        <div class="col-md-5 offset-md-3">
          <div class="card">
            <div class="card-body">
              <form action="<?php echo base_url('Login/cekLogin');?>" method='post'>
              <label>LOGIN</label>
              <hr>

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
                </div>
                
                <button class="btn btn-login btn-block btn-success" type='submit'>LOGIN</button>
              </form>
            </div>
          </div>

          <div class="text-center" style="margin-top: 15px">
            Belum punya akun? <a href="register.php">Silahkan Register</a>
          </div>

        </div>
      </div>
    </div>

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