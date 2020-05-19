<?php
/**
* @name IRepository
* @author Adrar - May 2020
* @version 1.0.0
* @namespace Adrar\Repositories
*   Interface qui définit les méthodes standard des Repository
*/
namespace Adrar\Repositories;

interface IRepository {
    public function findAll(): array;
    
    public function findById(int $id);
    
    public function persist($model);
}