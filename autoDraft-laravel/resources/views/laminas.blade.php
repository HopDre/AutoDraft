<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/logo-dos.png">
    <link rel="stylesheet" href="/styles/styles-laminas.css" type="text/css">
    <title>Láminas de seguridad</title>
</head>
<body>
    <div class="redes-sociales">
        <a href="#"><img src="/assets/img/fb.png" alt=""></a>
        <a href="#"><img src="/assets/img/ig.png" alt=""></a>
    </div>
    <div class="head-list">
        <ul>
            <li class="imagen-hidden-uno"><a href="#"><img src="/assets/img/logo.png" alt=""></a></li>
            <li class="imagen-hidden"><a href="#"><img src="/assets/img/blanco.png" alt=""></a></li>
            <li><a href="{{ route('index') }}">Inicio</a></li>
            <li><a href="{{ route('catalogo') }}">Catálogo</a></li>
            <li><a href="{{ route('laminas') }}" class="active">Láminas de seguridad</a></li>
            <li><a href="{{ route('sobre') }}">Sobre nosotros</a></li>
            <li><a href="{{ route('contacto') }}">Contacto</a></li>
            <li><a href="{{ route('dashboard') }}">Intranet</a></li>

            <li><a href="#">Cesta</a></li>
        </ul>
    </div>
    <div class="banner-sobre-nosotros">
        <h2>Láminas de seguridad</h2>
    </div>
    <section>
        <div class="vista-uno">
            <img src="/assets/img-sobre/11.png" alt="">
            <p class="primer-parrafo">Contamos con 7 distintos niveles de protección, <br>
            distribuido en tres planes opcionales</p>
            <br><br><br>
            <div class="listado">
                <span><img src="/assets/img-sobre/flecha.png" alt=""><p>Plan Básico (4-8-12 micras)</p></span>
                <span><img src="/assets/img-sobre/flecha.png" alt=""><p>Plan Standar (16-24-36 micras)</p></span>
                <span><img src="/assets/img-sobre/flecha.png" alt=""><p>Plan Máxima Seguridad (48 micras)</p></span>
                <span><img src="/assets/img-sobre/flecha.png" alt=""><p>Plan Máxima Seguridad (48 micras)</p></span>
            </div>
        </div>
    </section>
    <div class="separation">
        <img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt="">
    </div>
    <section>
        <div class="vista-dos">
            <img src="/assets/img-sobre/22.png" alt="">
            <p class="primer-parrafo">Láminas de seguridad anti explosivas según todos <br>
            los requerimientos mineros, 4 - 7 - 12 micras.</p>
            <br><br><br>
            <div class="listado">
                <span><img src="/assets/img-sobre/flecha.png" alt=""><p>Certificación completa según normativa interna</p></span>
                <span><img src="/assets/img-sobre/flecha.png" alt=""><p>100% de experiencia en flotas</p></span>
                <span><img src="/assets/img-sobre/flecha.png" alt=""><p>Camionetas pick up</p></span>
                <span><img src="/assets/img-sobre/flecha.png" alt=""><p>Furgones</p></span>
                <span><img src="/assets/img-sobre/flecha.png" alt=""><p>Camionetas tracktos</p></span>
                <span><img src="/assets/img-sobre/flecha.png" alt=""><p>Plan Máxima Seguridad (48 micras)</p></span>
            </div>
        </div>
    </section>
    <div class="separation">
        <img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt="">
    </div>
    <section>
        <div class="vista-tres">
            <img src="/assets/img-sobre/33.png" alt="">
            <p class="primer-parrafo">Más de 25 tipos de láminas, seguridad, estética, corporativa, <br>
            uso privado y mucho más.</p>
            <br><br><br>
            <div class="listado">
                <span><img src="/assets/img-sobre/flecha.png" alt=""><p>Con aplicación en fachadas de banco, Porterías</p></span>
                <span><img src="/assets/img-sobre/flecha.png" alt=""><p>Centros de estética</p></span>
                <span><img src="/assets/img-sobre/flecha.png" alt=""><p>Terrazas</p></span>
                <span><img src="/assets/img-sobre/flecha.png" alt=""><p>Quinchos</p></span>
                <span><img src="/assets/img-sobre/flecha.png" alt=""><p>Valor por m2</p></span>
            </div>
        </div>
    </section>
    <section id="seccion-tres">
        <div class="pagos"><img src="/assets/img/pagos.png" alt=""></div>
        <div class="contacto">
            <span class="contacto-descripcion">
                <p>Líderes en seguridad Automotriz<br><br>
                    DIRECCIÓN: Agua santa 3305, Viña Del Mar, 2520000.<br>
                    TELÉFONO: (+56) 3290 8872 / (+56) 9 4771 6961<br>
                    EMAIL: ventas.autodraft@gmail.com<br><br><br><br>
                    LUN - VIE: 9:45 - 18:00<br>
                    SÁBADO: 10:00 - 13:00<br>
                    DOMINGO: CERRADO
                </p>
                <div class="contacto-imagen"><img src="/assets/img/logo-dos.png" alt=""></div>
            </span>
            <span class="formulario">
                <p>Nombre</p>
                <br>
                <input type="text">
                <br>
                <br>
                <p>Email</p>
                <br>
                <input type="text">
                <br>
                <br>
                <p>Dirección</p>
                <br>
                <input type="text">
                <br><br>
                <div class="btn-envio"><input type="submit"></div>
            </span>
        </div>
        <div class="linea-final"></div>
    </section>
</body>
</html>