@include('admin.header')

<div class="app-content content container-fluid">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-1">
          <h2 class="content-header-title">Lista de Usuários</h2>
        </div>
        
      </div>
      <div class="content-body"><!-- Basic Tables start -->

                    <!-- Table head options start -->
                    <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <a href="{{ route('admin.users-create')}}" class="btn btn-info btn-min-width mr-1 mb-1">
                                            Cadastar novo usuário
                                    </a>
                                </h4>

                                @if(session('success'))
                                    <h3>{{ session('success')['messages'] }}</h3>      
                                @endif
                                
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
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th>#</th>
                                                <th>Nome</th>
                                                <th>Nivel</th>
                                                <th>CPF</th>
                                                <th>E-mail</th>
                                                <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($users as $user)
                                                
                                            
                                            <tr>
                                                <th scope="row">{{ $user->id }}</th>
                                                <td>{{$user->nameuser}}</td>
                                                <td>{{$user->nivel}}</td>
                                                <td>{{$user->cpf}}</td>
                                                <td>{{$user->email}}</td>
                                            

                                                <td>
                                                    <a href="#" class="btn btn-primary btn-sm mr-1 mb-1">Detalhes</a>
                                                    <a href="{{ route('usuario.edit', $user->id) }}" class="btn btn-info btn-sm mr-1 mb-1">Editar</a>
                                                    {{-- ROTA PARA DELETAR USUÁRIO --}}
                                                    {!! Form::open(['route' => ['usuario.destroy', $user->id], 'method' => 'DELETE']) !!}
                                                        
                                                        {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-sm mr-1 mb-1', 'onclick' => 'return confirm("Deseja realmente excluir esse usuário?")']) !!}

                                                    {!! Form::close() !!} 
                                                </td>
                                            </tr>                              

                                            @endforeach
                                        </tbody>
                                    </table>
                                      
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- Table head options end -->



      </div>
    </div>
  </div>

@include('admin.footer')