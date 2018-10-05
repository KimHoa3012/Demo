
<!DOCTYPE html>
<?php
include('./user.php');
$obj_user = new user();
$user = $obj_user -> getUser();

die();
?>
<html>
<head>
	<title>Document</title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="public/bootstrap.min.css" rel="stylesheet" type="text/css">

		<link href="public/styles.css" rel="stylesheet" type="text/css">

		<script src="public/js/jquery-2.1.4.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<div class="type-12">
			<div class="container">
				<div class="col-md-12 boder">
					<div class="type">Our team</div>
					<form>
						<input type="text" name="keyword" placeholder="Nhập từ khóa">
						<input type="submit" name="Tìm kiếm">
					</form>
					<div class="row">

						<?php for ($i=0; $i < 3; $i++):?>
						<div class="col-md-4 col-sm-6 sol-xs-12 class">
							<div class="hover">
								<div class="image">
									<img src="public/image/photo_1.png" alt="imgAlt">
								</div>
							</div>
							<div class="TieuDe">
								<a href="#"><h3>ROBERT JOHNSON</h3></a>
							</div>
								<div class="overplays">
									<div class="content">
										<p>Senior salesman with 15 years of eperience. He knows everything about the products he offers.</p>
									</div>
								</div>
							</div>
							
						</div>
					<?php endfor; ?>

					</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</header>

</body>
</html>