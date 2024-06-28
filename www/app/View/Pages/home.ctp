<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		echo $this->Html->meta('icon');
		echo $this->Html->css('index');
		echo $this->Html->css('contact');
	?>
</head>
<body>
 <div id="article">
        <div class="section">
          <p class="titleIntroduction">História da Empresa
		  </p>
          <p class="textIntroduction">
          "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
          </p>
</div>	
	<div id="aside">
	<div class="firstLineCircles">
		<div class="circleImage">
			<?php echo $this->Html->image('Invest2.png', array('height' => '100%', 'width' => '100%','escape' => false),
				)
				?>
		</div>
		<div class="circleImage">
		<?php echo $this->Html->image('Invest3.png', array('height' => '100%', 'width' => '100%','escape' => false),
			)
			?>
		</div>
	</div>
	<div class="secondLineCircles">
		<div class="circleImage">
			<?php echo $this->Html->image('Invest4.jpg', array('height' => '100%', 'width' => '100%','escape' => false),
				)
				?>
		</div>
		<div class="circleImage">
		<?php echo $this->Html->image('Invest5.png', array('height' => '100%', 'width' => '100%','escape' => false),
			)
			?>
		</div>
	</div>
	
</div>
</div>
<!-- <footer>
</footer> -->
	</div>

        </form>
      </div>
</body>