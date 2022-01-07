@extends('templates.template')


@section('content')
 <h1 class="text-center">Visualizar</h1> <hr>

   <div class="col-8 m-auto">
        Nome:{{$user->nome}}<br>
        Email:{{$user->email}}<br>
        Cpf:{{$user->cpf}}<br>
        Nascimento:{{$user->birth_date}}<br>
        Telefone:{{$user->telefone1}}<br>
        Celular:{{$user->telefone2}}<br>
        Perfil:{{$user->perfil}}<br>
        Logradouro:{{$user->endereco}}<br>
        Complemento:{{$user->complemento}}<br>
        Numero:{{$user->numero}}<br>
        Cidade:{{$user->cidade}}<br>
        Estado:{{$user->estado}}<br>
        PaÍs:{{$user->pais}}<br>
        Email:{{$user->cep}}<br>
        Criado em:{{$user->created_at}}<br>
        Ultima atualização:{{$user->updated_at}}<br>
       
        
   </div>
  
@endsection