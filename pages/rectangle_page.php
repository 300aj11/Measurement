<?php?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8"/>
		<title>Measurement - Rectangle</title>
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
							<h2><center>Rectangle</center><br/></h2>
						</header>
						<form method="post">
							<fieldset class="input">
								<legend>&nbsp Input: &nbsp</legend><br/>
								<p>
									<label for="length"> &nbsp&nbsp Length:</label>
									<input type="text" name="length" maxlength="10" size="15" id="length"/>
								</p><br/>
								
								<p>
									<label for="breath"> &nbsp&nbsp Breath:</label>
									<input type="text" name="breath" maxlength="10" size="15" id="breath"/>
								</p><br/>
								<?php
									if(isset($_POST['length'])&&!empty($_POST['length'])&&!empty($_POST['breath'])&&isset($_POST['breath'])){
										if(is_numeric($_POST['length'])&& is_numeric($_POST['breath'])){
											$length = $_POST['length'];
											$breath = $_POST['breath'];
											$area = $length*$breath;
											$a = $length+$breath;
											$perimeter = 2*$a;
											
											echo '&nbsp&nbsp<span class="ans"> Area of Rectangle = ',$area,'</span><br/>';
											echo '&nbsp&nbsp<span class="result"> Formula= Length * Breath</span><br/><br/>';
											
											echo '&nbsp&nbsp<span class="ans"> Perimeter of Rectangle = ',$perimeter,'</span><br/>';
											echo '&nbsp&nbsp<span class="result"> Formula= 2(Length + Breath)</span><br/><br/>';
										}
										else{
											echo'&nbsp&nbsp <span class="mistake">Please enter a numeric value</span><br/><br/>';
										}
									}
									else{
										echo'&nbsp&nbsp <span class="mistake">(You need to fill in all field)</span><br/><br/>';
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
							
				<img src="../pic/rectangle.jpg" class="pic_place">
				
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