
<style>
    /* Базовая стилизация формы */
    .complaint-form {
        display: flex;
        flex-direction: column;
        gap: 15px; /* Промежуток между элементами */
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-family: sans-serif;
    }

    /* Стили для меток (label) */
    .form-label {
        font-weight: bold;
        color: #333;
        margin-bottom: -10px; /* Уменьшаем расстояние до следующего элемента */
    }

    /* Стили для полей ввода (select, textarea) */
    .form-select,
    .form-textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-sizing: border-box; /* Чтобы padding не увеличивал ширину */
        font-size: 16px;
    }

    /* Стили для textarea, чтобы оно было больше */
    .form-textarea {
        min-height: 100px;
        resize: vertical; /* Разрешаем изменять размер только по вертикали */
    }

    /* Стили для кнопки */
    .form-button {
        padding: 12px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-button:hover {
        background-color: #0056b3;
    }
</style>
