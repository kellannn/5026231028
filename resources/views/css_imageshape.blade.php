<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Image Shapes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            gap: 20px;
        }

        .container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .shape {
            width: 150px;
            height: 150px;
            background: url("its_sholat.jpg") no-repeat center/cover;
            border: 2px solid #000; /* Add border for visibility */
        }

        /* Circle */
        .circle {
            border-radius: 50%;
        }

        /* Triangle */
        .triangle {
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        }

        /* Hexagon */
        .hexagon {
            clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
        }

        /* Star Shape with Hover Effect */
        .star {
            clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
            transition: 0.3s;
        }

        .star:hover {
            transform: scale(1.1);
            filter: brightness(1.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="shape circle"></div>
        <div class="shape triangle"></div>
    </div>
</body>
</html>
