<?php 

	include("functions/function.php")

 ?>

<!DOCTYPE html>
<html>
	
	<head>
		
		<title>Онлайн продаж нефтепродуктов</title>
		<link rel = "stylesheet" href = "styles/style.css" media = "all"/>

	</head>


	<body>
		
		<div class = "main_wrapper">
			
			<div class = "header_wrapper">
				
				<a href = "index.php"><img id = "logo" src = "images/new_logo.png" width="360px" height="100px" /> </a>
				<img id = "banner" src = "images/new_banner.png" width = "640px" height = "100px"/>

			</div>

			<div class = "menubar">
				
				<ul id = "menu">
					
					<li><a href = "index.php">Домой</a></li>
					<li><a href = "all_products.php">Все продукты</a></li>
					<li><a href = "customer/my_account.php">Мой аккаунт</a></li>
					<li><a href = "#">Регистрация</a></li>
					<li><a href = "cart.php">Кошелек</a></li>
					<li><a href = "#">Контакты</a></li>

				</ul>

				<div id = "form">
					
					<form method = "get" action = "results.php" enctype = "multipart/form-data">
						
						<input type = "text" name = "user_query" placeholder = "Search a product" />
						<input type = "submit" name = "search" value = "Search"/>

					</form>

				</div>

			</div>

			<div class = "content_wrapper">
			
				<div id = "sidebar">
				
					<div id = "sidebar_title">Categories</div>

						<ul id = "cats">
							
							<?php getCats(); ?>


						</ul>

					<div id = "sidebar_title">Subcategories</div>

						<ul id = "cats">
							
							<?php getBrands(); ?>

						</ul>
				
				</div>

				<div id = "content_area">

					<?php cart(); ?>

					<div id = "shopping_cart">
						
						<span style = "float:right; font-size: 18px; padding: 5px; line-height: 40px;">
							
							Welcome Guest! <b style = "color:yellow">Shopping Cart -</b> Total items: <?php total_items(); ?> Total Price: 	<?php total_price(); ?>
							<a href = "cart.php" style = "color:yellow">Go To Cart</a>
						
						</span>

					</div>

					<!--<?php echo $ip = getIp(); ?>-->

					<div id = "products_box">
						
						<?php getPro(); ?>
						<?php getCatPro(); ?>
						<?php getBrandPro(); ?>

					</div>

				</div>

			</div>

			<div id = "footer">
			
				<h2 style = "text-align : center; padding-top : 30px; ">&copy; 2016 by Tarazali Ryskul</h2>
			
			</div>

		</div>

	</body>

</html>
	