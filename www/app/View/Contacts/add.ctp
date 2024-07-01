<?php
echo $this->Html->css('index');
echo $this->Html->css('contact');
?>

<body>
<div class="container">
    <div class="card">      
		<?php
		echo $this->Html->tag('h1','Contact');
		echo $this->Form->create('Contact', array('id'=>'ContactAddForm'));
		?>
		<div class="inputsForm">
			<div class="firstInputs">
				<?php
				echo $this->Form->input('name', array('placeholder' => 'Name', 'id' =>'name', 'label' => false));
				echo $this->Form->input('email', array('placeholder' => 'Email', 'id' =>'email', 'label' => false));
				?>
			</div>
			<?php
				echo $this->Form->input('message', array('placeholder' => 'Message', 'id' =>'message', 'label' => false));		
				echo $this->Form->end('Send', array('id'=>'button')) ;
			?>
		</div>
		<!-- <?php
			echo $form;
		?> -->
	</div>

</div>