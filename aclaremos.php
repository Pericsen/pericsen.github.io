<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Nuanz</title>
    <link rel="icon" href="img/Nuanz_N2.png" type="image/x-icon">
     <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
    <div class="logo">
      <a href="index.php" class="logo-container">
        <img src="img/Nuanz_logo2.png" alt="Logo Normal" class="normal">
        <img src="img/Nuanz_logo1.png" alt="Logo Hover" class="hover">
      </a>
    </div>

    <nav class="nav-center">
      <a href="index.php">Inicio</a>
      <a href="nosotros.php">Nosotros</a>
      <a href="soluciones.php">Soluciones</a>
      <a href="aclaremos.php">Aclaremos</a>
    </nav>

    <a href="contactanos.php" class="btn-right">Contactanos</a>

    <div class="menu-toggle" onclick="toggleMenu()">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </header>

  <div class="mobile-menu" id="mobileMenu">
    <a href="index.php">Inicio</a>
    <a href="nosotros.php">Nosotros</a>
    <a href="soluciones.php">Soluciones</a>
    <a href="aclaremos.php">Aclaremos</a>
    <a href="contactanos.php">Contactanos</a>
  </div>

  <main class="main-content bg-aclaremos">
    <h1 class="hero-title">
      Resolvemos<br>
      Tus<br>
        Dudas
    </h1>

    <p class="hero-subtitle">
       Entendemos que cada negocio es único, y nuestras estrategias personalizadas están diseñadas para amplificar su individualidad y propulsar su éxito.
    </p>

    <div class="cta-buttons">
      <a href="contactanos.php" class="btn-primary">Comenzar</a>
    </div>
    <br>
  </main>


    <div class="FAQ-content">
        <div class="container">
            <div class="faq-header">
                <p class="faq-subtitle">
                   
                </p>
            </div>

            <div class="faq-container">
                <br>
                <div class="faq-item">
                    <button class="faq-question">
                        ¿Qué servicios ofrecemos?
                        <span class="faq-icon"></span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Ofrecemos una amplia gama de servicios dentro del ámbito de datos, adaptados para satisfacer las necesidades específicas de su negocio. 
                            <br>
                            Nuestros servicios incluyen soluciones de almacenamiento de datos, construcción de tuberías de datos y análisis de datos personalizados para ayudarlo a tomar decisiones informadas. También nos especializamos en visualizaciones de datos utilizando herramientas como Looker Studio y Power BI. 
                            <br>
                            Además, podemos desarrollar cualquier modelo de ciencia de datos que su negocio requiera para generar información, optimizar procesos y alcanzar sus objetivos. 
                            <br>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        ¿Cómo podemos ayudarte?
                        <span class="faq-icon"></span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Podemos ayudarte a comprender y aprovechar los datos dentro de tu organización. 
                            <br>
                            Nuestro objetivo es transformar tus datos en información útil que impulsé el crecimiento en las áreas en las que tu organización está enfocada, ya sea mejorando la toma de decisiones, optimizando procesos o mejorando el rendimiento. 
                            <br>
                            Trabajaremos contigo para desarrollar estrategias que se alineen con tus objetivos y te ayuden a alcanzar tus metas comerciales.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        ¿Pueden ayudarme a crear una estrategia de datos desde cero?
                        <span class="faq-icon"></span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            ¡Absolutamente!
                            <br> 
                            Estaremos encantados de ayudarte a crear una estrategia de datos desde cero. Nuestro equipo trabajará estrechamente contigo para definir el camino de datos más adecuado para tu negocio, asegurando que la estrategia se alinee con tus objetivos y proporcione la base para un éxito a largo plazo. 
                            <br>
                            Te guiaremos en cada paso del camino para establecer un enfoque basado en datos que se ajuste a tus necesidades únicas.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        ¿Qué tipos de negocios pueden beneficiarse de nuestros servicios?
                        <span class="faq-icon"></span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Cualquier tipo de negocio puede beneficiarse de nuestros servicios, ya sea que seas una pequeña empresa con poca o ninguna estrategia de datos en marcha, o una empresa más grande que ya tenga alguna estrategia de datos en curso. 
                            <br>
                            Cada industria tiene datos que pueden ser aprovechados para tomar mejores decisiones, mejorar procesos y desbloquear nuevas oportunidades. 
                            <br>
                            Adaptamos nuestras soluciones para satisfacer tus necesidades específicas, sin importar en qué punto te encuentres en tu viaje de datos.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        ¿Cómo podemos empezar a trabajar en conjunto?
                        <span class="faq-icon"></span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Para empezar, ofrecemos una reunión de descubrimiento gratuita donde conoceremos tu negocio, entenderemos lo que haces y evaluaremos tu estrategia y estructura de datos actuales. 
                            <br>
                            Esto nos ayuda a comprender mejor tus necesidades y desafíos. Una vez que tengamos todos los detalles, te proporcionaremos una propuesta personalizada que se alinee con tus objetivos y requisitos.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        ¿Cuál es nuestra estructura de precios?
                        <span class="faq-icon"></span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            No tenemos una tarifa fija, ya que nuestros precios están personalizados para cada proyecto según las necesidades específicas de su negocio. 
                            <br>
                            Tomamos en cuenta los requisitos de la solución, el alcance del trabajo y las posibilidades de su empresa para ofrecer las soluciones de datos más efectivas y rentables. 
                            <br>
                            Nuestro objetivo es alinearnos con sus objetivos y proporcionar un valor que se ajuste a su presupuesto y necesidades.
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-section">
                <h3>¿No encontraste tu respuesta?</h3>
                <p>Nuestro equipo está listo para resolver cualquier duda específica sobre tu proyecto.</p>
                <a href="contactanos.php"><button class="cta-button" onclick="scrollToContact()">¡Contáctanos!</button></a>
            </div>
        </div>
    </div>

      <!-- Social -->
  <div class="social-row" aria-label="Redes sociales">
    <a href="https://www.linkedin.com/company/nuanz-info/" class="social-btn" aria-label="LinkedIn" title="LinkedIn" target="_blank">
      <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M4 3a2 2 0 1 0 0 4 2 2 0 0 0 0-4ZM3 8h3v13H3V8Zm6 0h3v2a4 4 0 0 1 3-2c3 0 4 2 4 5v8h-3v-7c0-2-1-3-2.5-3S11 11 11 13v8H8V8Z"/></svg>
    </a>
  </div>
</section>

<!-- ===========================
     FOOTER
     =========================== -->
<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-top">
      <div class="footer-brand">
        <span class="brand"><img src="img/Nuanz_logo2.png" height="20" width="100" alt=""></span>
        <span class="copy">COPYRIGHT © 2025 Ariel Moscarella Cea.</span>
      </div>
      <nav class="footer-nav">
        <a href="aclaremos.php">Preguntas Frecuentes</a>
        <a href="PdS.php">Política de privacidad</a>
        <a href="soluciones.php">Términos de Servicio</a>
        </ul>
      </nav>
    </div>
  </div>
</footer>

    <script>
        function toggleMenu() {
      const menu = document.getElementById("mobileMenu");
      menu.classList.toggle("show");
    }
        // FAQ Accordion functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.closest('.faq-item');
                const isActive = faqItem.classList.contains('active');
                
                // Close all FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                });
                
                // Open clicked item if it wasn't active
                if (!isActive) {
                    faqItem.classList.add('active');
                }
            });
        });

        // Smooth scroll to contact
        function scrollToContact() {
            // In a real implementation, this would scroll to a contact form
            alert('¡Gracias por tu interés! Te redirigiremos a nuestro formulario de contacto.');
        }

        // Add smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>