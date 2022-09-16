

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <!--==================== UNICONS ====================-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

  <!--==================== SWIPER CSS ====================-->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />



  <!--==================== CSS ====================-->
  <link rel="stylesheet" href="./assets/css/style.css"/>


  <!--========== SCROLL REVEAL ========== -->
  <script src="https://unpkg.com/scrollreveal"></script>

  <title>BMM Portfolio</title>
</head>

<body>
  <!--==================== HEADER ====================-->
  <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo">BMM</a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list grid">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">
                <i class="uil uil-estate nav__icon"></i>Home
              </a>
            </li>
            <li class="nav__item">
              <a href="#about" class="nav__link">
                <i class="uil uil-user nav__icon"></i>About
              </a>
            </li>
            <li class="nav__item">
              <a href="#skills" class="nav__link">
                <i class="uil uil-file-info-alt nav__icon"></i>Skills
              </a>
            </li>
            <li class="nav__item">
              <a href="#services" class="nav__link">
                <i class="uil uil-bag-alt nav__icon"></i>Services
              </a>
            </li>
            <li class="nav__item">
              <a href="#portfolio" class="nav__link">
                <i class="uil uil-scenery nav__icon"></i>Portfolio
              </a>
            </li>
            <li class="nav__item">
              <a href="contact.php #contact" class="nav__link">
                <i class="uil uil-message nav__icon"></i>Contactme
              </a>
            </li>
          </ul>
          <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>
        <div class="nav__btns">
 


        <!--Theme change button-->
        <abbr title="change theme"><i class="uil uil-moon change-theme" id="theme-button"></i></abbr>

        <div class="nav__toggle" id="nav-toggle">
          <i class="uil uil-apps"></i>
        </div>
      </div>
    </nav>
  </header>

  <!--==================== MAIN ====================-->
  <main class="main">
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
      <div class="home__container conatiner grid">
        <div class="home__content grid">
          <div class="home__social">
            <a href="https://www.linkedin.com/in/basavaraj-mannangi-22a8541a0" target="_blank" class="home__social-icon">
              <i class="uil uil-linkedin-alt"></i>
            </a>

            <a href="https://dribbble.com/" target="_blank" class="home__social-icon">
              <i class="uil uil-dribbble"></i>
            </a>

            <a href="https://github.com/basavarajofficial" target="_blank" class="home__social-icon">
              <i class="uil uil-github-alt"></i>
            </a>

          </div>

          <div class="home__img">
            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <mask id="mask0" mask-type="alpha">
                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
              </mask>
              <g mask="url(#mask0)">
                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />

                <image class="home__blob-img" x="9" y="0" xlink:href="assets/img/me.png" />
              </g>
            </svg>
          </div>

          <div class="home__data">
            <h1 class="home__title">Hi, I'm Basavaraj</h1>
            <h3 class="home__subtitle">Frontend Developer</h3>
            <p class="home__description">
              Web design and development, produce quality work.
            </p>
            <a href="contact.php" class="button button--flex">
              Conatct Me <i class="uil uil-message button__icon"></i>
            </a>
          </div>
        </div>
        <div class="home__scroll">
          <a href="#about" class="home__scroll-button button--flex">
            <i class="uil uil-mouse-alt home__scroll-mouse"></i>
            <span class="home__scroll-name">Scroll down</span>
            <i class="uil uil-arrow-circle-down home__scroll-arrow"></i>
          </a>
        </div>
      </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="about section" id="about">
      <h2 class="section__title">About Me</h2>
      <span class="section__subtitle">My Introduction</span>

      <div class="about__container container grid">
        <img src="assets/img/Basu.jpg" alt="" class="about__img" />

        <div class="about__data">
          <p class="about__description">
            Web developer, with better knowledge and good experience, can
            work in web technologies, design interactive and responsive
            website, handling database and create user interface for an app,
            website, or other interactive media,high proficient and delivering quality work.
          </p>


          <div class="about__info">

            <!-- =========== About Pojects =============
              <div>
                <span class="about__info-title">4+</span>
                <span class="about__info-name"
                  >Completed <br />
                  Projects</span
                >
              </div>
              <div>
                <span class="about__info-title">4+</span>
                <span class="about__info-name"
                  >Completed <br />
                  Projects</span
                >
              </div>
              <div>
                <span class="about__info-title">4+</span>
                <span class="about__info-name"
                  >Completed <br />
                  Projects</span
                >
              </div>  -->


          </div>
          <div class="about__buttons">
            <a download href="assets/pdf/Basavaraj_Resume.pdf" class="button button--flex">
              Download CV <i class="uil uil-import button__icon"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--==================== SKILLS ====================-->
    <section class="skills section" id="skills">
      <h2 class="section__title">Skills</h2>
      <span class="section__subtitle">My Technical Level</span>
      <div class="skills__container container grid">
        <div>
          <!--==================== SKILLS 1 ====================-->

          <div class="skills__content skills__open">
            <div class="skills__header">
              <i class="uil uil-brackets-curly skills__icon"></i>

              <div>
                <h1 class="skills__title">Frontend Developer</h1>
              </div>

              <i class="uil uil-arrow-circle-down skills__arrow"></i>
            </div>

            <div class="skills__list grid">
              <div class="skills__data">
                <div class="skills__titles">
                  <h3 class="skills__name">HTML</h3>
                  <span class="skills__number">80%</span>
                </div>
                <div class="skills__bar">
                  <span class="skills__percentage skills__html"></span>
                </div>
              </div>

              <div class="skills__data">
                <div class="skills__titles">
                  <h3 class="skills__name">CSS</h3>
                  <span class="skills__number">70%</span>
                </div>
                <div class="skills__bar">
                  <span class="skills__percentage skills__css"></span>
                </div>
              </div>

              <div class="skills__data">
                <div class="skills__titles">
                  <h3 class="skills__name">JavaScript</h3>
                  <span class="skills__number">60%</span>
                </div>
                <div class="skills__bar">
                  <span class="skills__percentage skills__Js"></span>
                </div>
              </div>

              <div class="skills__data">
                <div class="skills__titles">
                  <h3 class="skills__name">Angular</h3>
                  <span class="skills__number">60%</span>
                </div>
                <div class="skills__bar">
                  <span class="skills__percentage skills__angular"></span>
                </div>
              </div>
            </div>
          </div>
          <br>

          <!--==================== SKILLS 2 ====================-->

          <div class="skills__content skills__close">
            <div class="skills__header">
              <i class="uil uil-server-network-alt skills__icon"></i>
              <div>
                <h1 class="skills__title">Backend Developer</h1>
              </div>

              <i class="uil uil-arrow-circle-down skills__arrow"></i>
            </div>

            <div class="skills__list grid">
              <div class="skills__data">
                <div class="skills__titles">
                  <h3 class="skills__name">PHP</h3>
                  <span class="skills__number">70%</span>
                </div>
                <div class="skills__bar">
                  <span class="skills__percentage skills__php"></span>
                </div>
              </div>
 

              <div class="skills__data">
                <div class="skills__titles">
                  <h3 class="skills__name">MySQL</h3>
                  <span class="skills__number">60%</span>
                </div>
                <div class="skills__bar">
                  <span class="skills__percentage skills__mysql"></span>
                </div>
              </div>

              <div class="skills__data">
                <div class="skills__titles">
                  <h3 class="skills__name">Python</h3>
                  <span class="skills__number">50%</span>
                </div>
                <div class="skills__bar">
                  <span class="skills__percentage skills__python"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==================== QUALIFICATION ====================-->
    <section class="qualification section">
      <h2 class="section__title">Qualification</h2>
      <span class="section__subtitle">My Personal journey</span>
      <div class="qual__bg">
        <div class="qual__container containers">
          <div class="qual__button button--flex">
            <i class="uil uil-graduation-cap qualification__icon"></i>
            Education
          </div>

          <div class="qual__sections">
            <!--==================== QUALIFICATION CONTENT 1====================-->

            <div class="qual__content">
              <!--==================== QUALIFICATION 1====================-->
              <div class="qual__data">
                <div class="qual__bar">
                  <h3 class="qualification__title">
                    <span>B.E</span> <br />
                    Mechanical Engineering
                  </h3>
                  <span class="qualification__subtitle">Vishweshwaraya Technical University</span>
                  <div class="qualification__calender">
                    <i class="uil uil-calendar-alt"></i>
                    2018 - 2021
                  </div>
                </div>

                <div class="qual__bar">
                  <h3 class="qualification__title">
                    <span>Diploma</span> <br />
                    Mechanical Engineering
                  </h3>
                  <span class="qualification__subtitle">Department of Tech Education</span>
                  <div class="qualification__calender">
                    <i class="uil uil-calendar-alt"></i>
                    2015 - 2018
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </section>

    <!--==================== SERVICES ====================-->
    <section class="services section" id="services">
      <h2 class="section__title">Services</h2>
      <span class="section__subtitle">What i provide</span>
      <div class="services__container container grid">
        <!--==================== SERVICES 1====================-->

        <div class="services__content">
          <div>
            <i class="uil uil-web-grid services__icon"></i>
            <h3 class="services__title">Web Design</h3>
          </div>

          <span class="button button--flex button--small button--link services__button">
            view more <i class="uil uil-arrow-right button__icon"></i>
          </span>

          <div class="services__modal">
            <div class="services__modal-content">
              <h4 class="services__modal-title">Website Designer</h4>
              <i class="uil uil-times services__modal-close"></i>

              <ul class="services__modal-services grid">
                <li class="services__modal-services">
                  <i class="uil uil-check-circle services__modal-icon"></i>
                  <p>I develop the user interface.</p>
                </li>

                <li class="services__modal-services">
                  <i class="uil uil-check-circle services__modal-icon"></i>
                  <p>Web page development.</p>
                </li>

                <li class="services__modal-services">
                  <i class="uil uil-check-circle services__modal-icon"></i>
                  <p>I Develop the Responsive Websites.</p>
                </li>

                <li class="services__modal-services">
                  <i class="uil uil-check-circle services__modal-icon"></i>
                  <p>I can handle websites interactive with Database.</p>
                </li>

                <li class="services__modal-services">
                  <i class="uil uil-check-circle services__modal-icon"></i>
                  <p>I position your company brand.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!--==================== SERVICES 2====================-->
        <div class="services__content">
          <div>
            <i class="uil uil-arrow services__icon"></i>
            <h3 class="services__title">UI/UX development</h3>
          </div>

          <span class="button button--flex button--small button--link services__button">
            view more <i class="uil uil-arrow-right button__icon"></i>
          </span>

          <div class="services__modal">
            <div class="services__modal-content">
              <h4 class="services__modal-title">UI/UX Design</h4>
              <i class="uil uil-times services__modal-close"></i>

              <ul class="services__modal-services grid">
                <li class="services__modal-services">
                  <i class="uil uil-check-circle services__modal-icon"></i>
                  <p>I develop the Modern user interface websites.</p>
                </li>

                <li class="services__modal-services">
                  <i class="uil uil-check-circle services__modal-icon"></i>
                  <p>Create immersive UI via wireframes and interactive prototypes.</p>
                </li>

                <li class="services__modal-services">
                  <i class="uil uil-check-circle services__modal-icon"></i>
                  <p>I create ux element interactions.</p>
                </li>

                <li class="services__modal-services">
                  <i class="uil uil-check-circle services__modal-icon"></i>
                  <p>Design digital experiences that bring user satisfaction, user loyalty, and product success.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!--==================== SERVICES 3====================-->
        <div class="services__content">
          <div>
            <i class="uil uil-pen services__icon"></i>
            <h3 class="services__title">Front-end Architecture & Design</h3>
          </div>

          <span class="button button--flex button--small button--link services__button">
            view more <i class="uil uil-arrow-right button__icon"></i>
          </span>

          <div class="services__modal">
            <div class="services__modal-content">
              <h4 class="services__modal-title">Architecture & Design</h4>
              <i class="uil uil-times services__modal-close"></i>

              <ul class="services__modal-services grid">
                <li class="services__modal-services">
                  <i class="uil uil-check-circle services__modal-icon"></i>
                  <p>Frontend development services aimed to create efficient and sustainable applications with frontend architecture a set of tools and processes to improve the quality of frontend code.</p>
                </li>

                <li class="services__modal-services">
                  <i class="uil uil-check-circle services__modal-icon"></i>
                  <p>Work with various Frameworks like bootsrap, JavaScript,canva etc</p>
                </li>

                <li class="services__modal-services">
                  <i class="uil uil-check-circle services__modal-icon"></i>
                  <p>I can handle frontend pages with database.</p>
                </li>


              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==================== PORTFOLIO ====================-->
    <section class="portfolio section" id="portfolio">
      <h2 class="section__title">Portfolio</h2>
      <span class="section__subtitle">Most recent work</span>

      <div class="portfolio__container container swiper mySwiper ">
        <div class="swiper-wrapper">
          <!--==================== PORTFOLIO 0 ====================-->
          <div class="portfolio__content  grid swiper-slide">
            <img src="assets/img/portfolio1.jpg" alt="" class="portfolio__img">

            <div class="portfolio__data">
              <h3 class="portfolio__title">Student Management System</h3>
              <p class="portfolio__description">Website for school organization or community to store and access students data with login registration credentials. </p>

              <a class="button button--flex button--small portfolio__button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Demo<i class="uil uil-arrow-right button__icon"></i>
              </a>
            </div>
          </div>

          <!--==================== PORTFOLIO 1 ====================-->
          <div class="portfolio__content grid swiper-slide">
            <img src="assets/img/portfolio2.jpg" alt="" class="portfolio__img">

            <div class="portfolio__data">
              <h3 class="portfolio__title">Online Quiz</h3>
              <p class="portfolio__description">Online quizz is a platform which gives us a stage to test ourselves in amount of knowledge we gain or know. </p>

              <a class="button button--flex button--small portfolio__button" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                Demo<i class="uil uil-arrow-right button__icon"></i>
              </a>
            </div>
          </div>


           <!--==================== PORTFOLIO 3 ====================-->
           <div class="portfolio__content grid swiper-slide">
            <img src="assets/img/portfolio4.jpg" alt="" class="portfolio__img">

            <div class="portfolio__data">
              <h3 class="portfolio__title">Portfolio Website</h3>
              <p class="portfolio__description">Portfolio Website contains all information includes personal data, projects, resume and contact details etc. </p>

              <a class="button button--flex button--small portfolio__button" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                Demo<i class="uil uil-arrow-right button__icon"></i>
              </a>
            </div>
          </div>

          <!--==================== PORTFOLIO 2 ====================-->
          <div class="portfolio__content grid swiper-slide">
            <img src="assets/img/portfolio3.jpg" alt="" class="portfolio__img">

            <div class="portfolio__data">
              <h3 class="portfolio__title">Digital ToDo List</h3>
              <p class="portfolio__description">ToDo list platform help us to keep digital nodes which can remind us about our activities and schedules time to time.</p>
              <a class="button button--flex button--small portfolio__button" data-bs-toggle="modal" data-bs-target="#exampleModal2">

                Demo<i class="uil uil-arrow-right button__icon"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="swiper-button-next">
          <i class="uil uil-angle-right-b swiper-icon"></i>
        </div>

        <div class="swiper-button-prev">
          <i class="uil uil-angle-left-b swiper-icon"></i>
        </div>

        <div class="swiper-pagination"></div>
      </div>
    </section>


    <!--=========Student Modal 0===========-->


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="width:800px ;">
        <div class="modal-content" style="width:800px ;">
        <!--  
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portfolio Project</h5> 
          </div>--->

          <div class="modal-body">
          <button type="button" class="btn btn-close" data-bs-dismiss="modal" (click)="close()" aria-label="Close" style="position:absolute;right: 10px;top:0px;"></button>


        <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
          padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
          border-radius: 8px; will-change: transform;">
          <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
           src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFL6DhFyvM&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
           </iframe>
        </div>
        <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFL6DhFyvM&#x2F;view?utm_content=DAFL6DhFyvM&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener"></a> by Basavaraj Mannangi

          </div>
        </div>
      </div>
    </div>


    <!--=========Student Modal 1===========-->


    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="width:800px ;">
        <div class="modal-content" style="width:800px ;">
        <!--  
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portfolio Project</h5> 
          </div>--->

          <div class="modal-body">
          <button type="button" class="btn btn-close" data-bs-dismiss="modal" (click)="close()" aria-label="Close" style="position:absolute;right: 10px;top:0px;"></button>


          <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
 padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
  <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFL7FraT_8&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
  </iframe>
