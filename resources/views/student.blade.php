<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro divertido</title>

<style>
body {
    background: linear-gradient(120deg, #ff758c, #845ec2);
    font-family: Arial;
    display: flex;
    justify-content: center;
    padding: 40px;
}

.contenedor {
    background: white;
    padding: 30px;
    border-radius: 25px;
    width: 350px;
    animation: flotar 3s infinite ease-in-out;
    box-shadow: 0 10px 30px #3335;
}

h1 {
    text-align: center;
    color: #845ec2;
}

input {
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    border: 2px solid #eee;
    border-radius: 12px;
    box-sizing: border-box;
    transition: 0.3s;
}

input:focus {
    outline: none;
    border-color: #ff758c;
    transform: translateX(5px);
}

button {
    width: 100%;
    padding: 13px;
    border: none;
    border-radius: 12px;
    background: linear-gradient(90deg, #ff758c, #845ec2);
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: 0.4s;
}

button:hover {
    transform: scale(1.08);
    letter-spacing: 2px;
}

@keyframes flotar {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}
</style>
</head>

<body>

<div class="contenedor">
    <h1>✨ Formulario Estudiante ✨</h1>

    <form action="/students" method="POST">
        @csrf

        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="email" name="email" placeholder="Correo" required>
        <input type="text" name="telefono" placeholder="Teléfono">
        <input type="number" name="edad" placeholder="Edad">

        <button type="submit">¡Registrarme!</button>
    </form>
</div>

</body>
</html>
