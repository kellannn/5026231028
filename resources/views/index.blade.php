<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Outline Showcase</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            gap: 20px;
        }

        .box {
            width: 120px;
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            background-color: white;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: 0.3s;
        }

        /* Basic Outline */
        .box1 {
            outline: 3px solid red;
        }

        /* Dashed Outline */
        .box2 {
            outline: 3px dashed blue;
        }

        /* Outline Offset */
        .box3 {
            outline: 3px solid green;
            outline-offset: 5px;
        }

        /* Hover Effect */
        .box4:hover {
            outline: 4px dotted purple;
            outline-offset: 10px;
        }

        /* Focus Effect (Keyboard navigation) */
        .box5:focus {
            outline: 5px solid orange;
            outline-offset: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box box1">Solid</div>
        <div class="box box2">Dashed</div>
        <div class="box box3">Offset</div>
        <div class="box box4">Hover Me</div>
        <div class="box box5" tabindex="0">Focus Me</div>
    </div>
</body>
</html>
