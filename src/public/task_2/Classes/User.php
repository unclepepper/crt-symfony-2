<?php

class User // модель пользователя, класс лишь имитирует взаимодействие сбазой данных
{

    private $id;
    private $name;
    private $age;
    private $email;
    
   public function __construct($id){
    $this->id = $id;
   }
    public function load(int $id)       //метод должен формировать исключение,
    {        
                                  // если переданный $id не найден в базе данных (придумайте любое
        if($id == 9){                 //условие на значение параметра $id для имитации этой ошибки);
            throw new Exception('ID = '. $id . ' Не найден!');
    }
    

    }
    public function save(array $data): bool // метод имитирует сохранение
    {                                       // пользователя в базе данных и возвращает true, если сохранение прошло
                                            //успешно, или false, если произошла ошибка. Для имитации работы метод
                                            // должен возвращать случайное значение true или false.

    }
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){

        return $this->id;
    }
}
