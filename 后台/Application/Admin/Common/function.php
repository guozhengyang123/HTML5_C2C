<?php 
function check_code($code, $id = ""){  
        $verify = new \Think\Verify();  
        return $verify->check($code, $id);  
    }  