<?php namespace cokelatsoft\storage\repository\user;

use cokelatsoft\storage\repository\AbstractRepository;

interface UserRepository extends AbstractRepository {
    
    public function getRules();
   
    public function getAuthIdentifier();

    public function getAuthPassword();
    
    
}

