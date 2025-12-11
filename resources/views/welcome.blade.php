<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>MyFolio - Portfolio HTML Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Portfolio HTML Template" name="keywords">
        <meta content="Portfolio HTML Template" name="description">

        <!-- Favicon -->
        <link href="{{ asset('frontend/img/favicon.ico') }}" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Solway:400,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <!-- Header Start -->
        <div class="top-header" id="top-header">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('frontend/img/tof3.jpeg') }}" alt="Anamul Hasan" />
                    </div>

                    <div class="col-md-12">
                        <h1>I'm Anvoh Christy Yannick Banga</h1>
                    </div>

                    <div class="col-md-12">
                        <p>Web Developer, Apps Developer, Front End Developer, Apps Developer, Administrator database, DevOp's</p>
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Nav Start -->
        <div class="header">
            <div class="container">

                <div class="logo pull-left">
                    <h1><a href="index.html">MyFolio</a></h1>
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="#top-header">Accueil</a></li>
                        <li><a href="#about">À-propos</a></li>
                        <li><a href="#experience">Experience</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contact me</a></li>
                    </ul>
                </nav>

                <nav class="nav social-nav pull-right d-none d-lg-inline">
                    <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a>
                </nav>
            </div>
        </div>
        <!-- Nav End -->

        <!-- About Me Start-->
        <div class="about" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <img class="img-fluid" src="{{ asset('frontend/img/tof4.jpeg') }}" />
                    </div>

                    <div class="col-md-6 col-lg-8">
                        <header class="section-header">
                            <h2>À-propos</h2>
                        </header>
                        <h3><strong>Nom :</strong> Anvoh Christy Yannick Banga</h3>
                        <h4><strong>Profession:</strong> Ingénieur en Système d'information</h4>
                        <p>
                            Passionné d’informatique, je suis fasciné par le pouvoir transformateur de la technologie et par son impact concret sur notre quotidien. Ingénieur en informatique, j’aime relever des défis techniques et explorer de nouvelles approches pour concevoir des solutions performantes, innovantes et durables.
                        </p>
                        <p>
                            Curieux et motivé, je me tiens constamment à l’affût des avancées technologiques. J’aime plonger dans de nouveaux outils, langages et environnements afin de repousser les limites de ce qui est possible et d’améliorer en continu mes compétences.
                        </p>
                        <p>
                           Pour moi, l’informatique n’est pas seulement un métier, mais une véritable passion qui me pousse à apprendre, à progresser et à créer de la valeur à travers chaque projet sur lequel je travaille.
                        </p>
                        <a href="#">Télécharger CV</a>
                    </div>
                </div>

                {{-- <div class="row">
                    <div class="col-md-6">
                        <div class="skills">
                            <h3>Front End Skills</h3>
                            <div class="skill-name">
                                <p>HTML</p><p>85%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="skill-name">
                                <p>CSS</p><p>95%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="skill-name">
                                <p>jQuery</p><p>80%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="skills">
                            <h3>Back End Skills</h3>
                            <div class="skill-name">
                                <p>PHP</p><p>90%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="skill-name">
                                <p>Laravel</p><p>85%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="skill-name">
                                <p>MySQL</p><p>95%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <br>
            </div>
        </div>
        <!-- About Me End-->

        <!-- Job Experience Start -->
        <div class="experience" id="experience">
            <div class="container">
                <header class="section-header">
                    <h3>Expérience professionnelle</h3>
                    <p>
                        Morbi lacinia malesuada risus vel pellentesque. Cras malesuada, felis nec dignissim lobortis, nisl nulla venenatis arcu, et commodo lacus nulla sit amet libero.
                    </p>
                </header>
                <div class="row">
                    <div class="col-md-6">
                        <div class="exp-column">
                            <p class="exp-date">Fev-2023 <span>à</span> Présent</p>
                            <h4 class="exp-company">GGA-CI</h4>
                            <h4 class="exp-designation">Développeur Full Stack</h4>
                            <p class="exp-detail">
                                •Développement, maintenance et mise à jour des
                                applications internes pour répondre aux besoins opérationnels de l’organisation <br>
                                •Support IT : assistance technique aux utilisateurs,
                                installation et configuration des postes de travail
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="exp-column">
                            <p class="exp-date">Oct-2022 <span>à</span> Présent</p>
                            <h4 class="exp-company">Impact Digital</h4>
                            <h4 class="exp-designation">Responsable IT</h4>
                            <p class="exp-detail">
                                •Pilotage et coordination de projets web et logiciels de A à Z :
                                analyse des besoins, planification, développement, tests,
                                déploiement et maintenance. <br>
                                •Conception et développement d'applications sur mesure en
                                assurant performance, sécurité et évolutivité.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="exp-column">
                            <p class="exp-date">Juil-2022 <span>to</span> Sept-2022</p>
                            <h4 class="exp-company">OqTech, (Stage)</h4>
                            <h4 class="exp-designation">Développeur web</h4>
                            <p class="exp-detail">
                                Développement et maintenance d'une plateforme de mise en
                                relation influenceurs/clients. Ajout de fonctionnalités et
                                amélioration continue de l'expérience utilisateur
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="exp-column">
                            <p class="exp-date">01-Jan-2010 <span>to</span> 31-Dec-2012</p>
                            <h4 class="exp-company">ABC Software, Los Angeles, CA</h4>
                            <h4 class="exp-designation">Web Designer</h4>
                            <p class="exp-detail">
                                Curabitur porttitor, dolor sed tempus fringilla, odio odio pellentesque sem, in elementum sem nisl non ipsum. Suspendisse laoreet ante vel libero convallis, sit amet hendrerit massa mattis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Experience End -->

        <!-- Services Start -->
        <div class="services" id="services">
            <div class="container">
                <header class="section-header">
                    <h3>My Services</h3>
                    <p>
                        Morbi lacinia malesuada risus vel pellentesque. Cras malesuada, felis nec dignissim lobortis, nisl nulla venenatis arcu, et commodo lacus nulla sit amet libero.
                    </p>
                </header>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="single-service">
                            <span></span>
                            <div class="service-icon"><i class="fa fa-television"></i></div>
                            <h4>Web Design</h4>
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et cubilia Curae</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="single-service">
                            <span></span>
                            <div class="service-icon"> <i class="fa fa-laptop"></i> </div>
                            <h4>Web Development</h4>
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et cubilia Curae</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="single-service">
                            <span></span>
                            <div class="service-icon"> <i class="fa fa-android"></i> </div>
                            <h4>Apps Development</h4>
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et cubilia Curae</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="single-service">
                            <span></span>
                            <div class="service-icon"> <i class="fa fa-envelope-o"></i> </div>
                            <h4>Email List Building</h4>
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et cubilia Curae</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="single-service">
                            <span></span>
                            <div class="service-icon"> <i class="fa fa-signal"></i> </div>
                            <h4>Custom Analytics</h4>
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et cubilia Curae</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="single-service">
                            <span></span>
                            <div class="service-icon"> <i class="fa fa-globe"></i> </div>
                            <h4>Online Marketing</h4>
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et cubilia Curae</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Counter Start -->
        <div class="counters">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon-box"><i class="fa fa-calendar"></i></div>
                            <div class="number animateNumber" data-toggle="counter-up"> <span>10</span></div>
                            <h4 class="font-weight">Years of Experience</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon-box"><i class="fa fa-check"></i></div>
                            <div class="number animateNumber" data-toggle="counter-up"> <span>395</span></div>
                            <h4 class="font-weight">Completed Projects</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon-box"><i class="fa fa-users"></i></div>
                            <div class="number animateNumber" data-toggle="counter-up"> <span>225</span></div>
                            <h4 class="font-weight">Total Clients</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon-box"><i class="fa fa-heart"></i></div>
                            <div class="number animateNumber" data-toggle="counter-up"> <span>9</span></div>
                            <h4 class="font-weight">Award Won</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter End -->

        <!-- Portfolio Start -->
        <div class="portfolio" id="portfolio">
            <div class="container">
                <header class="section-header">
                    <h3 class="section-title">My Portfolio</h3>
                    <p>
                        Morbi lacinia malesuada risus vel pellentesque. Cras malesuada, felis nec dignissim lobortis, nisl nulla venenatis arcu, et commodo lacus nulla sit amet libero.
                    </p>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".web-des">Web Design</li>
                            <li data-filter=".web-dev">Web Development</li>
                            <li data-filter=".app-dev">App Development</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item web-des">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio-1.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio-1.jpg" data-lightbox="portfolio" data-title="Curabitur semper erat" class="link-preview" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">Curabitur semper erat <span>Web Design</span></h4>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item web-des">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio-2.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio-2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Maecenas a tempus tortor" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">Maecenas a tempus tortor <span>Web Design</span></h4>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item web-dev">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio-3.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio-3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Aliquam id sapien lorem" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">Aliquam id sapien lorem <span>Web Development</span></h4>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item web-dev">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio-4.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio-4.jpg" class="link-preview" data-lightbox="portfolio" data-title="Quisque lectus mauris" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">Quisque lectus mauris <span>Web Development</span></h4>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item app-dev">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio-5.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio-5.jpg" class="link-preview" data-lightbox="portfolio" data-title="Interdum et malesuada" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">Interdum et malesuada <span>Apps Development</span></h4>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item app-dev">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio-6.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio-6.jpg" class="link-preview" data-lightbox="portfolio" data-title="Pellentesque lacus" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">Pellentesque lacus <span>Apps Development</span></h4>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->

        <!-- Testimonials Start -->
        <div class="testimonials" id="testimonials">
            <div class="container">
                <i class="fa fa-4x fa-quote-left"></i>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                        <h3>Abigail Shaw</h3>
                        <h4>Greenhouse worker</h4>
                        <p>
                            Duis elementum consequat feugiat. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus malesuada fames turpis egestas.
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                        <h3>Jake Gregory</h3>
                        <h4>News correspondent</h4>
                        <p>
                            Curabitur bibendum euismod augue, eu rutrum metus consectetur id. Duis lacus erat, gravida laoreet molestie eget, congue in erat.
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                        <h3>Maddison Hughes</h3>
                        <h4>Social worker</h4>
                        <p>
                            Nulla at luctus ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis enim quam, interdum nec turpis at, volutpat ultricies ligula.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials End -->

        <!-- Contact Start -->
        <div class="contact" id="contact">
            <div class="container">
                <div class="section-header">
                    <h3>Contact Me</h3>
                    <p>
                        Morbi lacinia malesuada risus vel pellentesque. Cras malesuada, felis nec dignissim lobortis, nisl nulla venenatis arcu, et commodo lacus nulla sit amet libero.
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info">
                            <p><i class="fa fa-user"></i>Poppy Jackson</p>
                            <p><i class="fa fa-tag"></i>Web Designer & Developer</p>
                            <p><i class="fa fa-map-marker"></i>123 Soft Street, Los Angeles, CA, USA</p>
                            <p><i class="fa fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a></p>
                            <p><i class="fa fa-phone"></i><a href="tel:+1234567890">+123-456-7890</a></p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4">Receive messages instantly with our PHP and Ajax contact form - available in the <a href="https://htmlcodex.com/downloading/?item=383">Pro Version</a> only.</h4>
                        <div class="form">
                            <form action="" method="">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" placeholder="Your Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="copyright">
                    <p>&copy; Copyright <a href="#">Your Site Name</a>. All Rights Reserved</p>

                    <!--/*** The author’s attribution link must remain intact in the template. ***/-->
                    <!--/*** If you wish to remove this credit link, please purchase the Pro Version . ***/-->
                    <p>Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
        <!-- Footer end -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('frontend/lib/typed/typed.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/stickyjs/sticky.js') }}"></script>
        <script src="{{ asset('frontend/lib/superfish/hoverIntent.js') }}"></script>
        <script src="{{ asset('frontend/lib/superfish/superfish.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/lightbox/js/lightbox.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    </body>
</html>
