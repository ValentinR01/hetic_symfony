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

/* allProducts.html.twig */
class __TwigTemplate_60881a71b2dfed11458c71d92316d974 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allProducts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allProducts.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "allProducts.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"css/allProducts.css\">
    <link rel=\"stylesheet\" href=\"css/searchbar.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <section id=\"allProducts\">

        <div class=\"searchbar\">
            <input type=\"text\" placeholder=\"Rechercher\">
            <a href=\"#\">
                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M23.4359 22.82L15.7919 15.176C17.2759 13.552 18.172 11.4241 18.172 9.072C18.172 4.06 14.0839 7.0945e-09 9.1 7.0945e-09C4.116 -0.000195293 0 4.03185 0 9.044C0 14.056 4.0881 18.116 9.072 18.116C11.424 18.116 13.58 17.2199 15.204 15.7359L22.848 23.3799L23.4359 22.82ZM0.8399 9.044C0.8399 4.50805 4.536 0.812 9.0719 0.812C13.6078 0.812 17.3039 4.5081 17.3039 9.044C17.3037 13.58 13.6078 17.304 9.0719 17.304C4.53595 17.304 0.8399 13.6079 0.8399 9.044Z\" fill=\"black\"/>
                </svg>
            </a>
        </div>

        <h1> Tous les articles </h1>
        <div id=\"productsGallery\">
            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

        </div>

        <!-- mettre à jour la pagination
         knp_pagination_render(products -->

    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "allProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 10,  82 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"css/allProducts.css\">
    <link rel=\"stylesheet\" href=\"css/searchbar.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
{% endblock %}

{% block body %}
    <section id=\"allProducts\">

        <div class=\"searchbar\">
            <input type=\"text\" placeholder=\"Rechercher\">
            <a href=\"#\">
                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M23.4359 22.82L15.7919 15.176C17.2759 13.552 18.172 11.4241 18.172 9.072C18.172 4.06 14.0839 7.0945e-09 9.1 7.0945e-09C4.116 -0.000195293 0 4.03185 0 9.044C0 14.056 4.0881 18.116 9.072 18.116C11.424 18.116 13.58 17.2199 15.204 15.7359L22.848 23.3799L23.4359 22.82ZM0.8399 9.044C0.8399 4.50805 4.536 0.812 9.0719 0.812C13.6078 0.812 17.3039 4.5081 17.3039 9.044C17.3037 13.58 13.6078 17.304 9.0719 17.304C4.53595 17.304 0.8399 13.6079 0.8399 9.044Z\" fill=\"black\"/>
                </svg>
            </a>
        </div>

        <h1> Tous les articles </h1>
        <div id=\"productsGallery\">
            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

            <div class=\"productsGallery__single\">
                <img src=\"https://via.placeholder.com/250x290\" alt=\"image produit\">
                <p>Nom de l'article</p>
                <p>50€</p>
            </div>

        </div>

        <!-- mettre à jour la pagination
         knp_pagination_render(products -->

    </section>
{% endblock %}", "allProducts.html.twig", "/var/www/html/templates/allProducts.html.twig");
    }
}
