<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tubes Webpro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">
    <script src="https://kit.fontawesome.com/5435c6937b.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php $this->load->view('komponen/navbar');?>
    <div class="container-fluid pt-5 pb-5 menu"> 
        <div class="container text-center mt-5">
          <h2 class="display-3"id="menu">Menu</h2>
          <p>Berikut merupakan sajian menu dari kami </p>
          <div class="row pt-5 pb-5">
            <div class="col-md-6">
              <h3>Coffee (*HOT/ICED)</h3>
              <br>
              <h6>Robusta Coffee....................................................................18K</h6>
              <h6>Americano Coffee...............................................................20K</h6>
              <h6>Milk Coffee...........................................................................22K</h6>
              <h6>Banana coffee......................................................................25K</h6>
              <h6>Machiato Coffee..................................................................27K</h6>
            </div>
            <div class="col-md-6">
              <h3>Side Dish</h3>
              <br>
              <h6>French Potato....................................................................12K</h6>
              <h6>Roti Bakar...........................................................................18K</h6>
              <h6>Pasta/Scottle....................................................................24K</h6>
              <h6>Cireng.................................................................................12K</h6>
              <h6>Chicken Pop.....................................................................20K</h6>
            </div>
            <div class="row pt-5 pb-5">
              <div class="col-md-6">
                <h3>Non Coffee</h3>
                <br>
                <h6>All Variant Juice............................................................................15K</h6>
                <h6>Lemon Tea......................................................................................13K</h6>
                <h6>Hot/Iced Tea....................................................................................9K</h6>
                <h6>All Variant Soda Drink.................................................................13K</h6>
                <h6>Mineral Water..................................................................................5K</h6>
              </div>
              <div class="col-md-6">
                <h3>Meal</h3>
                <br>
                <h6>Nasi Goreng Special....................................................................25K</h6>
                <h6>Nasi Goreng Ayam.......................................................................23K</h6>
                <h6>Mi Goreng Sosis...........................................................................23K</h6>
                <h6>Beef Steak......................................................................................35K</h6>
                <h6>Chicken Steak................................................................................33K</h6>
              </div>
          </div>
        </div>
      </div>
      </div>
      <script>
        ScrollReveal().reveal('.container', {delay : 250});
      </script>
    
</body>
</html>