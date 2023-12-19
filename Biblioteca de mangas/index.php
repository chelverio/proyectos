
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

        
        <?php include('procesar_agregar_manga.php'); ?>

    </section>

    <section class="content">
        <h2>Agregar Manga</h2>

        
        <form action="" method="post">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" required>

            

            <button type="submit" name="agregar_manga">Agregar Manga</button>
        </form>

        <?php
        
        if (isset($_POST['agregar_manga'])) {
            include('procesar_agregar_manga.php');
        }
        ?>
    </section>

</body>
</html>
