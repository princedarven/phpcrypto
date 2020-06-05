<?php

class CipherMethods
{

    function getMethod(int $index)
    {
        $cipher_methods = openssl_get_cipher_methods();
    
        return $cipher_methods[$index];
        
    }
    
    
}
   
?>