<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8"/>
		<title>Measurement - Cylinder</title>
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
							<h2><center>Cylinder</center><br/></h2>
						</header>
						<form action="" method="post">
							<fieldset class="input">
								<legend>&nbsp Input: &nbsp</legend><br/>
								<p>
									<label for="height"> &nbsp&nbsp&nbsp Height:</label>
									<input type="text" name="height" maxlength="10" size="15" id="height"/>
								</p><br/>
								
								<p>
									<label for="radious"> &nbsp&nbsp&nbsp Radious:</label>
									<input type="text" name="radious" maxlength="10" size="15" id="radious"/>
								</p><br/>
								<?php
									if(isset($_POST['height'])&&!empty($_POST['height'])&&!empty($_POST['radious'])&&isset($_POST['radious'])){
										if(is_numeric($_POST['height'])&& is_numeric($_POST['radious'])){
											$height = $_POST['height'];
											$radious = $_POST['radious'];
											$p = 3.142857;
											$c = $p*$radious*$radious;
											$cc = $c+$c;
											$curved_area = 2*$p*$radious*$height;
											$area = $curved_area+$cc;
											$volume = $p*$radious*$radious*$height;
											
											echo '&nbsp&nbsp<span class="ans"> Total Surface Area of Cylinder = ',$area,'</span><br/>';
											echo '&nbsp&nbsp<span class="result"> Formula = 2πRH + 2πR<sup>2</sup> + 2πR<sup>2</sup></span><br/><br/>';
											
											echo '&nbsp&nbsp<span class="ans"> Curved Surface Area of Cylinder = ',$curved_area,'</span><br/>';
											echo '&nbsp&nbsp<span class="result"> Formula = 2πRH</span><br/><br/>';
											
											echo '&nbsp&nbsp<span class="ans"> Volume of Cylinder = ',$volume,'</span><br/>';
											echo '&nbsp&nbsp<span class="result"> Formula = πR<sup>2</sup>H</span><br/><br/>';
											
											echo '&nbsp&nbsp<span class="result"> R= Radious,&nbspH= Height</span><br/><br/>';
											
											echo '&nbsp&nbsp<span class="result"> π = 22/7 or 3.142857</span><br/><br/>';
										}
										else{
											echo'&nbsp&nbsp <span class="mistake"> Please enter a numeric value</span><br/><br/>';
										}
									}
									else{
										echo'&nbsp&nbsp <span class="mistake"> (You need to fill in all field)</span><br/><br/>';
									}
								?><br/>
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
							
				<img src="../pic/cylinder.jpg" class="pic_place">
				
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