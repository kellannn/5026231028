<!DOCTYPE html>
<html>
<head>
    <title>CSS Outline & Image Shapes</title>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: white;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        img {
            width: 200px;
            height: 200px;
            clip-path: circle(50%);
            outline: 3px solid red; /* Add outline to the image */
        }

        h1 {
            text-align: center;
        }

        p {
            text-align: center;
            font-size: 14px;
        }

        .p1 {
            outline: 3px solid red;
        }

        .p2 {
            outline: 3px dashed blue;
        }

        .p3 {
            outline: 3px solid green;
            outline-offset: 5px;
        }

        .p4:hover {
            outline: 4px dotted purple;
            outline-offset: 10px;
        }

        .p5:focus {
            outline: 5px solid orange;
            outline-offset: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CSS Outline & Image Shapes</h1>
        <div class="content">
            <img src="https://www.its.ac.id/news/wp-content/uploads/sites/2/2025/02/IMG_20250223_084851-scaled.jpg" alt="Image" style="outline: 3px solid red;">
            <p class="p1">Dalam pembukaan acara, Ketua Tim Pembina Kerohanian Islam (TPKI) ITS Prof Dr Muhammad Mashuri MT menyampaikan bahwa mentoring merupakan sarana pencarian ilmu bagi mahasiswa. “Kegiatan mentoring ini untuk mempersiapkan generasi emas di 2045 yang perlu dibekali dengan segudang ilmu, termasuk keilmuan Islam,” ujarnya.</p>
        </div>
    </div>
</body>
</html>