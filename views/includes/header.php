	<header>
		<div id="h-logo"><img src="<?php echo HOME_URI ?>/views/images/logo.png" style="height:75px"/></div>
		<div id='h-center'></div>
		<div id='h-user'>
			
			<?php 
			if(isset($_SESSION['user'])){

				echo "<a href='#' id='user-show'><i class='fas fa-user-check' style='font-size:24px'></i></a>";
				echo "<div id='user-info' class='hide' >
						<ul>
						<li>"
					.$_SESSION['user']['nome'].
						"</li>
						<li>
					<a href='".HOME_URI."/user/logout'><i class=' fas fa-sign-out-alt' style='font-size:24px'></i></a>
					</li>
				</div>";
				}else{
				echo "<a href='".HOME_URI."/user/login'><i class=' fas fa-sign-in-alt' style='font-size:24px'></i></a>";
			}

			
			?>
		</div>
	</header>
<?php
	if(isset($_SESSION['msg'])){
		foreach($_SESSION['msg'] AS $msg){
			echo "<div  class='msg alert alert-".$msg['class']."' role='alert'>"
			.$msg['msg'].
			"
		  </div>";
		}
		unset($_SESSION['msg']);
		echo "<script>$('.msg').hide(3000);</script>";
	}
?>

<div class="main-page">