@include('admin.header')

<div class="app-content content container-fluid">
        <div class="content-wrapper">
          <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-1">
              <h2 class="content-header-title">Cadastrar novo usuário</h2>
            </div>
          </div>
          <div class="content-body"><!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">

                                <h4 class="card-title">
                                    <a href="{{ route('admin.users')}}" class="btn btn-info btn-min-width mr-1 mb-1">
                                            Voltar
                                    </a>
                                </h4>

                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    {!! Form::open(['route' => 'usuario.store', 'method' => 'POST', 'class' => 'form']) !!} 
                                    
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="icon-head"></i> Dados</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Nome</label>
                                                        <input type="text" id="projectinput1" class="form-control" placeholder="Nome" name="nameuser">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput2">Serviços</label>
                                                        <select id="projectinput6" name="services" class="form-control">
                                                            <option value="0" selected="" disabled="">Selecionar</option>
                                                            <option value="Facebook">Facebook</option>
                                                            <option value="Instagram">Instagram</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput3">CPF</label>
                                                        <input type="text" id="projectinput3" class="form-control" placeholder="CPF" name="cpf">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="projectinput4">Telefone</label>
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Telefone" name="phone">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="projectinput4">Senha</label>
                                                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Senha" id="password" name="password">

                                                        @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                    </div>

                                                    
                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label for="projectinput3">Login</label>
                                                        <input type="text" id="projectinput3" class="form-control" placeholder="Login" name="login">
                                                    </div>  

                                                    <div class="form-group">
                                                        <label for="projectinput3">E-mail</label>
                                                        <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="projectinput2">Nível de Permissão</label>
                                                        <select id="projectinput6" name="nivel" class="form-control">
                                                            <option value="0" selected="" disabled="">Selecionar</option>
                                                            <option value="Administrador">Administrador</option>
                                                            <option value="Suporte">Suporte</option>
                                                            <option value="Criador">Criador</option>
                                                            <option value="Cliente">Cliente</option>
                                                        </select>
                                                    </div>
                                                    
                                                    

                                                </div>
                                            </div>
        
                                        </div>
            
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="icon-check2"></i> Cadastrar
                                            </button>
                                        </div>
                                   
                                     {!! Form::close() !!} 
                                </div>
                            </div>
                        </div>
                    </div>
            
                    
                </div>
            

            </section>
  <!-- // Basic form layout section end -->
          </div>
        </div>
      </div>
      <!-- ////////////////////////////////////////////////////////////////////////////-->
  


@include('admin.footer')