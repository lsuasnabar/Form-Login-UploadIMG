<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formContact.css">
    <title>Formulario de contacto</title>
</head>
<body>
    <h1>Bienvenido , por favor dejanos tu consulta y te responderemos a la brevedad</h1>

    <section>
        <form action="../controller/#" method="post" class="formulario">
            <h3>Ingresa los datos</h3>
            <input type="text" name="name" id="" placeholder="Nombre" placeholder="Nombre">
            <input type="tel" name="telefono" id="" placeholder="Telefono">
            <input type="email" name="email" id="" placeholder="email">
            <textarea name="descripcion" id="" cols="20" rows="3" placeholder="Dejanos tu consulta"></textarea>

            <button class="btn-enviar" name="btn-enviar" type="submit">Enviar consulta</button>
        </form>
    </section>
</body>
</html>