@extends('layouts.app')

@section('show')
<div class="productos" >
    
    @if (session('agregoExito')) 
        <div>{{ session('agregoExito') }}</div>
    @endif
   <div>
         <h1>Categorias</h1>
    </div>
    <hr>
        <div class="todoslosproductos">
           <ul>
           @foreach($mostrar as $datoBase) 
           <li><a class="btn-comprar" href="{{ url('/categories/'.$datoBase->id) }}">{{ $datoBase->name }}</a></li>
           </ul>  
            @endforeach
        </div>
        <hr>
</div>
<br>
<br>   
<br>
   
</div>

<div>
    @include('prefinal')
</div>
@endsection

