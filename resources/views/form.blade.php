<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario con CSS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            width: 320px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }

        input:focus, textarea:focus {
            border-color: #4facfe;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #4facfe;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #00c6fb;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Formulario</h2>
    <form action="/store" method="GET">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" placeholder="Ingrese su nombre" required>
        </div>

        <div class="form-group">
            <label>Correo</label>
            <input type="email" placeholder="Ingrese su correo" required>
        </div>

        <div class="form-group">
            <label>Mensaje</label>
            <textarea rows="4" placeholder="Escribe tu mensaje" required></textarea>
        </div>

        <button type="submit">Enviar</button>
    </form>
</div>

</body>
</html>
