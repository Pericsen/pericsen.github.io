//INDEX

//NOSOTROS 




// Data for each service
        const servicesData = {
            analisis: {
                title: 'Análisis de datos',
                description: 'Transformamos datos complejos en insights accionables para la toma de decisiones estratégicas.',
                icon: `<svg class="icon" viewBox="0 0 24 24">
                        <line x1="18" y1="20" x2="18" y2="10"></line>
                        <line x1="12" y1="20" x2="12" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="14"></line>
                    </svg>`,
                overview: 'Nuestro servicio de análisis de datos utiliza técnicas avanzadas de estadística y machine learning para extraer patrones ocultos y tendencias significativas de grandes volúmenes de información empresarial.',
                benefits: [
                    'Identificación de oportunidades de negocio',
                    'Optimización de procesos operativos',
                    'Predicción de tendencias de mercado',
                    'Reducción de riesgos empresariales'
                ],
                tools: ['Python', 'R', 'SQL', 'Tableau', 'Power BI', 'Apache Spark'],
                timeline: '2-6 semanas según complejidad',
                stats: {
                    'Proyectos': '150+',
                    'Precisión': '95%',
                    'ROI Promedio': '300%'
                }
            },
            ciencia: {
                title: 'Ciencia de datos',
                description: 'Desarrollamos modelos predictivos y algoritmos personalizados para resolver desafíos específicos.',
                icon: `<svg class="icon" viewBox="0 0 24 24">
                        <polyline points="23,6 13.5,15.5 8.5,10.5 1,18"></polyline>
                        <polyline points="17,6 23,6 23,12"></polyline>
                    </svg>`,
                overview: 'Aplicamos métodos científicos rigurosos, procesos estructurados y algoritmos avanzados para extraer conocimiento profundo e insights accionables de datos estructurados y no estructurados.',
                benefits: [
                    'Modelos de machine learning personalizados',
                    'Automatización de procesos de análisis',
                    'Predicciones precisas y confiables',
                    'Soluciones escalables y robustas'
                ],
                tools: ['TensorFlow', 'PyTorch', 'Scikit-learn', 'Jupyter', 'Docker', 'MLflow'],
                timeline: '4-12 semanas según complejidad',
                stats: {
                    'Modelos': '80+',
                    'Precisión ML': '92%',
                    'Tiempo Ahorro': '60%'
                }
            },
            ingenieria: {
                title: 'Ingeniería de datos',
                description: 'Construimos pipelines robustos para la recolección, procesamiento y almacenamiento de datos.',
                icon: `<svg class="icon" viewBox="0 0 24 24">
                        <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                        <rect x="9" y="9" width="6" height="6"></rect>
                        <line x1="9" y1="1" x2="9" y2="4"></line>
                        <line x1="15" y1="1" x2="15" y2="4"></line>
                        <line x1="9" y1="20" x2="9" y2="23"></line>
                        <line x1="15" y1="20" x2="15" y2="23"></line>
                        <line x1="20" y1="9" x2="23" y2="9"></line>
                        <line x1="20" y1="14" x2="23" y2="14"></line>
                        <line x1="1" y1="9" x2="4" y2="9"></line>
                        <line x1="1" y1="14" x2="4" y2="14"></line>
                    </svg>`,
                overview: 'Diseñamos y construimos infraestructuras de datos robustas y escalables para recopilar, transformar, almacenar y procesar grandes volúmenes de información de manera eficiente, segura y confiable.',
                benefits: [
                    'Pipelines de datos automatizados',
                    'Infraestructura escalable en la nube',
                    'Garantía de calidad y consistencia',
                    'Integración con múltiples fuentes'
                ],
                tools: ['Apache Spark', 'Kafka', 'Airflow', 'AWS/Azure', 'MongoDB', 'Elasticsearch'],
                timeline: '6-16 semanas según infraestructura',
                stats: {
                    'TB Procesados': '500+',
                    'Uptime': '99.9%',
                    'Fuentes': '100+'
                }
            },
            visualizacion: {
                title: 'Visualización de datos',
                description: 'Creamos dashboards interactivos y reportes visuales que comunican insights de forma clara.',
                icon: `<svg class="icon" viewBox="0 0 24 24">
                        <line x1="18" y1="20" x2="18" y2="10"></line>
                        <line x1="12" y1="20" x2="12" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="14"></line>
                    </svg>`,
                overview: 'Transformamos datos complejos en visualizaciones intuitivas, dashboards interactivos y reportes automatizados que facilitan la comprensión inmediata y la comunicación efectiva de insights críticos.',
                benefits: [
                    'Dashboards en tiempo real',
                    'Visualizaciones interactivas personalizadas',
                    'Reportes automatizados programables',
                    'Interfaz intuitiva para usuarios finales'
                ],
                tools: ['D3.js', 'Plotly', 'Tableau', 'Power BI', 'React', 'Observable'],
                timeline: '3-8 semanas según complejidad',
                stats: {
                    'Dashboards': '200+',
                    'Usuarios': '5000+',
                    'Satisfacción': '98%'
                }
            },
            arquitectura: {
                title: 'Arquitectura de datos',
                description: 'Diseñamos arquitecturas de datos modernas y escalables para soportar el crecimiento empresarial.',
                icon: `<svg class="icon" viewBox="0 0 24 24">
                        <ellipse cx="11" cy="11" rx="8" ry="4"></ellipse>
                        <path d="M11 3l0 16"></path>
                        <path d="M11 3c4 0 8 1.79 8 4s-4 4-8 4-8-1.79-8-4 4-4 8-4z"></path>
                        <path d="M11 11c4 0 8 1.79 8 4s-4 4-8 4-8-1.79-8-4 4-4 8-4z"></path>
                    </svg>`,
                overview: 'Planificamos y diseñamos arquitecturas de datos modernas, escalables y seguras que garantizan la eficiencia operacional, la escalabilidad horizontal y el cumplimiento normativo en el manejo de información empresarial.',
                benefits: [
                    'Arquitecturas cloud-native modernas',
                    'Escalabilidad horizontal automática',
                    'Seguridad y compliance garantizado',
                    'Optimización continua de costos'
                ],
                tools: ['AWS/Azure/GCP', 'Kubernetes', 'Terraform', 'Apache Kafka', 'Elasticsearch', 'Redis'],
                timeline: '8-20 semanas según alcance',
                stats: {
                    'Arquitecturas': '50+',
                    'Escalabilidad': '10x',
                    'Reducción Costos': '40%'
                }
            }
        };

        let currentActiveItem = null;

        // Event listeners
        document.addEventListener('DOMContentLoaded', function() {
            const menuItems = document.querySelectorAll('.menu-item');
            menuItems.forEach(item => {
                item.addEventListener('click', function() {
                    const itemType = this.getAttribute('data-item');
                    toggleServiceDetails(itemType);
                });
            });
        });

        function toggleServiceDetails(serviceType) {
            const service = servicesData[serviceType];
            if (!service) return;

            const menuItem = document.querySelector(`[data-item="${serviceType}"]`);
            const detailPanel = document.querySelector(`[data-panel="${serviceType}"]`);

            // If clicking on the same item, close it
            if (currentActiveItem === serviceType) {
                menuItem.classList.remove('active');
                detailPanel.classList.remove('active');
                currentActiveItem = null;
                return;
            }

            // Close previously active item
            if (currentActiveItem) {
                const prevMenuItem = document.querySelector(`[data-item="${currentActiveItem}"]`);
                const prevDetailPanel = document.querySelector(`[data-panel="${currentActiveItem}"]`);
                prevMenuItem.classList.remove('active');
                prevDetailPanel.classList.remove('active');
            }

            // Populate content
            detailPanel.innerHTML = createDetailContent(service);

            // Show new item
            menuItem.classList.add('active');
            detailPanel.classList.add('active');
            currentActiveItem = serviceType;

            // Smooth scroll to the panel
            setTimeout(() => {
                detailPanel.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }, 100);
        }

        function createDetailContent(service) {
            // Create stats HTML
            const statsHtml = Object.entries(service.stats)
                .map(([label, value]) => `
                    <div class="stat-card">
                        <div class="stat-number">${value}</div>
                        <div class="stat-label">${label}</div>
                    </div>
                `).join('');

            // Create benefits HTML
            const benefitsHtml = service.benefits
                .map(benefit => `
                    <li>
                        <div class="bullet"></div>
                        ${benefit}
                    </li>
                `).join('');

            // Create tools HTML
            const toolsHtml = service.tools
                .map(tool => `<span class="tool-tag">${tool}</span>`)
                .join('');

            return `
                <div class="panel-header">
                    <div class="panel-header-content">
                        <div class="panel-icon">${service.icon}</div>
                        <h2 class="panel-title">${service.title}</h2>
                    </div>
                    <p class="panel-description">${service.description}</p>
                </div>

                <div class="panel-content">
                    <div class="content-section">
                        <h3 class="section-title">Descripción</h3>
                        <p class="section-text">${service.overview}</p>
                    </div>

                    <div class="content-section">
                        <h3 class="section-title">Estadísticas Clave</h3>
                        <div class="stats-grid">
                            ${statsHtml}
                        </div>
                    </div>

                    <div class="content-section">
                        <h3 class="section-title">Beneficios Clave</h3>
                        <ul class="benefits-list">
                            ${benefitsHtml}
                        </ul>
                    </div>

                    <div class="content-section">
                        <h3 class="section-title">Herramientas y Tecnologías</h3>
                        <div class="tools-container">
                            ${toolsHtml}
                        </div>
                    </div>

                    <div class="content-section">
                        <div class="timeline-box">
                            <h3 class="section-title">Tiempo de Implementación</h3>
                            <p class="section-text">${service.timeline}</p>
                        </div>
                    </div>

                    <button class="cta-button">Solicitar Consulta Gratuita</button>
                </div>
            `;
        }
        