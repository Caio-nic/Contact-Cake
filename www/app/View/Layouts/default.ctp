<?php
$cakeDescription = __d('cake_dev', 'Contact');
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
		echo $this->Html->css('header');
		
		// echo $this->Html->link('Home', ['View' => 'Pages', 'action' => '/']);
		// echo $this->Html->link('Contact', ['View' => 'Pages', 'action' => 'contact']);
	?>
</head>
<body>
	<div id="container">	
		<div class ="header">
			<div>
				<?php echo $this->Html->image('azlogo.png', array('height' => '100', 'width' => '100','escape' => false),
				)
				?>
			</div>
			<div class='fullTitle'>
				<p>AZ</p>
				<p>Investment</p>
				</div>
				<div class="menu">
				
					<?php
					 echo $this->Html->link('Home', array('controller' => '', 'action' => '/'));
					 echo $this->Html->link('Contact', array('controller' => 'contact', 'action' => '/'));?>
			
				</div>				
				
				</div>
				</div>
				<?php echo $this->Flash->render(); ?>
				<?php echo $this->fetch('content'); ?>
				<?php echo $this->element('sql_dump'); ?>
</body>
</html>
