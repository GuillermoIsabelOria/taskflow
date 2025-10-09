<?php
// Categoría 1: Variables y Tipos de Datos

// Problema 1.1: Perfil de Usuario

$nombre = "Guillermo";
$apellidos = "Isabel Oria";
$edad = 18;
$altura = 1.69;
$es_estudiante = true;

echo "=== Perfil de Usuario ===\n";
echo "Nombre: $nombre\n";
echo "Apellidos: $apellidos\n";
echo "Edad: $edad\n";
echo "Altura: $altura metros\n";
echo "¿Es estudiante?: " . ($es_estudiante ? "Sí" : "No") . "\n\n";


// Problema 1.2: Información de un Producto

$nombre_producto = "Cascos Sony";
$precio = 29.99;
$stock_disponible = 22;
$esta_en_oferta = true;

echo "=== Información del Producto ===\n";
echo "Nombre del producto: $nombre_producto\n";
echo "Precio: $$precio\n";
echo "Stock disponible: $stock_disponible unidades\n";
echo "¿Está en oferta?: " . ($esta_en_oferta ? "Sí" : "No") . "\n\n";


// Problema 1.3: Constantes de la Aplicación

define("NOMBRE_SITIO", "Mi Tienda Online");
define("VERSION_APP", 1.0);

echo "=== Constantes de la Aplicación ===\n";
echo "Nombre del sitio: " . NOMBRE_SITIO . "\n";
echo "Versión de la app: " . VERSION_APP . "\n";


// Categoría 2: Operadores

//Problema 2.1: Calculadora Básica

$num1 = 10;
$num2 = 5;

echo "Números: \$num1 = $num1, \$num2 = $num2\n";
echo "Suma: $num1 + $num2 = " . ($num1 + $num2) . "\n";
echo "Resta: $num1 - $num2 = " . ($num1 - $num2) . "\n";
echo "Multiplicación: $num1 × $num2 = " . ($num1 * $num2) . "\n";
echo "División: $num1 ÷ $num2 = " . ($num1 / $num2) . "\n\n";


// Problema 2.2: Actualización de Stock

$stock = 100;
echo "Stock inicial: $stock unidades\n";

$stock = $stock - 25;
echo "Después de vender 25 unidades: $stock unidades\n";

$stock = $stock + 50;
echo "Después de recibir 50 unidades: $stock unidades\n\n";


// Problema 2.3: Concatenación de Textos

$nombre = "Oskar";
$apellido = "Calvo";
$curso = "Desarrollo Web en Entorno Servidor";

$fraseCompleta = "El profesor " . $nombre . " " . $apellido . " imparte el curso de " . $curso;
echo $fraseCompleta . "\n\n";


// Problema 2.4: Comparaciones Simples

$edad = 20;
$edadMinima = 18;

echo "Comparación de edad:\n";
echo "\$edad ($edad) >= \$edadMinima ($edadMinima): ";
var_dump($edad >= $edadMinima);
echo "\n";

$contraseñaGuardada = "1234";
$contraseñaUsuario = "123";

echo "Comparación de contraseñas:\n";
echo "\$contraseñaGuardada ('$contraseñaGuardada') === \$contraseñaUsuario ('$contraseñaUsuario'): ";
var_dump($contraseñaGuardada === $contraseñaUsuario);
echo "\n\n";


// Problema 2.5: ¿Par o Impar?

$numero = 7;

if ($numero % 2 == 0) {
    echo "El número $numero es par\n";
} else {
    echo "El número $numero es impar\n";
}

echo "\n";


// Categoría 3: Estructuras Condicionales

// Problema 3.1: Control de Acceso

$edad = 17;

echo "Edad: $edad años\n";

if ($edad >= 18) {
    echo "Puedes pasar\n";
} else {
    echo "No puedes pasar\n";
}

echo "\n";


// Problema 3.2: Calificación de Examen

$nota = 7.5;

echo "Nota obtenida: $nota\n";

if ($nota >= 9) {
    echo "Sobresaliente\n";
} elseif ($nota >= 7 && $nota <= 8.9) {
    echo "Notable\n";
} elseif ($nota >= 5 && $nota <= 6.9) {
    echo "Aprobado\n";
} else {
    echo "Suspenso\n";
}

