<div id="login">
	<?php if ($this->Session->check('Auth.User')) { 
			echo $this->Html->link('Log out!', array('controller' => 'users', 'action' => 'logout'), array());
		  } 
		  else { 
			
			echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));
				
			echo $this->Form->input('User.username', array('label' => 'Username: ', 'div' => false));
			echo $this->Form->input('User.password', array('label' => 'Password: ', 'div' => false));
			echo $this->Form->submit('Log in!', array('div' => false));
			
			echo $this->Form->end();
		 }  
	?>
</div>