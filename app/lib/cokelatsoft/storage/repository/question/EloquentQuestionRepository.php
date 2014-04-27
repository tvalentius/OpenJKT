<?php namespace cokelatsoft\storage\repository\question;

use Question;

class EloquentQuestionRepository implements UserRepository {
    public function all() 
    {
        return User::all();
    }

    public function find($id)
    {
        return User::find($id);
    }

    public function create($input)
    {
        return User::create($input);
    }
    
    public function add($input)
    {
        return User::add($input);
    }           
    
    public function touch() {
        return User::touch();
    }
    
    public function save() {
        return User::save();
    }

    
    
}

