@extends('layouts')
@section('content')
<h1></h1>
<hr>
{!! Form::open(['method' => 'POST', 'route' => 'user.store']) !!}

                            <div>
                                <div>
                                    {!! Form::label('user_id', 'Usuarios') !!}
                                    {!! Form::select('user_id', ['' => 'Seleccionar', 'Usuarios' => $user,], null)!!}
                                </div>
                            </div>

                            <div>
                                <div>
                                    <button type="submit">Enviar</button>
                                </div>
                            </div>
{!! Form::close() !!}

@endsection
