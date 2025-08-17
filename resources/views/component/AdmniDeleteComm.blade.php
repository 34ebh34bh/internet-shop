<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Админ: Удаление товаров и категорий</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            padding: 40px;
        }

        h2 {
            margin-top: 40px;
            color: #333;
        }

        .grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            width: 300px;
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-content {
            padding: 15px;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-description {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }

        form button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #c82333;
        }

        /* Категории */
        .category-list {
            margin-top: 20px;
        }

        .category-item {
            background: white;
            padding: 15px 20px;
            margin-bottom: 10px;
            border-radius: 6px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .category-name {
            font-weight: 500;
            color: #333;
        }
    </style>
</head>
