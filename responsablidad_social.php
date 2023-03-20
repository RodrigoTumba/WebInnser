<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Innser</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  </head>
  <body>
  <?php include("registrar.php")  ?>
  <nav class="navbar">
      <div class="navbar-overlay" onclick="toggleMenuOpen()">
      </div>

      <button type="button" class="navbar-burger" onclick="toggleMenuOpen()">
        <span class="material-icons button_naranja">menu</span>
      </button>
     
      <a href="index.php"><img class="logo_portada-empresa" src="Imagenes/WEB_INNSER/01.INICIO/LOGO-RENOVADO-INNSER-.png_2.png" height="90px"></a>
      <nav class="navbar-menu">
        <button onclick="location.href='index.php'" type="button" class="active">Inicio</button>
        <button onclick="location.href='index.php#cursos'" type="button" class="active">Cursos</button>
        <button onclick="location.href='empresa.php'" type="button" class="active">Empresa</button>
        <button onclick="location.href='servicios.php'" type="button" class="active">Servicios</button>
        <button onclick="location.href='responsabilidad_social.php'" type="button" class="active">Responsabilidad Social</button>
        <button onclick="location.href='nosotros.php'" type="button" class="active">Nosotros</button>
      </nav>
    </nav>
    <button class="btn-abrir-popup1" id="btn-abrir-popup">Contáctanos</button>
    <div class="overlay" id="overlay">
      <div class="popup" id="popup">
        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        <h3>Formulario de contacto</h3>
        <h4>Innova y potencia a tu equipo</h4>
        <form action="" class="formulario" id="formulario">
		
          <!-- Grupo: Nombre -->
          <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Nombre</label>
            <div class="formulario__grupo-input">
              <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="">
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre solo puede contener letras, espacios y pueden llevar acento</p>
          </div>
    
          <!-- Grupo: Usuario -->
          <div class="formulario__grupo" id="grupo__usuario">
            <label for="usuario" class="formulario__label">Nombre de la empresa</label>
            <div class="formulario__grupo-input">
              <input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="">
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Debe rellenar el campo y solo puede contener numeros, letras y guion bajo.</p>
          </div>
    
          <!-- Grupo: Cargo -->
          <div class="formulario__grupo" id="grupo__cargo">
            <label for="cargo" class="formulario__label">Cargo actual</label>
            <div class="formulario__grupo-input">
              <input type="text" class="formulario__input" name="cargo" id="cargo" placeholder="">
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Debe rellenar el campo y solo puede contener numeros, letras y guion bajo.</p>
          </div>
    
          <!-- Grupo: Numero de empleados -->
          <div class="formulario__grupo" id="grupo__empleados">
            <label for="empleados" class="formulario__label">Número de empleados</label>
            <div class="formulario__grupo-input">
              <input type="text" class="formulario__input" name="empleados" id="empleados" placeholder="">
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Debe rellenar el campo y solo puede contener numeros.</p>
          </div>
    
          <!-- 
            
          <div class="formulario__grupo" id="grupo__password">
            <label for="password" class="formulario__label">Contraseña</label>
            <div class="formulario__grupo-input">
              <input type="password" class="formulario__input" name="password" id="password">
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
          </div>
    
        
          <div class="formulario__grupo" id="grupo__password2">
            <label for="password2" class="formulario__label">Repetir Contraseña</label>
            <div class="formulario__grupo-input">
              <input type="password" class="formulario__input" name="password2" id="password2">
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
          </div>
    
          -->	
    
          <!-- Grupo: Correo Electronico -->
          <div class="formulario__grupo" id="grupo__correo">
            <label for="correo" class="formulario__label">Correo Electrónico</label>
            <div class="formulario__grupo-input">
              <input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com">
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
          </div>
    
          <!-- Grupo: Teléfono -->
          <div class="formulario__grupo" id="grupo__telefono">
            <label for="telefono" class="formulario__label">Teléfono</label>
            <div class="formulario__grupo-input">
              <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="">
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
          </div>
    
    
          <!-- Grupo: Terminos y Condiciones -->
          <div class="formulario__grupo" id="grupo__terminos">
            <label class="formulario__label">
              <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
              Acepto los Términos y Condiciones
            </label>
          </div>
    
          <div class="formulario__mensaje" id="formulario__mensaje">
            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
          </div>
    
          <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button type="submit" class="formulario__btn">Enviar</button>
            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
          </div>
        </form>
      </div>
    </div>

    <div class="go-top-container">
      <div class="go-top-button">
        <i class="fa-solid fa-arrow-up"></i>
    </div>
    </div>

    <div class="ave_fenix_resultados_contenedor">
    <div class="responsabilidad-social-empresas-title">
      <h1>Responsabilidad social</h1>
    </div>
        <div class="titulo_ave_fenix">
          <p>Taller de emprendimiento "Ave Fénix"</p>
        </div>
        <div class="resultados_contenedor">
          <div class="resultados_titulo" data-aos="fade-down">
            <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/r.png" width="90px">
          </div>
          <div class="resultados_texto">
            <p>Generar emprendimientos de innovación social sostenible económicamente en el tiempo para lograr una autonomía de las mujeres de las ollas comunes de Comas. </p>
          </div>
          <div class="resultados_indicadores1">
            <div class="resultados_img_indicadores" data-aos="zoom-in">
                <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/IND3.png" width="100px">
            </div>
            <div class="resultados_texto_indicadores">
                <p>Número de mujeres convocadas: 30 y terminaron 15 con un 50% de deserción</p>
            </div>
          </div>
          <div class="resultados_indicadores2">
            <div class="resultados_img_indicadores" data-aos="zoom-in">
              <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/IND4.png" width="100px">  
            </div>
            <div class="resultados_texto_indicadores">
                <p>Número de padrinos y madrinas donantes: 4 mujeres y 1 varón  </p>
            </div>
          </div>
          <div class="resultados_indicadores3">
            <div class="resultados_img_indicadores" data-aos="zoom-in">
              <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/IND2.png" width="100px">
            </div>
            <div class="resultados_texto_indicadores">
              <p>Se lograron realizar 5 fanpage uno para casa bionegocio generado por los alumnos de biología</p>
            </div>
          </div>
          <div class="resultados_indicadores4">
            <div class="resultados_img_indicadores" data-aos="zoom-in">
              <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/IND1.png" width="100px">
            </div>
            <div class="resultados_texto_indicadores">
              <p>Total de ventas realizadas en la Feria: cada bionegocio generó ventas de sus productos en la feria generando una ganancia económica. </p>
            </div>
          </div>
        </div>
    </div>



    <div class="ave_fenix_indicadores_contenedor_general">
      <div class="ave_fenix_indicadores_contenedor">
      <div class="titulo_ave_fenix_indicadores" data-aos="fade-up">
        <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/i.png" width="90px">
      </div>
        <div class="indicadores_datos1" data-aos="zoom-in">
          <div class="texto_indicadores_datos">
              <p>Número de varones participantes: 3 y quedo 1 solo</p>
          </div>
        </div>
        <div class="indicadores_animacion1" data-aos="zoom-in">
        <div class="imagenes_indicadores_datos">
              <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/caracol.png" width="100px">
          </div>
        </div>
        <div class="indicadores_datos2" data-aos="zoom-in" >
          <div class="texto_indicadores_datos">
              <p>Número de docentes: 4 profesores UNMSM </p>
          </div>
        </div>
        <div class="indicadores_animacion2" data-aos="zoom-in">
            <div class="imagenes_indicadores_datos">
                <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/caracol.png" width="100px">
            </div>
        </div>
        <div class="indicadores_datos3" data-aos="zoom-in" >
          <div class="texto_indicadores_datos">
              <p>Número de horas virtuales: 15 horas</p>
          </div>
        </div>
        <div class="indicadores_animacion3" data-aos="zoom-in">
            <div class="imagenes_indicadores_datos">
                <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/caracol.png" width="100px">
            </div>
        </div>
        <div class="indicadores_datos4" data-aos="zoom-in">
          <div class="texto_indicadores_datos">
              <p>Número de alumnos: 17 de ciencias biológicas </p>
          </div>
        </div>
        <div class="indicadores_animacion4" data-aos="zoom-in">
            <div class="imagenes_indicadores_datos">
                <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/caracol.png" width="100px">
            </div>
        </div>
        <div class="indicadores_datos5" data-aos="zoom-in">
          <div class="texto_indicadores_datos">
              <p>Número de horas presencial: 120 horas</p>
          </div>
        </div>
        <div class="indicadores_animacion5" data-aos="zoom-in">
          <div class="imagenes_indicadores_datos">
              <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/caracol.png" width="100px">
          </div>
        </div>
        <div class="indicadores_datos6" data-aos="zoom-in">
          <div class="texto_indicadores_datos">
              <p>Total de financiamiento levantado: 1,800 soles</p>
          </div>
        </div>
        <div class="indicadores_animacion6" data-aos="zoom-in">
          <div class="imagenes_indicadores_datos">
              <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/caracol.png" width="100px">
          </div>
        </div>
        </div>
    </div>

    <div class="responsabilidad-social-empresa-total">
