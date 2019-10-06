<?php

//USER EXISTING CHECK

if (isset ($_POST['action']) && $_POST ['action'] === 'register')

	if (!user_exists ($_POST ['login'];) {
		
		echo '<h1>User already exists</h1>';
		
	} else {
		
	}
	
