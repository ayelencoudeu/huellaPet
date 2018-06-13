@extends('layouts.app')

@section('home')
<div class="contenedorbanner" onclick="contraer(this)">
<div class="banner">
<img src="images/carrusel.png" alt="mascotas">
</div>
 <div class="banneruno">
<img src="images/promouno.png" alt="mascotas">
                    </div>
                    <div class="bannerdos">
                        <img src="images/promodos.png" alt="mascotas">
                    </div>
                </div>

                <div class="productos" id="productos">
                    <h1>PRODUCTOS DEL MES</h1>
                    <hr>
                    <div class="todoslosproductos">
                        <article class="product">
                            <img src="images/productouno.jpg" alt="comida para perro">
                            <h2>Pedegree Adultos</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                            <div class="btn-comprar">
                                <a href="#">Comprar</a>
                            </div>
                        </article>
                        
                        <article class="product">
                            <img src="images/productouno.jpg" alt="comida para perro">
                            <h2>Pedegree Adultos</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                            <div class="btn-comprar">
                                <a href="#">Comprar</a>
                            </div>
                        </article>
                        
                        <article class="product">
                            <img src="images/productouno.jpg" alt="comida para perro">
                            <h2>Pedegree Adultos</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                            <div class="btn-comprar">
                                <a href="#">Comprar</a>
                            </div>
                        </article>
                        
                        <article class="product">
                            <img src="images/productouno.jpg" alt="comida para perro">
                            <h2>Pedegree Adultos</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                            <div class="btn-comprar">
                                <a href="#">Comprar</a>
                            </div>
                        </article>
                        
                        <article class="product">
                            <img src="images/productouno.jpg" alt="comida para perro">
                            <h2>Pedegree Adultos</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                            <div class="btn-comprar">
                                <a href="#">Comprar</a>
                            </div>

                        </article>
                        
                        <article class="product">
                            <img src="images/productouno.jpg" alt="comida para perro">
                            <h2>Pedegree Adultos</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                            <div class="btn-comprar">
                                <a href="#">Comprar</a>
                            </div>
                        </article>

                        <article class="product ocultar">
                            <img src="images/productouno.jpg" alt="comida para perro">
                            <h2>Pedegree Adultos</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                            <div class="btn-comprar">
                                <a href="#">Comprar</a>
                            </div>
                        </article>      
                        
                        <article class="product ocultar">
                            <img src="images/productouno.jpg" alt="comida para perro">
                            <h2>Pedegree Adultos</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                            <div class="btn-comprar">
                                <a href="#">Comprar</a>
                            </div>
                        </article>
                        
                        <article class="product ocultar">
                            <img src="images/productouno.jpg" alt="comida para perro">
                            <h2>Pedegree Adultos</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                            <div class="btn-comprar">
                                <a href="#">Comprar</a>
                            </div>
                        </article>
                        
                        <article class="product ocultar">
                            <img src="images/productouno.jpg" alt="comida para perro">
                            <h2>Pedegree Adultos</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                            <div class="btn-comprar">
                                <a href="#">Comprar</a>
                            </div>
                        </article>

                        <article class="product ocultar">
                            <img src="images/productouno.jpg" alt="comida para perro">
                            <h2>Pedegree Adultos</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                            <div class="btn-comprar">
                                <a href="#">Comprar</a>
                            </div>
                        </article>

                        <article class="product ocultar">
                            <img src="images/productouno.jpg" alt="comida para perro">
                            <h2>Pedegree Adultos</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                            <div class="btn-comprar">
                                <a href="#">Comprar</a>
                            </div>
                        </article>
                    </div>
                </div>
        
<div class="prefinal">
            <div class="newsleterr">
                    <h3><strong>SABE MAS DE TU AMIGO</strong></h3>
                    <hr>
                    <form class="contact_form" action="newslater.php" method="post" name="contact_form">
                        <ul>
                            <li>
                                <input type="text" name="email" placeholder="*tu email" required/>
                            </li>
                            <li>
                                <input type="submit" name="enviarnews" value="enviar" placeholder="ENVIAR">
                            </li>
                        </ul>
                    </form>
            </div>    
            <div class="consulta" id="contacto">
                    <h3>CONSULTANOS!</h3>
                    <hr>
                    <form class="contact_form" action="" method="post" name="contact_form">
                        <ul>
                            <li>
                                <input type="text" name="nombre" placeholder="*tu nombre" required/>
                            </li>
                            <li>
                                <input type="text" name="email" placeholder="*tu email" required/>
                            </li>
                            <li>
                                <textarea type="textarea" name="mensaje" placeholder="*tu mensaje"></textarea>
                            </li>
                            <li>
                                <input type="submit" name="enviarcons" value="enviar" placeholder="ENVIAR">
                            </li>
                        </ul>
                    </form>
            </div>
            <div class="nosotros">
                    <h3>NOSOTROS</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    </p>
            </div>
            <div class="ubicanos">
                    <h3>Ubicanos!</h3>
                    <hr>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13136.066850016401!2d-58.3815704!3d-34.6037389!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11bead4e234e558b!2sObelisco!5e0!3m2!1ses!2sar!4v1521055859994" width="100%" height="280px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
</div>
@endsection



<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Estas Logueado!
                </div>
            </div>
        </div>
    </div>
</div> -->