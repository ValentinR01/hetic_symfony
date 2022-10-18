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

/* index.html.twig */
class __TwigTemplate_fad8ce226bda79dc02d6a2c900ba87b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"css/homepage.css\">
    <link rel=\"stylesheet\" href=\"css/searchbar.css\">
    <link rel=\"stylesheet\" href=\"css/sellerInfos.css\">
    <link rel=\"stylesheet\" href=\"css/carousel.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <section id=\"homepage\">
        <div class=\"searchbar\">
            <input type=\"text\" placeholder=\"Rechercher\">
            <a href=\"#\">
                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M23.4359 22.82L15.7919 15.176C17.2759 13.552 18.172 11.4241 18.172 9.072C18.172 4.06 14.0839 7.0945e-09 9.1 7.0945e-09C4.116 -0.000195293 0 4.03185 0 9.044C0 14.056 4.0881 18.116 9.072 18.116C11.424 18.116 13.58 17.2199 15.204 15.7359L22.848 23.3799L23.4359 22.82ZM0.8399 9.044C0.8399 4.50805 4.536 0.812 9.0719 0.812C13.6078 0.812 17.3039 4.5081 17.3039 9.044C17.3037 13.58 13.6078 17.304 9.0719 17.304C4.53595 17.304 0.8399 13.6079 0.8399 9.044Z\" fill=\"black\"/>
                </svg>
            </a>
        </div>

        <div id=\"catProducts\">
            <img id=\"catProducts__meublesImage\" src=\"https://via.placeholder.com/410x670\" alt=\"image couverture meubles\">
            <p id=\"catProducts__meublesTitle\">Meubles</p>
            <img id=\"catProducts__vaisselleImage\" src=\"https://via.placeholder.com/430x300\" alt=\"image couverture vaisselle\">
            <p id=\"catProducts__vaisselleTitle\">Vaisselle</p>
            <img id=\"catProducts__lumiereImage\" src=\"https://via.placeholder.com/205x300\" alt=\"image couverture lumière\">
            <p id=\"catProducts__lumiereTitle\">Lumière</p>
            <img id=\"catProducts__livresImage\" src=\"https://via.placeholder.com/205x300\" alt=\"image couverture livres\">
            <p id=\"catProducts__livresTitle\">Livres</p>
        </div>

        <div id=\"homepage__concept\">
            <p>
                Notre objectif : permettre à chacun d’acheter et de vendre les plus belles pièces uniques de mobilier et de décoration de seconde main.
                Nous voulons proposer aujourd’hui une alternative responsable aux enseignes de décoration industrielles en donnant une seconde vie à des milliers de meubles d’occasion.
                <br>
                Acheter Neverend c’est s’engager à limiter sa consommation de matière première et son nombre de déchets pour donner du sens à ses actions.
                Les prix affichés sont fixés par les vendeurs et nous opérons en tant qu’intermédiaire et tiers de confiance pour garantir la qualité des produits.
            </p>
            <a href=\"/all-products\" class=\"btn btn--primary\">Toutes les annonces</a>
        </div>

        <div>
            <h2>Nos meilleurs vendeurs</h2>

            <div class=\"sellerInfos\">
                <img src=\"https://via.placeholder.com/60\" alt=\"image profil vendeur\">
                <span>doriane_68</span>
                <span>90% de recommendations</span>
            </div>

            <div class=\"carousel\">
                <svg width=\"41\" height=\"41\" viewBox=\"0 0 41 41\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <g clip-path=\"url(#clip0_32_636)\">
                        <path d=\"M28.8904 32.5248C28.7169 32.6998 28.481 32.7989 28.2344 32.8002C27.9873 32.8025 27.7498 32.703 27.5785 32.5248L12.1103 17.056C11.9349 16.8828 11.836 16.6467 11.836 16.4001C11.836 16.1535 11.9349 15.9173 12.1103 15.7442L27.5785 0.272518C27.7503 0.0887967 27.9894 -0.017364 28.2409 -0.0214816C28.4925 -0.0255999 28.7348 0.0723264 28.9129 0.250325C29.0906 0.428101 29.1888 0.670622 29.1844 0.922081C29.1803 1.17353 29.0742 1.41262 28.8904 1.58447L14.0783 16.4001L28.8904 31.2122C29.0652 31.3859 29.1634 31.622 29.1634 31.8684C29.1634 32.1146 29.0652 32.3507 28.8904 32.5244L28.8904 32.5248Z\" fill=\"black\"/>
                    </g>
                </svg>

                <div>
                    <a href=\"/product\">
                        <img src=\"https://via.placeholder.com/230x290\" alt=\"image produit\">
                    </a>
                    <p>Nom de l'article</p>
                    <p>50€</p>
                </div>

                <div>
                    <a href=\"/product\">
                        <img src=\"https://via.placeholder.com/230x290\" alt=\"image produit\">
                    </a>
                    <p>Nom de l'article</p>
                    <p>50€</p>
                </div>

                <div>
                    <a href=\"/product\">
                        <img src=\"https://via.placeholder.com/230x290\" alt=\"image produit\">
                    </a>
                    <p>Nom de l'article</p>
                    <p>50€</p>
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
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 12,  84 => 11,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"css/homepage.css\">
    <link rel=\"stylesheet\" href=\"css/searchbar.css\">
    <link rel=\"stylesheet\" href=\"css/sellerInfos.css\">
    <link rel=\"stylesheet\" href=\"css/carousel.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
{% endblock %}

