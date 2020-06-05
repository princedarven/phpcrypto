<?php
include "cipher.php";

$data = $_POST['input_text'];
$method = $_POST['method'];
$password = $_POST['input_password'];
$option = $_POST['option'];

function Encrypt(string $data, string $method, string $password)
{

    $encrypted_data = openssl_encrypt($data, $method, $password);  
    return $encrypted_data;
    
    
}
function Decrypt(string $data, string $method, string $password)
{

    $decrypted_data = openssl_decrypt($data, $method, $password);   
    return $decrypted_data;
    
    
}
    
 
    if(strcmp($method, "simple") == 0)
    {
        if(strcmp($option, "encrypt") == 0)
        {
            print_r(bin2hex($data));
        }
        else
        {
            print_r(hex2bin($data));
        }
    }
    else
    {
        if(strcmp($option, "encrypt") == 0)
        {
            print_r(Encrypt($data, $method, $password));
        }
        else if(strcmp($option, "decrypt") == 0)
        {
            if(Decrypt($data, $method, $password) == FALSE)
            {
                echo "Invalid access key or blank field ! Redirecting in 3 seconds..";
                header("refresh:3;url=main.php");
            }
            else
            {
                print_r(Decrypt($data, $method, $password));
            }
    
          
        }   
    }

    
    

    
?>