<?php 
// include ('connection.php');
include ('navbar.php');
include ('check_login.php');

if (isset($_POST['add-to-cart-btn'])) {
    $product_id = $_GET['product_id'];

	$query="INSERT INTO cart ()where product_id=$product_id";

    // Check if the product is not already in the cart
    if (!in_array($product_id, $session_array_id)) {
        $product_data = array(
            'product_id' => $product_id,
            'img' => $_POST['img'],
            'name' => $_POST['name'],
            'descreption' => $_POST['descreption'],
            'price' => $_POST['price'],
            'quantity' => $_POST['quantity'],
        );

        // Add the product data to the 'products' session array
        $_SESSION['products'][] = $product_data;
    }

	$cart_item_count = isset($_SESSION['products']) ? count($_SESSION['products']) : 0;
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		

								

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="index1.php">Home</a></li>
							<li><a href="store.php?show_all=1">All products</a></li>

							
							
						</ul>
					</div>
				</div>
				<!-- /row -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<?php 
$product_id = $_GET['product_id']; // Retrieve the product ID from the query parameter

$query = "SELECT * FROM products WHERE product_id = '$product_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);?>
<form action="cart.php" method="post" class="product-card" enctype="multipart/form-data">
    <input type="hidden" name="product_id" value="<?=$row['product_id']?>">
   
                            <input type="hidden" name="name" value="<?=$row['products_name']?>">
                            <input type="hidden" name="price" value="<?=$row['products_price']?>">
							
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img" class="slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;">Previous</button>
							<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1496px;"><div class="product-preview slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 374px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1; overflow: hidden;">
							<img src="data:image/jpeg;base64,<?=base64_encode($row["products_img"])?>" style="height: 270px; width: 70%;" alt="shirt">
							<img role="presentation" src="http://localhost/electro-master/img/product03.png" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 600px; height: 600px; border: none; max-width: none; max-height: none;"></div><div class="product-preview slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 374px; position: relative; left: -748px; top: 0px; z-index: 998; opacity: 0; overflow: hidden;">
								<img src="./img/product06.png" alt="">
							<img role="presentation" src="http://localhost/electro-master/img/product06.png" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 600px; height: 600px; border: none; max-width: none; max-height: none;"></div><div class="product-preview slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 374px; position: relative; left: -1122px; top: 0px; z-index: 998; opacity: 0; overflow: hidden;">
								<img src="./img/product08.png" alt="">
							<img role="presentation" src="http://localhost/electro-master/img/product08.png" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 600px; height: 600px; border: none; max-width: none; max-height: none;"></div></div></div>

							

							

							
						<button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;">Next</button></div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs" class="slick-initialized slick-slider slick-vertical">
							

							

							

							
						<div class="slick-list draggable" style="height: 366px; padding: 0px;"><div class="slick-track" style="opacity: 1; height: 1464px; transform: translate3d(0px, -366px, 0px);"><div class="product-preview slick-slide slick-cloned" tabindex="-1" style="width: 122px;" role="tabpanel" aria-describedby="slick-slide-control10" data-slick-index="-4" aria-hidden="true">
							
							</div></div></div></div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
						<h5 class="product-name" style="text-align:left"> <?=$row['products_name']?></h5>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div>
							<div>
							<h5 class="product-price" style="text-align:center"> <?=number_format($row['products_price'],2)?></h5>										<div class="product-rating">

								<span class="product-available">In Stock</span>
							</div>
							<p class="product-name" style="text-align:left"> <?=$row['products_description']?></p>
							

							<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<input type="number" name="quantity" value="1" class="form-control">

								</div>
								<button class="add-to-cart-btn" name="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>

							

							<ul class="product-links">
								<li>Category:</li>
								<li><a href="#">Headphones</a></li>
								<li><a href="#">Accessories</a></li>
							</ul>

							

						</div>
					</div>
		</form>
	
					
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
										<p class="product-name" style="text-align:left"> <?=$row['products_description']?></p>

										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
									
										<!-- Reviews -->
										<div class="col-md-6">
											<div id="reviews">
												<ul class="reviews">
													
													<li>
														<div class="review-heading">
															<h5 class="name">Raghad</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>bast product eveeeeer</p>
														</div>
													</li>
												</ul>
												<ul class="reviews-pagination">
													<li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
													<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
												</ul>
											</div>
										</div>
										<!-- /Reviews -->

										<!-- Review Form -->
<div class="col-md-9">
    <div id="review-form">
        <form class="review-form" action="submit_review.php" method="post">
            <input class="hidden" type="text" name="user_id" value="<?=$loggedInUserId?>">
            <input class="hidden" type="text" name="product_id" value="<?=$product_id?>">
            <input class="input" type="text" name="name" placeholder="Your Name">
            <input class="input" type="email" name="email" placeholder="Your Email">
            <textarea class="input" name="review" placeholder="Your Review"></textarea>
            <div class="input-rating">
                <span>Your Rating: </span>
                <div class="stars">
                    <input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
                    <input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
                    <input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
                    <input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
                    <input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
                </div>
            </div>
            <button class="primary-btn" type="submit">Submit</button>
        </form>
    </div>
</div>
<!-- /Review Form -->
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<?php 
		include ('footer.php');
		?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	



</body>
</html>