{% block body %}
    <section id=\"homepage\">
        <div class=\"searchbar\">
            <input type=\"text\" placeholder=\"Rechercher\">
            <a href=\"#\">
                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M23.4359 22.82L15.7919 15.176C17.2759 13.552 18.172 11.4241 18.172 9.072C18.172 4.06 14.0839 7.0945e-09 9.1 7.0945e-09C4.116 -0.000195293 0 4.03185 0 9.044C0 14.056 4.0881 18.116 9.072 18.116C11.424 18.116 13.58 17.2199 15.204 15.7359L22.848 23.3799L23.4359 22.82ZM0.8399 9.044C0.8399 4.50805 4.536 0.812 9.0719 0.812C13.6078 0.812 17.3039 4.5081 17.3039 9.044C17.3037 13.58 13.6078 17.304 9.0719 17.304C4.53595 17.304 0.8399 13.6079 0.8399 9.044Z\" fill=\"black\"/>
                </svg>
            </a>
        </div>

        <div id=\"catProducts\">
            <img id=\"catProducts__meublesImage\" src=\"https://via.placeholder.com/410x670\" alt=\"image couverture meubles\">
            <p id=\"catProducts__meublesTitle\">Meubles</p>
            <img id=\"catProducts__vaisselleImage\" src=\"https://via.placeholder.com/430x300\" alt=\"image couverture vaisselle\">
            <p id=\"catProducts__vaisselleTitle\">Vaisselle</p>
            <img id=\"catProducts__lumiereImage\" src=\"https://via.placeholder.com/205x300\" alt=\"image couverture lumière\">
            <p id=\"catProducts__lumiereTitle\">Lumière</p>
            <img id=\"catProducts__livresImage\" src=\"https://via.placeholder.com/205x300\" alt=\"image couverture livres\">
            <p id=\"catProducts__livresTitle\">Livres</p>
        </div>

        <div id=\"homepage__concept\">
            <p>
                Notre objectif : permettre à chacun d’acheter et de vendre les plus belles pièces uniques de mobilier et de décoration de seconde main.
                Nous voulons proposer aujourd’hui une alternative responsable aux enseignes de décoration industrielles en donnant une seconde vie à des milliers de meubles d’occasion.
                <br>
                Acheter Neverend c’est s’engager à limiter sa consommation de matière première et son nombre de déchets pour donner du sens à ses actions.
                Les prix affichés sont fixés par les vendeurs et nous opérons en tant qu’intermédiaire et tiers de confiance pour garantir la qualité des produits.
            </p>
            <a href=\"/all-products\" class=\"btn btn--primary\">Toutes les annonces</a>
        </div>

        <div>
            <h2>Nos meilleurs vendeurs</h2>

            <div class=\"sellerInfos\">
                <img src=\"https://via.placeholder.com/60\" alt=\"image profil vendeur\">
                <span>doriane_68</span>
                <span>90% de recommendations</span>
            </div>

            <div class=\"carousel\">
                <svg width=\"41\" height=\"41\" viewBox=\"0 0 41 41\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <g clip-path=\"url(#clip0_32_636)\">
                        <path d=\"M28.8904 32.5248C28.7169 32.6998 28.481 32.7989 28.2344 32.8002C27.9873 32.8025 27.7498 32.703 27.5785 32.5248L12.1103 17.056C11.9349 16.8828 11.836 16.6467 11.836 16.4001C11.836 16.1535 11.9349 15.9173 12.1103 15.7442L27.5785 0.272518C27.7503 0.0887967 27.9894 -0.017364 28.2409 -0.0214816C28.4925 -0.0255999 28.7348 0.0723264 28.9129 0.250325C29.0906 0.428101 29.1888 0.670622 29.1844 0.922081C29.1803 1.17353 29.0742 1.41262 28.8904 1.58447L14.0783 16.4001L28.8904 31.2122C29.0652 31.3859 29.1634 31.622 29.1634 31.8684C29.1634 32.1146 29.0652 32.3507 28.8904 32.5244L28.8904 32.5248Z\" fill=\"black\"/>
                    </g>
                </svg>

                <div>
                    <a href=\"/product\">
                        <img src=\"https://via.placeholder.com/230x290\" alt=\"image produit\">
                    </a>
                    <p>Nom de l'article</p>
                    <p>50€</p>
                </div>

                <div>
                    <a href=\"/product\">
                        <img src=\"https://via.placeholder.com/230x290\" alt=\"image produit\">
                    </a>
                    <p>Nom de l'article</p>
                    <p>50€</p>
                </div>

                <div>
                    <a href=\"/product\">
                        <img src=\"https://via.placeholder.com/230x290\" alt=\"image produit\">
                    </a>
                    <p>Nom de l'article</p>
                    <p>50€</p>
                </div>

                <svg width=\"41\" height=\"41\" viewBox=\"0 0 41 41\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <g clip-path=\"url(#clip0_32_633)\">
                        <path d=\"M12.1096 32.5248C12.2831 32.6998 12.519 32.7989 12.7656 32.8002C13.0127 32.8025 13.2502 32.703 13.4215 32.5248L28.8897 17.056C29.0651 16.8828 29.164 16.6467 29.164 16.4001C29.164 16.1535 29.0651 15.9173 28.8897 15.7442L13.4215 0.272518C13.2497 0.0887967 13.0106 -0.017364 12.7591 -0.0214816C12.5075 -0.0255999 12.2652 0.0723264 12.0871 0.250325C11.9094 0.428101 11.8112 0.670622 11.8156 0.922081C11.8197 1.17353 11.9258 1.41262 12.1096 1.58447L26.9217 16.4001L12.1096 31.2122C11.9348 31.3859 11.8366 31.622 11.8366 31.8684C11.8366 32.1146 11.9348 32.3507 12.1096 32.5244L12.1096 32.5248Z\" fill=\"black\"/>
                    </g>
                </svg>
            </div>
        </div>
    </section>

{% endblock %}", "index.html.twig", "/var/www/html/templates/index.html.twig");
    }
}
