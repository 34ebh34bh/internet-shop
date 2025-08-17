<!DOCTYPE html>
<html lang="ru">
@include('component.ContactComp')
@include('component.DangerButtonBack')
<body>
<div class="container">
    <h1>Свяжитесь с нами</h1>
    <p class="description">
        Мы всегда рады помочь вам и ответить на любые вопросы.
        Вы можете связаться с нами удобным для вас способом — позвонить, написать на почту или через социальные сети.
        Наш офис открыт для посещений в будние дни с 9:00 до 18:00.
    </p>

    <div class="contacts">
        <div class="contact-item">
            <h3>Телефон</h3>
            <a href="tel:+74951234567">+7 (495) 123-45-67</a>
            <a href="tel:+79261234567">+7 (926) 123-45-67 (мобильный)</a>
        </div>
        <div class="contact-item">
            <h3>Электронная почта</h3>
            <a href="mailto:info@example.com">info@example.com</a>
            <a href="mailto:support@example.com">support@example.com</a>
        </div>
        <div class="contact-item">
            <h3>Адрес офиса</h3>
            <p>г. Москва, ул. Примерная, 12, офис 34</p>
            <p>Пн-Пт 9:00 — 18:00</p>
        </div>
        <div class="contact-item">
            <h3>Социальные сети</h3>
            <a href="https://facebook.com/yourpage" target="_blank" rel="noopener noreferrer">Facebook</a>
            <a href="https://instagram.com/yourpage" target="_blank" rel="noopener noreferrer">Instagram</a>
            <a href="https://vk.com/yourpage" target="_blank" rel="noopener noreferrer">ВКонтакте</a>
            <a href="https://t.me/yourchannel" target="_blank" rel="noopener noreferrer">Telegram</a>
        </div>
    </div>

    <div class="map">
        <h3>Мы на карте</h3>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.937943310538!2d37.61773391600055!3d55.75582688055337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414ab58f5f827bb1%3A0xf1a0ff29c176a869!2z0JrQsNGA0L7QvNC40YHRgtGA0L7QsdC-0YHQutCw0Y8!5e0!3m2!1sru!2sru!4v1617983456789!5m2!1sru!2sru"
            allowfullscreen=""
            loading="lazy"
        ></iframe>
    </div>
</div>
</body>
</html>
