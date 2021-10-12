<?php?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8"/>
		<title>Measurement - Square</title>
		<link rel="stylesheet" href="../design.css"/>
	</head>
	
	<body>
		<div class="full">
		
			<header>
				<?php include'../pre_page/subpage_header.php'?>
			</header>
		
			<section class="subpage_main_side">
				
				<article>
					<div class="material">
						<header>
							<h2><center>Square</center><br/></h2>
						</header>
						<form action="" method="post">
							<fieldset class="input">
								<legend>&nbsp Input: &nbsp</legend><br/>
								<p>
									<label for="side"> &nbsp&nbsp Side:</label>
									<input type="text" name="side" maxlength="10" size="15" id="side"/>
								</p><br/>
								
								<?php
									if(isset($_POST['side'])&&!empty($_POST['side'])){
										if(is_numeric($_POST['side'])){
											$side = $_POST['side'];
											$area = $side*$side;
											$perimeter = 4*$side;
											
											echo '&nbsp&nbsp<span class="ans"> Area of Square = ',$area,'</span><br/>';
											echo '&nbsp&nbsp<span class="result"> Formula= Side * Side</span><br/><br/>';
											
											echo '&nbsp&nbsp<span class="ans"> Perimeter of Square = ',$perimeter,'</span><br/>';
											echo '&nbsp&nbsp<span class="result"> Formula= 4(Side)</span><br/><br/>';
										}
										else{
											echo'&nbsp&nbsp <span class="mistake">Please enter a numeric value</span><br/><br/>';
										}
									}
									else{
										echo'&nbsp&nbsp <span class="mistake">(You need to fill in all field)</span><br/><br/>';
									}
								?>
								
							</fieldset>
							<br/>
							<fieldset>
								<center>
								<input class="button" type="submit" value="Submit"/>
								<input class="button" type="reset" value="Reset"/>
								</center>
							</fieldset>
						</form>
					</div>
				</article>
							
				<img src="../pic/square.jpg" class="pic_place">
				
			</section>
			
			<aside>
				<?php include'../pre_page/subpage_aside_a.php'?>
				<?php include'../pre_page/subpage_aside_b.php'?>
			</aside>
			
			<footer>
				<?php include'../pre_page/footer.php'?>
			</footer>
			
		</div>
	</body>
	
</html>