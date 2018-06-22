@extends('layouts.app')

@section('registro')
<!-- Formulario html -->
    <div class="newsleterr" onclick="contraer(this)">
      <h3><strong>Registrar nueva Categoria</strong></h3>
        
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

      <form class="contact_form" method="POST" enctype="multipart/form-data" action="{{ url('/admin/categories') }}">
         {{ csrf_field() }}
      <ul>
        <li>
           <input id="name" type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required autofocus placeholder="*Nombre de la categoria" />
            @if ($errors->has('name'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif      
        </li>
        <li>
          <textarea id="description" class="form-control{{ $errors->has('long_description') ? ' is-invalid' : '' }}" rows="5" name="description" required placeholder="*Descripcion de la categoria" />{{ old('description') }}</textarea>
            @if ($errors->has('description'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
            @endif
        </li>
       <li>
          <input type="submit" name="registro" value="{{ __('Crear') }}" >
          <a href="{{ url('/admin/categories/') }}" >Cancelar</a>
        </li>
      </ul>
      </form>
</div>
@endsection
