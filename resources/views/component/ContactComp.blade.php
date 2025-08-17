<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Контакты</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f7f9fc;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 50px auto;
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 10px;
        }
        p.description {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 40px;
            text-align: center;
        }
        .contacts {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .contact-item {
            flex: 1 1 280px;
            background: #ecf0f1;
            margin: 10px;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.05);
            transition: background-color 0.3s;
        }
        .contact-item:hover {
            background: #d1e7ff;
        }
        .contact-item h3 {
            margin-top: 0;
            color: #2980b9;
        }
        .contact-item p, .contact-item a {
            font-size: 16px;
            color: #34495e;
            text-decoration: none;
            margin: 8px 0;
            display: block;
        }
        .contact-item a:hover {
            text-decoration: underline;
        }
        .map {
            margin-top: 40px;
            text-align: center;
        }
        iframe {
            border: 0;
            width: 100%;
            height: 300px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        @media (max-width: 600px) {
            .contacts {
                flex-direction: column;
                align-items: center;
            }
            .contact-item {
                flex: 1 1 100%;
                max-width: 400px;
            }
        }
    </style>
</head>
