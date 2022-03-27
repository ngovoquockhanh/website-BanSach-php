<nav id="menu" class="navbar">
		<div class="container">
			<div class="navbar-header"><span id="heading" class="visible-xs">Categories</span>
			  <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Trang chủ</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Nhà xuất bản</a>
						<div class="dropdown-menu">
							<div class="dropdown-inner">
								<ul class="list-unstyled">
								<?php
  //lay id nha san xuat
  require 'inc/myconnect.php';
$laydanhsachnhasx="SELECT ID as manhasx,Ten from nhaxuatban";
$rstennhasx = $conn->query($laydanhsachnhasx);
   if ($rstennhasx->num_rows > 0) {
	   // output data of each row
	   while($row = $rstennhasx->fetch_assoc()) {

?>
									<li><a href="category.php?manhasx=<?php echo $row["manhasx"]?>"><?php echo $row["Ten"]?></a></li>
									<?php
		}
	}
					?>
								</ul>
					
								<li><a href="contact.php">Liên hệ</a></li>
						
							</div>
							<div class="col-md-4 "style=" margin-left:34%;margin-top: -4.1%;"	>
				<form class="form-search"style=" width:180%" method="GET" action="timkiem.php" >  
					<input type="text"  class="input-medium search-query" name="txttimkiem" required >  
					<button type="submit" name="tk" class="btn"><span class="glyphicon glyphicon-search"></span></button>  
				</form>
			</div>
			<div class="col-md-4"  style="margin-left:85% ; margin-top:-5.3% ">
				<div id="cart"><a class="btn btn-1" href="cart.php" ><span class="glyphicon glyphicon-shopping-cart"></span>Giỏ hàng (<?php
			$ok=1;
			 if(isset($_SESSION['cart']))
			 {
				 foreach($_SESSION['cart'] as $key => $value)
				 {
					 if(isset($key))
					 {
						$ok=2;
					 }
				 }
			 }
			
			 if($ok == 2)
			 {
				echo count($_SESSION['cart']);
			 }
			else
			{
				echo   "0";
			}
			
			
			?>)</a></div>
			
			</div>
		</div>

						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>