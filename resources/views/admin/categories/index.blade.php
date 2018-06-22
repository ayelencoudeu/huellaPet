@extends('layouts.app')
             
@section('home')
            

 <div class="productos" id="productos">
             <h1>Lsitado de categorias</h1>
             <hr>
             <div class="todoslosproductos">
        <a href="{{ url('/admin/categories/create') }}" class="btn btn-primary">Nueva Categoria</a>
        <table class="table">
                <thead>
                    <tr>
                        <hr>
                        <th class="text-center">#</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th class="text-right">Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $datoCategoria)

                     <tr>
                        <td class="text-center">{{ $datoCategoria->id }}</td>
                        <td>{{ $datoCategoria->name }}</td>
                        <td>{{ $datoCategoria->description }}</td>
                        <td class="td-actions text-right">
                    <form method="post" action="{{ url('/admin/categories/'.$datoCategoria->id ) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        
                        <a href="" type="button" rel="tooltip" title="ver Categoria">
                                <i class="fa fa-user"></i>
                        </a>
                           
                        <a href="{{ url('/admin/categories/'.$datoCategoria->id.'/edit') }}" type="button" rel="tooltip" title="editar Categoria" >
                                <i class="fa fa-edit"></i>
                        </a>
                        
                        
                        
                        </form>
                            
                        </td>
                    </tr>

                    @endforeach
                </tbody>
               
            </table>
             
            <div>           
           {{ $categories->links() }}    
           </div>                     
    </div>
</div>
          
@endsection