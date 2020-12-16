<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/index.html.twig */
class __TwigTemplate_ef4d590fb1f15d76a03c4963c6d95170a2f87f08d65cfa6568e1a64b0a7bb58f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <body>
    <!-- Loader Start -->
    <div class=\"css-loader\">
        <div class=\"loader-inner line-scale d-flex align-items-center justify-content-center\"></div>
    </div>
    <!-- Loader End -->

    <!-- Hero Start -->
    <section class=\"hero\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 offset-md-1 col-md-11\">
                    <div class=\"swiper-container hero-slider\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide slide-content d-flex align-items-center\">
                                <div class=\"single-slide\">
                                    <h1 data-aos=\"fade-right\" data-aos-delay=\"200\">Creative<br> Multipurpose websites
                                    </h1>
                                    <p data-aos=\"fade-right\" data-aos-delay=\"600\">Crafted by innovative creators for
                                        Expecting
                                        Peoples’s predefined dummy text<br> chunks as necessary, making this the first.
                                    </p>
                                    <a data-aos=\"fade-right\" data-aos-delay=\"900\" href=\"#\" class=\"btn btn-primary\">See
                                        More</a>
                                    <a data-aos=\"fade-right\" data-aos-delay=\"900\" href=\"#\" class=\"btn btn-primary\">Get
                                        Now</a>
                                </div>
                            </div>
                            <div class=\"swiper-slide slide-content d-flex align-items-center\">
                                <div class=\"single-slide\">
                                    <h1 data-aos=\"fade-right\" data-aos-delay=\"200\">Creative<br> Multipurpose websites
                                    </h1>
                                    <p data-aos=\"fade-right\" data-aos-delay=\"600\">Crafted by innovative creators for
                                        Expecting
                                        Peoples’s predefined dummy text<br> chunks as necessary, making this the first.
                                    </p>
                                    <a data-aos=\"fade-right\" data-aos-delay=\"900\" href=\"#\" class=\"btn btn-primary\">See
                                        More</a>
                                    <a data-aos=\"fade-right\" data-aos-delay=\"900\" href=\"#\" class=\"btn btn-primary\">Get
                                        Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Add Control -->
            <span class=\"arr-left\"><i class=\"fa fa-angle-left\"></i></span>
            <span class=\"arr-right\"><i class=\"fa fa-angle-right\"></i></span>
        </div>
        <div class=\"texture\"></div>
