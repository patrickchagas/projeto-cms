<?php

namespace App\Services;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Prettus\Validator\Contracts\ValidatorInterface;

class UserService
{

    private $repository;
    private $validator;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {   
       $this->repository = $repository;
       $this->validator = $validator; 
    }
    
    public function store()
    {

    }

    public function update()
    {

    }

    public function delete()
    {
        
    }

}

?>