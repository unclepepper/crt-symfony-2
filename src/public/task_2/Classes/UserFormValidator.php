<?php


// Имя должно быть не пустым.
// Возраст должен быть не менее 18 лет.
// Email должен быть заполнен и соответствовать формату email.


class UserFormValidator
{


    public function validate(array $data){
        
        if($data['name']==''){
            throw new Exception("Заполните поле ИМЯ");
        }
        if($data['age'] <18){
            throw new Exception("Ваш возраст мене 18 лет");
        }
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Введите корректный email");
        }
        return true;
    }
}