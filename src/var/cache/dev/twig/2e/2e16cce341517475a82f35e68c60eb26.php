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

/* account.html.twig */
class __TwigTemplate_07ce9ba425632a59d9c0a90f4e7b9821 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"css/account.css\">
    <link rel=\"stylesheet\" href=\"css/sellerInfos.css\">
    <link rel=\"stylesheet\" href=\"css/carousel.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <section>
        <div id=\"personalInfos\">
            <h1>Vos informations personnelles</h1>
            <form>
                <img src=\"https://via.placeholder.com/200\" alt=\"image profil vendeur\">
                <a href=\"\">Changer l'image</a>
                <label>Nom utilisateur</label>
                <p>doriane_68</p>
                <label for=\"email\">Email</label>
                <input type=\"email\" id=\"email\" name=\"email\">
                <button type=\"submit\" class=\"btn btn--primary\">Valider</button>
            </form>
        </div>

        <div id=\"personalProducts\">
            <h2>Vos annonces</h2>

            <div class=\"carousel\">
                <svg width=\"41\" height=\"41\" viewBox=\"0 0 41 41\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <g clip-path=\"url(#clip0_32_636)\">
                        <path d=\"M28.8904 32.5248C28.7169 32.6998 28.481 32.7989 28.2344 32.8002C27.9873 32.8025 27.7498 32.703 27.5785 32.5248L12.1103 17.056C11.9349 16.8828 11.836 16.6467 11.836 16.4001C11.836 16.1535 11.9349 15.9173 12.1103 15.7442L27.5785 0.272518C27.7503 0.0887967 27.9894 -0.017364 28.2409 -0.0214816C28.4925 -0.0255999 28.7348 0.0723264 28.9129 0.250325C29.0906 0.428101 29.1888 0.670622 29.1844 0.922081C29.1803 1.17353 29.0742 1.41262 28.8904 1.58447L14.0783 16.4001L28.8904 31.2122C29.0652 31.3859 29.1634 31.622 29.1634 31.8684C29.1634 32.1146 29.0652 32.3507 28.8904 32.5244L28.8904 32.5248Z\" fill=\"black\"/>
                    </g>
                </svg>

                <div>
                    <img src=\"https://via.placeholder.com/230x290\" alt=\"image produit\">
                    <p>Nom de l'article</p>
                    <p>50€</p>
                </div>

                <div>
                    <img src=\"https://via.placeholder.com/230x290\" alt=\"image produit\">
                    <p>Nom de l'article</p>
                    <p>50€</p>
                </div>

                <div class=\"carousel__test\">
                    <img src=\"https://via.placeholder.com/230x290\" alt=\"image produit\">
                    <p>Nom de l'article</p>
                    <p>50€</p>
                    <span class=\"carousel__tag\">Vendu</span>
                </div>

                <svg width=\"41\" height=\"41\" viewBox=\"0 0 41 41\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <g clip-path=\"url(#clip0_32_633)\">
                        <path d=\"M12.1096 32.5248C12.2831 32.6998 12.519 32.7989 12.7656 32.8002C13.0127 32.8025 13.2502 32.703 13.4215 32.5248L28.8897 17.056C29.0651 16.8828 29.164 16.6467 29.164 16.4001C29.164 16.1535 29.0651 15.9173 28.8897 15.7442L13.4215 0.272518C13.2497 0.0887967 13.0106 -0.017364 12.7591 -0.0214816C12.5075 -0.0255999 12.2652 0.0723264 12.0871 0.250325C11.9094 0.428101 11.8112 0.670622 11.8156 0.922081C11.8197 1.17353 11.9258 1.41262 12.1096 1.58447L26.9217 16.4001L12.1096 31.2122C11.9348 31.3859 11.8366 31.622 11.8366 31.8684C11.8366 32.1146 11.9348 32.3507 12.1096 32.5244L12.1096 32.5248Z\" fill=\"black\"/>
                    </g>
                </svg>
            </div>

            <a href=\"/create-product\" class=\"btn btn--primary\">Ajouter une annonce</a>
        </div>

        <div>
            <h2>Noter les vendeurs</h2>

            <div class=\"carouselSellers\">
                <svg width=\"41\" height=\"41\" viewBox=\"0 0 41 41\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <g clip-path=\"url(#clip0_32_636)\">
                        <path d=\"M28.8904 32.5248C28.7169 32.6998 28.481 32.7989 28.2344 32.8002C27.9873 32.8025 27.7498 32.703 27.5785 32.5248L12.1103 17.056C11.9349 16.8828 11.836 16.6467 11.836 16.4001C11.836 16.1535 11.9349 15.9173 12.1103 15.7442L27.5785 0.272518C27.7503 0.0887967 27.9894 -0.017364 28.2409 -0.0214816C28.4925 -0.0255999 28.7348 0.0723264 28.9129 0.250325C29.0906 0.428101 29.1888 0.670622 29.1844 0.922081C29.1803 1.17353 29.0742 1.41262 28.8904 1.58447L14.0783 16.4001L28.8904 31.2122C29.0652 31.3859 29.1634 31.622 29.1634 31.8684C29.1634 32.1146 29.0652 32.3507 28.8904 32.5244L28.8904 32.5248Z\" fill=\"black\"/>
                    </g>
                </svg>

                <div class=\"carouselSellers__card\">
                    <div class=\"sellerInfos\">
                        <img src=\"https://via.placeholder.com/60\" alt=\"image profil vendeur\">
                        <span>jodelacreuse</span>
                        <span>74% de recommendation</span>
                    </div>
                    <svg width=\"25\" height=\"29\" viewBox=\"0 0 25 29\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M21.3336 25.9165C21.3336 25.595 21.2683 25.2912 21.1621 25.0049C22.7414 24.8653 23.9837 23.5563 23.9837 21.9415C23.9837 21.1272 23.6622 20.3923 23.1479 19.841C24.1638 19.3323 24.8668 18.2951 24.8668 17.0833C24.8668 15.8695 24.1638 14.8344 23.1479 14.3254C23.853 13.5712 24.1936 12.4704 23.8459 11.2956C23.4555 9.98125 22.1674 9.13325 20.7966 9.13325H14.2669L15.6608 6.34545C15.9065 5.85597 16.0337 5.31354 16.0337 4.76431V4.71639C16.0337 2.28377 14.069 0.312246 11.6399 0.299828C11.1451 0.296279 10.7337 0.690226 10.7337 1.18326V3.16902C10.7337 3.59639 10.5782 4.01164 10.2954 4.33139L5.07854 10.2956C4.74285 10.6789 4.25689 10.8999 3.74824 10.8999H0.133789V25.0335H3.75361C4.28184 25.0335 4.80831 25.1127 5.31196 25.2683L10.1225 27.0402C12.8645 28.049 15.7617 28.5666 18.6835 28.5666C20.1481 28.5666 21.3335 27.3794 21.3335 25.9166\" fill=\"black\"/>
                    </svg>
                    <svg width=\"25\" height=\"29\" viewBox=\"0 0 25 29\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.66635 3.08355C3.66635 3.40504 3.73172 3.70878 3.83789 3.99507C2.25857 4.13467 1.01632 5.44371 1.01632 7.05855C1.01632 7.87278 1.33781 8.60773 1.85213 9.15901C0.836199 9.66772 0.133192 10.7049 0.133192 11.9167C0.133192 13.1305 0.836214 14.1656 1.85213 14.6746C1.14704 15.4288 0.806368 16.5296 1.15414 17.7044C1.54454 19.0188 2.83257 19.8668 4.20338 19.8668H10.7331L9.33923 22.6546C9.09346 23.144 8.96628 23.6865 8.96628 24.2357V24.2836C8.96628 26.7162 10.931 28.6878 13.3601 28.7002C13.8549 28.7037 14.2663 28.3098 14.2663 27.8167L14.2663 25.831C14.2663 25.4036 14.4218 24.9884 14.7046 24.6686L19.9215 18.7044C20.2571 18.3211 20.7431 18.1001 21.2518 18.1001H24.8662L24.8662 3.96655H21.2464C20.7182 3.96655 20.1917 3.88729 19.688 3.73171L14.8775 1.95985C12.1355 0.951031 9.23833 0.433449 6.31651 0.433449C4.85189 0.433449 3.66651 1.62065 3.66651 3.08345\" fill=\"black\"/>
                    </svg>
                </div>

                <div class=\"carouselSellers__card\">
                    <div class=\"sellerInfos\">
                        <img src=\"https://via.placeholder.com/60\" alt=\"image profil vendeur\">
                        <span>luna_34</span>
                        <span>74% de recommendation</span>
                    </div>
                    <svg width=\"25\" height=\"29\" viewBox=\"0 0 25 29\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M21.3336 25.9165C21.3336 25.595 21.2683 25.2912 21.1621 25.0049C22.7414 24.8653 23.9837 23.5563 23.9837 21.9415C23.9837 21.1272 23.6622 20.3923 23.1479 19.841C24.1638 19.3323 24.8668 18.2951 24.8668 17.0833C24.8668 15.8695 24.1638 14.8344 23.1479 14.3254C23.853 13.5712 24.1936 12.4704 23.8459 11.2956C23.4555 9.98125 22.1674 9.13325 20.7966 9.13325H14.2669L15.6608 6.34545C15.9065 5.85597 16.0337 5.31354 16.0337 4.76431V4.71639C16.0337 2.28377 14.069 0.312246 11.6399 0.299828C11.1451 0.296279 10.7337 0.690226 10.7337 1.18326V3.16902C10.7337 3.59639 10.5782 4.01164 10.2954 4.33139L5.07854 10.2956C4.74285 10.6789 4.25689 10.8999 3.74824 10.8999H0.133789V25.0335H3.75361C4.28184 25.0335 4.80831 25.1127 5.31196 25.2683L10.1225 27.0402C12.8645 28.049 15.7617 28.5666 18.6835 28.5666C20.1481 28.5666 21.3335 27.3794 21.3335 25.9166\" fill=\"black\"/>
                    </svg>
                    <svg width=\"25\" height=\"29\" viewBox=\"0 0 25 29\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.66635 3.08355C3.66635 3.40504 3.73172 3.70878 3.83789 3.99507C2.25857 4.13467 1.01632 5.44371 1.01632 7.05855C1.01632 7.87278 1.33781 8.60773 1.85213 9.15901C0.836199 9.66772 0.133192 10.7049 0.133192 11.9167C0.133192 13.1305 0.836214 14.1656 1.85213 14.6746C1.14704 15.4288 0.806368 16.5296 1.15414 17.7044C1.54454 19.0188 2.83257 19.8668 4.20338 19.8668H10.7331L9.33923 22.6546C9.09346 23.144 8.96628 23.6865 8.96628 24.2357V24.2836C8.96628 26.7162 10.931 28.6878 13.3601 28.7002C13.8549 28.7037 14.2663 28.3098 14.2663 27.8167L14.2663 25.831C14.2663 25.4036 14.4218 24.9884 14.7046 24.6686L19.9215 18.7044C20.2571 18.3211 20.7431 18.1001 21.2518 18.1001H24.8662L24.8662 3.96655H21.2464C20.7182 3.96655 20.1917 3.88729 19.688 3.73171L14.8775 1.95985C12.1355 0.951031 9.23833 0.433449 6.31651 0.433449C4.85189 0.433449 3.66651 1.62065 3.66651 3.08345\" fill=\"black\"/>
                    </svg>
                </div>

                <svg width=\"41\" height=\"41\" viewBox=\"0 0 41 41\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <g clip-path=\"url(#clip0_32_633)\">
                        <path d=\"M12.1096 32.5248C12.2831 32.6998 12.519 32.7989 12.7656 32.8002C13.0127 32.8025 13.2502 32.703 13.4215 32.5248L28.8897 17.056C29.0651 16.8828 29.164 16.6467 29.164 16.4001C29.164 16.1535 29.0651 15.9173 28.8897 15.7442L13.4215 0.272518C13.2497 0.0887967 13.0106 -0.017364 12.7591 -0.0214816C12.5075 -0.0255999 12.2652 0.0723264 12.0871 0.250325C11.9094 0.428101 11.8112 0.670622 11.8156 0.922081C11.8197 1.17353 11.9258 1.41262 12.1096 1.58447L26.9217 16.4001L12.1096 31.2122C11.9348 31.3859 11.8366 31.622 11.8366 31.8684C11.8366 32.1146 11.9348 32.3507 12.1096 32.5244L12.1096 32.5248Z\" fill=\"black\"/>
                    </g>
                </svg>

            </div>

        </div>

    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  83 => 10,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"css/account.css\">
    <link rel=\"stylesheet\" href=\"css/sellerInfos.css\">
    <link rel=\"stylesheet\" href=\"css/carousel.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
{% endblock %}

