<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $sessao = auth()->user()->nivel;

        switch ($sessao) {
            case 'Administrador':
                
                return view('admin.index');

            break;

            case 'Suporte':
                
                return view('suporte.index');

            break;

            case 'Criador':

                return view('criador.index');
                
            break;

            case 'Cliente':

                return view('cliente.index');
                
            break;
            
                default:

                     return view('home');
                break;
        }

        
    }

    public function admin()
    { 
        return view('admin'); 
    }

    public function criador()
    {
        return view('criador');
    }
}
