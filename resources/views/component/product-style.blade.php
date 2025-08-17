<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Navbar */
        .navbar {
            background-color: #333;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar .menu a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        .navbar .profile {
            background-color: #555;
            padding: 8px 12px;
            border-radius: 20px;
            cursor: pointer;
        }

        /* Product card */
        .container {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 300px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-content {
            padding: 20px;
        }

        .card-title {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .card-description {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }

        .card-price {
            font-size: 18px;
            color: #000;
            margin-bottom: 10px;
        }

        .buy-button {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        .buy-button:hover {
            background-color: #218838;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #333;
            color: white;
            padding: 10px 20px;
            font-family: Arial, sans-serif;
        }

        .navbar .logo {
            font-size: 20px;
            font-weight: bold;
        }

        .navbar .menu a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        .profile-container {
            position: relative; /* Чтобы меню позиционировалось относительно контейнера */
        }

        .profile {
            background: #5563DE;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            user-select: none;
        }

        .profile:hover {
            background: #3e4eb8;
        }

        .profile-menu {
            position: absolute;
            top: 100%; /* Сразу под кнопкой */
            right: 0;
            background: white;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
            max-height: 0;
            transition: max-height 0.3s ease-out;
            z-index: 100; /* Чтобы было поверх всего */
        }

        .profile-menu a {
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            color: #333;
            border-bottom: 1px solid #eee;
        }

        .profile-menu a:last-child {
            border-bottom: none;
        }

        .profile-menu a:hover {
            background: #f0f0f0;
        }

        .profile-menu.active {
            max-height: 300px; /* Достаточно для всех ссылок */
        }

    </style>
</head>
<script>
    function toggleProfileMenu() {
        document.getElementById("profileMenu").classList.toggle("active");
    }
</script>
