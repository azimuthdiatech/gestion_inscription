<?php
namespace App\Core;
interface IModel{

//méthodes d'instances
    public function insert():int;
    public function update(int $id):int;
//méthodes static

    public static function delete(int $id):int;
    public static function findAll();
    public static function findById(int $id);
    public static function findBy(string $sql,array $data=null,$single=false);

} 