<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dilan | Portfolio Profesional</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">&lt;Portfolio/&gt;</div>
            <ul class="nav-links">
                <li><a href="#inicio">inicio</a></li>
                <li><a href="#sobre-mi">sobre mi</a></li>
                <li><a href="#proyectos">proyectos</a></li>
                <li><a href="#habilidades">habilidades</a></li>
                <li><a href="#contacto">contacto</a></li>
            </ul>
        </nav>
    </header>

    <section id="inicio" class="hero">
        <div class="hero-content">
            <div class="profile-circle">
                <img src="./assets/img/perfil.jpg" alt="Dilan">
            </div>
            <h1>Hola, soy <span class="cyan-glow">Dilan</span></h1>
            <p class="subtitle">Desarrollador Frontend</p>
            <p class="description">Especializado en crear soluciones digitales modernas, funcionales y atractivas.</p>
            <a href="#contacto" class="btn-primary">Contáctame</a>
        </div>
    </section>

    <section id="habilidades" class="skills">
        <h2 class="section-title">Habilidades <span class="cyan-text">Técnicas</span></h2>
        <div class="skills-container">
            <div class="skill-item">
                <div class="skill-info"><span>React</span><span>90%</span></div>
                <div class="bar"><div class="progress" style="width: 90%;"></div></div>
            </div>
            <div class="skill-item">
                <div class="skill-info"><span>JavaScript</span><span>85%</span></div>
                <div class="bar"><div class="progress" style="width: 85%;"></div></div>
            </div>
            <div class="skill-item">
                <div class="skill-info"><span>PHP / SQL</span><span>70%</span></div>
                <div class="bar"><div class="progress" style="width: 70%;"></div></div>
            </div>
        </div>
    </section>

    <footer>
        <p>© <?php echo date("Y"); ?> Portfolio - Desarrollado con ❤️ por Dilan</p>
    </footer>
</body>
</html>