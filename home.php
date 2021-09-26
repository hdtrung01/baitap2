<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Đồ ăn Nào!!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
<div class="container-fluid ">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img src="images/logo.png" class="img-fluid" alt="...">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto ">
        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        <a class="nav-link" href="categories.php">categories</a>
        <a class="nav-link" href="Foods.php">Foods</a>
        <a class="nav-link" href="Contact.php">Contact</a>
      </div>
    </div>
  </div>
</nav>
</section>
<!-- <section class="food-search text-center">
        <div class="container">
            <form action="foods.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div> -->
        <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex ms-auto me-auto">
      <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
    </section>

</div>
</section>
<section>
<div class="mx-auto p-1 bg-info text-Black text-center" style="width: 1545px;">
       <h1>Explore Foods</h1> 
    </div> 
</div>
<div class="row align-items-start bg-info">
  
    <div class="col">
    <img src="images//menu-burger.jpg" alt="anh buger">
    <h3 class="float-text text-black ">--------------Burger--------------</h3>
    </div>
    <div class="col">
     <img src="images/menu-pizza.jpg" alt="pizaa">
     <h3 class="float-text text-black">---------------Pizza---------------</h3>
    </div>
    <div class="col">
      <img src="images/menu-momo.jpg" alt="momo">
      <h3 class="float-text text-black">--------------Momo--------------</h3>
    </div>

    </div>
  </div>
</div>    
<section>
  <class class="container-fluid bg-gray">
 <div class="mx-auto p-1 bg-white text-Black text-center" style="width: 400px;">
       <h1>Food  Menu</h1> 
    </div> 
    <div class="container-fluid">
    <div class="row col-10 mx-auto">
                <div class="col-md-12">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card br-15">
                                <div class="card-body">
                                    <div class="col-md-3 f-l">
                                        <img src="images/menu-momo.jpg" alt="" class="img-fluid br-15">
                                    </div>
                                    <div class="col-md-7 f-l ms-md-4 mt-sm-4">
                                        <h5 class="card-text fw-bold">Dumplings Specials</h5>
                                        <h5>$5.00</h5>
                                        <p class="card-text opacity-25">giới thiệu về món ăn</p>
                                        <a href="order.php" class="btn bg-red" type="submit">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card br-15">
                                <div class="card-body">
                                    <div class="col-md-3 f-l">
                                        <img src="images/menu-momo.jpg" alt="" class="img-fluid br-15">
                                    </div>
                                    <div class="col-md-7 f-l ms-md-4 mt-sm-4">
                                        <h5 class="card-text fw-bold">Sadeko Momo</h5>
                                        <h5>$6.00</h5>
                                        <p class="card-text opacity-25">Giới thiệu về món ăn</p>
                                        <a href="oder.php" class="btn btn-outline-hotpink" type="submit">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card br-15">
                                <div class="card-body">
                                    <div class="col-md-3 f-l">
                                        <img src="images/menu-burger.jpg" alt="" class="img-fluid br-15">
                                    </div>
                                    <div class="col-md-7 f-l ms-md-4 mt-sm-4">
                                        <h5 class="card-text fw-bold">Best Burger</h5>
                                        <h5>$4.00</h5>
                                        <p class="card-text opacity-25">Burger with Ham, Pineapple and lots of Cheese.
                                        </p>
                                        <a href="order.php" class="btn btn-outline-hotpink" type="submit">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card br-15">
                                <div class="card-body">
                                    <div class="col-md-3 f-l">
                                        <img src="images/menu-pizza.jpg" alt="" class="img-fluid br-15">
                                    </div>
                                    <div class="col-md-7 f-l ms-md-4 mt-sm-4">
                                        <h5 class="card-text fw-bold">Mixed Pizza</h5>
                                        <h5>$10.00</h5>
                                        <p class="card-text opacity-25">Pizza with chicken, Ham; Buff, Mushroom and
                                            Vegetables</p>
                                        <a href="#" class="btn btn-outline-hotpink" type="submit">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
    </section>
</div>
</section> 
<class class="outrol ms-auto">
<a>Desight by HDT and some bros from internet!!<a>

</class>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>