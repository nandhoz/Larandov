@extends('layouts')
    

@section('title', "Usuario: {$iden}")
@section('content')
 <h1>{{$iden}}</h1>
    <hr>
                         
                         
                         <ul>
                             @for($i=0;$i<=50;$i++)
                         
                             @if (($i)%2==0)
                             <li>{{ $iden}} {{$i}} - PAR</li>
                             @else
                             <li>{{ $iden}} {{$i}} - IMPAR</li>
                             @endif
                         
                             @endfor
                         </ul>

                         
@endsection   
@section('sidebar')
@parent
<h2>jajajaja</h2>
@endsection

