<?php?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8"/>
		<title>Measurement - Cuboid</title>
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
							<h2><center>Cuboid</center><br/></h2>
						</header>
						<form method="post">
							<fieldset class="input">
								<legend>&nbsp Input: &nbsp</legend><br/>
								<p>
									<label for="length"> &nbsp&nbsp&nbsp Length:</label>
									<input type="text" name="length" maxlength="10" size="15" id="length"/>
								</p><br/>
								
								<p>
									<label for="breath"> &nbsp&nbsp&nbsp Breath:</label>
									<input type="text" name="breath" maxlength="10" size="15" id="breath"/>
								</p><br/>
								
								<p>
									<label for="height"> &nbsp&nbsp&nbsp Height:</label>
									<input type="text" name="height" maxlength="10" size="15" id="height"/>
								</p><br/>
								
								<?php
									if(isset($_POST['length'])&&!empty($_POST['length'])&&!empty($_POST['breath'])&&isset($_POST['breath'])){
										if(is_numeric($_POST['length'])&& is_numeric($_POST['breath'])){
											$length = $_POST['length'];
											$breath = $_POST['breath'];
											$height = $_POST['height'];
											$volume = $length*$breath*$height;
											$lb = $length*$breath;
											$bh = $breath*$height;
											$hl = $height*$length;
											$lbbhhl = $lb+$bh+$hl;
											$area = 2*$lbbhhl;
											
											echo '&nbsp&nbsp<span class="ans"> Area of Cuboid = ',$area,'</span><br/>';
											echo '&nbsp&nbsp<span class="result"> Formula = 2(LB + BH + HL)</span><br/><br/>';
											
											echo '&nbsp&nbsp<span class="ans"> Volume of Cuboid = ',$volume,'</span><br/>';
											echo '&nbsp&nbsp<span class="result"> Formula = L * B * H</span><br/><br/>';
											
											echo '&nbsp&nbsp<span class="result"> L = Length,&nbspB = Breath,&nbspH = Height</span><br/><br/>';
										}
										else{
											echo'&nbsp&nbsp <span class="mistake"> Please enter a numeric value</span><br/><br/>';
										}
									}
									else{
										echo'&nbsp&nbsp <span class="mistake"> (You need to fill in all field)</span><br/><br/>';
									}
								?>
								<br/>
								
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
							
				<img src="../pic/cuboid.jpg" class="pic_place">
				
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