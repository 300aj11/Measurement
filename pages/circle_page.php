<?php?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8"/>
		<title>Measurement - Circle</title>
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
							<h2><center>Circle</center><br/></h2>
						</header>
						<form action="" method="post">
							<fieldset class="input">
								<legend>&nbsp Input: &nbsp</legend><br/>
								<p>
									<label for="radious"> &nbsp&nbsp Radious:</label>
									<input type="text" name="radious" maxlength="10" size="15" id="radious"/>
								</p><br/>
								
								<?php
									if(isset($_POST['radious'])&&!empty($_POST['radious'])){
										if(is_numeric($_POST['radious'])){
											$radious = $_POST['radious'];
											$area = 3.142857142857143*$radious*$radious;
											$perimeter = 2*3.142857142857143*$radious;
											
											echo '&nbsp&nbsp<span class="ans"> Area of Circle = ',$area,'</span><br/>';
											echo '&nbsp&nbsp<span class="result"> Formula = πR<sup>2</sup> </span><br/><br/>';
											
											echo '&nbsp&nbsp<span class="ans"> Perimeter of Circle = ',$perimeter,'</span><br/>';
											echo '&nbsp&nbsp<span class="result"> Formula = 2πR </span><br/><br/>';
											
											echo '&nbsp&nbsp<span class="result"> R = Radious </span><br/><br/>';
											
											echo '&nbsp&nbsp<span class="result"> π = 22/7 or 3.142857 </span><br/><br/>';
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
							
				<img src="../pic/circle.jpg" class="pic_place">
				
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