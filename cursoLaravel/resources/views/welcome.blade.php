@extends('layouts.main')
@section ('title', 'Dimas')
@section ('content')      
<h1>Algum titulo</h1>
      @if(10>15)
            <p>A condição é true</p>
      @endif

      <p>{{$nome}}</p>

      @if($nome=="Pedro")
      <p>O nome é Pedro</p>
      @elseif($nome=="Dimas")
      <P>O nome é {{$nome}} e ele tem {{$idade}}</P>
      @else 
      <p>O nome não é Pedro</p>
      @endif

      @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{ $i }}</p>
     @endfor

     @foreach($nomes as $nome)
     <p>{{$loop->index}}</p>       
     <p>{{$nome}}</p>
     @endforeach
     @php
            $name = "dimas";
            echo $name;
     @endphp

@endsection