";
        // line 62
        echo "    </section>
    <!-- Hero End -->
    <!-- Call To Action Start -->
    <section class=\"cta\" data-aos=\"fade-up\" data-aos-delay=\"0\">
        <div class=\"container\">
            <div class=\"cta-content d-xl-flex align-items-center justify-content-around text-center text-xl-left\">
                <div class=\"content\" data-aos=\"fade-right\" data-aos-delay=\"200\">
                    <h2>FOR BUILDING THE MODERN WEBSITE</h2>
                    <p>Packed with all the goodies you can get, Kallyas is our flagship premium template.</p>
                </div>
                <div class=\"subscribe-btn\" data-aos=\"fade-left\" data-aos-delay=\"400\" data-aos-offset=\"0\">
                    <a href=\"#\" class=\"btn btn-primary\">Join Newsletter</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action End -->
    <!-- Services Start -->
    <section class=\"services\">
        <div class=\"container\">
            <div class=\"title text-center\">
                <h6>Our Speakers</h6>
                <h1 class=\"title-blue\">Why Choose Us</h1>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"media\" data-aos=\"fade-up\" data-aos-delay=\"200\" data-aos-duration=\"400\">
                            <img class=\"mr-4\" src=\"assets/images/service1.png\" alt=\"Web Development\">
                            <div class=\"media-body\">
                                <h5>Web Development</h5>
                                Donec volutpat tincidunt neque, vitae lobortis libero mattis sed tempus.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"media\" data-aos=\"fade-up\" data-aos-delay=\"400\" data-aos-duration=\"600\">
                            <img class=\"mr-4\" src=\"assets/images/service2.png\" alt=\"Web Development\">
                            <div class=\"media-body\">
                                <h5>Testing for perfection</h5>
                                Donec volutpat tincidunt neque, vitae lobortis libero mattis sed tempus.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"media\" data-aos=\"fade-up\" data-aos-delay=\"600\" data-aos-duration=\"800\">
                            <img class=\"mr-4\" src=\"assets/images/service3.png\" alt=\"Web Development\">
                            <div class=\"media-body\">
                                <h5>Discussion of the idea</h5>
                                Donec volutpat tincidunt neque, vitae lobortis libero mattis sed tempus.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"media\" data-aos=\"fade-up\" data-aos-delay=\"200\" data-aos-duration=\"400\">
                            <img class=\"mr-4\" src=\"assets/images/service4.png\" alt=\"Web Development\">
                            <div class=\"media-body\">
                                <h5>Modern style</h5>
                                Donec volutpat tincidunt neque, vitae lobortis libero mattis sed tempus.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"media\" data-aos=\"fade-up\" data-aos-delay=\"400\" data-aos-duration=\"600\">
                            <img class=\"mr-4\" src=\"assets/images/service1.png\" alt=\"Web Development\">
                            <div class=\"media-body\">
                                <h5>Web Development</h5>
                                Donec volutpat tincidunt neque, vitae lobortis libero mattis sed tempus.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"media\" data-aos=\"fade-up\" data-aos-delay=\"600\" data-aos-duration=\"800\">
                            <img class=\"mr-4\" src=\"assets/images/service5.png\" alt=\"Web Development\">
                            <div class=\"media-body\">
                                <h5>Elaboration of the core</h5>
                                Donec volutpat tincidunt neque, vitae lobortis libero mattis sed tempus.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
    <!-- Featured Start -->
    <section class=\"featured\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\" data-aos=\"fade-right\" data-aos-delay=\"400\" data-aos-duration=\"800\">
                    <div class=\"title\">
                        <h6 class=\"title-primary\">about Tamplate</h6>
                        <h1 class=\"title-blue\">a rich featured, epic & premium work.</h1>
                    </div>
                    <p>There are many variations of passages of available but the majority have suffered alteration in
                        some form, by injected humour, or randomised words which don't look even slightly believable. If
                        you are going to use a passage of you need to be sure there isn't anything embarrassing hidden
                        in the middle of text. All the generators on the Internet.</p>
                    <div class=\"media-element d-flex justify-content-between\">
                        <div class=\"media\">
                            <i class=\"fa fa-magic mr-4\"></i>
                            <div class=\"media-body\">
                                <h5>any offer</h5>
                                New York, United States
                            </div>
                        </div>
                        <div class=\"media\">
                            <i class=\"fa fa-magic mr-4\"></i>
                            <div class=\"media-body\">
                                <h5>any offer</h5>
                                New York, United States
                            </div>
                        </div>
                    </div>
                    <a href=\"#\" class=\"btn btn-primary\">See More</a>
                </div>
                <div class=\"col-md-6\" data-aos=\"fade-left\" data-aos-delay=\"400\" data-aos-duration=\"800\">
                    <div class=\"featured-img\">
                        <img class=\"featured-big\" src=\"assets/images/featured-img1.jpg\" alt=\"Featured 1\">
                        <img class=\"featured-small\" src=\"assets/images/featured-img2.jpg\" alt=\"Featured 2\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured End -->
    <!-- Recent Posts Start -->
    <section class=\"recent-posts\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"single-rpost d-sm-flex align-items-center\" data-aos=\"fade-right\"
                         data-aos-duration=\"800\">
                        <div class=\"post-content text-sm-right\">
                            <time datetime=\"2019-04-06T13:53\">15 Oct, 2019</time>
                            <h3><a href=\"#\">Proudly for us to build stylish</a></h3>
                            <p><a href=\"#\">Seanding</a>, <a href=\"#\">Website</a>, <a href=\"#\">E-commerce</a></p>
                            <a class=\"post-btn\" href=\"#\"><i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                        <div class=\"post-thumb\">
                            <img class=\"img-fluid\" src=\"assets/images/post1.jpg\" alt=\"Post 1\">
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"single-rpost d-sm-flex align-items-center\" data-aos=\"fade-left\" data-aos-duration=\"800\">
                        <div class=\"post-thumb\">
                            <img class=\"img-fluid\" src=\"assets/images/post2.jpg\" alt=\"Post 1\">
                        </div>
                        <div class=\"post-content\">
                            <time datetime=\"2019-04-06T13:53\">15 Oct, 2019</time>
                            <h3><a href=\"#\">Remind me to water the plants</a></h3>
                            <p><a href=\"#\">Seanding</a>, <a href=\"#\">Website</a>, <a href=\"#\">E-commerce</a></p>
                            <a class=\"post-btn\" href=\"#\"><i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"single-rpost d-sm-flex align-items-center\" data-aos=\"fade-right\" data-aos-delay=\"200\"
                         data-aos-duration=\"800\">
                        <div class=\"post-content text-sm-right\">
                            <time datetime=\"2019-04-06T13:53\">15 Oct, 2019</time>
                            <h3><a href=\"#\">Add apples to the grocery list</a></h3>
                            <p><a href=\"#\">Seanding</a>, <a href=\"#\">Website</a>, <a href=\"#\">E-commerce</a></p>
                            <a class=\"post-btn\" href=\"#\"><i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                        <div class=\"post-thumb\">
                            <img class=\"img-fluid\" src=\"assets/images/post3.jpg\" alt=\"Post 1\">
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"single-rpost d-sm-flex align-items-center\" data-aos=\"fade-left\" data-aos-delay=\"200\"
                         data-aos-duration=\"800\">
                        <div class=\"post-thumb\">
                            <img class=\"img-fluid\" src=\"assets/images/post4.jpg\" alt=\"Post 1\">
                        </div>
                        <div class=\"post-content\">
                            <time datetime=\"2019-04-06T13:53\">15 Oct, 2019</time>
                            <h3><a href=\"#\">Make it warmer downstairs</a></h3>
                            <p><a href=\"#\">Seanding</a>, <a href=\"#\">Website</a>, <a href=\"#\">E-commerce</a></p>
                            <a class=\"post-btn\" href=\"#\"><i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"text-center\">
                <a href=\"#\" class=\"btn btn-primary\">See More</a>
            </div>
        </div>
    </section>
    <!-- Recent Posts End -->
    <!-- Trust Start -->
    <section class=\"trust\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"offset-xl-1 col-xl-6\" data-aos=\"fade-right\" data-aos-delay=\"200\" data-aos-duration=\"800\">
                    <div class=\"title\">
                        <h6 class=\"title-primary\">about Tamplate</h6>
                        <h1>a rich featured, epic & premium work.</h1>
                    </div>
                    <p>Suspendisse facilisis commodo lobortis. Nullam mollis lobortis ex vel faucibus. Proin nec viverra
                        turpis. Nulla eget justo scelerisque, pretium purus vel, congue libero. Suspendisse potenti.
                    </p>
                    <h5>Web Design & Development</h5>
                    <ul class=\"list-unstyled\">
                        <li>Web Content</li>
                        <li>Website other</li>
                        <li>Fashion</li>
                        <li>Moblie & Tablette</li>
                    </ul>
                </div>
                <div class=\"col-xl-5 gallery\">
                    <div class=\"row no-gutters h-100\" id=\"lightgallery\">
                        <a href=\"https://lorempixel.com/600/400/\" class=\"w-50 h-100 gal-img\" data-aos=\"fade-up\"
                           data-aos-delay=\"200\" data-aos-duration=\"400\">
                            <img class=\"img-fluid\" src=\"assets/images/gallery1.jpg\" alt=\"Gallery Image\">
                            <i class=\"fa fa-caret-right\"></i>
                        </a>
                        <a href=\"https://lorempixel.com/600/400/\" class=\"w-50 h-50 gal-img\" data-aos=\"fade-up\"
                           data-aos-delay=\"400\" data-aos-duration=\"600\">
                            <img class=\"img-fluid\" src=\"assets/images/gallery2.jpg\" alt=\"Gallery Image\">
                            <i class=\"fa fa-caret-right\"></i>
                        </a>
                        <a href=\"https://lorempixel.com/600/400/\" class=\"w-50 h-50 gal-img gal-img3\" data-aos=\"fade-up\"
                           data-aos-delay=\"0\" data-aos-duration=\"600\">
                            <img class=\"img-fluid\" src=\"assets/images/gallery3.jpg\" alt=\"Gallery Image\">
                            <i class=\"fa fa-caret-right\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trust End -->
    <!-- Pricing Start -->
    <section class=\"pricing-table\">
        <div class=\"container\">
            <div class=\"title text-center\">
                <h6 class=\"title-primary\">Our prices</h6>
                <h1 class=\"title-blue\">Price Table List</h1>
            </div>
            <div class=\"row no-gutters\">
                <div class=\"col-md-4\">
                    <div class=\"single-pricing text-center\" data-aos=\"fade-up\" data-aos-delay=\"0\"
                         data-aos-duration=\"600\">
                        <span>Monthly</span>
                        <h2>Starter</h2>
                        <p class=\"desc\">Here goes some description</p>
                        <p class=\"price\">\$39.00</p>
                        <p>Create excepteur sint occaecat cupidatat non proident</p>
                        <a href=\"#\" class=\"btn btn-primary\">Buy Now</a>
                        <svg viewBox=\"0 0 170 193\">
                            <path fill-rule=\"evenodd\" fill=\"rgb(238, 21, 21)\"
                                  d=\"M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z\" />
                        </svg>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"single-pricing text-center\" data-aos=\"fade-up\" data-aos-delay=\"300\"
                         data-aos-duration=\"600\">
                        <span>Monthly</span>
                        <h2>Starter</h2>
                        <p class=\"desc\">Here goes some description</p>
                        <p class=\"price\">\$39.00</p>
                        <p>5GB Storage Space</p>
                        <p>20GB Monthly Bandwidth</p>
                        <p>My SQL Databases</p>
                        <p>100 Email Account</p>
                        <a href=\"#\" class=\"btn btn-primary\">Buy Now</a>
                        <svg viewBox=\"0 0 170 193\">
                            <path fill-rule=\"evenodd\" fill=\"rgb(238, 21, 21)\"
                                  d=\"M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z\" />
                        </svg>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"single-pricing text-center\" data-aos=\"fade-up\" data-aos-delay=\"600\"
                         data-aos-duration=\"600\">
                        <span>Monthly</span>
                        <h2>Starter</h2>
                        <p class=\"desc\">Here goes some description</p>
                        <p class=\"price\">\$39.00</p>
                        <p>Create excepteur sint occaecat cupidatat non proident</p>
                        <a href=\"#\" class=\"btn btn-primary\">Buy Now</a>
                        <svg viewBox=\"0 0 170 193\">
                            <path fill-rule=\"evenodd\" fill=\"rgb(238, 21, 21)\"
                                  d=\"M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z\" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing End -->
    <!-- Testimonial and Clients Start -->
    <section class=\"testimonial-and-clients\">
        <div class=\"container\">
            <div class=\"testimonials\">
                <div class=\"swiper-container test-slider\">
                    <div class=\"swiper-wrapper\">
                        <div class=\"swiper-slide text-center\">
                            <div class=\"row\">
                                <div class=\"offset-lg-1 col-lg-10\">
                                    <div class=\"test-img\" data-aos=\"fade-up\" data-aos-delay=\"0\" data-aos-offset=\"0\"><img
                                                src=\"assets/images/test1.png\" alt=\"Testimonial 1\"></div>
                                    <h5 data-aos=\"fade-up\" data-aos-delay=\"200\" data-aos-duration=\"600\"
                                        data-aos-offset=\"0\">John</h5>
                                    <span data-aos=\"fade-up\" data-aos-delay=\"400\" data-aos-duration=\"600\"
                                          data-aos-offset=\"0\">UI/UX
                                        Designer</span>
                                    <p data-aos=\"fade-up\" data-aos-delay=\"600\" data-aos-duration=\"600\"
                                       data-aos-offset=\"0\">Ash's tactics &
                                        books have helped me a lot in my understanding on how social
                                        media
                                        advertising works.I can say that he is one of the best development professionals
                                        i have
                                        dealt with so far. His experience is great & he is such a great & pleasant
                                        person to
                                        work with as he understands what you are</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide text-center\">
                            <div class=\"row\">
                                <div class=\"offset-lg-1 col-lg-10\">
                                    <div class=\"test-img\" data-aos=\"fade-up\" data-aos-delay=\"0\" data-aos-offset=\"0\"><img
                                                src=\"assets/images/test1.png\" alt=\"Testimonial 1\"></div>
                                    <h5 data-aos=\"fade-up\" data-aos-delay=\"200\" data-aos-duration=\"600\"
                                        data-aos-offset=\"0\">John</h5>
                                    <span data-aos=\"fade-up\" data-aos-delay=\"400\" data-aos-duration=\"600\"
                                          data-aos-offset=\"0\">UI/UX
                                        Designer</span>
                                    <p data-aos=\"fade-up\" data-aos-delay=\"600\" data-aos-duration=\"600\"
                                       data-aos-offset=\"0\">Ash's tactics &
                                        books have helped me a lot in my understanding on how social
                                        media
                                        advertising works.I can say that he is one of the best development professionals
                                        i have
                                        dealt with so far. His experience is great & he is such a great & pleasant
                                        person to
                                        work with as he understands what you are</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide text-center\">
                            <div class=\"row\">
                                <div class=\"offset-lg-1 col-lg-10\">
                                    <div class=\"test-img\" data-aos=\"fade-up\" data-aos-delay=\"0\" data-aos-offset=\"0\"><img
                                                src=\"assets/images/test1.png\" alt=\"Testimonial 1\"></div>
                                    <h5 data-aos=\"fade-up\" data-aos-delay=\"200\" data-aos-duration=\"600\"
                                        data-aos-offset=\"0\">John</h5>
                                    <span data-aos=\"fade-up\" data-aos-delay=\"400\" data-aos-duration=\"600\"
                                          data-aos-offset=\"0\">UI/UX
                                        Designer</span>
                                    <p data-aos=\"fade-up\" data-aos-delay=\"600\" data-aos-duration=\"600\"
                                       data-aos-offset=\"0\">Ash's tactics &
                                        books have helped me a lot in my understanding on how social
                                        media
                                        advertising works.I can say that he is one of the best development professionals
                                        i have
                                        dealt with so far. His experience is great & he is such a great & pleasant
                                        person to
                                        work with as he understands what you are</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"test-pagination\"></div>
                </div>
            </div>
            <div class=\"clients\" data-aos=\"fade-up\" data-aos-delay=\"200\" data-aos-duration=\"600\">
                <div class=\"swiper-container clients-slider\">
                    <div class=\"swiper-wrapper\">
                        <div class=\"swiper-slide\">
                            <img src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/client1.png"), "html", null, true);
        echo "\" alt=\"Client 1\">
                        </div>
                        <div class=\"swiper-slide\">
                            <img src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/client2.png"), "html", null, true);
        echo "\" alt=\"Client 2\">
                        </div>
                        <div class=\"swiper-slide\">
                            <img src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/client3.png"), "html", null, true);
        echo "\" alt=\"Client 3\">
                        </div>
                        <div class=\"swiper-slide\">
                            <img src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/client4.png"), "html", null, true);
        echo "\" alt=\"Client 4\">
                        </div>
                        <div class=\"swiper-slide\">
                            <img src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/client5.png"), "html", null, true);
        echo "\" alt=\"Client 5\">
                        </div>
                    </div>
                    <div class=\"test-pagination\"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial and Clients End -->
    <!-- Call To Action 2 Start -->
    <section class=\"cta cta2\" data-aos=\"fade-up\" data-aos-delay=\"0\">
        <div class=\"container\">
            <div class=\"cta-content d-xl-flex align-items-center justify-content-around text-center text-xl-left\">
                <div class=\"content\" data-aos=\"fade-right\" data-aos-delay=\"200\">
                    <h2>FOR BUILDING THE MODERN WEBSITE</h2>
                    <p>Packed with all the goodies you can get, Kallyas is our flagship premium template.</p>
                </div>
                <div class=\"subscribe-btn\" data-aos=\"fade-left\" data-aos-delay=\"400\" data-aos-offset=\"0\">
                    <a href=\"#\" class=\"btn btn-primary\">Join Newsletter</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action 2 End -->
    <!-- Footer Start -->


    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 449,  540 => 446,  534 => 443,  528 => 440,  522 => 437,  145 => 62,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
    Accueil
{% endblock %}

