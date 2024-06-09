<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilgilerim</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://c.wallhere.com/photos/15/b2/black_red-1355785.jpg!d'); /* Arka plan görseli */
            background-size: cover;
            background-position: center;
            flex-direction: column;
        }

        .bilgilerim {
            color: white; /* Bilgilerim yazısının rengini kırmızı yapar */
        }

        table {
            border-collapse: collapse;
            width: 300px;
            margin-bottom: 20px;
            background-color: #660000; /* Tablo arka planı */
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <img src="{{ asset('img/ben.jpg') }}" alt="ben">
    <h1 class="bilgilerim">Emin Çakır</h1>
    <table>
        <tr>
            <th colspan="2">Bilgilerim</th>
        </tr>
       
        <tr>
            <td>Okul Numarası</td>
            <td>2110213040</td>
        </tr>
        <tr>
            <td>Bölümü</td>
            <td>Computer Engineering Student</td>
        </tr>
    </table>
</body>
</html>