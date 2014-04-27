<?php namespace cokelatsoft\storage\repository\role;

use Roles;

class EloquentRoleRepository implements RoleRepository {
    public function all() 
    {
        return Roles::all();
    }

    public function find($id)
    {
        return Roles::find($id);
    }

    public function create($input)
    {
        return Roles::create($input);
    }
    
    public function add($input)
    {
        return Roles::add($input);
    }           
    
    public function touch() {
        return Roles::touch();
    }
    
    public function save() {
        return Roles::save();
    }
    
}