{% block body %}

    <body>
    <!-- Loader Start -->
    <div class=\"css-loader\">
        <div class=\"loader-inner line-scale d-flex align-items-center justify-content-center\"></div>
    </div>
    <!-- Loader End -->

    <!-- Hero Start -->
    <section class=\"hero\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 offset-md-1 col-md-11\">
                    <div class=\"swiper-container hero-slider\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide slide-content d-flex align-items-center\">
                                <div class=\"single-slide\">
                                    <h1 data-aos=\"fade-right\" data-aos-delay=\"200\">Creative<br> Multipurpose websites
                                    </h1>
                                    <p data-aos=\"fade-right\" data-aos-delay=\"600\">Crafted by innovative creators for
                                        Expecting
                                        Peoples’s predefined dummy text<br> chunks as necessary, making this the first.
                                    </p>
                                    <a data-aos=\"fade-right\" data-aos-delay=\"900\" href=\"#\" class=\"btn btn-primary\">See
                                        More</a>
                                    <a data-aos=\"fade-right\" data-aos-delay=\"900\" href=\"#\" class=\"btn btn-primary\">Get
                                        Now</a>
                                </div>
                            </div>
                            <div class=\"swiper-slide slide-content d-flex align-items-center\">
                                <div class=\"single-slide\">
                                    <h1 data-aos=\"fade-right\" data-aos-delay=\"200\">Creative<br> Multipurpose websites
                                    </h1>
                                    <p data-aos=\"fade-right\" data-aos-delay=\"600\">Crafted by innovative creators for
                                        Expecting
                                        Peoples’s predefined dummy text<br> chunks as necessary, making this the first.
                                    </p>
                                    <a data-aos=\"fade-right\" data-aos-delay=\"900\" href=\"#\" class=\"btn btn-primary\">See
                                        More</a>
                                    <a data-aos=\"fade-right\" data-aos-delay=\"900\" href=\"#\" class=\"btn btn-primary\">Get
                                        Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Add Control -->
            <span class=\"arr-left\"><i class=\"fa fa-angle-left\"></i></span>
            <span class=\"arr-right\"><i class=\"fa fa-angle-right\"></i></span>
        </div>
        <div class=\"texture\"></div>
{#        <div class=\"diag-bg\"></div>#}
    </section>
    <!-- Hero End -->
    <!-- Call To Action Start -->
    <section class=\"cta\" data-aos=\"fade-up\" data-aos-delay=\"0\">
        <div class=\"container\">
            <div class=\"cta-content d-xl-flex align-items-center justify-content-around text-center text-xl-left\">
                <div class=\"content\" data-aos=\"fade-right\" data-aos-delay=\"200\">
                    <h2>FOR BUILDING THE MODERN WEBSITE</h2>
                    <p>Packed with all the goodies you can get, Kallyas is our flagship premium template.</p>
                </div>
                <div class=\"subscribe-btn\" data-aos=\"fade-left\" data-aos-delay=\"400\" data-aos-offset=\"0\">
                    <a href=\"#\" class=\"btn btn-primary\">Join Newsletter</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action End -->
    <!-- Services Start -->
    <section class=\"services\">
        <div class=\"container\">
            <div class=\"title text-center\">
                <h6>Our Speakers</h6>
                <h1 class=\"title-blue\">Why Choose Us</h1>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"media\" data-aos=\"fade-up\" data-aos-delay=\"200\" data-aos-duration=\"400\">
                            <img class=\"mr-4\" src=\"assets/images/service1.png\" alt=\"Web Development\">
                            <div class=\"media-body\">
                                <h5>Web Development</h5>
                                Donec volutpat tincidunt neque, vitae lobortis libero mattis sed tempus.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"media\" data-aos=\"fade-up\" data-aos-delay=\"400\" data-aos-duration=\"600\">
                            <img class=\"mr-4\" src=\"assets/images/service2.png\" alt=\"Web Development\">
                            <div class=\"media-body\">
                                <h5>Testing for perfection</h5>
                                Donec volutpat tincidunt neque, vitae lobortis libero mattis sed tempus.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"media\" data-aos=\"fade-up\" data-aos-delay=\"600\" data-aos-duration=\"800\">
                            <img class=\"mr-4\" src=\"assets/images/service3.png\" alt=\"Web Development\">
                            <div class=\"media-body\">
                                <h5>Discussion of the idea</h5>
                                Donec volutpat tincidunt neque, vitae lobortis libero mattis sed tempus.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"media\" data-aos=\"fade-up\" data-aos-delay=\"200\" data-aos-duration=\"400\">
                            <img class=\"mr-4\" src=\"assets/images/service4.png\" alt=\"Web Development\">
                            <div class=\"media-body\">
                                <h5>Modern style</h5>
                                Donec volutpat tincidunt neque, vitae lobortis libero mattis sed tempus.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"media\" data-aos=\"fade-up\" data-aos-delay=\"400\" data-aos-duration=\"600\">
                            <img class=\"mr-4\" src=\"assets/images/service1.png\" alt=\"Web Development\">
                            <div class=\"media-body\">
                                <h5>Web Development</h5>
                                Donec volutpat tincidunt neque, vitae lobortis libero mattis sed tempus.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"media\" data-aos=\"fade-up\" data-aos-delay=\"600\" data-aos-duration=\"800\">
                            <img class=\"mr-4\" src=\"assets/images/service5.png\" alt=\"Web Development\">
                            <div class=\"media-body\">
                                <h5>Elaboration of the core</h5>
                                Donec volutpat tincidunt neque, vitae lobortis libero mattis sed tempus.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
    <!-- Featured Start -->
    <section class=\"featured\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\" data-aos=\"fade-right\" data-aos-delay=\"400\" data-aos-duration=\"800\">
                    <div class=\"title\">
                        <h6 class=\"title-primary\">about Tamplate</h6>
                        <h1 class=\"title-blue\">a rich featured, epic & premium work.</h1>
                    </div>
                    <p>There are many variations of passages of available but the majority have suffered alteration in
                        some form, by injected humour, or randomised words which don't look even slightly believable. If
                        you are going to use a passage of you need to be sure there isn't anything embarrassing hidden
                        in the middle of text. All the generators on the Internet.</p>
                    <div class=\"media-element d-flex justify-content-between\">
                        <div class=\"media\">
                            <i class=\"fa fa-magic mr-4\"></i>
                            <div class=\"media-body\">
                                <h5>any offer</h5>
                                New York, United States
                            </div>
                        </div>
                        <div class=\"media\">
                            <i class=\"fa fa-magic mr-4\"></i>
                            <div class=\"media-body\">
                                <h5>any offer</h5>
                                New York, United States
                            </div>
                        </div>
                    </div>
                    <a href=\"#\" class=\"btn btn-primary\">See More</a>
                </div>
                <div class=\"col-md-6\" data-aos=\"fade-left\" data-aos-delay=\"400\" data-aos-duration=\"800\">
                    <div class=\"featured-img\">
                        <img class=\"featured-big\" src=\"assets/images/featured-img1.jpg\" alt=\"Featured 1\">
                        <img class=\"featured-small\" src=\"assets/images/featured-img2.jpg\" alt=\"Featured 2\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured End -->
    <!-- Recent Posts Start -->
    <section class=\"recent-posts\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"single-rpost d-sm-flex align-items-center\" data-aos=\"fade-right\"
                         data-aos-duration=\"800\">
                        <div class=\"post-content text-sm-right\">
                            <time datetime=\"2019-04-06T13:53\">15 Oct, 2019</time>
                            <h3><a href=\"#\">Proudly for us to build stylish</a></h3>
                            <p><a href=\"#\">Seanding</a>, <a href=\"#\">Website</a>, <a href=\"#\">E-commerce</a></p>
                            <a class=\"post-btn\" href=\"#\"><i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                        <div class=\"post-thumb\">
                            <img class=\"img-fluid\" src=\"assets/images/post1.jpg\" alt=\"Post 1\">
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"single-rpost d-sm-flex align-items-center\" data-aos=\"fade-left\" data-aos-duration=\"800\">
                        <div class=\"post-thumb\">
                            <img class=\"img-fluid\" src=\"assets/images/post2.jpg\" alt=\"Post 1\">
                        </div>
                        <div class=\"post-content\">
                            <time datetime=\"2019-04-06T13:53\">15 Oct, 2019</time>
                            <h3><a href=\"#\">Remind me to water the plants</a></h3>
                            <p><a href=\"#\">Seanding</a>, <a href=\"#\">Website</a>, <a href=\"#\">E-commerce</a></p>
                            <a class=\"post-btn\" href=\"#\"><i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"single-rpost d-sm-flex align-items-center\" data-aos=\"fade-right\" data-aos-delay=\"200\"
                         data-aos-duration=\"800\">
                        <div class=\"post-content text-sm-right\">
                            <time datetime=\"2019-04-06T13:53\">15 Oct, 2019</time>
                            <h3><a href=\"#\">Add apples to the grocery list</a></h3>
                            <p><a href=\"#\">Seanding</a>, <a href=\"#\">Website</a>, <a href=\"#\">E-commerce</a></p>
                            <a class=\"post-btn\" href=\"#\"><i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                        <div class=\"post-thumb\">
                            <img class=\"img-fluid\" src=\"assets/images/post3.jpg\" alt=\"Post 1\">
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"single-rpost d-sm-flex align-items-center\" data-aos=\"fade-left\" data-aos-delay=\"200\"
                         data-aos-duration=\"800\">
                        <div class=\"post-thumb\">
                            <img class=\"img-fluid\" src=\"assets/images/post4.jpg\" alt=\"Post 1\">
                        </div>
                        <div class=\"post-content\">
                            <time datetime=\"2019-04-06T13:53\">15 Oct, 2019</time>
                            <h3><a href=\"#\">Make it warmer downstairs</a></h3>
                            <p><a href=\"#\">Seanding</a>, <a href=\"#\">Website</a>, <a href=\"#\">E-commerce</a></p>
                            <a class=\"post-btn\" href=\"#\"><i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"text-center\">
                <a href=\"#\" class=\"btn btn-primary\">See More</a>
            </div>
        </div>
    </section>
    <!-- Recent Posts End -->
    <!-- Trust Start -->
    <section class=\"trust\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"offset-xl-1 col-xl-6\" data-aos=\"fade-right\" data-aos-delay=\"200\" data-aos-duration=\"800\">
                    <div class=\"title\">
                        <h6 class=\"title-primary\">about Tamplate</h6>
                        <h1>a rich featured, epic & premium work.</h1>
                    </div>
                    <p>Suspendisse facilisis commodo lobortis. Nullam mollis lobortis ex vel faucibus. Proin nec viverra
                        turpis. Nulla eget justo scelerisque, pretium purus vel, congue libero. Suspendisse potenti.
                    </p>
                    <h5>Web Design & Development</h5>
                    <ul class=\"list-unstyled\">
                        <li>Web Content</li>
                        <li>Website other</li>
                        <li>Fashion</li>
                        <li>Moblie & Tablette</li>
                    </ul>
                </div>
                <div class=\"col-xl-5 gallery\">
                    <div class=\"row no-gutters h-100\" id=\"lightgallery\">
                        <a href=\"https://lorempixel.com/600/400/\" class=\"w-50 h-100 gal-img\" data-aos=\"fade-up\"
                           data-aos-delay=\"200\" data-aos-duration=\"400\">
                            <img class=\"img-fluid\" src=\"assets/images/gallery1.jpg\" alt=\"Gallery Image\">
                            <i class=\"fa fa-caret-right\"></i>
                        </a>
                        <a href=\"https://lorempixel.com/600/400/\" class=\"w-50 h-50 gal-img\" data-aos=\"fade-up\"
                           data-aos-delay=\"400\" data-aos-duration=\"600\">
                            <img class=\"img-fluid\" src=\"assets/images/gallery2.jpg\" alt=\"Gallery Image\">
                            <i class=\"fa fa-caret-right\"></i>
                        </a>
                        <a href=\"https://lorempixel.com/600/400/\" class=\"w-50 h-50 gal-img gal-img3\" data-aos=\"fade-up\"
                           data-aos-delay=\"0\" data-aos-duration=\"600\">
                            <img class=\"img-fluid\" src=\"assets/images/gallery3.jpg\" alt=\"Gallery Image\">
                            <i class=\"fa fa-caret-right\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trust End -->
    <!-- Pricing Start -->
    <section class=\"pricing-table\">
        <div class=\"container\">
            <div class=\"title text-center\">
                <h6 class=\"title-primary\">Our prices</h6>
                <h1 class=\"title-blue\">Price Table List</h1>
            </div>
            <div class=\"row no-gutters\">
                <div class=\"col-md-4\">
                    <div class=\"single-pricing text-center\" data-aos=\"fade-up\" data-aos-delay=\"0\"
                         data-aos-duration=\"600\">
                        <span>Monthly</span>
                        <h2>Starter</h2>
                        <p class=\"desc\">Here goes some description</p>
                        <p class=\"price\">\$39.00</p>
                        <p>Create excepteur sint occaecat cupidatat non proident</p>
                        <a href=\"#\" class=\"btn btn-primary\">Buy Now</a>
                        <svg viewBox=\"0 0 170 193\">
                            <path fill-rule=\"evenodd\" fill=\"rgb(238, 21, 21)\"
                                  d=\"M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z\" />
                        </svg>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"single-pricing text-center\" data-aos=\"fade-up\" data-aos-delay=\"300\"
                         data-aos-duration=\"600\">
                        <span>Monthly</span>
                        <h2>Starter</h2>
                        <p class=\"desc\">Here goes some description</p>
                        <p class=\"price\">\$39.00</p>
                        <p>5GB Storage Space</p>
                        <p>20GB Monthly Bandwidth</p>
                        <p>My SQL Databases</p>
                        <p>100 Email Account</p>
                        <a href=\"#\" class=\"btn btn-primary\">Buy Now</a>
                        <svg viewBox=\"0 0 170 193\">
                            <path fill-rule=\"evenodd\" fill=\"rgb(238, 21, 21)\"
                                  d=\"M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z\" />
                        </svg>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"single-pricing text-center\" data-aos=\"fade-up\" data-aos-delay=\"600\"
                         data-aos-duration=\"600\">
                        <span>Monthly</span>
                        <h2>Starter</h2>
                        <p class=\"desc\">Here goes some description</p>
                        <p class=\"price\">\$39.00</p>
                        <p>Create excepteur sint occaecat cupidatat non proident</p>
                        <a href=\"#\" class=\"btn btn-primary\">Buy Now</a>
                        <svg viewBox=\"0 0 170 193\">
                            <path fill-rule=\"evenodd\" fill=\"rgb(238, 21, 21)\"
                                  d=\"M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z\" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing End -->
    <!-- Testimonial and Clients Start -->
    <section class=\"testimonial-and-clients\">
        <div class=\"container\">
            <div class=\"testimonials\">
                <div class=\"swiper-container test-slider\">
                    <div class=\"swiper-wrapper\">
                        <div class=\"swiper-slide text-center\">
                            <div class=\"row\">
                                <div class=\"offset-lg-1 col-lg-10\">
                                    <div class=\"test-img\" data-aos=\"fade-up\" data-aos-delay=\"0\" data-aos-offset=\"0\"><img
                                                src=\"assets/images/test1.png\" alt=\"Testimonial 1\"></div>
                                    <h5 data-aos=\"fade-up\" data-aos-delay=\"200\" data-aos-duration=\"600\"
                                        data-aos-offset=\"0\">John</h5>
                                    <span data-aos=\"fade-up\" data-aos-delay=\"400\" data-aos-duration=\"600\"
                                          data-aos-offset=\"0\">UI/UX
                                        Designer</span>
                                    <p data-aos=\"fade-up\" data-aos-delay=\"600\" data-aos-duration=\"600\"
                                       data-aos-offset=\"0\">Ash's tactics &
                                        books have helped me a lot in my understanding on how social
                                        media
                                        advertising works.I can say that he is one of the best development professionals
                                        i have
                                        dealt with so far. His experience is great & he is such a great & pleasant
                                        person to
                                        work with as he understands what you are</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide text-center\">
                            <div class=\"row\">
                                <div class=\"offset-lg-1 col-lg-10\">
                                    <div class=\"test-img\" data-aos=\"fade-up\" data-aos-delay=\"0\" data-aos-offset=\"0\"><img
                                                src=\"assets/images/test1.png\" alt=\"Testimonial 1\"></div>
                                    <h5 data-aos=\"fade-up\" data-aos-delay=\"200\" data-aos-duration=\"600\"
                                        data-aos-offset=\"0\">John</h5>
                                    <span data-aos=\"fade-up\" data-aos-delay=\"400\" data-aos-duration=\"600\"
                                          data-aos-offset=\"0\">UI/UX
                                        Designer</span>
                                    <p data-aos=\"fade-up\" data-aos-delay=\"600\" data-aos-duration=\"600\"
                                       data-aos-offset=\"0\">Ash's tactics &
                                        books have helped me a lot in my understanding on how social
                                        media
                                        advertising works.I can say that he is one of the best development professionals
                                        i have
                                        dealt with so far. His experience is great & he is such a great & pleasant
                                        person to
                                        work with as he understands what you are</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide text-center\">
                            <div class=\"row\">
                                <div class=\"offset-lg-1 col-lg-10\">
                                    <div class=\"test-img\" data-aos=\"fade-up\" data-aos-delay=\"0\" data-aos-offset=\"0\"><img
                                                src=\"assets/images/test1.png\" alt=\"Testimonial 1\"></div>
                                    <h5 data-aos=\"fade-up\" data-aos-delay=\"200\" data-aos-duration=\"600\"
                                        data-aos-offset=\"0\">John</h5>
                                    <span data-aos=\"fade-up\" data-aos-delay=\"400\" data-aos-duration=\"600\"
                                          data-aos-offset=\"0\">UI/UX
                                        Designer</span>
                                    <p data-aos=\"fade-up\" data-aos-delay=\"600\" data-aos-duration=\"600\"
                                       data-aos-offset=\"0\">Ash's tactics &
                                        books have helped me a lot in my understanding on how social
                                        media
                                        advertising works.I can say that he is one of the best development professionals
                                        i have
                                        dealt with so far. His experience is great & he is such a great & pleasant
                                        person to
                                        work with as he understands what you are</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"test-pagination\"></div>
                </div>
            </div>
            <div class=\"clients\" data-aos=\"fade-up\" data-aos-delay=\"200\" data-aos-duration=\"600\">
                <div class=\"swiper-container clients-slider\">
                    <div class=\"swiper-wrapper\">
                        <div class=\"swiper-slide\">
                            <img src=\"{{ asset('assets/images/client1.png') }}\" alt=\"Client 1\">
                        </div>
                        <div class=\"swiper-slide\">
                            <img src=\"{{ asset('assets/images/client2.png') }}\" alt=\"Client 2\">
                        </div>
                        <div class=\"swiper-slide\">
                            <img src=\"{{ asset('assets/images/client3.png') }}\" alt=\"Client 3\">
                        </div>
                        <div class=\"swiper-slide\">
                            <img src=\"{{ asset('assets/images/client4.png') }}\" alt=\"Client 4\">
                        </div>
                        <div class=\"swiper-slide\">
                            <img src=\"{{ asset('assets/images/client5.png') }}\" alt=\"Client 5\">
                        </div>
                    </div>
                    <div class=\"test-pagination\"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial and Clients End -->
    <!-- Call To Action 2 Start -->
    <section class=\"cta cta2\" data-aos=\"fade-up\" data-aos-delay=\"0\">
        <div class=\"container\">
            <div class=\"cta-content d-xl-flex align-items-center justify-content-around text-center text-xl-left\">
                <div class=\"content\" data-aos=\"fade-right\" data-aos-delay=\"200\">
                    <h2>FOR BUILDING THE MODERN WEBSITE</h2>
                    <p>Packed with all the goodies you can get, Kallyas is our flagship premium template.</p>
                </div>
                <div class=\"subscribe-btn\" data-aos=\"fade-left\" data-aos-delay=\"400\" data-aos-offset=\"0\">
                    <a href=\"#\" class=\"btn btn-primary\">Join Newsletter</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action 2 End -->
    <!-- Footer Start -->


    </body>

{% endblock %}

", "default/index.html.twig", "C:\\xampp\\htdocs\\inayah\\templates\\default\\index.html.twig");
    }
}
