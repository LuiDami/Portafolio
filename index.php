<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            <?php echo $_SERVER["HTTP_HOST"]; ?>
        </title>
        <link rel="stylesheet" href="style/style_inicio.css">
    </head>
    <body>




        <header>

            <h1>Hola soy Luis Damian,</h1>
            <h1>Desarrollador Web</h1>
            <p>Front-End y Back-End</p>
            <a href="#contactoS">
                <h2>CONTÁCTAME</h2>
            </a>
            <h2>Descargar cv</h2>

        </header>

        <nav>
            <ul>
                <li><a href="#meS">Sobre mi</a></li>
                <li><a href="#habilidadS">Habilidades</a></li>
                <li><a href="#proyectoS">Proyectos</a></li>
                <li><a href="#contactoS">Contacto</a></li>
            </ul>
        </nav>

        <div class="contenedor"> <!--contenedor de section y aside-->

            <!--barra lateral-->
            <!-- <aside></aside> -->
            <!--fin barra lateral-->

            <section id="meS"> <!--Sobre mi-->
                <article class="me">
                    <div>
                        <h2>Sobre mi</h2>
                        <p>Realizada mi formación en IES Virgen de la Paz, como Desarrollador de aplicaciones Web, donde he adquirido los conocimientos necesarios para realizar una web desde cero, tanto desde el lado del servidor (Back-end), como en el lado del cliente (Front-end).</p>

                        <p>Desarrollando mi proyecto final sobre un gestor de restaurante el cual podréis probarlo de primera mano desde su enlace correspondiente.</p>

                        <p>realice mis practicas durante 6 meses en ACRELEC, desarrollando la interfaz de los quioscos de pedido de Burger King.</p>

                        <p>Con el objetivo de mejorar mis habilidades y/o adquirir nuevas, siempre estoy en constante aprendizaje, capacitándome con cursos que me enseñan nuevas y punteras tecnologías.</p>
                        
                        <p>Por esta razón, actualmente me encuentro cursando una Ingeniería Informática en la Universitat Oberta de Catalunya, para convertirme en un desarrollador mas completo.</p>
                    </div>
                    
                </article>
            </section>

            <section id="habilidadS"> <!--Habilidades-->
                <h2>Habilidades</h2>
                <div id="habilidades">
                    <article class="habilidades">
                        <h3>Front-end</h3>
                        <lo>
                            <li>HTML</li>
                            <li>XML</li>
                            <li>CSS, Flexbox, Css Grid, animación</li>
                            <li>Responsive Web Desing</li>
                            <li>Bootstrap</li>
                            <li>svg</li>
                            <li>Javascript</li>
                            <li>Json</li>
                            <li>JQuery</li>
                            <li>Ajax</li>
                            <li>Programación asíncronas con promesas</li>
                            <li>canvas</li>
                            <li>Angular 8</li>
                        </lo>
                    </article>
                    <article class="habilidades">
                        <h3>Back-end</h3>
                        <lo>
                            <li>PHP, POO, MVC</li>
                            <li>Diseño y gestión de Base de Datos relacionales</li>
                            <li>SQL</li>
                            <li>Mysql</li>
                            <li>Oracle Database</li>
                            <li>PL/SQL</li>
                            <li>Servidor Web Apache (Xampp)</li>
                        </lo>
                    </article>
                    <article class="habilidades">
                        <h3>Mas habilidades</h3>
                        <lo>
                            <li>Java, POO</li>
                            <li>Service Workers</li>
                            <li>Photoshop</li>
                            <li>GIMP</li>
                            <li>Davinci resolve</li>
                            <li>Netbeans</li>
                            <li>Eclipse</li>
                            <li>Visual studio code</li>
                            <li>Git</li>
                            <li>Gitflow y  ciclo de vida del software</li>
                        </lo>
                    </article>

                </div>
                
            </section>

            <section id="proyectoS"> <!--Proyectos-->
                <h2>Proyectos</h2> 

                <div id="proyectos">
                    <article class="proyectos">
                        <a href="https://www.luisdamian.com/restaurante" target="_blank"><img src="" alt="Proyecto restaurante"></a>
                    </article>

                    <article class=proyectos>
                        <a href="" target="_blank"><img src="" alt="Otro proyecto 2"></a>
                    </article>

                    <article class=proyectos>
                        <a href="" target="_blank"><img src="" alt="Otro proyecto 3"></a>
                    </article>
                </div>
                
            </section> 

            <section id="contactoS"> <!-- Contactame -->
                <h2>Contacto</h2>
                <article class="contacto">
                    <form action="" method="post" id="contacto" name="contacto">
                        <fieldset id="contactar">
                            <legend>Contacto</legend>
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre">

                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">

                            <label for="mensaje">Mensaje</label>
                            <input type="text" name="mensaje" id="mensaje">

                            <input type="submit" value="enviar" name="boton" id="boton" />

                        </fieldset>
                    </form>

                </article>
            </section>
            

        </div> <!--fin contenedor section + aside-->

        <footer ><!--pie de paguina-->
            <div id="landscape"></div>
            <div id="footerS">
                <article>
                    <h3>telf: +34 662524204</h3>
                    <h3><a href="mailto:luidami10@gmail.com">email: luidami10@gmail.com</a></h3>
                    
                </article>
                <article>
                    <h3><a href="https://www.linkedin.com/in/luis-damian-masapanta-paredes-8b60b599/ " target="_blank">linkedin</a></h3>
                </article>
            </div>

            
            
        </footer>
        
        

        <!--Javascrip-->
        <script>
        </script>
        

     </body> 
     
 </html>
 