echo "\n";


// Problema 3.3: Menú del Día con switch

$diaSemana = "lunes";

echo "Día de la semana: $diaSemana\n";
echo "Plato del día: ";

switch ($diaSemana) {
    case "lunes":
        echo "Lentejas\n";
        break;
    case "miércoles":
        echo "Paella\n";
        break;
    case "viernes":
        echo "Pescado al horno\n";
        break;
    default:
        echo "Hoy no hay menú especial\n";
        break;
}

echo "\n";


// Problema 3.4: Verificación de Usuario Avanzada

$rolUsuario = "admin";
$usuarioActivo = true;

echo "Rol del usuario: $rolUsuario\n";
echo "Usuario activo: " . ($usuarioActivo ? "Sí" : "No") . "\n";
echo "Resultado: ";

if ($rolUsuario == "admin" && $usuarioActivo == true) {
    echo "Acceso concedido\n";
} else {
    echo "Acceso denegado\n";
}

echo "\n";


// Categoría 4: Bucles

// Problema 4.1: Tabla de Multiplicar del 7

for ($i = 1; $i <= 10; $i++) {
    $resultado = 7 * $i;
    echo "7 x $i = $resultado\n";
}

echo "\n";


// Problema 4.2: Cuenta Atrás para Año Nuevo

$contador = 10;

while ($contador >= 1) {
    echo "$contador...\n";
    $contador--;
}

echo "¡Feliz Año Nuevo!\n\n";


// Problema 4.3: Recorrer Nombres 

$alumnos = ["Ana", "Juan", "Pedro", "Sofía"];

foreach ($alumnos as $alumno) {
    echo "Hola, $alumno\n";
}

echo "\n";


// Problema 4.4: Listado de Productos

$productos = [
    ["nombre" => "Teclado", "precio" => 50],
    ["nombre" => "Ratón", "precio" => 25],
    ["nombre" => "Monitor", "precio" => 200]
];

foreach ($productos as $producto) {
    echo "Producto: " . $producto["nombre"] . ", Precio: " . $producto["precio"] . " €\n";
}

echo "\n";


// Problema 5.1: Ficha de Usuario

$usuario = [
    "nombre" => "Carlos García",
    "edad" => 25,
    "email" => "carlos@example.com",
    "estudiante" => true
];

echo "Nombre: " . $usuario["nombre"] . "\n";
echo "Edad: " . $usuario["edad"] . "\n";
echo "Email: " . $usuario["email"] . "\n";
echo "Estudiante: " . ($usuario["estudiante"] ? "Sí" : "No") . "\n";

echo "\n";


// Problema 5.2: Filtrado de Notas

$notas = [8.5, 4.2, 7.0, 9.8, 5.5, 3.9];

echo "Notas de los alumnos que han aprobado:\n";

foreach ($notas as $nota) {
    if ($nota >= 5) {
        echo "Nota: $nota - Aprobado\n";
    }
}

echo "\n";


// Problema 5.3: Lista de la Compra Avanzada

$listaCompra = [
    "Frutas" => ["Manzanas", "Plátanos", "Naranjas"],
    "Lácteos" => ["Leche", "Queso"],
    "Limpieza" => ["Detergente", "Lejía"]
];

foreach ($listaCompra as $categoria => $productos) {
    echo "Categoría: $categoria\n";
    foreach ($productos as $producto) {
        echo "  - $producto\n";
    }
    echo "\n";
}


// Problema 5.4: Calculando el total del Carrito

$productos = [
    ["nombre" => "Teclado", "precio" => 50],
    ["nombre" => "Ratón", "precio" => 25],
    ["nombre" => "Monitor", "precio" => 200]
];

$total = 0;

echo "Productos en el carrito:\n";

foreach ($productos as $producto) {
    echo "- " . $producto["nombre"] . ": " . $producto["precio"] . " €\n";
    $total = $total + $producto["precio"];
}

echo "\nCoste total del carrito: $total €\n";

echo "\n";



?>
