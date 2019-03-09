<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use App\Services\UserService;


class UsersController extends Controller
{
  
    protected $repository;
    protected $service;


    public function __construct(UserRepository $repository, UserService $service)
    {
        $this->repository = $repository;
        $this->service  = $service;
    }

    public function index()
    {

        echo 'chegou aqui';

    }

    //Listar de usuários
    public function users()
    {   

        $users = $this->repository->all();

        return view('admin.users', [
            "users"=>$users,
        ]);
    }

    public function usersCreate()
    {

        return view('admin.users-create');

    }

    //Cadastrar um usuário
    public function store(UserCreateRequest $request)
    {
        
        //Criar um novo usuário atráves do Service
        $request = $this->service->store($request->all());

        //Verificar se houve sucesso ou falha
        $usuario = $request['success'] ? $request['data'] : null;


        //Passar mensagens para view
        session()->flash('success', [
            'success' => $request['success'],
            'messages' => $request['messages']
        ]);
        
        //transferir o resultado para view
        return redirect()->route('admin.users');

    }

    public function show($id)
    {
        
    }

    //Rota de editar usuário
    public function edit($id)
    {
        
        $user = $this->repository->find($id);

        return view('admin.users-update', [
            'user' => $user
        ]);
        
    }


    public function update(UserUpdateRequest $request, $id)
    {
        //Atualizar dados do usuário atráves do service
        $request = $this->service->update($request->all(), $id);

        //Verificar se houve sucesso ou falha
        $usuario = $request['success'] ? $request['data'] : null;

        //Passar mensagens para view
        session()->flash('success', [
            'success'  => $request['success'],
            'messages' => $request['messages']
        ]);

        //transferir o resultado para view
        return redirect()->route('admin.users');

    }
    
    //Deletar um usuário
    public function destroy($id)
    {
       
        //Remover um usuário por id
        $request = $this->service->destroy($id);

        //Passar mensagens para view
        session()->flash('success', [
            'success'  => $request['success'],
            'messages' => $request['messages']
        ]);

        //transferir o resultado para view
        return redirect()->route('admin.users');

    }
}
