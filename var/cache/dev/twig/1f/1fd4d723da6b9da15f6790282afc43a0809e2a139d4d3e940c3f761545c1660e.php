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

/* components/_footer.html.twig */
class __TwigTemplate_cc587b1932c8fe1dcd25caa464dcde46affc46f96919fe50c72ecde33e35848a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_footer.html.twig"));

        // line 1
        echo "<footer>
    <!-- Widgets Start -->
    <div class=\"footer-widgets\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-xl-3\">
                    <div class=\"single-widget contact-widget\" data-aos=\"fade-up\" data-aos-delay=\"0\">
                        <h6 class=\"widget-tiltle\">&nbsp;</h6>
                        <p>By subscribing to our mailing list you will always be update with the latest news from
                            us.
                        </p>
                        <div class=\"media\">
                            <i class=\"fa fa-map-marker\"></i>
                            <div class=\"media-body ml-3\">
                                <h6>Address</h6>
                                Level 13, 2 Elizabeth St,<br>
                                Melbourne, Victoria 3000 Australia
                            </div>
                        </div>
                        <div class=\"media\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <div class=\"media-body ml-3\">
                                <h6>Have any questions?</h6>
                                <a href=\"mailto:support@steelthemes.com\">Support@Steelthemes.com</a>
                            </div>
                        </div>
                        <div class=\"media\">
                            <i class=\"fa fa-phone\"></i>
                            <div class=\"media-body ml-3\">
                                <h6>Call us & Hire us</h6>
                                <a href=\"tel:+610791803458\"> +61 (0) 7 9180 3458</a>
                            </div>
                        </div>
                        <div class=\"media\">
                            <i class=\"fa fa-fax\"></i>
                            <div class=\"media-body ml-3\">
                                <h6>Fax</h6>
                                <a href=\"fax:911889047521432\">(91) 188904752 1432</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-3\">
                    <div class=\"single-widget twitter-widget\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                        <h6 class=\"widget-tiltle\">Fresh Tweets</h6>
                        <div class=\"media\">
                            <i class=\"fa fa-twitter\"></i>
                            <div class=\"media-body ml-3\">
                                <h6><a href=\"#\">@Themes,</a> Html Version Out Now</h6>
                                <span>10 Mins Ago</span>
                            </div>
                        </div>
                        <div class=\"media\">
                            <i class=\"fa fa-twitter\"></i>
                            <div class=\"media-body ml-3\">
                                <h6><a href=\"#\">@Envato,</a> the best selling item of the day!</h6>
                                <span>20 Mins Ago</span>
                            </div>
                        </div>
                        <div class=\"media\">
                            <i class=\"fa fa-twitter\"></i>
                            <div class=\"media-body ml-3\">
                                <h6><a href=\"#\">@Collis,</a> We Planned to Update the Enavto Author Payment Method
                                    Soon!</h6>
                                <span>10 Mins Ago</span>
                            </div>
                        </div>
                        <div class=\"media\">
                            <i class=\"fa fa-twitter\"></i>
                            <div class=\"media-body ml-3\">
                                <h6><a href=\"#\">@SteelThemes,</a> Html Version Out Now</h6>
                                <span>15 Mins Ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-3\">
                    <div class=\"single-widget recent-post-widget\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                        <h6 class=\"widget-tiltle\">Latest Updates</h6>
                        <div class=\"media\">
                            <a class=\"rcnt-img\" href=\"#\"><img src=\"assets/images/rcnt-post1.png\"
                                                              alt=\"Recent Post\"></a>
                            <div class=\"media-body ml-3\">
                                <h6><a href=\"#\">An engaging</a></h6>
                                <p><i class=\"fa fa-user\"></i>Mano <i class=\"fa fa-eye\"></i> 202 Views</p>
                            </div>
                        </div>
                        <div class=\"media\">
                            <a class=\"rcnt-img\" href=\"#\"><img src=\"assets/images/rcnt-post2.png\"
                                                              alt=\"Recent Post\"></a>
                            <div class=\"media-body ml-3\">
                                <h6><a href=\"#\">Statistics and analysis. The key to succes.</a></h6>
                                <p><i class=\"fa fa-user\"></i>Rosias <i class=\"fa fa-eye\"></i> 20 Views</p>
                            </div>
                        </div>
                        <div class=\"media\">
                            <a class=\"rcnt-img\" href=\"#\"><img src=\"assets/images/rcnt-post3.png\"
                                                              alt=\"Recent Post\"></a>
                            <div class=\"media-body ml-3\">
                                <h6><a href=\"#\">Envato Meeting turns into a photoshooting.</a></h6>
                                <p><i class=\"fa fa-user\"></i>Kien <i class=\"fa fa-eye\"></i> 74 Views</p>
                            </div>
                        </div>
                        <div class=\"media\">
                            <a class=\"rcnt-img\" href=\"#\"><img src=\"assets/images/rcnt-post4.png\"
                                                              alt=\"Recent Post\"></a>
                            <div class=\"media-body ml-3\">
                                <h6><a href=\"#\">An engaging embedded the video posts</a></h6>
                                <p><i class=\"fa fa-user\"></i>Robert <i class=\"fa fa-eye\"></i> 48 Views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-3\">
                    <div class=\"single-widget tags-widget\" data-aos=\"fade-up\" data-aos-delay=\"800\">
                        <h6 class=\"widget-tiltle\">Popular Tags</h6>
                        <a href=\"#\">Amazing</a>
                        <a href=\"#\">Design</a>
                        <a href=\"#\">Photoshop</a>
                        <a href=\"#\">Art</a>
                        <a href=\"#\">Wordpress</a>
                        <a href=\"#\">jQuery</a>
                    </div>
                    <div class=\"single-widget subscribe-widget\" data-aos=\"fade-up\" data-aos-delay=\"800\">
                        <h6 class=\"widget-tiltle\">Subscribe us</h6>
                        <p>Sign up for our mailing list to get latest updates and offers</p>
                        <form class=\"\" method=\"get\">
                            <div class=\"input-group\">
                                <input class=\"field form-control\" name=\"subscribe\" type=\"email\"
                                       placeholder=\"Email Address\">
                                <span class=\"input-group-btn\">
                                        <button type=\"submit\" name=\"submit-mail\"><i class=\"fa fa-check\"></i></button>
                                    </span>
                            </div>
                        </form>
                        <p>We respect your privacy</p>
                        <ul class=\"nav social-nav\">
                            <li><a href=\"https://www.facebook.com/fh5co\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Widgets End -->
    <!-- Foot Note Start -->
    <div class=\"foot-note\">
        <div class=\"container\">
            <div
                    class=\"footer-content text-center text-lg-left d-lg-flex justify-content-between align-items-center\">
                <p class=\"mb-0\" data-aos=\"fade-right\" data-aos-offset=\"0\">&copy; 2019 All Rights Reserved. Design by <a href=\"https://freehtml5.co/multipurpose\" target=\"_blank\" class=\"fh5-link\">FreeHTML5.co</a>.</p>
                <p class=\"mb-0\" data-aos=\"fade-left\" data-aos-offset=\"0\"><a href=\"#\">Terms Of Use</a><a
                            href=\"#\">Privacy & Security
                        Statement</a></p>
            </div>
        </div>
    </div>
    <!-- Foot Note End -->