</div>
<a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFL7FraT_8&#x2F;view?utm_content=DAFL7FraT_8&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener"></a> by Basavaraj Mannangi
          </div>
        </div>
      </div>
    </div>



    <!--=========Student Modal 3===========-->


    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="width:800px ;">
        <div class="modal-content" style="width:800px ;">
        <!--  
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portfolio Project</h5> 
          </div>--->

          <div class="modal-body">
          <button type="button" class="btn btn-close" data-bs-dismiss="modal" (click)="close()" aria-label="Close" style="position:absolute;right: 10px;top:0px;"></button>


          <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
 padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
  <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFMAEOlynA&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
  </iframe>
</div>
<a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFMAEOlynA&#x2F;view?utm_content=DAFMAEOlynA&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener"></a> by Basavaraj Mannangi</div>
        </div>
      </div>
    </div>


    <!--=========Student Modal 2===========-->


    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="width:800px ;">
        <div class="modal-content" style="width:800px ;">
        <!--  
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portfolio Project</h5> 
          </div>--->

          <div class="modal-body">
          <button type="button" class="btn btn-close" data-bs-dismiss="modal" (click)="close()" aria-label="Close" style="position:absolute;right: 10px;top:0px;"></button>


          <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
 padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
  <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFL7q8jCcA&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
  </iframe>
