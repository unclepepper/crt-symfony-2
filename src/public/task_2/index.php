<?php

require_once 'Classes/User.php';
require_once 'Classes/UserFormValidator.php';
require_once 'nav.php';

if(isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["email"])){
    $id = trim($_POST["id"]);
    $name = trim($_POST["name"]);
    $age = trim($_POST["age"]);
    $email = trim($_POST["email"]);
    $user = new User();
    $data = 
    [
        'id'=> $id,
        'name'=> $name, 
        'age'=> $age, 
        'email'=> $email
    ];

try{
    
    $user->load($id); 
    $userFormValidator = new UserFormValidator();
    $userFormValidator->validate($data);
    $user-> save($data);
         
} catch(Exception $ex){
    echo '<div class=" col-md-12 mt-4"><h3 
    class="text-center text-success">' .
                    $ex->getMessage()  .
                    '</h3></div>';
}


}
$user = new User();
require_once 'form.php';

