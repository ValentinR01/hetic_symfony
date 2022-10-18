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

/* base.html.twig */
class __TwigTemplate_cf90677a44bd19b2a025ad7e7d1c89a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"src/public/images/favicon.svg\">
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Amiko:wght@400;600&family=Montserrat:wght@400;500;600&display=swap\" rel=\"stylesheet\">

        ";
        // line 12
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </head>
    <header>
        <div>
            <a href=\"/\">
                <svg id=\"logo\" width=\"347\" height=\"50\" viewBox=\"0 0 347 54\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M38.7129 4.28V53H32.5529L6.37289 15.41V53H0.212891V4.28H6.37289L32.5529 41.87V4.28H38.7129ZM84.6892 36.76H58.7892C59.1626 40.3533 60.3526 43.2233 62.3592 45.37C64.4126 47.47 67.1892 48.52 70.6892 48.52C72.7892 48.52 74.8192 48.1 76.7792 47.26C78.7859 46.3733 80.8159 45.09 82.8692 43.41H83.1492V49.57C81.0959 51.0633 79.0659 52.16 77.0592 52.86C75.0526 53.5133 72.9059 53.84 70.6192 53.84C66.8859 53.84 63.6426 53.0233 60.8892 51.39C58.1359 49.7567 56.0126 47.4933 54.5192 44.6C53.0726 41.66 52.3492 38.3 52.3492 34.52C52.3492 30.9267 53.0026 27.7067 54.3092 24.86C55.6626 21.9667 57.5759 19.7033 60.0492 18.07C62.5226 16.4367 65.4159 15.62 68.7292 15.62C72.0892 15.62 74.9592 16.46 77.3392 18.14C79.7659 19.7733 81.5859 22.0367 82.7992 24.93C84.0592 27.8233 84.6892 31.09 84.6892 34.73V36.76ZM68.7992 20.73C65.9059 20.73 63.5959 21.78 61.8692 23.88C60.1426 25.98 59.1159 28.6867 58.7892 32H78.3192C77.9926 28.5933 77.0359 25.8633 75.4492 23.81C73.9092 21.7567 71.6926 20.73 68.7992 20.73ZM126.732 16.46L113.222 53H104.822L91.3119 16.46H97.6119L109.162 48.03L120.712 16.46H126.732ZM164.465 36.76H138.565C138.938 40.3533 140.128 43.2233 142.135 45.37C144.188 47.47 146.965 48.52 150.465 48.52C152.565 48.52 154.595 48.1 156.555 47.26C158.561 46.3733 160.591 45.09 162.645 43.41H162.925V49.57C160.871 51.0633 158.841 52.16 156.835 52.86C154.828 53.5133 152.681 53.84 150.395 53.84C146.661 53.84 143.418 53.0233 140.665 51.39C137.911 49.7567 135.788 47.4933 134.295 44.6C132.848 41.66 132.125 38.3 132.125 34.52C132.125 30.9267 132.778 27.7067 134.085 24.86C135.438 21.9667 137.351 19.7033 139.825 18.07C142.298 16.4367 145.191 15.62 148.505 15.62C151.865 15.62 154.735 16.46 157.115 18.14C159.541 19.7733 161.361 22.0367 162.575 24.93C163.835 27.8233 164.465 31.09 164.465 34.73V36.76ZM148.575 20.73C145.681 20.73 143.371 21.78 141.645 23.88C139.918 25.98 138.891 28.6867 138.565 32H158.095C157.768 28.5933 156.811 25.8633 155.225 23.81C153.685 21.7567 151.468 20.73 148.575 20.73ZM194.537 15.62V22.41H193.487C191.294 22.41 189.311 22.8067 187.537 23.6C185.811 24.3933 184.364 25.5367 183.197 27.03V53H177.037V24.58L175.497 16.46H181.657L182.917 22.97C184.831 20.17 186.441 18.2567 187.747 17.23C189.101 16.1567 190.641 15.62 192.367 15.62H194.537ZM233.121 10.16V25.56H254.471V31.16H233.121V47.12H256.011V53H226.961V4.28H256.011V10.16H233.121ZM289.516 15.62C292.97 15.62 295.583 16.6933 297.356 18.84C299.13 20.94 300.016 23.88 300.016 27.66V53H293.856V28.5C293.856 26.1667 293.366 24.37 292.386 23.11C291.406 21.8033 289.913 21.15 287.906 21.15C285.62 21.15 283.683 21.5233 282.096 22.27C280.556 23.0167 278.83 24.23 276.916 25.91V53H270.756V24.58L269.216 16.46H275.376L276.356 21.57C278.55 19.47 280.58 17.9533 282.446 17.02C284.36 16.0867 286.716 15.62 289.516 15.62ZM340.592 53L339.682 48.17C338.002 50.0367 336.112 51.4367 334.012 52.37C331.912 53.3033 329.555 53.77 326.942 53.77C322.415 53.77 318.938 52.02 316.512 48.52C314.085 45.02 312.872 40.54 312.872 35.08C312.872 31.3467 313.525 28.01 314.832 25.07C316.185 22.13 318.098 19.82 320.572 18.14C323.092 16.46 326.078 15.62 329.532 15.62C331.212 15.62 332.798 15.83 334.292 16.25C335.785 16.6233 337.372 17.1833 339.052 17.93V0.219999H345.212V44.88L346.752 53H340.592ZM327.922 48.1C330.162 48.1 332.145 47.6567 333.872 46.77C335.645 45.8367 337.372 44.4833 339.052 42.71V22.62C336.065 21.5933 333.102 21.08 330.162 21.08C326.755 21.08 324.118 22.3867 322.252 25C320.432 27.5667 319.522 30.88 319.522 34.94C319.522 38.8133 320.175 41.9867 321.482 44.46C322.835 46.8867 324.982 48.1 327.922 48.1Z\" fill=\"black\"/>
                </svg>
            </a>
            <nav class=\"nav\">
                <ul>
                    <li> <a href=\"/create-product\" class=\"btn\">Vendre</a> </li>
                    <li>
                        <a href=\"/account\">
                            <svg id=\"\" width=\"37\" height=\"37\" viewBox=\"0 0 36 36\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M18.0001 0C13.2261 0 8.64784 1.89643 5.2722 5.2722C1.89643 8.64771 0 13.2263 0 18.0001C0 22.774 1.89643 27.3524 5.2722 30.7281C8.64771 34.1038 13.2263 36.0003 18.0001 36.0003C22.774 36.0003 27.3524 34.1038 30.7281 30.7281C34.1038 27.3525 36.0003 22.774 36.0003 18.0001C36.0003 13.2263 34.1038 8.64784 30.7281 5.2722C27.3525 1.89643 22.774 0 18.0001 0ZM18.0001 8.24979C19.3926 8.24979 20.7278 8.803 21.7124 9.78763C22.697 10.7723 23.2502 12.1074 23.2502 13.4999C23.2502 14.8923 22.697 16.2275 21.7124 17.2121C20.7277 18.1967 19.3926 18.75 18.0001 18.75C16.6077 18.75 15.2725 18.1967 14.2879 17.2121C13.3033 16.2275 12.75 14.8923 12.75 13.4999C12.75 12.1074 13.3033 10.7722 14.2879 9.78763C15.2725 8.80303 16.6077 8.24979 18.0001 8.24979ZM26.3251 26.6098C24.0882 28.7681 21.1011 29.9745 17.9924 29.9745C14.8841 29.9745 11.8968 28.7681 9.6597 26.6098C9.42692 26.3685 9.3782 26.0036 9.53967 25.7098C10.7998 23.3997 14.0997 21.7497 17.9997 21.7497C21.8996 21.7497 25.1997 23.3997 26.4597 25.7098C26.6174 26.0069 26.5626 26.372 26.3246 26.6098H26.3251Z\" fill=\"black\"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div>
            <span>Seulement du seconde main</span>
            <span>Remise en main propre</span>
            <span>Garantie qualité valable 3 mois</span>
        </div>
    </header>
    <body>
        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "    </body>
    <footer>
        <ul>
            <li>A propos</li>
            <li><a href=\"#\">Qui sommes nous ?</a></li>
            <li><a href=\"#\">CGV</a></li>
            <li><a href=\"#\">Mentions légales</a></li>
        </ul>
        <ul>
            <li>Annonces</li>
            <li><a href=\"#\">Vendre</a></li>
            <li><a href=\"#\">Acheter</a></li>
            <li> <a href=\"#\">Livraison</a> </li>
        </ul>
        <ul>
            <li>Contact</li>
            <li>contact@neverend.com</li>
            <li>07.00.00.00.00</li>
        </ul>
    </footer>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Never End";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"css/style.css\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  196 => 47,  183 => 17,  173 => 16,  162 => 13,  152 => 12,  133 => 5,  102 => 48,  100 => 47,  70 => 19,  68 => 16,  65 => 15,  62 => 12,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Never End{% endblock %}</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"src/public/images/favicon.svg\">
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Amiko:wght@400;600&family=Montserrat:wght@400;500;600&display=swap\" rel=\"stylesheet\">

        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"css/style.css\">
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <header>
        <div>
            <a href=\"/\">
                <svg id=\"logo\" width=\"347\" height=\"50\" viewBox=\"0 0 347 54\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M38.7129 4.28V53H32.5529L6.37289 15.41V53H0.212891V4.28H6.37289L32.5529 41.87V4.28H38.7129ZM84.6892 36.76H58.7892C59.1626 40.3533 60.3526 43.2233 62.3592 45.37C64.4126 47.47 67.1892 48.52 70.6892 48.52C72.7892 48.52 74.8192 48.1 76.7792 47.26C78.7859 46.3733 80.8159 45.09 82.8692 43.41H83.1492V49.57C81.0959 51.0633 79.0659 52.16 77.0592 52.86C75.0526 53.5133 72.9059 53.84 70.6192 53.84C66.8859 53.84 63.6426 53.0233 60.8892 51.39C58.1359 49.7567 56.0126 47.4933 54.5192 44.6C53.0726 41.66 52.3492 38.3 52.3492 34.52C52.3492 30.9267 53.0026 27.7067 54.3092 24.86C55.6626 21.9667 57.5759 19.7033 60.0492 18.07C62.5226 16.4367 65.4159 15.62 68.7292 15.62C72.0892 15.62 74.9592 16.46 77.3392 18.14C79.7659 19.7733 81.5859 22.0367 82.7992 24.93C84.0592 27.8233 84.6892 31.09 84.6892 34.73V36.76ZM68.7992 20.73C65.9059 20.73 63.5959 21.78 61.8692 23.88C60.1426 25.98 59.1159 28.6867 58.7892 32H78.3192C77.9926 28.5933 77.0359 25.8633 75.4492 23.81C73.9092 21.7567 71.6926 20.73 68.7992 20.73ZM126.732 16.46L113.222 53H104.822L91.3119 16.46H97.6119L109.162 48.03L120.712 16.46H126.732ZM164.465 36.76H138.565C138.938 40.3533 140.128 43.2233 142.135 45.37C144.188 47.47 146.965 48.52 150.465 48.52C152.565 48.52 154.595 48.1 156.555 47.26C158.561 46.3733 160.591 45.09 162.645 43.41H162.925V49.57C160.871 51.0633 158.841 52.16 156.835 52.86C154.828 53.5133 152.681 53.84 150.395 53.84C146.661 53.84 143.418 53.0233 140.665 51.39C137.911 49.7567 135.788 47.4933 134.295 44.6C132.848 41.66 132.125 38.3 132.125 34.52C132.125 30.9267 132.778 27.7067 134.085 24.86C135.438 21.9667 137.351 19.7033 139.825 18.07C142.298 16.4367 145.191 15.62 148.505 15.62C151.865 15.62 154.735 16.46 157.115 18.14C159.541 19.7733 161.361 22.0367 162.575 24.93C163.835 27.8233 164.465 31.09 164.465 34.73V36.76ZM148.575 20.73C145.681 20.73 143.371 21.78 141.645 23.88C139.918 25.98 138.891 28.6867 138.565 32H158.095C157.768 28.5933 156.811 25.8633 155.225 23.81C153.685 21.7567 151.468 20.73 148.575 20.73ZM194.537 15.62V22.41H193.487C191.294 22.41 189.311 22.8067 187.537 23.6C185.811 24.3933 184.364 25.5367 183.197 27.03V53H177.037V24.58L175.497 16.46H181.657L182.917 22.97C184.831 20.17 186.441 18.2567 187.747 17.23C189.101 16.1567 190.641 15.62 192.367 15.62H194.537ZM233.121 10.16V25.56H254.471V31.16H233.121V47.12H256.011V53H226.961V4.28H256.011V10.16H233.121ZM289.516 15.62C292.97 15.62 295.583 16.6933 297.356 18.84C299.13 20.94 300.016 23.88 300.016 27.66V53H293.856V28.5C293.856 26.1667 293.366 24.37 292.386 23.11C291.406 21.8033 289.913 21.15 287.906 21.15C285.62 21.15 283.683 21.5233 282.096 22.27C280.556 23.0167 278.83 24.23 276.916 25.91V53H270.756V24.58L269.216 16.46H275.376L276.356 21.57C278.55 19.47 280.58 17.9533 282.446 17.02C284.36 16.0867 286.716 15.62 289.516 15.62ZM340.592 53L339.682 48.17C338.002 50.0367 336.112 51.4367 334.012 52.37C331.912 53.3033 329.555 53.77 326.942 53.77C322.415 53.77 318.938 52.02 316.512 48.52C314.085 45.02 312.872 40.54 312.872 35.08C312.872 31.3467 313.525 28.01 314.832 25.07C316.185 22.13 318.098 19.82 320.572 18.14C323.092 16.46 326.078 15.62 329.532 15.62C331.212 15.62 332.798 15.83 334.292 16.25C335.785 16.6233 337.372 17.1833 339.052 17.93V0.219999H345.212V44.88L346.752 53H340.592ZM327.922 48.1C330.162 48.1 332.145 47.6567 333.872 46.77C335.645 45.8367 337.372 44.4833 339.052 42.71V22.62C336.065 21.5933 333.102 21.08 330.162 21.08C326.755 21.08 324.118 22.3867 322.252 25C320.432 27.5667 319.522 30.88 319.522 34.94C319.522 38.8133 320.175 41.9867 321.482 44.46C322.835 46.8867 324.982 48.1 327.922 48.1Z\" fill=\"black\"/>
                </svg>
            </a>
            <nav class=\"nav\">
                <ul>
                    <li> <a href=\"/create-product\" class=\"btn\">Vendre</a> </li>
                    <li>
                        <a href=\"/account\">
                            <svg id=\"\" width=\"37\" height=\"37\" viewBox=\"0 0 36 36\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M18.0001 0C13.2261 0 8.64784 1.89643 5.2722 5.2722C1.89643 8.64771 0 13.2263 0 18.0001C0 22.774 1.89643 27.3524 5.2722 30.7281C8.64771 34.1038 13.2263 36.0003 18.0001 36.0003C22.774 36.0003 27.3524 34.1038 30.7281 30.7281C34.1038 27.3525 36.0003 22.774 36.0003 18.0001C36.0003 13.2263 34.1038 8.64784 30.7281 5.2722C27.3525 1.89643 22.774 0 18.0001 0ZM18.0001 8.24979C19.3926 8.24979 20.7278 8.803 21.7124 9.78763C22.697 10.7723 23.2502 12.1074 23.2502 13.4999C23.2502 14.8923 22.697 16.2275 21.7124 17.2121C20.7277 18.1967 19.3926 18.75 18.0001 18.75C16.6077 18.75 15.2725 18.1967 14.2879 17.2121C13.3033 16.2275 12.75 14.8923 12.75 13.4999C12.75 12.1074 13.3033 10.7722 14.2879 9.78763C15.2725 8.80303 16.6077 8.24979 18.0001 8.24979ZM26.3251 26.6098C24.0882 28.7681 21.1011 29.9745 17.9924 29.9745C14.8841 29.9745 11.8968 28.7681 9.6597 26.6098C9.42692 26.3685 9.3782 26.0036 9.53967 25.7098C10.7998 23.3997 14.0997 21.7497 17.9997 21.7497C21.8996 21.7497 25.1997 23.3997 26.4597 25.7098C26.6174 26.0069 26.5626 26.372 26.3246 26.6098H26.3251Z\" fill=\"black\"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div>
            <span>Seulement du seconde main</span>
            <span>Remise en main propre</span>
            <span>Garantie qualité valable 3 mois</span>
        </div>
    </header>
    <body>
        {% block body %}{% endblock %}
    </body>
    <footer>
        <ul>
            <li>A propos</li>
            <li><a href=\"#\">Qui sommes nous ?</a></li>
            <li><a href=\"#\">CGV</a></li>
            <li><a href=\"#\">Mentions légales</a></li>
        </ul>
        <ul>
            <li>Annonces</li>
            <li><a href=\"#\">Vendre</a></li>
            <li><a href=\"#\">Acheter</a></li>
            <li> <a href=\"#\">Livraison</a> </li>
        </ul>
        <ul>
            <li>Contact</li>
            <li>contact@neverend.com</li>
            <li>07.00.00.00.00</li>
        </ul>
    </footer>
</html>
", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}
