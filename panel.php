    <?php
    session_start(); //con esta variable se puede tener una sesion activa
    $name =$_SESSION['usuario'];
    if (!isset($_SESSION['usuario'])){
        header('Location: login.html');
        exit();
    }
    if ($_SESSION['rol'] == 'user') {
        header('Location: user.html');
        exit();
    }
    echo "<h1> Hola $name</h1>";
    echo "<a href='longout.php'> Cerrar Sesion</a>";    
    ?>