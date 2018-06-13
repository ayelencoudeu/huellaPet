@extends('layouts.app')

@section('modificar')
<!-- Formulario html -->
    <div class="newsleterr" onclick="contraer(this)">
      <h3><strong>MODIFICAR DATOS</strong></h3>

      <form class="contact_form" method="POST" enctype="multipart/form-data">
      <ul>
        <li>
          <input type="text" name="nombre" value='<?= array_key_exists('nombre', $_SESSION) && $_SESSION['nombre'] ? $_SESSION['nombre'] : null; ?>' placeholder="*Nombre" />
          <?php if (array_key_exists('nombre', $_POST) && $_POST['nombre']==null){
                echo"<p>Este dato es requerido</p>";
                }
          ?>
        </li>
        <li>
          <input type="text" name="apellido" value='<?= array_key_exists('apellido', $_SESSION) && $_SESSION['apellido'] ? $_SESSION['apellido'] : null; ?>' placeholder="*Apellido" />
          <?php if (array_key_exists('apellido', $_POST) && $_POST['apellido']==null){
                  echo"<p>Este dato es requerido</p>";
                }
          ?>
        </li>
        <li>
          <input type="password" name="clave" value='<?= array_key_exists('clave', $_SESSION) && $_SESSION['clave'] ? $_SESSION['clave'] : null; ?>' placeholder="*Clave" />
          <?php if (array_key_exists('clave', $_POST) && $_POST['clave']!=null){
                echo"<p>Este dato es requerido</p>";
                }
          ?>
        </li>
        <li>
          <input type="password" name="confirmaclave" value='<?= array_key_exists('confirmaclave', $_SESSION) && $_SESSION['confirmaclave'] ? $_SESSION['confirmaclave'] : null; ?>' placeholder="*Confirmar Clave" />
          <?php if (array_key_exists('confirmaclave', $_POST) && $_POST['confirmaclave']==null){
              echo"<p>Este dato es requerido</p>";
              }
          ?>
        </li>
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