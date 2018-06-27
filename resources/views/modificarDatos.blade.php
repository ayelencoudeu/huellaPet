@extends('layouts.app')

@section('modificar')
<!-- Formulario html -->
    <div class="newsleterr" onclick="contraer(this)">
      <h3><strong>MODIFICAR DATOS</strong></h3>

      <form class="contact_form" method="POST" enctype="multipart/form-data" action="{{ url('/modificarDatos/'.Auth::user()->id.'/update')}}">
         {{ csrf_field() }}
      <ul>
        <li>

          <input id="nombre" type="text" name="nombre" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ Auth::user()->nombre }}" required autofocus placeholder="{{ Auth::user()->nombre }}" />
            @if ($errors->has('nombre'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('nombre') }}</strong>
            </span>
            @endif      
        </li>
        <li>
         <input id="apellido" type="text" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido" value="{{ Auth::user()->apellido }}" required autofocus placeholder="{{ Auth::user()->apellido }}"/>
          @if ($errors->has('apellido'))
          <span class="invalid-feedback">
            <strong>{{ $errors->first('apellido') }}</strong>
          </span>
          @endif
        </li>
        <li>
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="*Clave" >
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

        <li>
          
        <li>
          <input type="file" name="archivo" placeholder="Subi tu foto" />

        </li>
        <li>
          <input type="submit" name="registro" value="Guardar" >
        </li>
      </ul>
      </form>
      <p class="legales">Al registrarme, declaro que soy mayor de edad y acepto los Términos y condiciones y las Políticas de Huella Pet.</p>
    </div>
@endsection