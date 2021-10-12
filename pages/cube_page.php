<?php?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8"/>
		<title>Measurement - Cube</title>
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
							<h2><center>Cube</center><br/></h2>
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
											$ss = $side*$side;
											$area = 6*$ss;
											$volume = $side*$side*$side;
											
											echo '&nbsp&nbsp<span class="ans"> Area of Cube = ',$area,'</span><br/>';
											echo '&nbsp&nbsp<span class="result"> Formula = 6 * Side<sup>2</sup></span><br/><br/>';
											
											echo '&nbsp&nbsp<span class="ans"> Volume of Cube = ',$volume,'</span><br/>';
											echo '&nbsp&nbsp<span class="result"> Formula = Side * Side * Side </span><br/><br/>';
										}
										else{
											echo'&nbsp&nbsp <span class="mistake"> Please enter a numeric value</span><br/><br/>';
										}
									}
									else{
										echo'&nbsp&nbsp <span class="mistake"> (You need to fill in all field)</span><br/><br/>';
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
							
				<img src="../pic/cube.jpg" class="pic_place">
				
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