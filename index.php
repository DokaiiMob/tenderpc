<?php include 'includes/dbconfig.php'; 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TenderPC - Главная</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <!-- Модальное окно для авторизации -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Авторизация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Модальное окно для регистрации -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Регистрация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="register.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Имя пользователя</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-secondary">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <div class="container">
        <h1 class="mt-5">Профессиональная диагностика и переустановка Windows</h1>
        <p>Качественное обслуживание вашего компьютера по доступным ценам</p>
        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#loginModal">Заказать услугу</button>
    </div>

    <div class="container mt-5">
        <h2>Наши услуги</h2>
        <table>
            <thead>
                <tr>
                    <th>Услуга</th>
                    <th>Старая цена</th>
                    <th>Новая цена</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Настройка программ</td>
                    <td><span class="text-decoration-line-through">750 ₽</span></td>
                    <td><strong>300 ₽</strong></td>
                </tr>
                <tr>
                    <td>Чистка от пыли</td>
                    <td><span class="text-decoration-line-through">500 ₽</span></td>
                    <td><strong>250 ₽</strong></td>
                </tr>
                <tr>
                    <td>Сборка компьютера</td>
                    <td><span class="text-decoration-line-through">2 500 ₽</span></td>
                    <td><strong>1 500 ₽</strong></td>
                </tr>
                <tr>
                    <td>Настройка антивируса</td>
                    <td><span class="text-decoration-line-through">500 ₽</span></td>
                    <td><strong>300 ₽</strong></td>
                </tr>
                <tr>
                    <td>Переустановка ОС</td>
                    <td><span class="text-decoration-line-through">1 500 ₽</span></td>
                    <td><strong>1 000 ₽</strong></td>
                </tr>
                <tr>
                    <td>Диагностика компьютера</td>
                    <td><span class="text-decoration-line-through">750 ₽</span></td>
                    <td><strong>500 ₽</strong></td>
                </tr>
            </tbody>
        </table>
    </div>



    <div class="container mt-5">
        <h2>Наши преимущества</h2>
        <ul>
            <li>Профессиональный сервис</li>
            <li>Доступные цены</li>
            <li>Опытные специалисты</li>
            <li>Гарантия на все виды работ</li>
        </ul>
    </div>


    <div class="container mt-5">
        <h2>Отзывы наших клиентов</h2>
        <blockquote class="blockquote">
            <p>"Отличный сервис! Быстро выявили проблему и починили компьютер." — Алексей Бондаренко</p>
        </blockquote>
        <blockquote class="blockquote">
            <p>"Перестановили ОС и настроили всё идеально, теперь работает как новый!" — Марат Абдулаев</p>
        </blockquote>
    </div>


    <div class="container mt-5">
        <h2>О нашей компании</h2>
        <p>Мы специализируемся на диагностике, ремонте и настройке компьютеров. С более чем 2-летним опытом работы, наши эксперты помогут решить любые проблемы с вашим компьютером, от простого обновления программного обеспечения до полной сборки нового устройства.</p>
    </div>

    <div class="container mt-5">
    <h2><i class="fas fa-envelope"></i> Свяжитесь с нами</h2>
    <form action="contact.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label"><i class="fas fa-user"></i> Ваше имя</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label"><i class="fas fa-at"></i> Ваш email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label"><i class="fas fa-comment"></i> Сообщение</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Отправить</button>
    </form>
</div>



    <?php include 'includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
