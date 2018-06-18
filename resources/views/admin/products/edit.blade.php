@extends('layouts.app')

@section('registro')
<!-- Formulario html -->
    <div class="newsleterr" onclick="contraer(this)">
      <h3><strong>Editar Producto</strong></h3>
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
      <form class="contact_form" method="POST" enctype="multipart/form-data" action="{{ url('/admin/products/'.$product->id.'/edit') }}">
         {{ csrf_field() }}
      <ul>
        <li>
           <input id="name" type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name', $product->name) }}" required autofocus/>
            @if ($errors->has('name'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif      
        </li>
        <li>
          <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description', $product->description) }}" required autofocus/>
          @if ($errors->has('description'))
          <span class="invalid-feedback">
            <strong>{{ $errors->first('description') }}</strong>
          </span>
          @endif
        </li>
        <li>
          <textarea id="long_description" class="form-control{{ $errors->has('long_description') ? ' is-invalid' : '' }}" name="long_description" rows="5" required />{{ old('description',$product->description) }}</textarea>
            @if ($errors->has('long_description'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('long_description') }}</strong>
            </span>
            @endif
        </li>
       
        <li>
            <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" required value="{{ old('description', $product->price) }}" step="0.01" />
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
            <input type="submit" name="registro" value="{{ __('Guardar') }}" >
            <a href="{{ url('/admin/products/') }}" >Cancelar</a>
        </li>
      </ul>
      </form>
      <p class="legales">Al registrarme, declaro que soy mayor de edad y acepto los Términos y condiciones y las Políticas de Huella Pet.</p>
    </div>
@endsection
