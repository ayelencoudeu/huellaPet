@extends('layouts.app')
             
@section('home')
            

 <div class="productos" id="productos">
             <h1>Lsitado de Productos</h1>
             <hr>
             <div class="todoslosproductos">
        <a href="{{ url('/admin/products/create') }}" class="btn btn-primary">Nuevo Producto</a>
        <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Categoria</th>
                        <th class="text-right">Precio</th>
                        <th class="text-right">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $datoProducto)
                     <tr>
                        <td class="text-center">{{ $datoProducto->id }}</td>
                        <td>{{ $datoProducto->name }}</td>
                        <td>{{ $datoProducto->description }}</td>
                        <td>{{ $datoProducto->category->name }}</td>
                        <td class="text-right">{{ $datoProducto->price }}</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="ver Producto" class="btn btn-info btn-simple btn-xs">
                                <i class="fa fa-user"></i>
                            </button>
                            <button type="button" rel="tooltip" title="editar Producto" class="btn btn-success btn-simple btn-xs">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" rel="tooltip" title="eliminar Producto" class="btn btn-danger btn-simple btn-xs">
                                <i class="fa fa-times"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
               </tbody>
            </table>
            <div>           
           {{ $products->links() }}    
           </div>                     
    </div>
</div>
          
@endsection