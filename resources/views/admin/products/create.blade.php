@extends('layouts.app')

@section('registro')
<!-- Formulario html -->
    <div class="newsleterr" onclick="contraer(this)">
      <h3><strong>Registrar un nuevo Producto</strong></h3>
        
     @if($errors->any())
      <div>
        <ul>
          @foreach ($errors->all() as $error)
            <li>
              {{ $error }}
            </li>
            
          @endforeach

        </ul>
      </div>
    @endif

      <form class="contact_form" method="POST" enctype="multipart/form-data" action="{{ url('/admin/products') }}">
         {{ csrf_field() }}
         
      <ul>
        <li>
           <select name="category_id"> 
              <option value="0">General</option>
              @foreach ($categories as $datoCategoria )
                <option value="{{ $datoCategoria->id }}">{{ $datoCategoria->name}}</option>

              @endforeach
           </select>    
        </li>

        <li>
           <input id="name" type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required autofocus placeholder="*Nombre del Producto" />
            @if ($errors->has('name'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif      
        </li>
        <li>
          <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required autofocus placeholder="*Resumen del producto"/>
          @if ($errors->has('description'))
          <span class="invalid-feedback">
            <strong>{{ $errors->first('description') }}</strong>
          </span>
          @endif
        </li>
        <li>
          <textarea id="long_description" class="form-control{{ $errors->has('long_description') ? ' is-invalid' : '' }}" rows="5" name="long_description" required placeholder="*description del producto" />{{ old('long_description') }}</textarea>
            @if ($errors->has('long_description'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('long_description') }}</strong>
            </span>
            @endif
        </li>
       
        <li>
            <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" required placeholder="*precio" >
            @if ($errors->has('price'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
            @endif
        
        <input id="imagen" type="text" name="imagen" class="form-control" placeholder="Subi tu foto" class="form-control{{ $errors->has('imagen') ? ' is-invalid' : '' }}" />
           @if ($errors->has('imagen'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('imagen') }}</strong>
            </span>
            @endif
        </li>
        <li>
            <input type="submit" name="registro" value="{{ __('Crear') }}" >
            <a href="{{ url('/admin/products/') }}" >Cancelar</a>
        </li>
      </ul>
      </form>
      <p class="legales">Al registrarme, declaro que soy mayor de edad y acepto los Términos y condiciones y las Políticas de Huella Pet.</p>
    </div>
@endsection
