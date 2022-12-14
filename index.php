<?php

if(isset($_POST["submit"]))
{
    $nombre = $_POST["nombre"];
    $mail = $_POST["mail"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
    
    $para = "lekarimsrl@gmail.com";
    $asunto = "Este email fue enviado desde la web de Le Karim";
    $message = $nombre . "" . $telefono . "" . $mail . "\n\n" . $mensaje;
    
    mail($para, $asunto, utf8_decode($message));
    
    header('Location:exito.html');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Ofrecemos productos de elaboración artesanal en el rubro de ropa de cama. ">

    <meta name="keywords" content="Ropa de cama, cubrecama, sabana, colcha, mantel, cortina, sabana infantil">

    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">

    <!-- Open graph -->
    <meta property="og:type" content="web">
    <meta property="og:title" content="Le Karim">
    <meta property="og:description" content="Ofrecemos productos de elaboración artesanal en el rubro de ropa de cama.">
    <meta property="og:url" content="http://lekarim.com.ar/">
    <meta property="og:image" content="http://lekarim.com.ar/img/logoU.png">


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Le Karim</title>
</head>
<body>
  <div class="container" id="bodyIndex">
    <!-- HEADER -->
    <header class="header navbar navbar-light navbar-expand-sm d-flex align-items-center fixed-top" id="header">
      <section>
          <img src="./img/logoU.png" alt="Logo Le karim" class="w-100 logo">
      </section>
      
      <section class="navbar-collapse collapse show col-10 mx-auto navbar-texto" id="collapsibleNavbar">
          <ul class="navbar-nav ms-auto">
          <li class="nav-item list-item">
              <a class="nav-link active" aria-current="page" href="index.html" id="tituloNav">HOME</a>
          </li>
          <li class="nav-item dropdown">
              <div class="dropdown">
              <button class="dropbtn">
                  <a class="nav-link" href="productos.html" id="navbarDropdownMenuLink" role="button"> <span id="tituloNav">PRODUCTOS</span> </a>
              </button>
              <div class="dropdown-content">
                  <a href="acolchados.html">Acolchados</a>
                  <a href="sabanas.html">Sábanas</a>
                  <a href="ajustables.html">Ajustables</a>
                  <a href="edredones.html">Edredones</a>
                  <a href="frazadas.html">Frazadas</a>
                  <a href="cubrecamas.html">Cubrecamas</a>
                  <a href="cortinas.html">Cortinas</a>
                  <a href="manteles.html">Manteles</a>
                  <a href="almohadas.html">Almohadas</a>
              </div>
              </div>
          </li>
          <li class="nav-item">   
              <a class="nav-link" href="index.html#nosotros" id="tituloNav">NOSOTROS</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="index.html#contacto" id="tituloNav">CONTACTO</a>
          </li>
          </ul>
      </section>
  </header>
    <!-- CIERRO HEADER -->
    <!-- CARRUSEL -->
    <div class="tituloCEL">
      <h1 class="text-center">LE KARIM</h1>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/Index/fotocarrusel.jpeg" class="d-block w-100" alt="..." id="carrusel">
        </div>
      </div>
    </div>
    <!-- CIERRO CARRUSEL -->
    <!-- PRODUCTOS  -->
    <section class="productos">
      <h1 class="text-center mt-3 mb-3 prods">Productos</h1>
      <div>
        <a href="ajustables.html"><img src="./img/Index/catAjustablesIndex.jpg" class="img-thumbnail imgprod" alt="..."></a>
        <a href="cortinas.html"><img src="./img/Index/catcortinasIndex.jpg" class="img-thumbnail imgprod" alt="..."></a>
        <a href="cubrecamas.html"><img src="./img/Index/catCubrecamasIndex.jpg" class="img-thumbnail imgprod" alt="..."></a>
        <a href="productos.html"><img src="./img/Index/catProds.jpg" class="img-thumbnail imgprods" alt="..."></a>
      </div>
    </section>
    <!-- CIERRO PRODUCTOS  -->
    <!-- NOSOTROS -->
    <section class="noostros" id="nosotros">
      <h1 class="text-center mt-3 mb-3 titulonosotros">¿Quiénes somos?</h1>
      <div class="rect pt-2 my-2 row">
        <p class="text-center">
          Nuestra empresa comienza hace más de 35 años con el fin de ofrecer productos de elaboración artesanal en el rubro de ropa de cama. 
            <br>
          Desde el origen, hemos crecido poniéndonos siempre mayores objetivos para llegar a cada cliente con nuestra mayor creatividad y compromiso. 
            <br>
          Contamos con tres plantas de producción con maquinarias de última tecnología, donde se lleva a cabo la fabricación del inicio al fin de cada producto, innovando constantemente en materiales, materia prima, diseño y packaging. 
            <br>
          Nuestro mayor orgullo es nuestro vínculo personalizado con cada cliente con el que conformamos pilares del desarrollo y crecimiento mutuo.
        </p>
      </div>
    </section>
    <!-- CIERRO NOSOTROS  --> 
    <!-- CONTACTO -->
    <section class="contacto" id="contacto">
      <h1 class="titulocontacto text-center">Contacto</h1>
      <form action="" method="POST" class="p-3">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name" name="nombre" required>
            <label for="floatingInput">Nombre*</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="mail" required>
            <label for="floatingInput">Email*</label>
        </div>
        <div class="form-floating mb-3">
            <input type="tel" class="form-control" id="floatingInput" placeholder="+54 11-1234-5678" name="telefono">
            <label for="floatingInput">Teléfono</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control textarea" placeholder="Escribí tu mensaje" id="floatingTextarea2" name="mensaje" style="height:170px" required></textarea>
            <label for="floatingTextarea2">Mensaje*</label>
        </div>
        <button type="submit" class="my-3 enviar" name="submit">Enviar</button>
      </form>
    </section>
    <!-- CIERRO CONTACTO -->

    <!-- FOOTER -->
    <div class="footer">
      <div>
        <p>
          <span>
            <b>
              Bolivia 3021, Caseros (PBA) | 
              <a href="mailto:lekarimsrl@gmail.com" class="mail fst-italic">lekarimsrl@gmail.com</a>
              | <a href="tel:+541136906537">Tel: +54 11 3690-6537</a> | Comunicate con nosotros
            </b>
          </span>
        </p>
      </div>
      <div>
        <p>
          <span> Desarrollado por
            <a href="https://www.linkedin.com/in/martina-joaquin-ba5058200" class="fst-italic">Martina Joaquin</a>
             | 
            <a href="malito:martujoaquin02@gmail.com?Subject=Quiero%20crear%20mi%20página%20web" class="fst-italic">martujoaquin02@gmail.com</a></span>
        </p>
      </div>
    </div>
    <!-- CIERRO FOOTER -->

  </div>


  <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>