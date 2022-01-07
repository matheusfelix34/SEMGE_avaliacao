<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $objUser;
   

    public function __construct()
    {
        $this->objUser=new User();
    }

    public function index()
    {
        
       $user=$this->objUser->all();
       return view('index',  compact('user'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $user=$this->objUser->all();
       return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
     
        
     
        
      $cad=$this->objUser->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'cpf'=>$request->cpf,
            'birth_date'=>$request->birth_date,
            'telefone1'=>$request->telefone1,
            'telefone2'=>$request->telefone2,
            'perfil'=>$request->perfil,
            'endereco'=>$request->endereco,
            'complemento'=>$request->complemento,
            'numero'=>$request->numero,
            'cidade'=>$request->cidade,
            'estado'=>$request->estado,
            'pais'=>$request->pais,
            'cep'=>$request->cep
        ]);

        if($cad){
            return redirect('crud');
        }

     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $user=$this->objUser->find($id);
        return view('show',  compact('user'));
       
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user=$this->objUser->find($id);
        
        return view('create',  compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        
        $this->objUser->where(['id'=>$id])->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'cpf'=>$request->cpf,
            'birth_date'=>$request->birth_date,
            'telefone1'=>$request->telefone1,
            'telefone2'=>$request->telefone2,
            'perfil'=>$request->perfil,
            'endereco'=>$request->endereco,
            'complemento'=>$request->complemento,
            'numero'=>$request->numero,
            'cidade'=>$request->cidade,
            'estado'=>$request->estado,
            'pais'=>$request->pais,
            'cep'=>$request->cep
        ]);

        return redirect('crud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objUser->destroy($id);
        return($del)?"sim":"não";
        
    }
}
