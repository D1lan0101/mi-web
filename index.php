<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dilan | Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div class="logo"><span>&lt;</span> Dilan <span>/&gt;</span></div>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#sobre-mi">Sobre mí</a></li>
                <li><a href="#habilidades">Habilidades</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="inicio" class="hero">
            <div class="hero-container">
                <div class="profile-box">
                    <img src="assets/img/perfil.jpg" alt="Dilan" class="profile-img">
                </div>
                <h1>Hola, soy <span class="cyan">Dilan</span></h1>
                <h2>Desarrollador Full Stack en formación</h2>
                <p>Especializado en crear soluciones digitales modernas con HTML, CSS, JS y PHP.</p>
                <div class="social-icons">
                    <a href="#" class="btn-main">Descargar CV</a>
                </div>
            </div>
        </section>

        <section id="habilidades" class="skills">
            <h2 class="section-title">Mis <span class="cyan">Habilidades</span></h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <div class="skill-info">
                        <span>HTML / CSS</span>
                        <span>90%</span>
                    </div>
                    <div class="progress-bar"><div class="progress" style="width: 90%;"></div></div>
                </div>
                <div class="skill-card">
                    <div class="skill-info">
                        <span>JavaScript</span>
                        <span>75%</span>
                    </div>
                    <div class="progress-bar"><div class="progress" style="width: 75%;"></div></div>
                </div>
                <div class="skill-card">
                    <div class="skill-info">
                        <span>PHP / MySQL</span>
                        <span>60%</span>
                    </div>
                    <div class="progress-bar"><div class="progress" style="width: 60%;"></div></div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> - Desarrollado por Dilan</p>
    </footer>
</body>
</html>