<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас | Ресторан Данго</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #f8b3ca;
            --secondary: #a5dee5;
            --accent: #e87a90;
            --dark: #5d4a66;
            --light: #fff9fb;
            --text: #333333;
        }

        body {
            background-color: var(--light);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            padding: 20px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            font-size: 2rem;
            color: var(--dark);
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark);
            letter-spacing: 1px;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            position: relative;
        }

        nav a:hover {
            color: var(--accent);
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--accent);
            transition: width 0.3s ease;
        }

        nav a:hover::after {
            width: 100%;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--dark);
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(93, 74, 102, 0.7), rgba(248, 179, 202, 0.7)), url('https://images.unsplash.com/photo-1563245372-f21724e3856d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 0 20px;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1.2s ease;
        }

        /* Section Styles */
        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--dark);
            display: inline-block;
            padding-bottom: 10px;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
        }

        /* Philosophy Section */
        .philosophy {
            background-color: white;
        }

        .philosophy-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .philosophy-text {
            flex: 1;
        }

        .philosophy-text h2 {
            font-size: 2.2rem;
            color: var(--dark);
            margin-bottom: 20px;
        }

        .philosophy-text p {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #555;
        }

        .philosophy-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.5s ease;
        }

        .philosophy-image:hover {
            transform: translateY(-10px);
        }

        .philosophy-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* History Section */
        .history {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
        }

        .history-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .history-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .history-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .history-text {
            flex: 1;
        }

        .history-text h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
        }

        .history-text p {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        /* Features Section */
        .features {
            background-color: white;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
        }

        .feature-item {
            display: flex;
            gap: 20px;
            padding: 25px;
            border-radius: 10px;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .feature-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .feature-icon {
            flex-shrink: 0;
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: white;
        }

        .feature-content h3 {
            font-size: 1.4rem;
            color: var(--dark);
            margin-bottom: 10px;
        }

        .feature-content p {
            color: #666;
        }

        /* Team Section */
        .team {
            background-color: #f9f5f7;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .team-member {
            text-align: center;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-10px);
        }

        .member-image {
            height: 250px;
            overflow: hidden;
        }

        .member-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .team-member:hover .member-image img {
            transform: scale(1.1);
        }

        .member-info {
            padding: 20px;
        }

        .member-info h3 {
            font-size: 1.3rem;
            color: var(--dark);
            margin-bottom: 5px;
        }

        .member-info p {
            color: var(--accent);
            font-style: italic;
            margin-bottom: 10px;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 50px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--primary);
        }

        .footer-column p, .footer-column a {
            color: #ccc;
            margin-bottom: 10px;
            display: block;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-column a:hover {
            color: var(--primary);
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #aaa;
            font-size: 0.9rem;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .philosophy-content, .history-content {
                flex-direction: column;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
            }
            
            .team-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.2rem;
            }
            
            nav ul {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .team-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .footer-content {
                grid-template-columns: 1fr;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <div class="logo-icon">🍡</div>
                    <div class="logo-text">Данго</div>
                </div>
                @include('partials.nav')
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Данго — Искусство сладкой гармонии</h1>
            <p>Погрузитесь в мир изысканной японской сладости, где каждая минутка — это традиция, вкус и уют.</p>
        </div>
    </section>

    <!-- Philosophy Section -->
    <section class="philosophy">
        <div class="container">
            <div class="section-title">
                <h2>Наша Философия</h2>
            </div>
            <div class="philosophy-content fade-in">
                <div class="philosophy-text">
                    <h2>Традиция в каждом шарике</h2>
                    <p>Мы верим, что настоящее данго — это больше чем просто десерт. Это многовековая культура, воплощенная в трех нежных рисовых шариках. Это символ гармонии, простоты и естественной красоты.</p>
                    <p>В «Данго» мы чтим японские рецепты, бережно сочетая их с лучшими локальными продуктами. Наша цель — не просто накормить вас, а подарить ощущение ваби-саби — глубокой, немаркой красоты момента, когда идеальный вкус рождает тихую радость.</p>
                </div>
                <div class="philosophy-image">
                    <img src="https://images.unsplash.com/photo-1623341215095-6a4e916e5a4d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Традиционные японские данго">
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section class="history">
        <div class="container">
            <div class="section-title">
                <h2>Наша История</h2>
            </div>
            <div class="history-content fade-in">
                <div class="history-image">
                    <img src="https://images.unsplash.com/photo-1559622214-f8a985bf5cae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="Шеф-повар за приготовлением данго">
                </div>
                <div class="history-text">
                    <h2>От любви к Японии — с любовью к вам</h2>
                    <p>Наша история началась с путешествия, которое перевернуло мир. Посетив маленькую чайную в Киото, наш основатель влюбился в искусство создания моти и данго. Вернувшись домой, мы загорелись миссией: привезти этот аутентичный, нежный вкус в наш город.</p>
                    <p>Сначала это была домашняя кухня для друзей, потом — маленькая мастерская, а сегодня — уютный ресторан, где каждый может отдохнуть душой. Мы вручную создаем каждую порцию, сохраняя душу японского десерта и делясь этой частичкой счастья с вами.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>Почему наши Данго особенные?</h2>
            </div>
            <div class="features-grid">
                <div class="feature-item fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-hands"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Ручная работа</h3>
                        <p>Мы не используем конвейер. Каждые три шарика лепятся вручную, чтобы сохранить нежную, слегка упругую текстуру, которую невозможно повторить машинным способом.</p>
                    </div>
                </div>
                <div class="feature-item fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Натуральные ингредиенты</h3>
                        <p>Только лучшие сорта рисовой муки, натуральная японская чайная паста маття, сладкие бобы адзуки и сезонные фрукты. Никаких искусственных ароматизаторов или консервантов.</p>
                    </div>
                </div>
                <div class="feature-item fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Гармония вкусов</h3>
                        <p>Мы уважаем классику (митараси, анко, гома), но также создаем авторские вариации, которые удивят даже знатоков японской кухни.</p>
                    </div>
                </div>
                <div class="feature-item fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Аутентичная подача</h3>
                        <p>Ваши данго подаются на традиционной японской посуде, создавая полное погружение в атмосферу Страны восходящего солнца.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team">
        <div class="container">
            <div class="section-title">
                <h2>Наша Команда</h2>
            </div>
            <div class="team-grid">
                <div class="team-member fade-in">
                    <div class="member-image">
                        <img src="https://images.unsplash.com/photo-1583394293213-5e3f3b5dfd3a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Шеф-повар Акира">
                    </div>
                    <div class="member-info">
                        <h3>Акира Танака</h3>
                        <p>Главный шеф-повар</p>
                        <p>Обучался искусству приготовления вагаси в Киото более 10 лет.</p>
                    </div>
                </div>
                <div class="team-member fade-in">
                    <div class="member-image">
                        <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1676&q=80" alt="Кондитер Юки">
                    </div>
                    <div class="member-info">
                        <h3>Юки Накамура</h3>
                        <p>Мастер по моти и данго</p>
                        <p>Специализируется на создании традиционных и авторских рецептов.</p>
                    </div>
                </div>
                <div class="team-member fade-in">
                    <div class="member-image">
                        <img src="https://images.unsplash.com/photo-1595273670150-bd0c3c392e46?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2067&q=80" alt="Менеджер Мария">
                    </div>
                    <div class="member-info">
                        <h3>Мария Иванова</h3>
                        <p>Управляющая ресторана</p>
                        <p>Создает уютную атмосферу и заботится о каждом госте.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Ресторан Данго</h3>
                    <p>Погрузитесь в мир изысканной японской сладости, где каждая минутка — это традиция, вкус и уют.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-vk"></i></a>
                        <a href="#"><i class="fab fa-telegram"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Часы работы</h3>
                    <p>Пн-Чт: 10:00 - 22:00</p>
                    <p>Пт-Сб: 10:00 - 23:00</p>
                    <p>Воскресенье: 11:00 - 21:00</p>
                </div>
                <div class="footer-column">
                    <h3>Контакты</h3>
                    <p><i class="fas fa-map-marker-alt"></i> ул. Сакуры, 12, Москва</p>
                    <p><i class="fas fa-phone"></i> +7 (495) 123-45-67</p>
                    <p><i class="fas fa-envelope"></i> info@dango-restaurant.ru</p>
                </div>
                <div class="footer-column">
                    <h3>Подписка</h3>
                    <p>Подпишитесь на нашу рассылку, чтобы первыми узнавать о новых десертах и акциях.</p>
                    <form>
                        <input type="email" placeholder="Ваш email" style="padding: 10px; width: 100%; margin-bottom: 10px; border-radius: 5px; border: none;">
                        <button type="submit" style="padding: 10px 20px; background-color: var(--primary); color: white; border: none; border-radius: 5px; cursor: pointer;">Подписаться</button>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Ресторан Данго. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <script>
        // Анимация появления элементов при прокрутке
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const fadeInObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });
            
            fadeElements.forEach(element => {
                fadeInObserver.observe(element);
            });
            
            // Мобильное меню
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            const navMenu = document.querySelector('nav ul');
            
            mobileMenuBtn.addEventListener('click', function() {
                navMenu.style.display = navMenu.style.display === 'flex' ? 'none' : 'flex';
            });
        });
    </script>
</body>
</html>