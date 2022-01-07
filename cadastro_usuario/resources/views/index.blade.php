@extends('templates.template')


@section('content')
 <h1 class="text-center">Crud</h1> <hr>

    <div class="text-center">
        <a href="{{url("create")}}">
            <button class="btn btn-success">Cadastrar</button>

        </a>

        </div>  

  <div class="text-center">
    {!! csrf_field() !!}
    <table class="table ">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Cpf</th>        
            <th scope="col">Nascimento</th>
            <th scope="col">Telefone</th>
            <th scope="col">Celular</th>
            <th scope="col">Perfil</th>
            <th scope="col">Endereço</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($user as $users)
                
                <tr>
                    <th scope="row">{{$users->id}}</th>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                    <td>{{$users->cpf}}</td>                    
                    <td>{{$users->birth_date}}</td>
                    <td>{{$users->telefone1}}</td>
                    <td>{{$users->telefone2}}</td>
                    <td>{{$users->perfil}}</td>
                    <td>{{$users->endereco}},{{$users->complemento}},nº{{$users->numero}},
                        {{$users->cidade}},{{$users->estado}},{{$users->pais}},{{$users->cep}}
                    </td>
                    <td>
                        <a href="{{url("show/$users->id")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>

                        <a href="{{url("edit/$users->id")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>

                        <a href="{{url("destroy/$users->id")}}" class="js-del">
                            <button class="btn btn-danger">Deletar</button>
                        </a>

                    </td>
                  </tr>
            @endforeach
            
     
        
        </tbody>
      </table>
  </div>
@endsection