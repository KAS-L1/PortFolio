        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Kasl Dev</title>
            <meta content="Aspiring web developer showcasing portfolio and resume" name="description">
            <meta content="web develoepr, Portfolio, Resume, Projects" name="keywords">
            <link rel="icon" href="https://github.githubassets.com/favicons/favicon.png" type="image/png">
            <link rel="apple-touch-icon" href="https://github.githubassets.com/favicons/apple-touch-icon.png">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
            <link rel="stylesheet" href="/assets/style.css">
        </head>

        <body class="light-mode">
            <nav class="navbar navbar-expand-lg bg-transparent">
                <div class="container px-3 px-md-5">
                    <a class="navbar-brand fw-bold" href="#">Im_Kasl</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto align-items-center">
                            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="#clients">Clients</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                            <li class="nav-item">
                                <button id="toggle-theme" class="btn btn-transparent p-0 ms-3">
                                    <i class="bi bi-moon-fill"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-fluid px-3 px-md-5 mt-5 text-center">
                <!-- Home Section -->
                <section id="home" class="home-section d-flex align-items-center justify-content-between flex-column flex-md-row">
                    <div class="text-md-start text-center">
                        <h1 class="display-1 fw-bold typing-text" id="intro-text">Hello, I'm Kasl 👋</h1>
                        <p class="job-title font-italic">Aspiring Web Developer, Prompt Engineer & Filipino Martial Artist</p>
                        <p class="description">A passionate developer with a degree in BS Information Technology, I specialize in creating functional and responsive web applications with an eye for design and user experience.</p>
                    </div>
                    <div class="mt-4 mt-md-0">
                        <img src="/assets/img/profile.jpg" alt="Kasl's Profile" class="img-fluid rounded-3 profile-image">
                    </div>
                </section>

                <!-- About Section -->
                <section id="about" class="my-5">
                    <h2 class="display-5 fw-bold">About Me</h2>
                    <p class="about-description mt-3">I am an enthusiastic and creative web developer with a Bachelor’s degree in Information Technology. I enjoy creating intuitive solutions, and as a martial artist, I bring discipline to every project.</p>
                    <h3 class="mt-4">Tech Stack</h3>
                    <div class="tech-stack-icons mt-3 d-flex justify-content-center flex-wrap">
                        <div class="tech-icon mx-3 my-2">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5" width="50" height="50">
                            <p>HTML5</p>
                        </div>
                        <div class="tech-icon mx-3 my-2">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3" width="50" height="50">
                            <p>CSS3</p>
                        </div>
                        <div class="tech-icon mx-3 my-2">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" width="50" height="50">
                            <p>JavaScript</p>
                        </div>
                        <div class="tech-icon mx-3 my-2">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap" width="50" height="50">
                            <p>Bootstrap</p>
                        </div>
                        <div class="tech-icon mx-3 my-2">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" width="50" height="50">
                            <p>PHP</p>
                        </div>
                        <div class="tech-icon mx-3 my-2">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" width="50" height="50">
                            <p>MySQL</p>
                        </div>
                        <div class="tech-icon mx-3 my-2">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="MySQL" width="50" height="50">
                            <p>Github</p>
                        </div>
                    </div>
                </section>

                <!-- Projects Section -->
                <section id="projects" class="my-5 text-center">
                    <div class="container">
                        <h2 class="display-5 fw-bold mb-4">Projects</h2>
                        <div class="d-flex justify-content-end">
                            <a href="#all-works" class="view-all-works">View all works &gt;</a>
                        </div>
                        <div class="row gy-4 mt-3">
                            <!-- Project Cards -->
                            <div class="col-12 col-md-4">
                                <div class="card project-card shadow-sm h-100">
                                    <img src="/assets/img/project.png" class="card-img-top" alt="Paradise Hotel">
                                    <div class="card-body">
                                        <h5 class="card-title">Paradise Hotel</h5>
                                        <p class="project-description">Predictive Analytics Dashboard</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="card project-card shadow-sm h-100">
                                    <img src="/assets/img/project1.png" class="card-img-top" alt="Paradise Hotel">
                                    <div class="card-body">
                                        <h5 class="card-title">Paradise Hotel</h5>
                                        <p class="project-description">Predictive Analytics Dashboard</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="card project-card shadow-sm h-100">
                                    <img src="/assets/img/project.png" class="card-img-top" alt="Paradise Hotel">
                                    <div class="card-body">
                                        <h5 class="card-title">Paradise Hotel</h5>
                                        <p class="project-description">Predictive Analytics Dashboard</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Repeat for other project cards -->
                        </div>
                        <p class="mt-4 text-danger fw-bold">Crafting Digital Experiences That Drive Success 🚀</p>
                    </div>
                </section>

                <!-- Expertise Section -->
                <section id="expertise" class="my-5 text-center">
                    <div class="container">
                        <h2 class="display-5 fw-bold mb-4">What I am Good At</h2>
                        <p class="mb-4">With a versatile skill set, I excel in various areas essential for building impactful digital experiences.</p>
                        <div class="row gy-4">
                            <!-- Expertise Cards -->
                            <div class="col-12 col-md-4">
                                <div class="card h-100 shadow-sm expertise-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Soft Skills</h5>
                                        <p class="card-text">Proficient in essential interpersonal skills such as communication, adaptability, and teamwork, ensuring effective collaboration and a positive work environment.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="card h-100 shadow-sm expertise-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Prompting</h5>
                                        <p class="card-text">Skilled in designing prompts to effectively communicate and guide AI-driven solutions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="card h-100 shadow-sm expertise-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Editing</h5>
                                        <p class="card-text">Proficient in content editing to enhance clarity and engagement across digital platforms.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="card h-100 shadow-sm expertise-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Graphics</h5>
                                        <p class="card-text">Expertise in creating visually appealing graphics that align with brand identity and aesthetics.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="card h-100 shadow-sm expertise-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Branding</h5>
                                        <p class="card-text">Skilled in establishing brand presence through cohesive and strategic branding elements.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="card h-100 shadow-sm expertise-card">
                                    <div class="card-body">
                                        <h5 class="card-title">User Experience</h5>
                                        <p class="card-text">Dedicated to crafting user-centered designs that offer seamless and intuitive experiences.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Clients Section -->
                <section id="clients" class="my-5 text-center">
                    <div class="container">
                        <h2 class="display-5 fw-bold mb-4">I am proud to work with some of the best partner clients</h2>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-6 col-md-4 my-3">
                                <img src="/assets/img/paradise_logo.png" alt="Client 1" class="img-fluid client-logo">
                            </div>
                            <div class="col-6 col-md-4 my-3">
                                <img src="/assets/img/paradise_logo.png" alt="Client 1" class="img-fluid client-logo">
                            </div>
                            <div class="col-6 col-md-4 my-3">
                                <img src="/assets/img/paradise_logo.png" alt="Client 1" class="img-fluid client-logo">
                            </div>
                            <div class="col-6 col-md-4 my-3">
                                <img src="/assets/img/paradise_logo.png" alt="Client 1" class="img-fluid client-logo">
                            </div>
                            <div class="col-6 col-md-4 my-3">
                                <img src="/assets/img/paradise_logo.png" alt="Client 1" class="img-fluid client-logo">
                            </div>
                            <div class="col-6 col-md-4 my-3">
                                <img src="/assets/img/paradise_logo.png" alt="Client 1" class="img-fluid client-logo">
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <a href="#contact" class="clients-section-link">Let's work together &gt;</a>
                                <a href="#all-clients" class="clients-section-link">View all clients &gt;</a>
                            </div>
                        </div>
                </section>

                <!-- Testimonial Section -->
                <section id="testimonial" class="my-5">
                    <div class="container d-flex align-items-center justify-content-center">
                        <div class="testimonial-card d-flex align-items-center">
                            <!-- Image -->
                            <div class="testimonial-image-wrapper">
                                <img src="/assets/img/profile.jpg" alt="Jay Melendrez" class="testimonial-image">
                            </div>
                            <!-- Text Content -->
                            <div class="testimonial-text ms-4">
                                <p class="testimonial-quote">
                                    <i class="bi bi-quote"></i>
                                    Working alongside a talented team has been incredibly fulfilling. Together, we’ve crafted user-friendly applications and visually compelling designs that not only meet but exceed expectations, pushing the boundaries of digital innovation.
                                </p>
                                <p class="testimonial-author">
                                    <strong>Kier Salise</strong><br>
                                    Developer
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Contact Section -->
                <section id="contact" class="my-5">
                    <div class="container text-center">
                        <h2 class="display-5 fw-bold mb-4">Contact Me</h2>
                        <p class="contact-description mb-4">If you'd like to work together or just say hello, feel free to reach out through this form.</p>
                        <form id="contactForm" class="contact-form mx-auto" action="contact.php" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                            </div>
                            <div class="mb-3">
                                <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                        <p class="contact-footer mt-4">Alternatively, you can reach me at <a href="mailto:kasl.54370906@gmail.com">kasl-email@example.com</a></p>
                    </div>
                </section>
            </div>
            <div>
                <!-- Footer Section -->
                <footer>
                    <div class="footer-container">
                        <div class="footer-content">
                            <span>&copy; 2024 Kier Salise</span>
                        </div>
                        <div class="social-icons">
                            <a href="https://github.com/username" target="_blank" aria-label="GitHub"><i class="bi bi-github"></i></a>
                            <a href="https://facebook.com/username" target="_blank" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://linkedin.com/in/username" target="_blank" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </footer>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="/assets/script.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </body>

        </html>