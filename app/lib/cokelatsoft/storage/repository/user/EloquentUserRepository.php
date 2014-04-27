<?php namespace cokelatsoft\storage\repository\user;

use User;

class EloquentUserRepository implements UserRepository {
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

    public function getRules() {
        return User::$rules;
        //return array();
    }

    public function getAuthIdentifier()
    {
        return User::getAuthIdentifier();
            
    }

    public function getAuthPassword()
    {
        return User::getAuthPassword();           
    }
    
}

