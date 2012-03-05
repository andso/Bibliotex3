<?php

class Password
{
     
    public function crypto($password) {
        return md5($password);
    }
    
}

?>