<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San Valentín 💖</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 0;
            position: relative;
            overflow: hidden;
        }

        /* Estilo para el video de fondo */
        video {
            position: absolute;
            top: 10%; /* Ajusta la posición del video para que no cubra todo el fondo */
            left: 31%;
            width: 40%; /* El video ocupará solo el 80% del ancho de la pantalla */
            height: 40; /* El video ocupará solo el 60% del alto de la pantalla */
            object-fit: cover; /* Mantiene la proporción del video */
            z-index: -1;
        }

        #login, #contenedor {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 320px;
        }

        h2 {
            font-size: 24px;
            color: #ff3366;
        }

        .numDisplay {
            font-size: 28px;
            padding: 10px;
            text-align: center;
            width: 100%;
            border: 2px solid #ff3366;
            border-radius: 8px;
            margin-bottom: 15px;
            background-color: white;
        }

        .numPad {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            justify-content: center;
        }

        .numButton {
            font-size: 24px;
            width: 60px;
            height: 60px;
            background-color: #ff6584;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }

        .numButton:hover {
            background-color: #ff3366;
        }

        .actionButton {
            font-size: 20px;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            border-radius: 8px;
            font-weight: bold;
        }

        #si { background-color: #4CAF50; color: white; }
        #no { background-color: #FF4136; color: white; position: absolute; }

        /* Estilos para las imágenes */
        .images-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* 2 imágenes por fila */
            gap: 10px;
            margin-bottom: 20px;
        }

        .image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <!-- Video de fondo -->
    <video autoplay muted loop>
        <source src="WhatsApp Video 2025-02-07 at 23.35.11.mp4" type="video/mp4">
        Tu navegador no soporta el formato de video.
    </video>

    <!-- Sección de la contraseña -->
    <div id="login">
        <h2>🔒 Ingresa la clave secreta</h2>
        <div class="images-container">
            <img src="WhatsApp Image 2025-02-07 at 23.15.45 (1).jpeg" class="image" />
            <img src="WhatsApp Image 2025-02-07 at 23.15.45 (2).jpeg" class="image" />
            <img src="WhatsApp Image 2025-02-07 at 23.15.45.jpeg" class="image" />
            <img src="WhatsApp Image 2025-02-07 at 23.16.58 (1).jpeg" class="image" />
        </div>
        <input type="text" class="numDisplay" id="numDisplay" readonly>
        <div class="numPad">
            <button class="numButton" onclick="agregarNumero(1)">1</button>
            <button class="numButton" onclick="agregarNumero(2)">2</button>
            <button class="numButton" onclick="agregarNumero(3)">3</button>
            <button class="numButton" onclick="agregarNumero(4)">4</button>
            <button class="numButton" onclick="agregarNumero(5)">5</button>
            <button class="numButton" onclick="agregarNumero(6)">6</button>
            <button class="numButton" onclick="agregarNumero(7)">7</button>
            <button class="numButton" onclick="agregarNumero(8)">8</button>
            <button class="numButton" onclick="agregarNumero(9)">9</button>
            <button class="numButton" onclick="borrar()">⬅</button>
            <button class="numButton" onclick="agregarNumero(0)">0</button>
            <button class="numButton" onclick="verificar()">✔</button>
        </div>
    </div>

    <!-- Sección "¿Quieres ser mi San Valentín?" -->
    <div id="contenedor" style="display: none;">
        <h2>¿Quieres ser mi San Valentín, mi buu? ❤️</h2>
        <div class="images-container">
            <img src="WhatsApp Image 2025-02-07 at 23.16.58.jpeg" class="image" />
            <img src="WhatsApp Image 2025-02-07 at 23.17.00.jpeg" class="image" />
            <img src="WhatsApp Image 2025-02-07 at 23.47.20.jpeg" class="image" />
            <img src="WhatsApp Image 2025-02-07 at 23.47.20 (1).jpeg" class="image" />
        </div>
        <button class="actionButton" id="si" onclick="aceptar()">Sí 💖</button>
        <button class="actionButton" id="no" onclick="moverBoton()">No 💔</button>
    </div>

    <script>
        let backgrounds = [
            'url(https://source.unsplash.com/1600x900/?love)',
            'url(https://source.unsplash.com/1600x900/?romantic)',
            'url(https://source.unsplash.com/1600x900/?flowers)',
            'url(https://source.unsplash.com/1600x900/?hearts)'
        ];
        document.body.style.backgroundImage = backgrounds[Math.floor(Math.random() * backgrounds.length)];
        
        let contraseñaCorrecta = "09122024";
        let entradaUsuario = "";
        function agregarNumero(num) {
            if (entradaUsuario.length < 8) {
                entradaUsuario += num;
                document.getElementById("numDisplay").value = entradaUsuario;
            }
        }
        function borrar() {
            entradaUsuario = entradaUsuario.slice(0, -1);
            document.getElementById("numDisplay").value = entradaUsuario;
        }
        function verificar() {
            if (entradaUsuario === contraseñaCorrecta) {
                document.getElementById("login").style.display = "none";
                document.getElementById("contenedor").style.display = "block";
            }
        }
        function aceptar() {
            document.getElementById("contenedor").innerHTML = "<h2>¡Gracias por darme la oportunidad de estar junto a ti este 14 de febrero te quiero, mi buu! 💘😍</h2><p>¡Será el mejor San Valentín de todos! 💕</p>";
        }

        // Variables para manejar el movimiento del botón y las frases tristes
        let intervalo;
        let frasesTristes = [
            "¿Por qué siempre me rechazas? 😔",
            "Parece que no soy lo que buscas... 😞",
            "Nunca conseguiré tu amor... 💔",
            "Quizás mejor estar solo... 😢",
            "No hay lugar para mí en tu corazón... 💔"
        ];

        function moverBoton() {
            let botonNo = document.getElementById("no");
            let anchoVentana = window.innerWidth - 100;
            let altoVentana = window.innerHeight - 100;
            let posX = Math.floor(Math.random() * anchoVentana);
            let posY = Math.floor(Math.random() * altoVentana);

            botonNo.style.left = `${posX}px`;
            botonNo.style.top = `${posY}px`;

            // Mostrar una frase triste
            document.getElementById("frase").textContent = frasesTristes[Math.floor(Math.random() * frasesTristes.length)];
        }
    </script>
</body>
</html>