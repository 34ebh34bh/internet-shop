<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Кнопка Назад</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .top-center {
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 20px 0;
            background-color: #fff5f5;
        }

        .back-button {
            background-color: #dc3545; /* красный */
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

<div class="top-center">
    <a href="javascript:history.back()" class="back-button">Назад</a>
</div>

<!-- остальной контент -->
</body>
</html>
