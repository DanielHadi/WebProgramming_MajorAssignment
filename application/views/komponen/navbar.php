<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
    <div class="container">
        <a class="navbar-brand border rounded-circle " href="#">
        <img src="<?php echo base_url().'assets/img/moment2.jpg';?>" alt="" width="50px" class="rounded-circle">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Homepage');?>">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Menu');?>">Menu</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Homepage/index#gallery');?>">Gallery</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Homepage/index#about');?>">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
            </li>
            
           
                <?php 
                    if ($this->session->has_userdata('username')){
                        echo '<li class="nav-item">
                        <a class="fa-solid fa-cart-shopping fa-1x" href = "';echo base_url('/Cart'); echo'"></a>
                      </li> <li class="nav-item"><button class="nav-link" type="button" data-toggle="modal" data-target="#signOut">Sign Out</button></li>';
                    } else {
                        echo ' <li class="nav-item"><a class="nav-link" href="';echo base_url('/Login'); echo'">Login In</a></li>';
                    }
                ?>
            
            
        </ul>
        
        </div>
    </div>
</nav>

<div class="modal fade" id="signOut" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Out</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('Login/SignOut'); ?>"method='post'>
      </div>
      <div class="modal-footer">
        <p>Aakaha anda ingin keluar??</p>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>