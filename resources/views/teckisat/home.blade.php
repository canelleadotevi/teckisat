@extends('layout.master-home')
<div>
    @section('content')
        <section id="clients" class="clients">
            <div class="container">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ asset('img/clients/client-1.png') }}" width="200" height="300" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset('img/clients/client-2.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="300">
                        <img src="{{ asset('img/clients/client-3.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="400">
                        <img src="{{ asset('img/clients/client-4.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="500">
                        <img src="{{ asset('img/clients/client-5.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
                        <img src="{{ asset('img/clients/client-6.png') }}" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <h2>Qui sommes nous ?</h2>
                        <h3>TECKISAT, société spécialisée dans le développement informatique et la création de logiciels
                            spécifiques, dédiés à votre métier.
                        </h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        <p class="">
                            Que vous cherchiez à développer une présence en ligne percutante, à créer une application mobile
                            innovante ou à optimiser votre stratégie de marketing digital, Teckisat est là pour vous
                            accompagner à chaque étape du processus.
                        </p>
                        <ul class="">
                            <li><i class="ri-check-double-line  "></i>
                                Economies: Faites des économies sur les coûts de maintenance de vos applications grâce à nos
                                centres de services offshore nous proposons des tarifs très compétitifs.</li>
                            <li><i class="ri-check-double-line "></i>Gestion:Confiez-nous la gestions de vos
                                applications et restez concentré sur votre coeur de métier. </li>
                            <li><i class="ri-check-double-line "></i>Rendements: Maitrisez vos pics d'activité et
                                renforcez votre croissance. </li>
                        </ul>
                        <p class="fst-italic">

                        <h3 class="">Faites le choix de l'excellence numérique. Faites confiance à Teckisat pour
                            réaliser vos
                            ambitions en ligne et propulser votre entreprise vers de nouveaux sommets.
                            </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p class="">Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p class="">Projets</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
                            class="purecounter">h/24</span>
                        <p class="">Maintenance</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p class="">Personnel Teckisat</p>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
                        <div class="content">
                            <h3>Pourquoi choisir Teckisat ?</h3>
                            <p>
                                À l'ère numérique en constante évolution, choisir le bon partenaire pour votre projet en
                                ligne est essentiel pour assurer son succès. Teckisat se démarque comme l'agence idéale dans
                                les
                                services numériques, offrant une combinaison unique d'expertise technique, de créativité et
                                de
                                service client exceptionnel.
                            </p>
                            <div class="text-center">
                                <a href="#" class="more-btn">Découvrez <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Compréhension approfondie du marché</h4>
                                        <p>Connaissance approfondie des besoins, des tendances et des dynamiques du marché
                                            dans lequel l'entreprise évolue.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Expertise technique solide</h4>
                                        <p>Connaissance approfondie et compétente des aspects techniques des services
                                            numériques, tels que le développement de logiciels, la gestion des données et la
                                            sécurité.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-images"></i>
                                        <h4>Approche centrée sur le client</h4>
                                        <p>Mettre les besoins et les préférences des clients au centre de toutes les
                                            décisions et actions de l'entreprise.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="text-center" data-aos="zoom-in">
                    <h3 class="">Découvrir nos réalisations</h3>
                    <p class=""> Explorez notre portfolio varié, offrant une gamme diversifiée de sites web et
                        d'applications mobiles.</p>
                    <a class="cta-btn" href="#portfolio">Maintenant</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2>Services</h2>
                            <p class="">Société spécialisée dans le développement informatique et la création de
                                logiciels
                                spécifiques, dédiés à votre métier.</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="icon-box iconbox-blue">
                                    <div class="icon">
                                        <svg width="150" height="150" viewBox="0 0 600 600"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                                d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                            </path>
                                        </svg>
                                        <i class="bx bxl-dribbble"></i>
                                    </div>
                                    <h4><a href="">Développement d'applications
                                            web</a></h4>
                                    <p>Avoir une vitrine sur internet est une nécessité et doit faire partie de vos projets.
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box iconbox-orange ">
                                    <div class="icon">
                                        <svg width="150" height="150" viewBox="0 0 600 600"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                                d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                            </path>
                                        </svg>
                                        <i class="bx bx-file"></i>
                                    </div>
                                    <h4><a href="">Herbegement
                                            Web & Cloud</a></h4>
                                    <p>Être présent sur le Web est fondamentale pour vous faire connaître au monde</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                                data-aos-delay="300">
                                <div class="icon-box iconbox-pink">
                                    <div class="icon">
                                        <svg width="150" height="150" viewBox="0 0 600 600"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                                d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                            </path>
                                        </svg>
                                        <i class="bx bx-tachometer"></i>
                                    </div>
                                    <h4><a href="">Développement d'application mobile</a></h4>
                                    <p>Nous developpons vos applications mobile Android & iOS</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="icon-box iconbox-yellow">
                                    <div class="icon">
                                        <svg width="150" height="150" viewBox="0 0 600 600"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                                d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                                            </path>
                                        </svg>
                                        <i class="bx bx-layer"></i>
                                    </div>
                                    <h4><a href="">
                                            Développement logiciel</a></h4>
                                    <p>Des logiciels sur mesure qui répondent à tous vos besoins de gestion et de pilotage
                                        d'entreprise.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box iconbox-red">
                                    <div class="icon">
                                        <svg width="150" height="150" viewBox="0 0 600 600"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                                d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                                            </path>
                                        </svg>
                                        <i class="bx bx-slideshow"></i>
                                    </div>
                                    <h4><a href="">Conseils informatique</a></h4>
                                    <p>Faites évoluer facilement vos applications avec l'ajout de nouvelles fonctionnalités
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-left">
                    <h2>Nos réalisations</h2>
                    <p class="">Notre équipe chez Teckisat est fière de présenter nos réalisations les plus récentes,
                        témoignant de
                        notre engagement continu envers l'excellence technologique et le service clientèle exceptionnel</p>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Tous</li>
                            <li data-filter=".filter-mobile">Applications mobiles</li>
                            <li data-filter=".filter-app">Applications web</li>
                            <li data-filter=".filter-web">Sites Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" style=" max-width: 1700px !important; width: 100% !important; margin: auto !important; padding: auto !important;" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/web1.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Application web 1</h4>
                                <p>Application web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/web1.jpg') }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Application web 1"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/web2.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Application web 2</h4>
                                <p>Application web </p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/web2.jpg') }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Application web 2"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/web3.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Site web 1</h4>
                                <p>Site web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/web3.png') }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Site web 1"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                        <div style=" height:260px;">
                            <img src="{{ asset('img/portfolio/web4.jpg') }}" style="width:100%; height:100%; object-fit: cover;"  class="img-fluid" alt="">

                        </div>
                            <div class="portfolio-info">
                                <h4>Site web 2</h4>
                                <p>Site web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/web4.jpg') }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Site web 2"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/web5.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Application Web 3</h4>
                                <p>Application Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/web5.png') }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/web6.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Site web 3</h4>
                                <p>Site web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/web6.png') }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-mobile">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/mobile1.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Application mobile 1</h4>
                                <p>Application mobile</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/mobile1.png') }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Application mobile 1"><i
                                            class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-mobile">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/mobile2.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Application mobile 2</h4>
                                <p>Application mobile</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/mobile2.png') }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Application mobile 2"><i
                                            class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-mobile">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/mobile3.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Application mobile 3</h4>
                                <p>Application mobile</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/mobile3.png') }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Application mobile 3"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2>Témoignages</h2>
                            <p class="">Découvrez ce que nos clients ont à dire sur leur expérience avec Teckisat et
                                comment notre expertise en matière de a contribué à répondre à leurs besoins.</p>
                        </div>
                    </div>
                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">

                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Travailler avec Teckisat a été une expérience exceptionnelle. Leur expertise
                                            technique et leur service clientèle de premier ordre ont dépassé toutes nos
                                            attentes, faisant de Teckisat notre partenaire de choix pour nos besoins.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                        <img src="{{ asset('img/testimonials/testimonials-6.jpg') }}"
                                            class="testimonial-img" alt="">
                                        <h3>Saul Goodman</h3>
                                        <h4>Ceo &amp; Founder</h4>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Choisir Teckisat pour nos besoins a été une décision stratégique
                                            judicieuse. Leur équipe dévouée et leurs solutions innovantes ont joué un rôle
                                            crucial dans le succès de notre projet.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                        <img src="{{ asset('img/testimonials/testimonials-6.jpg') }}"
                                            class="testimonial-img" alt="">
                                        <h3>Sara Wilsson</h3>
                                        <h4>Designer</h4>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Nous sommes extrêmement satisfaits des services fournis par Teckisat. Leur
                                            professionnalisme et leur engagement envers l'excellence ont contribué à la
                                            réalisation de nos projets avec une efficacité remarquable.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                        <img src="{{ asset('img/testimonials/testimonials-6.jpg') }}"
                                            class="testimonial-img" alt="">
                                        <h3>Jena Karlis</h3>
                                        <h4>Store Owner</h4>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Teckisat a été un partenaire fiable pour notre entreprise en matière
                                            d'hébergement.Nous recommandons vivement Teckisat pour leurs solutions
                                            d'hébergement de classe mondiale.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                        <img src="{{ asset('img/testimonials/testimonials-6.jpg') }}"
                                            class="testimonial-img" alt="">
                                        <h3>Matt Brandon</h3>
                                        <h4>Freelancer</h4>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Nous avons fait appel à Teckisat pour le développement de notre application
                                            logicielle complexe, et nous avons été impressionnés par leur expertise
                                            technique et leur approche méthodique.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                        <img src="{{ asset('img/testimonials/testimonials-6.jpg') }}"
                                            class="testimonial-img" alt="">
                                        <h3>John Larson</h3>
                                        <h4>Entrepreneur</h4>
                                    </div>
                                </div><!-- End testimonial item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2>Equipe Teckisat</h2>
                            <p class="">Découvrez l'équipe passionnée et talentueuse qui se cache derrière Teckisat.
                                Notre équipe
                                diversifiée et hautement qualifiée est dédiée à l'excellence, apportant son expertise et son
                                engagement à chaque projet.</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="pic"><img src="{{ asset('img/team1.jpeg') }}" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>Trinité Dalmeida</h4>
                                        <span>CEO</span>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href=""><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="pic"><img src="{{ asset('img/team2.jpg') }}" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>Sarah Adimi</h4>
                                        <span>PO</span>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href=""><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4">
                                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="pic"><img src="{{ asset('img/team3.jpg') }}" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>Rolande Ahle</h4>
                                        <span>CTO</span>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href=""><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4">
                                <div class="member" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="pic"><img src="{{ asset('img/team4.jpg') }}" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>Amanda Gonsales</h4>
                                        <span>Comptable</span>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href=""><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="section-title">
                            <h2>Contact</h2>
                            <p class="">Contactez-nous dès aujourd'hui pour discuter de vos besoins. Notre équipe
                                chez Teckisat est prête à vous aider à réaliser vos
                                projets avec succès.</p>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d126887.39492922829!2d2.3402749100933273!3d6.364131459419315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sCalavi%2CTogoudo!5e0!3m2!1sfr!2sbj!4v1713896545517!5m2!1sfr!2sbj"
                            style="border:0; width: 100%; height: 270px;" frameborder="0" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="info mt-4">
                            <i class="bi bi-geo-alt"></i>
                            <h4 class="">Adresse:</h4>
                            <p class="">Lot 1594 Tankpe, Abomey-Calavi, BENIN</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-4">
                                <div class="info">
                                    <i class="bi bi-envelope"></i>
                                    <h4 class="">Email:</h4>
                                    <p class="">contact@teckisat.com</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info w-100 mt-4">
                                    <i class="bi bi-phone"></i>
                                    <h4 class="">Téléphone:</h4>
                                    <p class="">+ 229 67 529 720</p>
                                </div>
                            </div>
                        </div>

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Votre Nom" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Votre Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Objet" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="text-center "><button type="submit">Envoyer</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
    @endsection
</div>