</div>
<a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFL7q8jCcA&#x2F;view?utm_content=DAFL7q8jCcA&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener"></a> by Basavaraj Mannangi
          </div>
        </div>
      </div>
    </div>



    

   
    

    <!--==================== PROJECT IN MIND ====================-->
    <section class="project section">
      <div class="project__bg">
        <div class="project__container container grid">
          <div class="project__data">
            <h2 class="project__title">You have a new project</h2>
            <p class="project__description">Contact me now and Share your thoughts.</p>

            <a href="contact.php" class="button button--flex button--white">
              Contact me<i class="uil uil-message project__icon button__icon"></i>
            </a>
          </div>
          <img src="assets/img/projectt.jpg" alt="" class="project__img">
        </div>
      </div>
    </section>

    <!--
        ==================== TESTIMONIAL ====================
      <section class="testimonial section"></section>
      <h2 class="section__title">testimonial</h2>
      -->


    <!--==================== CONTACT ME ====================
      <section class="contact section" id="contact">
        <h2 class="section__title">Contact Me</h2>
        <span class="section__subtitle">Get in touch</span>
        
        <div class="contact__container container grid">
          <div>

            <div class="contact__info">
              <i class="uil uil-phone contact__icon"></i>
              <div>
                <h3 class="contact__title">Call me</h3>
                <span>or Whatsapp</span> <br>
                <span class="contact__subtitle">7760247049 </span>
              </div>
            </div>

            <div class="contact__info">
              <i class="uil uil-envelope contact__icon"></i>
              <div>
                <h3 class="contact__title">Email</h3>
                <span class="contact__subtitle">bmannangi34@gmail.com</span>
              </div>
            </div>

            <div class="contact__info">
              <i class="uil uil-location-point contact__icon"></i>
              <div>
                <h3 class="contact__title">Location</h3>
                <span class="contact__subtitle">uk - Karnataka - India</span>
              </div>
            </div>
          </div>

            

          <form action="#" method="post" class="contact__form grid">
    <div class="contact__inputs grid">
                        <div class="contact__content">
                            <input type="text" name="name" class="contact__input" placeholder="Name" required>
                        </div>
                        <div class="contact__content">
                            <input type="email" name="email" class="contact__input" placeholder="Email" required>
                        </div>
                    </div>

                        <div class="contact__content">
                            <input type="text" name="subject" class="contact__input" placeholder="Subject" required>
                        </div>
                        <div class="contact__content">
                            <textarea name="message" cols="30" class="contact__input" rows="10" placeholder="Describe..."></textarea>
                        </div>
                            <div class="button">
                                <button type="submit" name="submit" value="submit" style="border-radius:10px" class="button button--flex">Send Message <i class="uil uil-message"></i></button>
                            </div>
    </form>
        </div>
      </section>
    </main>


   -->






    <!--==================== FOOTER ====================-->
    <footer class="footer">
      <div class="footer__bg">
        <div class="footer__container container grid">
          <div>
            <h1 class="footer__title">Basavaraj</h1>
            <span class="footer__subtitle">Frontend Developer</span>
          </div>

          <ul class="footer__links">
            <li>
              <a href="#services" class="footer__link">Services</a>
            </li>

            <li>
              <a href="#portfolio" class="footer__link">Portfolio</a>
            </li>

            <li>
              <a href="contact.php" class="footer__link">ContactMe</a>
            </li>
          </ul>

          <div class="footer__socials">
          <a href="https://github.com/basavarajofficial" class="footer__social">
              <i class="uil uil-github-alt"></i>
            </a>
            <!--
            <a href="#" target="_blank" class="footer__social">
              <i class="uil uil-twitter-alt"></i>
            </a> -->
            <a href="#" target="_blank" class="footer__social">
              <i class="uil uil-linkedin"></i>
            </a>
          </div>
        </div>

        <p class="footer__copy">&#169; BasavarajOfficial. All rights reserved</p>
      </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>

    <!--==================== SWIPER JS ====================-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--==================== MAIN JS ====================-->
    <script src="assets/js/main.js"></script>


    <!--========== SCROLL REVEAL ==========
    <script src="https://unpkg.com/scrollreveal"></script>
    -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>

</html>