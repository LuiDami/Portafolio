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
            <div class="laterales_header" id="laterales_headerl">
                <img class="collage" src="/img/svg/header/masmenos_icon.svg" alt="">
                <img class="collage" src="/img/svg/header/angular_icon.svg" alt="">
                <img class="collage" src="/img/svg/header/javascript_icon.svg" alt="">
                <img class="collage" src="/img/svg/header/css_icon.svg" alt="">
                <img class="collage" src="/img/svg/header/html_icon.svg" alt="">
                <img class="collage" src="/img/svg/header/jquery_icon.svg" alt="">
                <img class="collage" src="/img/svg/header/bootstrap_icon.svg" alt="">
            </div>
            <div id="headercentral">
                <div><h1 id="namehead">Hola soy Luis Damian</h1></div>
                <div><h1 id="professionhead">Desarrollador Web</h1></div>
                <div><p id="developer">Front-End y Back-End</p></div>
                <div>
                    <a id="contachead" href="#contactoS">
                        <h2>CONTÁCTAME</h2>
                    </a>
                </div>/
                <div><h2 id="descargarcv">Descargar cv</h2></div>
            </div>
            <div class="laterales_header"  id="laterales_headerr">
                <img class="collage" src="/img/svg/header/java_icon.svg" alt="">
                <img class="collage" src="/img/svg/header/php_icon.svg" alt="">
                <img class="collage" src="/img/svg/header/sql_icon.svg" alt="">
                <img class="collage" src="/img/svg/header/mysql_icon.svg" alt="">
                <img class="collage" src="/img/svg/header/oracle_icon.svg" alt="">
                <img class="collage" src="/img/svg/header/json_icon.svg" alt="">
                <img class="collage" src="/img/svg/header/etiqueta_icon.svg" alt="">
            </div> 
        </header>
        <p id="sobremi"></p>
        <nav>
            <ul>
                <li><a href="#sobremi">Sobre mi</a></li>
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
                    <div id="textome">
                        <h2>Sobre mi</h2>
                        <br>
                        <p>Realizada mi formación como Desarrollador de aplicaciones Web, donde he adquirido los conocimientos necesarios para realizar una web desde cero, tanto desde el lado del servidor (Back-end), como en el lado del cliente (Front-end).</p>
                        <br>
                        <p>Desarrollando mi proyecto final sobre un gestor de restaurante el cual podréis probarlo de primera mano desde su enlace correspondiente.</p>
                        <br>
                        <p>realice mis practicas durante 6 meses en ACRELEC, desarrollando la interfaz de los quioscos de pedido de Burger King.</p>
                        <br>
                        <p>Con el objetivo de mejorar mis habilidades y/o adquirir nuevas, siempre estoy en constante aprendizaje, capacitándome con cursos que me enseñan nuevas y punteras tecnologías.</p>
                        <br>
                        <p>Por esta razón, actualmente me encuentro cursando una Ingeniería Informática en la Universitat Oberta de Catalunya, para convertirme en un desarrollador mas completo.</p>
                    </div>
                
                </article>


                <article id="imgme">
                    <img id="monitorhtml_icon" src="/img/svg/monitorhtml_icon.svg" alt="imagen ordenador">
                </article>
            </section>

            <section id="habilidadS"> <!--Habilidades-->
                <h2>Habilidades</h2>
                <div id="habilidades">
                    <article class="habilidades">
                        <fieldset>
                            <legend><h3>&nbsp;Front-end&nbsp;</h3></legend>
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
                            <img class="imghabilidades" src="/img/svg/html_icon.svg" alt="javascrip">
                        </fieldset>
                        
                    </article>
                    <article class="habilidades">
                        
                        <fieldset>
                            <legend><h3>&nbsp;Back-end&nbsp;</h3></legend>
                            <lo>
                                <li>PHP, POO, MVC</li>
                                <li>Java, POO</li>
                                <li>Diseño y gestión de Base de Datos relacionales</li>
                                <li>SQL</li>
                                <li>Mysql</li>
                                <li>Oracle Database</li>
                                <li>PL/SQL</li>
                                <li>Servidor Web Apache (Xampp)</li>
                            </lo>
                            <img class="imghabilidades"  src="/img/svg/php_icon.svg" alt="php">
                        </fieldset>
                        
                    </article>
                    <article class="habilidades">
                        
                        <fieldset>
                            <legend><h3>&nbsp;Mas habilidades&nbsp;</h3></legend>
                            <lo>
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
                            <img class="imghabilidades" src="/img/svg/habilidad_icon.svg" alt="habilidad">
                        </fieldset>
                        
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
                
                <article class="contacto">
                    <form action="" method="post" id="contacto" name="contacto">
                        <fieldset id="contactar">
                            <legend><h2>&nbsp;Contacto&nbsp;</h2></legend>
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

            <!-- <div class="badge-base LI-profile-badge" data-locale="es_ES" data-size="medium" data-theme="light" data-type="VERTICAL" data-vanity="luis-damian-developer" data-version="v1">
                <a class="badge-base__link LI-simple-link" href="https://es.linkedin.com/in/luis-damian-developer?trk=profile-badge">Luis Damian Masapanta Paredes</a>
            </div> -->
              
            

        </div> <!--fin contenedor section + aside-->

        <footer ><!--pie de paguina-->
            <div id="landscape"></div>
            <div id="footerS">
                <article class="articlefooter">
                    <h3><a href="tel:+34662524204"><img class="fottericon" src="/img/svg/telefono_icon.svg" alt="telefono"></a></h3>
                </article>

                <article class="articlefooter">
                    <h3><a href="https://api.whatsapp.com/send?phone=+34662524204" target="_blank"><img class="fottericon" src="/img/svg/whatsapp_icon.svg" alt="whatsapp"></a></h3>
                </article>

                <article class="articlefooter">
                    <h3><a href="mailto:luidami10@gmail.com"><img class="fottericon" src="/img/svg/gmail_icon.svg" alt="gmail"></a></h3>
                </article>

                <article class="articlefooter">
                    <h3><a href="https://www.linkedin.com/in/luis-damian-developer/" 
                    target="_blank"><img class="fottericon" src="/img/svg/linkedin_icon.svg" alt="linkedin"></a></h3>
                </article>

                <article class="articlefooter">
                    <h3><a href="https://github.com/LuiDami" target="_blank"><img class="fottericon" src="/img/svg/github_icon.svg" alt="github"></a></h3>
                </article>
            </div>

            
            
        </footer>
        
        

        <!--Javascrip-->
        <script>
        </script>
        

     </body> 
     
 </html>
 