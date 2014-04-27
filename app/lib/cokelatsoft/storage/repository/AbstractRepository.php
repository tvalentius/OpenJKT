<?php namespace cokelatsoft\storage\repository;

interface AbstractRepository {
    public function all();

    public function find($id);

    public function create($input);
    
    public function add($input);
    
    public function touch();
    
    public function save();
    
}