</footer>
<!-- Footer Endt -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <!-- Widgets Start -->
    <div class=\"footer-widgets\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-xl-3\">
                    <div class=\"single-widget contact-widget\" data-aos=\"fade-up\" data-aos-delay=\"0\">
                        <h6 class=\"widget-tiltle\">&nbsp;</h6>
                        <p>By subscribing to our mailing list you will always be update with the latest news from
                            us.
                        </p>
                        <div class=\"media\">
                            <i class=\"fa fa-map-marker\"></i>
                            <div class=\"media-body ml-3\">
                                <h6>Address</h6>
                                Level 13, 2 Elizabeth St,<br>
                                Melbourne, Victoria 3000 Australia
                            </div>
                        </div>
                        <div class=\"media\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <div class=\"media-body ml-3\">
                                <h6>Have any questions?</h6>
                                <a href=\"mailto:support@steelthemes.com\">Support@Steelthemes.com</a>
                            </div>
                        </div>
                        <div class=\"media\">
                            <i class=\"fa fa-phone\"></i>
                            <div class=\"media-body ml-3\">
                                <h6>Call us & Hire us</h6>
                                <a href=\"tel:+610791803458\"> +61 (0) 7 9180 3458</a>
                            </div>
                        </div>
                        <div class=\"media\">
                            <i class=\"fa fa-fax\"></i>
                            <div class=\"media-body ml-3\">
                                <h6>Fax</h6>
                                <a href=\"fax:911889047521432\">(91) 188904752 1432</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-3\">
                    <div class=\"single-widget twitter-widget\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                        <h6 class=\"widget-tiltle\">Fresh Tweets</h6>
                        <div class=\"media\">
                            <i class=\"fa fa-twitter\"></i>
                            <div class=\"media-body ml-3\">
                                <h6><a href=\"#\">@Themes,</a> Html Version Out Now</h6>
                                <span>10 Mins Ago</span>
                            </div>
                        </div>
                        <div class=\"media\">
                            <i class=\"fa fa-twitter\"></i>
                            <div class=\"media-body ml-3\">
                                <h6><a href=\"#\">@Envato,</a> the best selling item of the day!</h6>
                                <span>20 Mins Ago</span>
                            </div>
                        </div>
                        <div class=\"media\">
                            <i class=\"fa fa-twitter\"></i>
                            <div class=\"media-body ml-3\">
                                <h6><a href=\"#\">@Collis,</a> We Planned to Update the Enavto Author Payment Method
                                    Soon!</h6>
                                <span>10 Mins Ago</span>
                            </div>
                        </div>
                        <div class=\"media\">
                            <i class=\"fa fa-twitter\"></i>
                            <div class=\"media-body ml-3\">
                                <h6><a href=\"#\">@SteelThemes,</a> Html Version Out Now</h6>
                                <span>15 Mins Ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-3\">
                    <div class=\"single-widget recent-post-widget\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                        <h6 class=\"widget-tiltle\">Latest Updates</h6>
                        <div class=\"media\">
                            <a class=\"rcnt-img\" href=\"#\"><img src=\"assets/images/rcnt-post1.png\"
                                                              alt=\"Recent Post\"></a>
                            <div class=\"media-body ml-3\">
                                <h6><a href=\"#\">An engaging</a></h6>
                                <p><i class=\"fa fa-user\"></i>Mano <i class=\"fa fa-eye\"></i> 202 Views</p>
                            </div>
                        </div>
                        <div class=\"media\">
                            <a class=\"rcnt-img\" href=\"#\"><img src=\"assets/images/rcnt-post2.png\"
                                                              alt=\"Recent Post\"></a>
                            <div class=\"media-body ml-3\">
                                <h6><a href=\"#\">Statistics and analysis. The key to succes.</a></h6>
                                <p><i class=\"fa fa-user\"></i>Rosias <i class=\"fa fa-eye\"></i> 20 Views</p>
                            </div>
                        </div>
                        <div class=\"media\">
                            <a class=\"rcnt-img\" href=\"#\"><img src=\"assets/images/rcnt-post3.png\"
                                                              alt=\"Recent Post\"></a>
                            <div class=\"media-body ml-3\">
                                <h6><a href=\"#\">Envato Meeting turns into a photoshooting.</a></h6>
                                <p><i class=\"fa fa-user\"></i>Kien <i class=\"fa fa-eye\"></i> 74 Views</p>
                            </div>
                        </div>
                        <div class=\"media\">
                            <a class=\"rcnt-img\" href=\"#\"><img src=\"assets/images/rcnt-post4.png\"
                                                              alt=\"Recent Post\"></a>
                            <div class=\"media-body ml-3\">
                                <h6><a href=\"#\">An engaging embedded the video posts</a></h6>
                                <p><i class=\"fa fa-user\"></i>Robert <i class=\"fa fa-eye\"></i> 48 Views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-3\">
                    <div class=\"single-widget tags-widget\" data-aos=\"fade-up\" data-aos-delay=\"800\">
                        <h6 class=\"widget-tiltle\">Popular Tags</h6>
                        <a href=\"#\">Amazing</a>
                        <a href=\"#\">Design</a>
                        <a href=\"#\">Photoshop</a>
                        <a href=\"#\">Art</a>
                        <a href=\"#\">Wordpress</a>
                        <a href=\"#\">jQuery</a>
                    </div>
                    <div class=\"single-widget subscribe-widget\" data-aos=\"fade-up\" data-aos-delay=\"800\">
                        <h6 class=\"widget-tiltle\">Subscribe us</h6>
                        <p>Sign up for our mailing list to get latest updates and offers</p>
                        <form class=\"\" method=\"get\">
                            <div class=\"input-group\">
                                <input class=\"field form-control\" name=\"subscribe\" type=\"email\"
                                       placeholder=\"Email Address\">
                                <span class=\"input-group-btn\">
                                        <button type=\"submit\" name=\"submit-mail\"><i class=\"fa fa-check\"></i></button>
                                    </span>
                            </div>
                        </form>
                        <p>We respect your privacy</p>
                        <ul class=\"nav social-nav\">
                            <li><a href=\"https://www.facebook.com/fh5co\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Widgets End -->
    <!-- Foot Note Start -->
    <div class=\"foot-note\">
        <div class=\"container\">
            <div
                    class=\"footer-content text-center text-lg-left d-lg-flex justify-content-between align-items-center\">
                <p class=\"mb-0\" data-aos=\"fade-right\" data-aos-offset=\"0\">&copy; 2019 All Rights Reserved. Design by <a href=\"https://freehtml5.co/multipurpose\" target=\"_blank\" class=\"fh5-link\">FreeHTML5.co</a>.</p>
                <p class=\"mb-0\" data-aos=\"fade-left\" data-aos-offset=\"0\"><a href=\"#\">Terms Of Use</a><a
                            href=\"#\">Privacy & Security
                        Statement</a></p>
            </div>
        </div>
    </div>
    <!-- Foot Note End -->
</footer>
<!-- Footer Endt -->", "components/_footer.html.twig", "C:\\wamp64\\www\\sym\\inayah\\templates\\components\\_footer.html.twig");
    }
}