{% block body %}
    <section>
        <div id=\"personalInfos\">
            <h1>Vos informations personnelles</h1>
            <form>
                <img src=\"https://via.placeholder.com/200\" alt=\"image profil vendeur\">
                <a href=\"\">Changer l'image</a>
                <label>Nom utilisateur</label>
                <p>doriane_68</p>
                <label for=\"email\">Email</label>
                <input type=\"email\" id=\"email\" name=\"email\">
                <button type=\"submit\" class=\"btn btn--primary\">Valider</button>
            </form>
        </div>

        <div id=\"personalProducts\">
            <h2>Vos annonces</h2>

            <div class=\"carousel\">
                <svg width=\"41\" height=\"41\" viewBox=\"0 0 41 41\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <g clip-path=\"url(#clip0_32_636)\">
                        <path d=\"M28.8904 32.5248C28.7169 32.6998 28.481 32.7989 28.2344 32.8002C27.9873 32.8025 27.7498 32.703 27.5785 32.5248L12.1103 17.056C11.9349 16.8828 11.836 16.6467 11.836 16.4001C11.836 16.1535 11.9349 15.9173 12.1103 15.7442L27.5785 0.272518C27.7503 0.0887967 27.9894 -0.017364 28.2409 -0.0214816C28.4925 -0.0255999 28.7348 0.0723264 28.9129 0.250325C29.0906 0.428101 29.1888 0.670622 29.1844 0.922081C29.1803 1.17353 29.0742 1.41262 28.8904 1.58447L14.0783 16.4001L28.8904 31.2122C29.0652 31.3859 29.1634 31.622 29.1634 31.8684C29.1634 32.1146 29.0652 32.3507 28.8904 32.5244L28.8904 32.5248Z\" fill=\"black\"/>
                    </g>
                </svg>

                <div>
                    <img src=\"https://via.placeholder.com/230x290\" alt=\"image produit\">
                    <p>Nom de l'article</p>
                    <p>50€</p>
                </div>

                <div>
                    <img src=\"https://via.placeholder.com/230x290\" alt=\"image produit\">
                    <p>Nom de l'article</p>
                    <p>50€</p>
                </div>

                <div class=\"carousel__test\">
                    <img src=\"https://via.placeholder.com/230x290\" alt=\"image produit\">
                    <p>Nom de l'article</p>
                    <p>50€</p>
                    <span class=\"carousel__tag\">Vendu</span>
                </div>

                <svg width=\"41\" height=\"41\" viewBox=\"0 0 41 41\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <g clip-path=\"url(#clip0_32_633)\">
                        <path d=\"M12.1096 32.5248C12.2831 32.6998 12.519 32.7989 12.7656 32.8002C13.0127 32.8025 13.2502 32.703 13.4215 32.5248L28.8897 17.056C29.0651 16.8828 29.164 16.6467 29.164 16.4001C29.164 16.1535 29.0651 15.9173 28.8897 15.7442L13.4215 0.272518C13.2497 0.0887967 13.0106 -0.017364 12.7591 -0.0214816C12.5075 -0.0255999 12.2652 0.0723264 12.0871 0.250325C11.9094 0.428101 11.8112 0.670622 11.8156 0.922081C11.8197 1.17353 11.9258 1.41262 12.1096 1.58447L26.9217 16.4001L12.1096 31.2122C11.9348 31.3859 11.8366 31.622 11.8366 31.8684C11.8366 32.1146 11.9348 32.3507 12.1096 32.5244L12.1096 32.5248Z\" fill=\"black\"/>
                    </g>
                </svg>
            </div>

            <a href=\"/create-product\" class=\"btn btn--primary\">Ajouter une annonce</a>
        </div>

        <div>
            <h2>Noter les vendeurs</h2>

            <div class=\"carouselSellers\">
                <svg width=\"41\" height=\"41\" viewBox=\"0 0 41 41\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <g clip-path=\"url(#clip0_32_636)\">
                        <path d=\"M28.8904 32.5248C28.7169 32.6998 28.481 32.7989 28.2344 32.8002C27.9873 32.8025 27.7498 32.703 27.5785 32.5248L12.1103 17.056C11.9349 16.8828 11.836 16.6467 11.836 16.4001C11.836 16.1535 11.9349 15.9173 12.1103 15.7442L27.5785 0.272518C27.7503 0.0887967 27.9894 -0.017364 28.2409 -0.0214816C28.4925 -0.0255999 28.7348 0.0723264 28.9129 0.250325C29.0906 0.428101 29.1888 0.670622 29.1844 0.922081C29.1803 1.17353 29.0742 1.41262 28.8904 1.58447L14.0783 16.4001L28.8904 31.2122C29.0652 31.3859 29.1634 31.622 29.1634 31.8684C29.1634 32.1146 29.0652 32.3507 28.8904 32.5244L28.8904 32.5248Z\" fill=\"black\"/>
                    </g>
                </svg>

                <div class=\"carouselSellers__card\">
                    <div class=\"sellerInfos\">
                        <img src=\"https://via.placeholder.com/60\" alt=\"image profil vendeur\">
                        <span>jodelacreuse</span>
                        <span>74% de recommendation</span>
                    </div>
                    <svg width=\"25\" height=\"29\" viewBox=\"0 0 25 29\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M21.3336 25.9165C21.3336 25.595 21.2683 25.2912 21.1621 25.0049C22.7414 24.8653 23.9837 23.5563 23.9837 21.9415C23.9837 21.1272 23.6622 20.3923 23.1479 19.841C24.1638 19.3323 24.8668 18.2951 24.8668 17.0833C24.8668 15.8695 24.1638 14.8344 23.1479 14.3254C23.853 13.5712 24.1936 12.4704 23.8459 11.2956C23.4555 9.98125 22.1674 9.13325 20.7966 9.13325H14.2669L15.6608 6.34545C15.9065 5.85597 16.0337 5.31354 16.0337 4.76431V4.71639C16.0337 2.28377 14.069 0.312246 11.6399 0.299828C11.1451 0.296279 10.7337 0.690226 10.7337 1.18326V3.16902C10.7337 3.59639 10.5782 4.01164 10.2954 4.33139L5.07854 10.2956C4.74285 10.6789 4.25689 10.8999 3.74824 10.8999H0.133789V25.0335H3.75361C4.28184 25.0335 4.80831 25.1127 5.31196 25.2683L10.1225 27.0402C12.8645 28.049 15.7617 28.5666 18.6835 28.5666C20.1481 28.5666 21.3335 27.3794 21.3335 25.9166\" fill=\"black\"/>
                    </svg>
                    <svg width=\"25\" height=\"29\" viewBox=\"0 0 25 29\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.66635 3.08355C3.66635 3.40504 3.73172 3.70878 3.83789 3.99507C2.25857 4.13467 1.01632 5.44371 1.01632 7.05855C1.01632 7.87278 1.33781 8.60773 1.85213 9.15901C0.836199 9.66772 0.133192 10.7049 0.133192 11.9167C0.133192 13.1305 0.836214 14.1656 1.85213 14.6746C1.14704 15.4288 0.806368 16.5296 1.15414 17.7044C1.54454 19.0188 2.83257 19.8668 4.20338 19.8668H10.7331L9.33923 22.6546C9.09346 23.144 8.96628 23.6865 8.96628 24.2357V24.2836C8.96628 26.7162 10.931 28.6878 13.3601 28.7002C13.8549 28.7037 14.2663 28.3098 14.2663 27.8167L14.2663 25.831C14.2663 25.4036 14.4218 24.9884 14.7046 24.6686L19.9215 18.7044C20.2571 18.3211 20.7431 18.1001 21.2518 18.1001H24.8662L24.8662 3.96655H21.2464C20.7182 3.96655 20.1917 3.88729 19.688 3.73171L14.8775 1.95985C12.1355 0.951031 9.23833 0.433449 6.31651 0.433449C4.85189 0.433449 3.66651 1.62065 3.66651 3.08345\" fill=\"black\"/>
                    </svg>
                </div>

                <div class=\"carouselSellers__card\">
                    <div class=\"sellerInfos\">
                        <img src=\"https://via.placeholder.com/60\" alt=\"image profil vendeur\">
                        <span>luna_34</span>
                        <span>74% de recommendation</span>
                    </div>
                    <svg width=\"25\" height=\"29\" viewBox=\"0 0 25 29\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M21.3336 25.9165C21.3336 25.595 21.2683 25.2912 21.1621 25.0049C22.7414 24.8653 23.9837 23.5563 23.9837 21.9415C23.9837 21.1272 23.6622 20.3923 23.1479 19.841C24.1638 19.3323 24.8668 18.2951 24.8668 17.0833C24.8668 15.8695 24.1638 14.8344 23.1479 14.3254C23.853 13.5712 24.1936 12.4704 23.8459 11.2956C23.4555 9.98125 22.1674 9.13325 20.7966 9.13325H14.2669L15.6608 6.34545C15.9065 5.85597 16.0337 5.31354 16.0337 4.76431V4.71639C16.0337 2.28377 14.069 0.312246 11.6399 0.299828C11.1451 0.296279 10.7337 0.690226 10.7337 1.18326V3.16902C10.7337 3.59639 10.5782 4.01164 10.2954 4.33139L5.07854 10.2956C4.74285 10.6789 4.25689 10.8999 3.74824 10.8999H0.133789V25.0335H3.75361C4.28184 25.0335 4.80831 25.1127 5.31196 25.2683L10.1225 27.0402C12.8645 28.049 15.7617 28.5666 18.6835 28.5666C20.1481 28.5666 21.3335 27.3794 21.3335 25.9166\" fill=\"black\"/>
                    </svg>
                    <svg width=\"25\" height=\"29\" viewBox=\"0 0 25 29\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.66635 3.08355C3.66635 3.40504 3.73172 3.70878 3.83789 3.99507C2.25857 4.13467 1.01632 5.44371 1.01632 7.05855C1.01632 7.87278 1.33781 8.60773 1.85213 9.15901C0.836199 9.66772 0.133192 10.7049 0.133192 11.9167C0.133192 13.1305 0.836214 14.1656 1.85213 14.6746C1.14704 15.4288 0.806368 16.5296 1.15414 17.7044C1.54454 19.0188 2.83257 19.8668 4.20338 19.8668H10.7331L9.33923 22.6546C9.09346 23.144 8.96628 23.6865 8.96628 24.2357V24.2836C8.96628 26.7162 10.931 28.6878 13.3601 28.7002C13.8549 28.7037 14.2663 28.3098 14.2663 27.8167L14.2663 25.831C14.2663 25.4036 14.4218 24.9884 14.7046 24.6686L19.9215 18.7044C20.2571 18.3211 20.7431 18.1001 21.2518 18.1001H24.8662L24.8662 3.96655H21.2464C20.7182 3.96655 20.1917 3.88729 19.688 3.73171L14.8775 1.95985C12.1355 0.951031 9.23833 0.433449 6.31651 0.433449C4.85189 0.433449 3.66651 1.62065 3.66651 3.08345\" fill=\"black\"/>
                    </svg>
                </div>

                <svg width=\"41\" height=\"41\" viewBox=\"0 0 41 41\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <g clip-path=\"url(#clip0_32_633)\">
                        <path d=\"M12.1096 32.5248C12.2831 32.6998 12.519 32.7989 12.7656 32.8002C13.0127 32.8025 13.2502 32.703 13.4215 32.5248L28.8897 17.056C29.0651 16.8828 29.164 16.6467 29.164 16.4001C29.164 16.1535 29.0651 15.9173 28.8897 15.7442L13.4215 0.272518C13.2497 0.0887967 13.0106 -0.017364 12.7591 -0.0214816C12.5075 -0.0255999 12.2652 0.0723264 12.0871 0.250325C11.9094 0.428101 11.8112 0.670622 11.8156 0.922081C11.8197 1.17353 11.9258 1.41262 12.1096 1.58447L26.9217 16.4001L12.1096 31.2122C11.9348 31.3859 11.8366 31.622 11.8366 31.8684C11.8366 32.1146 11.9348 32.3507 12.1096 32.5244L12.1096 32.5248Z\" fill=\"black\"/>
                    </g>
                </svg>

            </div>

        </div>

    </section>
{% endblock %}", "account.html.twig", "/var/www/html/templates/account.html.twig");
    }
}
