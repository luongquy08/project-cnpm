<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Website trao yêu thương - Nhận nụ cười</title>

	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap-responsive.min.css" />
	
	<!-- Includes FontAwesome -->
	<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css" />

	<!-- Css -->	
	<link rel="stylesheet" href="./css/style.css" />

</head>
<body>
<?php
//    Header start
    include_once ("header.php");
//        end header
?>
	<div class="container">
		<div class="row">
			<div class="span3">
				<div class="well">

					<div class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="icon-shopping-cart"></i>
							3 item - 150.000VNĐ
							<b class="caret"></b></a>
						</a>
						<div class="dropdown-menu well" role="menu" aria-labelledby="dLabel">
							<p>Template 1 <span class="pull-right">50.000 VNĐ</span></p>
							<p>Template 2<span class="pull-right">50.000 VNĐ</span></p>
							<p>Template 3<span class="pull-right">50.000 VNĐ</span></p>
							<a href="#" class="btn btn-primary">Checkout</a>
						</div>
					</div>

				</div>
				<div class="well">
					<ul class="nav nav-list">
						<li class="nav-header">Hướng dẫn</li>
                        <li class="active">
							<a href="#">Tạo website tỏ tình</a>
						</li>
                        <li>
							<a href="#">Tạo website tặng bạn bè</a>
						</li>
						<li class="">
							<a href="#">Tạo website tặng người yêu</a>
						</li>
						<li>
							<a href="#">Tạo website tặng người thân</a>
						</li>
                        <li>
							<a href="#">Tạo website chúc mừng sinh nhật</a>
						</li>
                        
						<li class="nav-header">Mẫu website</li>
						<li>
							<a href="#">Tỏ tình</a>
						</li>
						<li>
							<a href="#">Tặng bạn bè</a>
						</li>
						<li>
							<a href="#">Tặng người yêu</a>
						</li>
                        <li>
							<a href="#">Chúc mừng sinh nhật</a>
						</li>
					</ul>
				</div>
            
            <div class="well">
					<form class="form login-form">
						<h2>Sign in</h2>
						<div>
							<label>Username</label>
							<input id="Username" name="Username" type="text" />

							<label>Password</label>
							<input id="Password" name="Password" type="password" />

							<label class="checkbox inline">
								<input type="checkbox" id="RememberMe" value="option1"> Remember me
							</label>

							<br /><br />

							<button type="submit" class="btn btn-success">Login</button>
						</div>
						<br />
						<a href="#">register</a>&nbsp;&#124;&nbsp;<a href="#">forgot password?</a>
					</form>
				</div>
            
				<div class="well">
					<h4>Filters</h4>
					<form>
						<label class="checkbox">
							<input type="checkbox" value="">
							Filter 1
						</label>

						<label class="checkbox">
							<input type="checkbox" value="">
							Filter 2
						</label>

						<label class="checkbox">
							<input type="checkbox" value="">
							Filter 3
						</label>

						<label class="checkbox">
							<input type="checkbox" value="">
							Filter 4
						</label>
						<button class="btn btn-primary pull-right" type="submit">Filter</button>
					</form>
				</div>

				<div class="well">
					<h4>Sắp xếp theo</h4>
					<form>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
							Giá từ cao đến thấp
						</label>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Giá từ thấp đến cao
						</label>
						<button class="btn btn-primary pull-right" type="submit">Sắp xếp</button>
					</form>
				</div>
            
			</div>

			<div class="span9">
				<div class="hero-unit" style="background-color: #fff !important; background-image: url(img/love-banner.jpg); height: 120px">
					
				</div>

				<ul class="thumbnails">
					<li class="span3">
						<div class="thumbnail">
							<img src="img/anh-dep-ve-tinh-yeu-10.jpg" alt="">
							<div class="caption">
								<h4>Template 1</h4>
								<p>50.000 VNĐ</p>
								<a class="btn btn-primary" href="/template/love0/" target="_blank">Xem mẫu</a>
								<a class="btn btn-success" href="#">Tạo website</a>
							</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
							<img src="img/anh-dep-ve-tinh-yeu-10.jpg" alt="">
							<div class="caption">
								<h4>Template 2</h4>
								<p>50.000 VNĐ</p>
								<a class="btn btn-primary" href="/template/love0/" target="_blank">Xem mẫu</a>
								<a class="btn btn-success" href="#">Tạo website</a>
							</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
							<img src="img/anh-dep-ve-tinh-yeu-10.jpg" alt="">
							<div class="caption">
								<h4>Template 3</h4>
								<p>50.000 VNĐ</p>
								<a class="btn btn-primary" href="/template/love0/" target="_blank">Xem mẫu</a>
								<a class="btn btn-success" href="#">Tạo website</a>
							</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
							<img src="img/anh-dep-ve-tinh-yeu-10.jpg" alt="">
							<div class="caption">
								<h4>Template 4</h4>
								<p>50.000 VNĐ</p>
								<a class="btn btn-primary" href="/template/love0/" target="_blank">Xem mẫu</a>
								<a class="btn btn-success" href="#">Tạo website</a>
							</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
							<img src="img/anh-dep-ve-tinh-yeu-10.jpg" alt="">
							<div class="caption">
								<h4>Template 5</h4>
								<p>50.000 VNĐ</p>
								<a class="btn btn-primary" href="/template/love0/" target="_blank">Xem mẫu</a>
								<a class="btn btn-success" href="#">Tạo website</a>
							</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
							<img src="img/anh-dep-ve-tinh-yeu-10.jpg" alt="">
							<div class="caption">
								<h4>Template 6</h4>
								<p>50.000 VNĐ</p>
								<a class="btn btn-primary" href="/template/love0/" target="_blank">Xem mẫu</a>
								<a class="btn btn-success" href="#">Tạo website</a>
							</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
							<img src="img/anh-dep-ve-tinh-yeu-10.jpg" alt="">
							<div class="caption">
								<h4>Template 7</h4>
								<p>50.000 VNĐ</p>
								<a class="btn btn-primary" href="/template/love0/">Xem mẫu</a>
								<a class="btn btn-success" href="#">Tạo website</a>
							</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
							<img src="img/anh-dep-ve-tinh-yeu-10.jpg" alt="">
							<div class="caption">
								<h4>Template 8</h4>
								<p>50.000 VNĐ</p>
								<a class="btn btn-primary" href="/template/love0/" target="_blank">Xem mẫu</a>
								<a class="btn btn-success" href="#">Tạo website</a>
							</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
							<img src="img/anh-dep-ve-tinh-yeu-10.jpg" alt="">
							<div class="caption">
								<h4>Template 9</h4>
								<p>50.000 VNĐ</p>
								<a class="btn btn-primary" href="/template/love0/" target="_blank">Xem mẫu</a>
								<a class="btn btn-success" href="#">Tạo website</a>
							</div>
						</div>
					</li>
				</ul>

				<div class="pagination">
					<ul>
						<li class"disabled"><span>Prev</span></li>
						<li class"disabled"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">Next</a></li>
					</ul>
				</div>

			</div>
		</div>
	</div>
	
	<hr />

	<footer id="footer" class="vspace20">
		<div class="container">
			<div class="row">
				<div class="span4">
					<h4>Info</h4>
					<ul class="nav nav-stacked">
						<li><a href="http://ngocquyblog.blogspot.com/">About Us</a>
					</ul>
				</div> 

				<div class="span4">
					<h4>Location and Contacts</h4>
					<p><i class="icon-map-marker"></i>&nbsp;Đại học Công nghệ - 144 Xuân Thủy, Cầu Giấy, Hà Nội</p>
					<p><i class="icon-phone"></i>&nbsp;Phone: 01232081097</p>
					<p><i class="icon-print"></i>&nbsp;Fax: 01232081097</p>
					<p><i class="icon-envelope"></i>&nbsp;Email: luongquy.vnu@gmail.com</p>
					<p><i class="icon-globe"></i>&nbsp;Web: http://ngocquyblog.blogspot.com/</p>
				</div>

				<div class="span4">
					<h4>Newsletter</h4>
					<p>Write you email to subscribe to our Newsletter service. Thanks!</p>
					<form class="form-newsletter">
						<div class="input-append">
							<input type="email" class="span2" placeholder="your email">
							<button type="submit" class="btn">Subscribe</button>
						</div>
					</form>
				</div>
			</div>

			<div class="row">
				<div class="span6">
					<p>&copy; Copyright 2017.&nbsp;<a href="http://ngocquyblog.blogspot.com/" target="_blank">Lương Văn Quý</a></p>
				</div>
			</div>
		</div>
	</footer>	

	<script src="./js/jquery-1.10.0.min.js"></script>
	<script src="./js/bootstrap/js/bootstrap.min.js"></script>
	<script src="./js/holder.js"></script>
	<script src="./js/script.js"></script>
</body>
</html>