<?php

class Password
{
    // property declaration
    public $var = 'a default value';
	
    
    public function crypto($password) {
        return md5($password);
    }
    
}

?>