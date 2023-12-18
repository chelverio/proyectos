<!-- index.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Mi Biblioteca de Manga</title>
</head>
<body>

    <header>
        <h1>Mi Biblioteca de Manga</h1>
    </header>

    <section class="content">
        <h2>Lista de Mangas</h2>

        <!-- Contenido de tu tabla aquí -->
        <?php include('agregar-manga.php'); ?>

    </section>

    <section class="content">
        <h2>Agregar Manga</h2>

        <!-- Contenido de tu formulario para agregar mangas aquí -->
        <?php include('agregar-manga.php'); ?>

    </section>

</body>
</html>
