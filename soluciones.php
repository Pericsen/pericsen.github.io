<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuanz soluciones</title>
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

  <main class="main-content bg-soluciones">
    <h1 class="hero-title">
     Conoce<br> 
      Nuestras<br>
      Soluciones
    </h1>

    <p class="hero-subtitle">
      Estamos aquí para brindarle soluciones basadas en datos de la más alta calidad. Con nuestro enfoque en ofrecer información práctica y estrategias personalizadas.
    </p>

    <div class="cta-buttons">
      <a href="contactanos.php" class="btn-primary">Contactanos!</a>
    </div>
    <br>
  </main>

  <!--SERVICIOS-->

    <div id="carousel-track"></div>


<!--CASOS DE EXITO-->

   <section class="casos-exito">
        <div class="section-header">
            <h2 class="section-title">Nuestros Servicios</h2>
            <p class="section-subtitle">
                En <strong>Nuanz</strong> transformamos datos en decisiones 
                inteligentes y soluciones tecnológicas que impulsan el crecimiento 
                de tu negocio. Nuestro enfoque combina análisis avanzado con el desarrollo 
                de agentes de inteligencia artificial a medida, diseñados para resolver 
                desafíos reales y optimizar tus procesos.
            </p>
        </div>

         <div class="casos-grid">
            <div class="caso-card">
                <div class="caso-logo"><img src="img/svg/Artificial-Inteligence.svg" width="40"  height="40" alt="Artificial Inteligence"></div>
                <h3 class="caso-title">Inteligencia Artificial Aplicada</h3>
                <p class="caso-description">
                      Desarrollamos agentes y soluciones de IA que automatizan tareas, mejoran la experiencia del cliente y optimizan procesos internos. Desde chatbots inteligentes hasta modelos que generan alertas automáticas, adaptamos la IA a los objetivos de negocio.</p>
                    <br>
                    <strong>Beneficios para PyMEs:</strong>
                    <ul>
                      <li>Reducción de costos operativos.</li>
                      <li>Mejor atención al cliente a través de canales digitales.</li>
                      <li>Mayor agilidad en tareas repetitivas y administrativas.</li>
                    </ul>
                    <br>
                    <p><strong>Ejemplos de Aplicación</strong></p>
                    <ul>
                      <li>Agentes de WhatsApp que gestionan pedidos y consultas.</li>
                      <li>Modelos que envían alertas automáticas sobre inventario bajo o clientes inactivos.</li>
                      <li>Sistemas de scoring de clientes para priorizar esfuerzos comerciales.</li>
                    </ul>
                </p>
            </div>
        </div>

        <div class="casos-grid">
            <div class="caso-card">
                <div class="caso-logo"><img src="img/svg/Automation.svg" width="40"  height="40" alt="Analisis de Datos"></div>
                <h3 class="caso-title">Analisis de Datos</h3>
                <p class="caso-description">
                    Extraemos conocimiento de los datos para que las organizaciones puedan comprender qué pasó, porqué pasó y qué puede pasar. A través de técnicas estadísticas avanzadas, minería de datos y machine learning, detectamos patrones ocultos, correlaciones y oportunidades de mejora.</p>
                    <br>
                    <strong>Beneficios para PyMEs:</strong>
                    <ul>
                      <li>Visión clara del desempeño comercial y operativo.</li>
                      <li>Detección temprana de problemas y oportunidades.</li>
                      <li>Toma de decisiones basada en evidencia en lugar de intuición.</li>
                    </ul>
                    <br>
                    <p><strong>Ejemplos de Aplicación</strong></p>
                    <ul>
                      <li>Identificar clientes con mayor potencial de recompra.</li>
                      <li>Analizar causas de baja rotación de inventario.</li>
                      <li>Predecir ventas en temporadas específicas.</li>
                    </ul>
                </p>
            </div>
        </div>


        <div class="casos-grid">
            <div class="caso-card">
                <div class="caso-logo"><img src="img/svg/Data-Science.svg" width="40"  height="40" alt="Data Science"></div>
                <h3 class="caso-title">Data Science</h3>
                <p class="caso-description">
                     Aplicamos algoritmos de machine learning y técnicas predictivas para transformar datos en inteligencia accionable. Nuestro enfoque combina análisis matemático y programación para responder preguntas complejas del negocio.</p>
                    <br>
                    <strong>Beneficios para PyMEs:</strong>
                    <ul>
                      <li>Anticipación a cambios de mercado y demanda.</li>
                      <li>Segmentación de clientes para campañas personalizadas.</li>
                      <li>Mejora en la rentabilidad gracias a modelos de predicción.</li>
                    </ul>
                    <br>
                    <p><strong>Ejemplos de Aplicación</strong></p>
                    <ul>
                      <li>Predicción de demanda de productos.</li>
                      <li>Modelos de churn para detectar clientes en riesgo de abandono.</li>
                      <li>Recomendadores de productos para e-commerce.</li>
                    </ul>
                </p>
            </div>
        </div>


         <div class="casos-grid">
            <div class="caso-card">
                <div class="caso-logo"><img src="img/svg/Data-Engineering.svg" width="40"  height="40" alt="Data Engineering"></div>
                <h3 class="caso-title">Data Engineering</h3>
                <p class="caso-description">
                     Diseñamos pipelines que integran datos de distintas fuentes y los convierten en información usable. Creamos infraestructuras escalables en la nube para garantizar que la información fluya de manera confiable, rápida y segura.</p>
                    <br>
                    <strong>Beneficios para PyMEs:</strong>
                    <ul>
                      <li>Consolidación de información dispersa (Excel, ERP, CRM, APIs).</li>
                      <li>Reducción de tareas manuales y errores humanos.</li>
                      <li>Disponibilidad de datos en tiempo real para la toma de decisiones.</li>
                    </ul>
                    <br>
                    <p><strong>Ejemplos de Aplicación</strong></p>
                    <ul>
                      <li>Integrar datos de ventas de Mercado Libre, Google Sheets y el ERP en un único dashboard.</li>
                      <li>Migrar datos locales a un data warehouse en la nube.</li>
                      <li>Automatizar reportes financieros mensuales.</li>
                    </ul>
                </p>
            </div>
        </div>


         <div class="casos-grid">
            <div class="caso-card">
                <div class="caso-logo"><img src="img/svg/Data-Visualization.svg" width="40"  height="40" alt="Visualizacion de Datos"></div>
                <h3 class="caso-title">Visualización de Datos</h3>
                <p class="caso-description">
                     Convertimos datos en historias claras y atractivas. Nuestros dashboards interactivos permiten monitorear indicadores clave, explorar tendencias y comunicar resultados de manera visual y comprensible.</p>
                    <br>
                    <strong>Beneficios para PyMEs:</strong>
                    <ul>
                      <li>Información accesible en tiempo real para equipos no técnicos.</li>
                      <li>Mejor comunicación de resultados a la dirección y stakeholders.</li>
                      <li>Aceleración en la toma de decisiones gracias a insights visuales.</li>
                    </ul>
                    <br>
                    <p><strong>Ejemplos de Aplicación</strong></p>
                    <ul>
                      <li>Dashboard de ventas diarias por canal y producto.</li>
                      <li>Reportes de rendimiento de campañas de marketing digital.</li>
                      <li>Tableros financieros para control de gastos e ingresos.</li>
                    </ul>
                </p>
            </div>
        </div>

         <div class="casos-grid">
            <div class="caso-card">
                <div class="caso-logo"><img src="img/svg/Architecture.svg" width="40"  height="40" alt="Arquitectura de Datos"></div>
                <h3 class="caso-title">Arquitectura de Datos</h3>
                <p class="caso-description">
                     Diseñamos arquitecturas modernas que aseguran orden, calidad y seguridad en la gestión de la información. Definimos cómo y dónde se almacenan los datos, quién accede a ellos y cómo se escalan las soluciones en la nube.</p>
                    <br>
                    <strong>Beneficios para PyMEs:</strong>
                    <ul>
                      <li>Bases sólidas para crecer sin problemas de datos.</li>
                      <li>Mayor seguridad y control sobre la información sensible.</li>
                      <li>Infraestructura preparada para soportar proyectos futuros de IA o BI.</li>
                    </ul>
                    <br>
                    <p><strong>Ejemplos de Aplicación</strong></p>
                    <ul>
                      <li>Implementar un data lake en la nube para centralizar datos históricos.</li>
                      <li>Diseñar un data warehouse para consolidar operaciones.</li>
                      <li>Crear esquemas de gobierno de datos para mejorar la calidad y seguridad.</li>
                    </ul>
                </p>
            </div>
        </div>

       


        <div class="cta-section">
            <h3 class="cta-title">¿Listo Para Ser Nuestro Próximo Caso de Éxito?</h3>
            <p class="cta-description">
                No importa el tamaño de tu negocio: <strong>te ayudamos a usar tus datos como motor de decisiones y crecimiento.</strong> 
            </p>
            
            <!--CONTACTANOS-->

          
            <form class="contact-form" action="phpmailer.php" method="POST">
              <div class="form-group">
                <input type="text" name="nombre" placeholder="Tu nombre" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" placeholder="Tu email" required>
              </div>
              <div class="form-group">
                <input type="text" name="asunto" placeholder="Asunto" required>
              </div>
              <div class="form-group">
                <textarea name="mensaje" type="text" rows="5" placeholder="Tu mensaje" required></textarea>
              </div>
              <button type="submit" class="btn-enviar">Enviar mensaje</button>
            </form>
          </section>
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

    //SERVICIOS
  function toggleAccordion(el) {
    document.querySelectorAll('.accordion-item').forEach(item => {
      if (item !== el) item.classList.remove('active');
    });
    el.classList.toggle('active');
  }

    //CAROUSEL
      const track = document.getElementById("carousel-track");
  const logos = Array.from(track.children);

  logos.forEach(logo => {
    const clone = logo.cloneNode(true);
    track.appendChild(clone);
  });

  //Casos de Exito 
        // Animación de contadores
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;
                
                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        counter.textContent = target;
                        clearInterval(timer);
                    } else {
                        counter.textContent = Math.floor(current);
                    }
                }, 16);
            });
        }

       

        //NOSOTROS
        // Intersection Observer para animaciones de entrada
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Inicializar observadores
        document.addEventListener('DOMContentLoaded', () => {
            const miembros = document.querySelectorAll('.miembro');
            miembros.forEach(miembro => {
                observer.observe(miembro);
            });

            // Efecto parallax suave en las imágenes
            const imagenes = document.querySelectorAll('.miembro-imagen');
            imagenes.forEach(imagen => {
                imagen.addEventListener('mouseenter', () => {
                    imagen.style.transform = 'scale(1.02)';
                });
                
                imagen.addEventListener('mouseleave', () => {
                    imagen.style.transform = 'scale(1)';
                });
            });

            // Efecto de typing para nombres (opcional)
            const nombres = document.querySelectorAll('.miembro-nombre');
            nombres.forEach((nombre, index) => {
                nombre.style.opacity = '0';
                setTimeout(() => {
                    nombre.style.opacity = '1';
                    nombre.style.animation = 'fadeInUp 0.8s ease forwards';
                }, index * 200);
            });

            // Animación de skills tags
            const skillTags = document.querySelectorAll('.skill-tag');
            skillTags.forEach((tag, index) => {
                tag.addEventListener('mouseenter', () => {
                    tag.style.transform = 'translateY(-2px) scale(1.05)';
                });
                
                tag.addEventListener('mouseleave', () => {
                    tag.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Smooth scroll para enlaces sociales (si es necesario)
            const socialLinks = document.querySelectorAll('.social-link');
            socialLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    // Aquí puedes agregar lógica de navegación
                    console.log('Navegando a red social...');
                });
            });
        });

        // Animación adicional de fadeInUp
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        `;
        document.head.appendChild(style);

        // Efecto de paralaje suave en scroll
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const decoraciones = document.querySelectorAll('.decoracion');
            
            decoraciones.forEach((dec, index) => {
                const speed = 0.5 + (index * 0.1);
                dec.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });
  </script>

</body>
</html>


       