<div class="responsabilidad-social-empresa">
  <div class="responsabilidad-social-empresa-content">
    
    <div class="responsabilidad-social-titulo">
      <h2>Metodología de taller de emprendimiento Ave Fénix</h2>
    </div>
    <div class="responsabilidad-social-empresa-contenedor-card">
      <div class="card-responsabilidad-social" data-aos="fade-right">
        <div class="contenido-card-responsabilidad-social">
          <p>Gestión de horas no lectivas con responsabilidad social</p>
        </div>
        <div class="imagen-card-responsabilidad-social1">
        </div>
      </div>
      <div class="card-responsabilidad-social" data-aos="fade-left">
        <div class="imagen-card-responsabilidad-social2">
        </div>
        <div class="contenido-card-responsabilidad-social">
          <p>Desarrollo de los talleres de emprendimiento a ollas comunes</p>
        </div>
      </div>
      <div class="card-responsabilidad-social" data-aos="fade-right">
        <div class="contenido-card-responsabilidad-social">
          <p>Cursos de emprendimiento a alumnos</p>
        </div>
        <div class="imagen-card-responsabilidad-social3">
        </div>
      </div>
      <div class="card-responsabilidad-social" data-aos="fade-left">
        <div class="imagen-card-responsabilidad-social4">
        </div>
        <div class="contenido-card-responsabilidad-social">
          <p>Encuentro emprendedores con alumnos de biotecnología</p>
        </div>
      </div>
      <div class="card-responsabilidad-social" data-aos="fade-right">
        <div class="contenido-card-responsabilidad-social">
          <p>Biologos apoyan en generar marketing digital e informe completo de emprendimiento</p>
        </div>
        <div class="imagen-card-responsabilidad-social5">
        </div>
      </div>
      <div class="card-responsabilidad-social" data-aos="fade-left">
        <div class="imagen-card-responsabilidad-social6">
        </div>
        <div class="contenido-card-responsabilidad-social">
          <p>Preparación para la feria de emprendimiento</p>
        </div>
      </div>
      <div class="card-responsabilidad-social" data-aos="fade-right">
        <div class="contenido-card-responsabilidad-social">
          <p>Taller de emprendimiento Ave Fénix</p>
        </div>
        <div class="imagen-card-responsabilidad-social7">
        </div>
      </div>
      <div class="card-responsabilidad-social" data-aos="fade-left">
        <div class="imagen-card-responsabilidad-social8">
        </div>
        <div class="contenido-card-responsabilidad-social">
          <p>Examen final de los biologos</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

    <div class="emprendimientos_contenedor">
      <div class="titulo_emprendimientos">
        <p>EMPRENDIMIENTOS</p>
      </div>
      <div class="emprendimientos_contenedor_contenido">
      <div class="encabezado_imagen_emprendimiento">
        <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/Recurso 13.png" width="1400px">
      </div>
            <div class="img_emprendimiento1">
              <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/banner_1.jpg" width="250px">
            </div>
            <div class="titulo_emprendimiento1">
              <p>NATULBRON</p>
            </div>
            <div class="img_emprendimiento2">
              <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/banner_2.jpg" width="250px">
            </div>
            <div class="titulo_emprendimiento2">
              <p>YUYAMI</p>
            </div>
            <div class="img_emprendimiento3">
              <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/banner_3.jpg" width="250px">
            </div>
            <div class="titulo_emprendimiento3">
              <p>MANÁ</p>
            </div>
            <div class="img_emprendimiento4">
              <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/banner_4.jpg" width="250px">
            </div>
            <div class="titulo_emprendimiento4">
              <p>TIARA</p>
            </div>
            <div class="img_emprendimiento5">
              <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/banner_5.jpg" width="250px">
            </div>
            <div class="titulo_emprendimiento5">
              <p>ANIMIO</p>
            </div>
      </div>
      </div>

      <div class="footer-pagina2">
  <div class="footer1">
    <div class="footer1-1">
    <a href="index.html"><img src="Imagenes/WEB_INNSER/01.INICIO/LOGO-RENOVADO-INNSER-.png_2.png" width="200px"></a>
    </div>
    <div class="footer1-2">
      <br><br>
    <p>® Innser 2023</p>
    </div>
  </div>
  <div class="footer2">
    <div class="footer2-1">
      <h1>Socios Globales:</h1>
    </div>
    <div class="footer2-2">
    <a href="https://tsunagaru-edutech.com/" target="_blank"><img src="Imagenes/WEB_INNSER/Footer/Recurso28.png" width="70px"></a>
    <a href="https://fractalup.com/" target="_blank"><img src="Imagenes/WEB_INNSER/Footer/Recurso29.png" width="70px"></a>
    <a href="https://certiprof.com/" target="_blank"><img src="Imagenes/WEB_INNSER/Footer/Recurso30.png" width="65px"></a>
    </div>
  </div>
  <div class="footer3">
    <div class="footer3-1">
      <h1>Contenido</h1>
    </div>
    <div class="footer3-2">
      <a href="index.php">Inicio</a>
      <a href="index.php">Cursos</a>
      <a href="empresa.php">Empresa</a>
      <a href="nosotros.php">Nosotros</a>
    </div>
  </div>
  <div class="footer4">
    <div class="footer4-1">
      <h1>Contacto:</h1>
    </div>
    <div class="footer4-2">
      <a href="https://www.facebook.com/InnserAcademy" target="_blank"><img src="Imagenes/WEB_INNSER/01.INICIO/fb.png" width="30px"></a>
      <a href="https://www.linkedin.com/company/innserpe/" target="_blank"><img src="Imagenes/WEB_INNSER/01.INICIO/in.png" width="30px" ></a>
      <a href="https://www.youtube.com/@rosaalcantara973" target="_blank"><img src="Imagenes/WEB_INNSER/01.INICIO/yt.png"  width="30px"></a>
    </div>
  </div>
</div>

    <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({duration:2000});
    </script>
     <script src="formulario.js"></script>
    <script type="text/javascript" src="./main.js"></script>
    <script src="barra_lateral.js"></script>  
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e013d55bb1.js" crossorigin="anonymous"></script>
  </body>
  </html>