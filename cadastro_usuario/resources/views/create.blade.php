@extends('templates.template')


@section('content')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>


 <h1 class="text-center"> @if(isset($user))Editar @else Cadastrar @endif</h1> <hr>

   <div class="col-8 m-auto">

    @if(isset($user)) 
    <form name="formEdit" id="formEdit" method="post" action="{{url("update/$user->id")}}" >
      {{ method_field('PUT') }}
    @else  
    <form name="formCad" id="formCad" method="post" action="{{url('store')}}" >
    @endif

        {!! csrf_field() !!}
            <input class="form-control" type="text" name="name" id="name" placeholder="Nome" value="{{$user->name ?? ''}}" required> 
            <br>
            <input class="form-control" type="text" name="email" id="email" placeholder="email" value="{{$user->email ?? ''}}" required> 
            <br>
            <input class="form-control" type="text" name="password" id="password" placeholder="Senha"  value="{{$user->password ?? ''}}" required> 
            <br>
            <input  oninput="mascara(this)" class="form-control" type="text" name="cpf" id="cpf" placeholder="Cpf" value="{{$user->cpf ?? ''}}" required> 
            <br>
            Nascimento
            <input id="date" type="date" name="birth_date" id="birth_date" value="{{$user->birth_date ?? ''}}" required>
        
            <br>
            <label>Telefone</label>
            <input type="text"  class="form-control" placeholder="Telefone" id="telefone1" name="telefone1"  value="{{$user->telefone1 ?? ''}}" required><br>
            <label>Celular</label>
            <input type="text" class="form-control" placeholder="Celular" id="telefone2" name="telefone2" value="{{$user->telefone2 ?? ''}}" required><br>
            
            Perfil
            <select class="form-select" aria-label="Perfil" id="perfil" name="perfil"  required>
              @if(isset($user)) 
              <option value="Operário" @if($user->perfil == 'Operário') selected="selected"     @endif >Operário</option>
              <option value="Admin" @if($user->perfil == 'Admin') selected="selected"   @endif >Admin</option>
              <option value="Supervisor" @if($user->perfil == 'Supervisor') selected="selected"     @endif >Supervisor</option>
          
              @else  
                <option value="Operário">Operário</option>
                 <option value="Admin">Admin</option>
                 <option value="Supervisor">Supervisor</option>
              @endif

                </select>
            <br>

            <input class="form-control" type="text" name="endereco" id="endereco" placeholder="Endereço"  value="{{$user->endereco ?? ''}}" required> 
            <br>
            <input class="form-control" type="text" name="complemento" id="complemento" placeholder="Complemento" value="{{$user->complemento ?? ''}}" required> 
            <br>
            <input class="form-control" type="number" name="numero" id="numero" placeholder="Numero" value="{{$user->numero ?? ''}}" required>    
            <br>
            <input class="form-control" type="text" name="cidade" id="cidade" placeholder="Cidade"  value="{{$user->cidade ?? ''}}" required> 
            <br>
            <input class="form-control" type="text" name="estado" id="estado" placeholder="Estado"  value="{{$user->estado ?? ''}}" required> 
            <br>
            <input class="form-control" type="text" name="pais" id="pais" placeholder="País" value="{{$user->pais ?? ''}}" required> 
            <br>
            <input class="form-control" type="text" name="cep" id="cep" placeholder="Cep" value="{{$user->cep ?? ''}}" required> 
            
            <br>

            @if(isset($user)) 
            <input class="btn btn-primary" type="submit" value="Salvar">
            @else  
            <input class="btn btn-primary" type="submit" value="Cadastrar">
            @endif
           
        </form>
   </div>




   



  

         
   <script type="text/javascript">
    function mascara(i){
   
      var v = i.value;
      
      if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
         i.value = v.substring(0, v.length-1);
         return;
      }
      
      i.setAttribute("maxlength", "14");
      if (v.length == 3 || v.length == 7) i.value += ".";
      if (v.length == 11) i.value += "-";
   
   }

   jQuery("#telefone1")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);    
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });
  
        jQuery("#telefone2")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);    
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });

    </script>
@endsection