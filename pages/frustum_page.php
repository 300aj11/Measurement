<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8"/>
		<title>Measurement - Frustum</title>
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
							<h2><center>Frustum</center><br/></h2>
						</header>
						<form action="" method="post">
							<fieldset class="input">
								<legend>&nbsp Input: &nbsp</legend><br/>
								<p>
									<label for="height_a"> &nbsp&nbsp&nbsp&nbsp&nbsp Height 1:</label>
									<input type="text" name="height_a" maxlength="10" size="15" id="height_a"/>
								</p><br/>
								
								<p>
									<label for="height_b"> &nbsp&nbsp&nbsp&nbsp&nbsp Height 2:</label>
									<input type="text" name="height_b" maxlength="10" size="15" id="height_b"/>
								</p><br/>
								
								<p>
									<label for="radious_a"> &nbsp&nbsp&nbsp&nbsp&nbsp Radious 1:</label>
									<input type="text" name="radious_a" maxlength="10" size="15" id="radious_a"/>
								</p><br/>
								
								<p>
									<label for="radious_b"> &nbsp&nbsp&nbsp&nbsp&nbsp Radious 2:</label>
									<input type="text" name="radious_b" maxlength="10" size="15" id="radious_b"/>
								</p><br/>
								
								<?php
									if(isset($_POST['height_a'])&&!empty($_POST['height_a'])&&isset($_POST['height_b'])&&!empty($_POST['height_b'])&&!empty($_POST['radious_a'])&&isset($_POST['radious_a'])&&!empty($_POST['radious_b'])&&isset($_POST['radious_b'])){
										if(is_numeric($_POST['height_a'])&& is_numeric($_POST['height_b'])&& is_numeric($_POST['radious_a'])&& is_numeric($_POST['radious_b'])){
											$height_a = $_POST['height_a'];
											$height_b = $_POST['height_b'];
											$radious_a = $_POST['radious_a'];
											$radious_b = $_POST['radious_b'];
											$area = '';
											$curved_area = '';
											$volume = '';
											
											echo '&nbsp&nbsp Total Surface Area of Frustum = ',$area,'<br/>';
											echo '&nbsp&nbsp<span class="result">Formula = ________</span><br/><br/>';
											
											echo '&nbsp&nbsp Curved Surface Area of Frustum = ',$curved_area,'<br/>';
											echo '&nbsp&nbsp<span class="result">Formula =_________</span><br/><br/>';
											
											echo '&nbsp&nbsp Volume of Frustum = ',$volume,'<br/>';
											echo '&nbsp&nbsp<span class="result">Formula =__________</span><br/><br/>';
											
											echo '&nbsp&nbsp<span class="result">h= Height1 ,&nbspH= Height2</span><br/><br/>';
											
											echo '&nbsp&nbsp<span class="result">r= Radious1 ,&nbspR= Radious2</span><br/><br/>';
											
											echo '&nbsp&nbsp<span class="result">π = 22/7 or 3.142857</span><br/><br/>';
										}
										else{
											echo'&nbsp&nbsp <span class="mistake">Please enter a numeric value</span><br/><br/>';
										}
									}
									else{
										echo'&nbsp&nbsp <span class="mistake">(You need to fill in all field)</font><br/><br/>';
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
							
				<img src="../pic/frustum.jpg" class="pic_place">
				
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