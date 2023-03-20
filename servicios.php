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
   <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="servicios.css">
   <link href="styles.css" rel="stylesheet"/>
   
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
        <button onclick="location.href='responsablidad_social.php'" type="button" class="active">Responsabilidad Social</button>
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

    <div class="nuestros_servicios">
    <div class="servicios_caracol_tarjeta">
      <div class="servicio_card_caracol">
        <div class="servicio_texto_card_caracol">
          <a href="#seccion1">
          <h1>Talleres de emprendimiento y creatividad</h1>
          </a>
        </div>
        <div class="servicio-imagen_card_caracol">
          
          <img src="Imagenes/WEB_INNSER/05.SERVICIOS/servicio.png" width="230px">
        
        </div>
      </div>
    </div>
    <div class="servicios_caracol_tarjeta">
      <div class="servicio_card_caracol">
        <div class="servicio_texto_card_caracol">
          <a href="#seccion2">
          <h1>Innovación empresarial abierta</h1>
          </a>
        </div>
        <div class="servicio-imagen_card_caracol">
          <a href="#seccion2">
          <img src="Imagenes/WEB_INNSER/05.SERVICIOS/servicio.png" width="230px">
          </a>
        </div>
      </div>
    </div>
    <div class="servicios_caracol_tarjeta">
      <div class="servicio_card_caracol">
        <div class="servicio_texto_card_caracol">
          <a href="#seccion3">
          <h1>Innovación social de impacto</h1>
          </a>
        </div>
        <div class="servicio-imagen_card_caracol">
          <a href="#seccion4">
          <img src="Imagenes/WEB_INNSER/05.SERVICIOS/servicio.png" width="230px">
          </a>
        </div>
      </div>
    </div>
    <div class="servicios_caracol_tarjeta">
      <div class="servicio_card_caracol">
        <div class="servicio_texto_card_caracol">
          <a href="#seccion4">
          <h1>Misiones internacionales de innovación</h1>
          </a>
        </div>
        <div class="servicio-imagen_card_caracol">
          <a href="#seccion4">
          <img src="Imagenes/WEB_INNSER/05.SERVICIOS/servicio.png" width="230px">
          </a>
        </div>
      </div>
    </div>
    </div>
    
    <a name="seccion1"></a>
    <div class="tallleres_de_emprendimiento_y_creatividad" id="Talleres_emprendimiento">
    <div class="titulo-card-empresas"> 
      <div class="titulo-empresas-aprendizaje">
        
        <h2>Talleres de emprendimiento y creatividad</h2> 
      </div>
      <div class="barrita-empresas-aprendizaje">
        <div class="progreso2" style=" --w:100%"></div>
      </div>
    </div>

    <div class="texto_emprendimiento_creatividad" data-aos="flip-left">
      <p>Realizamos talleres inmersivos para formar colaboradores con mindset y herramientas que potencien las habilidades blandas
        como el liderazgo, la resolución de problemas, trabajo en equipo, comunicación afectiva y pitch de ventas
      </p>
    </div>

    <div class="contenedor_videos_emprendimiento_creatividad">
      <div class="caracol_imagen1">
        <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/caracol.png" width="100px">
      </div>
      <div class="caracol_imagen2">
        <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/caracol.png" width="100px">
      </div>
      <div class="caracol_imagen3">
        <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/caracol.png" width="100px">
      </div>
      <div class="caracol_imagen4">
        <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/caracol.png" width="100px">
      </div>
      <div class="contenedor_video_emprendimiento_creatividad">
        <div class="video_emprendimiento_creatividad">
        <video src="Imagenes/WEB_INNSER/05.SERVICIOS/Talleres_de_emprendimiento_y_creatividad/cotopaxi.mp4" controls width="300px" height="300px">
        </video>
        </div>
        <div class="video_emprendimiento_texto">
        <p>Talleres de Innovación en Ecuador con la Universidad Tecnica de Cotopaxi - Ecuador</p>
        </div>
      </div>
      <div class="contenedor_video_emprendimiento_creatividad">
      <div class="video_emprendimiento_creatividad">
        <video src="Imagenes/WEB_INNSER/05.SERVICIOS/Talleres_de_emprendimiento_y_creatividad/docente-educacion-digital_ctTnPorc.mp4" controls width="300px" height="300px">      
        </video>
        </div>
        <div class="video_emprendimiento_texto">
        <p>Formación de docentes en Educación Digital Junto a la Oficina de Educación y Deporte de Lima Metropolitana </p>
        </div>
      </div>
      <div class="contenedor_video_emprendimiento_creatividad">
      <div class="video_emprendimiento_creatividad">
        <video src="Imagenes/WEB_INNSER/05.SERVICIOS/Talleres_de_emprendimiento_y_creatividad/PROGRAMA_DE_MAESTRO_INFLUENCER.mp4" controls width="300px" height="300px">
        </video>
        </div>
        <div class="video_emprendimiento_texto">
        <p>Programa de maestro influencer brindado por Innser y la Municipalidad de Lima</p>
        </div>
      </div>
      <div class="contenedor_video_emprendimiento_creatividad">
      <div class="video_emprendimiento_creatividad">
        <video src="Imagenes/WEB_INNSER/05.SERVICIOS/Talleres_de_emprendimiento_y_creatividad/Codespa.mp4" controls width="300px" height="300px">
        </video>
        </div>
        <div class="video_emprendimiento_texto">
        <p>Challenge de emprendedores en Huaral realizado en conjunto con Codespa</p>
        </div>
      </div>
      </div>

    <div class="titulo_universidades_emprendimiento_creatividad">
      <h1>Nuestros usuarios</h1>
    </div>
      <div class="logos_universidades_emprendimiento_creatividad" data-aos="flip-left">
        <div class="caracol_imagen5">
          <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/caracol.png" width="150px">
        </div>


        <div class="logo_universidad_emprendimiento_creatividad">
        <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Talleres_de_emprendimiento_y_creatividad/Logo_de_universidades/u1.png" width="200px">
        </div>
        <div class="logo_universidad_emprendimiento_creatividad">
        <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Talleres_de_emprendimiento_y_creatividad/Logo_de_universidades/u2.png" width="200px">
        </div>
        <div class="logo_universidad_emprendimiento_creatividad">
        <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Talleres_de_emprendimiento_y_creatividad/Logo_de_universidades/u3.png" width="200px">
        </div>
        <div class="logo_universidad_emprendimiento_creatividad">
        <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Talleres_de_emprendimiento_y_creatividad/Logo_de_universidades/u4.png" width="200px">
        </div>
        <div class="logo_universidad_emprendimiento_creatividad">
        <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Talleres_de_emprendimiento_y_creatividad/Logo_de_universidades/u5.png" width="200px">
        </div>
        
        
      </div>
    </div>

    <a name="seccion2"></a>
    <div class="innovación_empresarial_abierta">
    <div class="titulo-card-empresas"> 
        <div class="barrita-empresas-aprendizaje">
          <div class="progreso" style=" --w:100%"></div>
        </div>
        <div class="titulo-empresas-aprendizaje">
          <h2>Talleres de emprendimiento y creatividad</h2> 
          
        </div>
    </div>
    <div class="innovacion_empresariabla_abierta_descripcion" data-aos="flip-right">
      <p>Ejecutamos programa para fomentar la cultura de innovacion en los colaboradores generando nuevas ideas creativas que crean valor a la empresa</p>
    </div>

        <div class="titulo-principal-innovacion">
            <h1 class="challenge_titulo">METODOLOGÍA</h1>
            <h1 class="challenge_span"> DEL CHALLENGE</h1>
        </div>

        <div class="contenedor-tarjeta-innovacion1">
            <div class="imagen-tarjeta-innovacion" data-aos="zoom-in">
                <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovación_empresarial_abierta/Recurso5.png" width="70px">
            </div>
            <div class="contenedor_titulo1-innovacion">
                <h3 class="challenge_span2">NECESIDADES </h3>
                <h3 class="challenge_titulo2">DE LA EMPRESA</h3>
            </div>
            <div class="imagenes-acopladas-innovacion">
              <div class="numero-innovacion" data-aos="fade-down-left">
                <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovación_empresarial_abierta/14.png" width="80px" >
              </div>
              <div class="caracol-innovacion">
                <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovación_empresarial_abierta/Recurso4.png" width="220px">
               </div>
            </div>
            
            <div class="contenido-tarjeta-innovacion">
                <p>-Webinar: Cultura de Innovación abierta a las partes</p>
                <p>-Visita a la Empresa</p>
                <p>-Seleccion de los desafios</p>
            </div>
        </div>

        <div class="contenedor-tarjeta-innovacion2">
            <div class="imagen-tarjeta-innovacion" data-aos="zoom-in">
                <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovación_empresarial_abierta/Recurso6.png" width="70px">
            </div>
          <div class="contenedor_titulo2-innovacion">
              <h3 class="challenge_span2">LANZAMIENTO </h3>
              <h3 class="challenge_titulo2">DE RETOS</h3>
          </div>
            
          <div class="imagenes-acopladas-innovacion">
              <div class="numero-innovacion" data-aos="fade-down-left">
              <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovación_empresarial_abierta/13.png" width="80px">
              </div>
              <div class="caracol-innovacion">
              <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovación_empresarial_abierta/Recurso4.png" width="220px">
               </div>
              
            </div>
            <div class="contenido-tarjeta-innovacion">
                <p>-Videos de retos</p>
                <p>-Paginas web/redes</p>
                <p>-Inauguración</p>
                <p>-Convocatoria</p>
                <p>-Selección y publicación de las startup participantes</p>
            </div>
        </div>

        <div class="contenedor-tarjeta-innovacion3">
            <div class="imagen-tarjeta-innovacion" data-aos="zoom-in">
                  <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovación_empresarial_abierta/Recurso7.png" width="70px">
            </div>
            <div class="contenedor_titulo3-innovacion">
                <h3 class="challenge_span2">SOLUCIONES </h3>
                <h3 class="challenge_titulo2">STARTUP</h3>
            </div>

            <div class="imagenes-acopladas-innovacion">
              <div class="numero-innovacion" data-aos="fade-down-left">
              <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovación_empresarial_abierta/12.png" width="80px">
              </div>
              <div class="caracol-innovacion">
              <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovación_empresarial_abierta/Recurso4.png" width="220px">
              </div>
            </div>
            <div class="contenido-tarjeta-innovacion">
                <p>-Visita a la empresa con CEOS</p>
                <p>-Talleres de preparación de emprendimiento</p>
                <p>-Bootcamp de intensivo</p>
            </div>
        </div>

        <div class="contenedor-tarjeta-innovacion4">
            <div class="imagen-tarjeta-innovacion" data-aos="zoom-in">
                  <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovación_empresarial_abierta/Recurso9.png" width="70px">
            </div>

            <div class="contenedor_titulo4-innovacion">
                <h3 class="challenge_span2">SELECCIÓN/</h3>
                <h3 class="challenge_titulo2">PREMIACIÓN</h3>
            </div>

            <div class="imagenes-acopladas-innovacion">
              <div class="numero-innovacion" data-aos="fade-down-left">
              <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovación_empresarial_abierta/11.png" width="80px">
              </div>
              <div class="caracol-innovacion">
              <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovación_empresarial_abierta/Recurso4.png" width="220px">
              </div>
            </div>
            <div class="contenido-tarjeta-innovacion">
                <p>-Selección de los 5 mejores proyectos de innovación</p>
                <p>-Premio a la mejor solución innovadora</p>
                <p>-Clausura del evento</p>
                <p>Nota de prensa, entrevistas</p>
            </div>
        </div>

        <div class="contenedor-tarjeta-innovacion5">
            <div class="imagen-tarjeta-innovacion" data-aos="zoom-in">
                <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovación_empresarial_abierta/Recurso8.png" width="70px">
            </div>
            <div class="contenedor_titulo5-innovacion">
                <h3 class="challenge_span2">IMPACTO EN</h1>
                <h3 class="challenge_titulo2" >LA EMPRESA</h3>
            </div>

            <div class="imagenes-acopladas-innovacion">
              <div class="numero-innovacion" data-aos="fade-down-left">
              <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovación_empresarial_abierta/10.png" width="80px">
              </div>
              <div class="caracol-innovacion">
              <img src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovación_empresarial_abierta/Recurso4.png" width="220px">
              </div>
            </div>
            <div class="contenido-tarjeta-innovacion">
                <p>-Prototipado/Proyecto piloto</p>
                <p>-Acuerdos entre las partes</p>
                <p>-Seguimiento</p>
            </div>
        </div>

        <div class="logo-innovacion">
              <img src="Imagenes/WEB_INNSER/01.INICIO/LOGO-RENOVADO-INNSER-.png_2.png" width="280px"> 
        </div>

    </div>
    <a name="seccion3"></a>
    <div class="innovacion_social_impacto">
    <div class="titulo-card-empresas"> 
      <div class="titulo-empresas-aprendizaje">
      
        <h2>Innovacion social de impacto</h2> 
      </div>
      <div class="barrita-empresas-aprendizaje">
        <div class="progreso2" style=" --w:100%"></div>
      </div>
    </div>

    <div class="descripcion_innovacion_social_impacto">
      <p>Generamos soluciones innovadoras a problemas sociales y ambientes reales, con el fin de luchar contra la probreza, 
        la exclusión social, delincuencia, cambio climático, etc.
      </p>
    </div>

    <div class="contenedor_videos_impacto_social">
      <div class="caracol_imagen6">
        <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/caracol.png" width="100px">
      </div>
      <div class="caracol_imagen7">
        <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/caracol.png" width="100px">
      </div>
      <div class="caracol_imagen8">
        <img src="Imagenes/WEB_INNSER/06.RESPONSABILIDAD_SOCIAL/caracol.png" width="100px">
      </div>
      <div class="contenedor_video_impacto_social">
        <video src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovacion_social_de_impacto/talleres-de-innovacion-social-en-yurimaguas-2018_dvBDHVEq.mp4" controls width="300px" height="300px">
        </video>
        <div class="video_emprendimiento_texto">
        <p>Talleres de innovación social en Yurimaguas  2018</p>
        </div>
      </div>
      
      <div class="contenedor_video_impacto_social">
        <video src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovacion_social_de_impacto/hilos tren.mp4" controls width="300px" height="300px">      
        </video>
        <div class="video_emprendimiento_texto">
        <p>Reutilización de las mermas de la empresa Hilos Tren en productos reciclados por emprendedoras mujeres del Cono Norte en Comas.</p>
        </div>
      </div>
      <div class="contenedor_video_impacto_social">
        <video src="Imagenes/WEB_INNSER/05.SERVICIOS/Innovacion_social_de_impacto/textil-amazonas_kbjmmcD4.mp4" controls width="300px" height="300px">
        </video>
        <div class="video_emprendimiento_texto">
        <p>Programa de económica circular en colaboracion con la empresa "Textil Amazonas" donde mujeres emprendedoras trabajan para la reactivación económica de sus hogares.</p>
      </div>
    </div>
      <a name="seccion4"></a>
    </div>
    
    <div class="misiones_internacionales_de_innovacion">
      <div class="titulo-card-empresas"> 
        <div class="barrita-empresas-aprendizaje">
          <div class="progreso" style=" --w:100%"></div>
        </div>
        <div class="titulo-empresas-aprendizaje">
        
          <h2>Talleres de emprendimiento y creatividad</h2> 
        </div>
      </div>
      <div class="descripcion_misiones_internacionalles_de_innovacion" data-aos="flip-left">
        <p>Organizamos misiones internacionales con los cuales se propone una agenda innovadora y exclusiva a destinos estrategicos 
          con temas de innovación, desarrollo sostenible. Se realizan visitas empresariales
        </p>
      </div>

      <div class="peliculas-recomendadas contenedor">
			<div class="contenedor-titulo-controles">
				<h3>Contenido</h3>
				<div class="indicadores"></div>
			</div>

			<div class="contenedor-principal">
				<button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

				<div class="contenedor-carousel">
					<div class="carousel">
						<div class="pelicula">
							<a href="#"><img src="Imagenes/WEB_INNSER/05.SERVICIOS/misiones_internacionales/1.jpg" width="400PX"></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="Imagenes/WEB_INNSER/05.SERVICIOS/misiones_internacionales/2.jpg" width="400PX"></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="Imagenes/WEB_INNSER/05.SERVICIOS/misiones_internacionales/3.jpg" width="400PX"></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="Imagenes/WEB_INNSER/05.SERVICIOS/misiones_internacionales/4.jpg" width="400PX"></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="Imagenes/WEB_INNSER/05.SERVICIOS/misiones_internacionales/5.jpg" width="400PX"></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="Imagenes/WEB_INNSER/05.SERVICIOS/misiones_internacionales/6.jpg" width="400PX"></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="Imagenes/WEB_INNSER/05.SERVICIOS/misiones_internacionales/7.jpg" width="400PX"></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="Imagenes/WEB_INNSER/05.SERVICIOS/misiones_internacionales/8.jpg" width="400PX"></a>
						</div>
					</div>
				</div>

				<button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
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

   

    <div class="go-top-container">
      <div class="go-top-button">
        <i class="fa-solid fa-arrow-up"></i>
    </div>
    </div>

    <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({duration:2000});
    </script>
    <script src="main.js"></script>
     <script src="formulario.js"></script>
    <script type="text/javascript" src="./main.js"></script>
    <script src="barra_lateral.js"></script>  
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e013d55bb1.js" crossorigin="anonymous"></script>
  </body>
  </html>