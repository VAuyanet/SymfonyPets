<?php

/* base.html.twig */
class __TwigTemplate_70f2ea4d9ba6befff2419e33e81e4263a6a39804101f8049eb9b3bfd1f26a548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8011a65f396960f6aa8088ef5e3dee35d6629cac5420f672cc19a7465d206345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8011a65f396960f6aa8088ef5e3dee35d6629cac5420f672cc19a7465d206345->enter($__internal_8011a65f396960f6aa8088ef5e3dee35d6629cac5420f672cc19a7465d206345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a3c1de0efcc92f379a565208146dc742fa0e65c05346a433aac7b62c18712d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c1de0efcc92f379a565208146dc742fa0e65c05346a433aac7b62c18712d8f->enter($__internal_a3c1de0efcc92f379a565208146dc742fa0e65c05346a433aac7b62c18712d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/global.css"), "html", null, true);
        echo "\">
    </head>
    <body>

        ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "
        ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "    </body>
</html>
";
        
        $__internal_8011a65f396960f6aa8088ef5e3dee35d6629cac5420f672cc19a7465d206345->leave($__internal_8011a65f396960f6aa8088ef5e3dee35d6629cac5420f672cc19a7465d206345_prof);

        
        $__internal_a3c1de0efcc92f379a565208146dc742fa0e65c05346a433aac7b62c18712d8f->leave($__internal_a3c1de0efcc92f379a565208146dc742fa0e65c05346a433aac7b62c18712d8f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d467cb5c3d07e58387921d2aebba58ad11cea60ddd6d7d01015472bb828c739c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d467cb5c3d07e58387921d2aebba58ad11cea60ddd6d7d01015472bb828c739c->enter($__internal_d467cb5c3d07e58387921d2aebba58ad11cea60ddd6d7d01015472bb828c739c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a7c63a8701973bc3f432f8eb6e098e0cda6f658e7e8cc92a98d0edb6d91fb69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7c63a8701973bc3f432f8eb6e098e0cda6f658e7e8cc92a98d0edb6d91fb69->enter($__internal_9a7c63a8701973bc3f432f8eb6e098e0cda6f658e7e8cc92a98d0edb6d91fb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pets";
        
        $__internal_9a7c63a8701973bc3f432f8eb6e098e0cda6f658e7e8cc92a98d0edb6d91fb69->leave($__internal_9a7c63a8701973bc3f432f8eb6e098e0cda6f658e7e8cc92a98d0edb6d91fb69_prof);

        
        $__internal_d467cb5c3d07e58387921d2aebba58ad11cea60ddd6d7d01015472bb828c739c->leave($__internal_d467cb5c3d07e58387921d2aebba58ad11cea60ddd6d7d01015472bb828c739c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a995cb94d03ade6a48d77813f0edf04b45fbc4e1601a3eeb829417c13c5bb879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a995cb94d03ade6a48d77813f0edf04b45fbc4e1601a3eeb829417c13c5bb879->enter($__internal_a995cb94d03ade6a48d77813f0edf04b45fbc4e1601a3eeb829417c13c5bb879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_489884d8562a1b6ae23e6bf63d3b809ac9f6ba3e4dc9d53e9f573f9572ae5ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489884d8562a1b6ae23e6bf63d3b809ac9f6ba3e4dc9d53e9f573f9572ae5ba5->enter($__internal_489884d8562a1b6ae23e6bf63d3b809ac9f6ba3e4dc9d53e9f573f9572ae5ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_489884d8562a1b6ae23e6bf63d3b809ac9f6ba3e4dc9d53e9f573f9572ae5ba5->leave($__internal_489884d8562a1b6ae23e6bf63d3b809ac9f6ba3e4dc9d53e9f573f9572ae5ba5_prof);

        
        $__internal_a995cb94d03ade6a48d77813f0edf04b45fbc4e1601a3eeb829417c13c5bb879->leave($__internal_a995cb94d03ade6a48d77813f0edf04b45fbc4e1601a3eeb829417c13c5bb879_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_f1c779faad036f04a8e0e1b4a8997a5cb86283bb0fa119997eea87e5b7c6f932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c779faad036f04a8e0e1b4a8997a5cb86283bb0fa119997eea87e5b7c6f932->enter($__internal_f1c779faad036f04a8e0e1b4a8997a5cb86283bb0fa119997eea87e5b7c6f932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_9a8983e641718c75fe0230a751d95c13b0379436d5307525a3afb5a25298f625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8983e641718c75fe0230a751d95c13b0379436d5307525a3afb5a25298f625->enter($__internal_9a8983e641718c75fe0230a751d95c13b0379436d5307525a3afb5a25298f625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "        ";
        
        $__internal_9a8983e641718c75fe0230a751d95c13b0379436d5307525a3afb5a25298f625->leave($__internal_9a8983e641718c75fe0230a751d95c13b0379436d5307525a3afb5a25298f625_prof);

        
        $__internal_f1c779faad036f04a8e0e1b4a8997a5cb86283bb0fa119997eea87e5b7c6f932->leave($__internal_f1c779faad036f04a8e0e1b4a8997a5cb86283bb0fa119997eea87e5b7c6f932_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_3aca613c3cc2477b4837ea6b03886bcd6eb13289fbf021690679526e3dfb4b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aca613c3cc2477b4837ea6b03886bcd6eb13289fbf021690679526e3dfb4b90->enter($__internal_3aca613c3cc2477b4837ea6b03886bcd6eb13289fbf021690679526e3dfb4b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7aca70f0135f5335326cc7cee64bb7f7951f455cb6be74d5257c95d474def76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7aca70f0135f5335326cc7cee64bb7f7951f455cb6be74d5257c95d474def76->enter($__internal_e7aca70f0135f5335326cc7cee64bb7f7951f455cb6be74d5257c95d474def76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "            <div class=\"\">
                <div class=\"\">
                    <div class=\"nav-background\">
                        ";
        // line 19
        $this->displayBlock('nav', $context, $blocks);
        // line 52
        echo "                    </div>
                    <div class=\"col-sm-9\">
                        ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "                    </div>
                </div>
        </div>

        ";
        
        $__internal_e7aca70f0135f5335326cc7cee64bb7f7951f455cb6be74d5257c95d474def76->leave($__internal_e7aca70f0135f5335326cc7cee64bb7f7951f455cb6be74d5257c95d474def76_prof);

        
        $__internal_3aca613c3cc2477b4837ea6b03886bcd6eb13289fbf021690679526e3dfb4b90->leave($__internal_3aca613c3cc2477b4837ea6b03886bcd6eb13289fbf021690679526e3dfb4b90_prof);

    }

    // line 19
    public function block_nav($context, array $blocks = array())
    {
        $__internal_5491a2975b965e8b50c98d574d6cc4c069818b2b5ad7d9825d54393b8e2dd8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5491a2975b965e8b50c98d574d6cc4c069818b2b5ad7d9825d54393b8e2dd8e5->enter($__internal_5491a2975b965e8b50c98d574d6cc4c069818b2b5ad7d9825d54393b8e2dd8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_d909fd3775222a1d958f257e96a7047644faa8ab51518a9ec5bd2765886482df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d909fd3775222a1d958f257e96a7047644faa8ab51518a9ec5bd2765886482df->enter($__internal_d909fd3775222a1d958f257e96a7047644faa8ab51518a9ec5bd2765886482df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 20
        echo "                            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                                <span class=\"navbar-brand\">SymfonyPets</span>
                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                    <span class=\"navbar-toggler-icon\"></span>
                                </button>
                                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                                    <ul class=\"navbar-nav\">
                                        <li class=\"nav-item active\">
                                            <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                                        </li>
                                        <li class=\"nav-item dropdown\">
                                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                Tasques
                                            </a>
                                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                                <a class=\"dropdown-item\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasques_new");
        echo "\">Crear tasca</a>
                                                <a class=\"dropdown-item\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasques_index");
        echo "\">Llistar tasques</a>
                                            </div>
                                        </li>
                                        <li class=\"nav-item dropdown\">
                                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLinkUsuaris\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                Usuaris
                                            </a>
                                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLinkUsuaris\">
                                                <a class=\"dropdown-item\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuaris_new");
        echo "\">Crear usuari</a>
                                                <a class=\"dropdown-item\" href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuaris_index");
        echo "\">Llistar usuaris</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>  
                        ";
        
        $__internal_d909fd3775222a1d958f257e96a7047644faa8ab51518a9ec5bd2765886482df->leave($__internal_d909fd3775222a1d958f257e96a7047644faa8ab51518a9ec5bd2765886482df_prof);

        
        $__internal_5491a2975b965e8b50c98d574d6cc4c069818b2b5ad7d9825d54393b8e2dd8e5->leave($__internal_5491a2975b965e8b50c98d574d6cc4c069818b2b5ad7d9825d54393b8e2dd8e5_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_376f9c68faa8d94a3b4fa0c7a69e7778e90be4407b875ba67596899b6a12432c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376f9c68faa8d94a3b4fa0c7a69e7778e90be4407b875ba67596899b6a12432c->enter($__internal_376f9c68faa8d94a3b4fa0c7a69e7778e90be4407b875ba67596899b6a12432c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1b7a765a77d7c2ade53c7d63f8dd70cfd34c6f5a39da0f4a0822c0688688aa44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7a765a77d7c2ade53c7d63f8dd70cfd34c6f5a39da0f4a0822c0688688aa44->enter($__internal_1b7a765a77d7c2ade53c7d63f8dd70cfd34c6f5a39da0f4a0822c0688688aa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 55
        echo "
                        ";
        
        $__internal_1b7a765a77d7c2ade53c7d63f8dd70cfd34c6f5a39da0f4a0822c0688688aa44->leave($__internal_1b7a765a77d7c2ade53c7d63f8dd70cfd34c6f5a39da0f4a0822c0688688aa44_prof);

        
        $__internal_376f9c68faa8d94a3b4fa0c7a69e7778e90be4407b875ba67596899b6a12432c->leave($__internal_376f9c68faa8d94a3b4fa0c7a69e7778e90be4407b875ba67596899b6a12432c_prof);

    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4e5272c133280bd05191b4f6da29bf1d3fece46aca033845aa70fb15cf342278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5272c133280bd05191b4f6da29bf1d3fece46aca033845aa70fb15cf342278->enter($__internal_4e5272c133280bd05191b4f6da29bf1d3fece46aca033845aa70fb15cf342278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_eb74683650d21059df7960c564772ebcfc4f02a9be8f7fc31993fd2bc05d0421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb74683650d21059df7960c564772ebcfc4f02a9be8f7fc31993fd2bc05d0421->enter($__internal_eb74683650d21059df7960c564772ebcfc4f02a9be8f7fc31993fd2bc05d0421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 64
        echo "
        ";
        
        $__internal_eb74683650d21059df7960c564772ebcfc4f02a9be8f7fc31993fd2bc05d0421->leave($__internal_eb74683650d21059df7960c564772ebcfc4f02a9be8f7fc31993fd2bc05d0421_prof);

        
        $__internal_4e5272c133280bd05191b4f6da29bf1d3fece46aca033845aa70fb15cf342278->leave($__internal_4e5272c133280bd05191b4f6da29bf1d3fece46aca033845aa70fb15cf342278_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_539e0e6a5845d0fdf6ed9bcd828f41ba45998085d68386cb33a124165f575581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539e0e6a5845d0fdf6ed9bcd828f41ba45998085d68386cb33a124165f575581->enter($__internal_539e0e6a5845d0fdf6ed9bcd828f41ba45998085d68386cb33a124165f575581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_54f00b323046c7078bf16303059744c9af0d166ede6af4f5c905ef826d65251a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f00b323046c7078bf16303059744c9af0d166ede6af4f5c905ef826d65251a->enter($__internal_54f00b323046c7078bf16303059744c9af0d166ede6af4f5c905ef826d65251a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_54f00b323046c7078bf16303059744c9af0d166ede6af4f5c905ef826d65251a->leave($__internal_54f00b323046c7078bf16303059744c9af0d166ede6af4f5c905ef826d65251a_prof);

        
        $__internal_539e0e6a5845d0fdf6ed9bcd828f41ba45998085d68386cb33a124165f575581->leave($__internal_539e0e6a5845d0fdf6ed9bcd828f41ba45998085d68386cb33a124165f575581_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 67,  275 => 66,  264 => 64,  255 => 63,  244 => 55,  235 => 54,  218 => 45,  214 => 44,  203 => 36,  199 => 35,  182 => 20,  173 => 19,  159 => 57,  157 => 54,  153 => 52,  151 => 19,  146 => 16,  137 => 15,  127 => 14,  118 => 13,  101 => 6,  83 => 5,  71 => 71,  68 => 66,  66 => 63,  63 => 62,  60 => 15,  58 => 13,  51 => 9,  45 => 7,  43 => 6,  39 => 5,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Pets{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/global.css') }}\">
    </head>
    <body>

        {% block header %}
        {% endblock %}
        {% block body %}
            <div class=\"\">
                <div class=\"\">
                    <div class=\"nav-background\">
                        {% block nav %}
                            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                                <span class=\"navbar-brand\">SymfonyPets</span>
                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                    <span class=\"navbar-toggler-icon\"></span>
                                </button>
                                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                                    <ul class=\"navbar-nav\">
                                        <li class=\"nav-item active\">
                                            <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                                        </li>
                                        <li class=\"nav-item dropdown\">
                                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                Tasques
                                            </a>
                                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                                <a class=\"dropdown-item\" href=\"{{ path('tasques_new') }}\">Crear tasca</a>
                                                <a class=\"dropdown-item\" href=\"{{ path('tasques_index') }}\">Llistar tasques</a>
                                            </div>
                                        </li>
                                        <li class=\"nav-item dropdown\">
                                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLinkUsuaris\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                Usuaris
                                            </a>
                                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLinkUsuaris\">
                                                <a class=\"dropdown-item\" href=\"{{ path('usuaris_new') }}\">Crear usuari</a>
                                                <a class=\"dropdown-item\" href=\"{{ path('usuaris_index') }}\">Llistar usuaris</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>  
                        {% endblock %}
                    </div>
                    <div class=\"col-sm-9\">
                        {% block content %}

                        {% endblock %}
                    </div>
                </div>
        </div>

        {% endblock %}

        {% block footer %}

        {% endblock %}
        {% block javascripts %}
            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/opt/lampp/htdocs/SymfonyPets/app/Resources/views/base.html.twig");
    }
}
