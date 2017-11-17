@extends('template')
@section('content')

<h3 align="center"> Seu login será necessário!</h3>
<p align="center"> Acesse sua conta abaixo: </p>
  <body>
        @foreach($errors->all() as $error)
           
            <li>{{ $error }}</li>
        @endforeach
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-body">
                    <form action="{{ url('champion2') }}" class="form-horizontal" method="post">
                    <div class="login-title"><strong>Login</strong></div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="email" class="form-control" placeholder="Email"/>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="{{ url('cadastro') }}" class="btn btn-link btn-block">Ainda não possui conta?</a>
                        </div>
                        <div class="col-md-6">
                            <input type="submit" value="Login" class="btn btn-info btn-block">
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                </div>
            </div>
            
        </div>
        
    </body>
@stop