<?php

class User // модель пользователя, класс лишь имитирует взаимодействие сбазой данных
{

    private $id;
    private $name;
    private $age;
    private $email;
    
    // public function __construct(){
    // $this->id = $id;
    // $this->name = $name;
    // $this->age = $age;
    // $this->email = $email;
    // }
    public function load(int $id)       //метод должен формировать исключение,
    {        
                                        // если переданный $id не найден в базе данных (придумайте любое
        if($id==9){                 //условие на значение параметра $id для имитации этой ошибки);
            throw new Exception('ID = '. $id . ' Не найден!');
    }
    

    }
    public function save(array $data): bool // метод имитирует сохранение
    {         
        $rd = rand(0,1); 
        if($rd==1) {
           echo 'Пользователь удачно зарегистрирован'; 
           
            }  else {
                                              // пользователя в базе данных и возвращает true, если сохранение прошло
           $this->id = $data['id'];                         //успешно, или false, если произошла ошибка. Для имитации работы метод
           $this->name = $data['name'];                    // должен возвращать случайное значение true или false.
           $this->age = $data['age'];
           $this->email = $data['email'];
        }  
        
        return true; 
    }
   
}
