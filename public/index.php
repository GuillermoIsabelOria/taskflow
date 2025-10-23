<?php
// Datos de las tareas (simulando una base de datos)
$tareas = [
    ['titulo' => 'Configurar el entorno de desarrollo', 'completado' => true, 'prioridad' => 'alta'],
    ['titulo' => 'Crear la estructura de carpetas', 'completado' => true, 'prioridad' => 'alta'],
    ['titulo' => 'Diseñar la base de datos', 'completado' => false, 'prioridad' => 'media'],
    ['titulo' => 'Implementar el sistema de login', 'completado' => false, 'prioridad' => 'alta'],
    ['titulo' => 'Crear la vista de tareas', 'completado' => false, 'prioridad' => 'baja']
];

include '../app/views/header.php';
?>

<h2>Tareas Pendientes</h2>
<ul>
    <?php foreach ($tareas as $tarea) : ?>
        <?php
        $clasesTarea = 'task-item';
        if ($tarea['completado']) {
            $clasesTarea .= ' completed';
        }

        switch ($tarea['prioridad']) {
            case 'alta':
                $clasesTarea .= ' priority-alta';
                break;
            case 'media':
                $clasesTarea .= ' priority-media';
                break;
            case 'baja':
                $clasesTarea .= ' priority-baja';
                break;
        }
        ?>
        <li class="<?php echo $clasesTarea; ?>">
            <?php echo $tarea['titulo']; ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php include '../app/views/footer.php'; ?>