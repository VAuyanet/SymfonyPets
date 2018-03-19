<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8142be88f30ddc2e15c390a592bfe4d1edcf12b006788748e7c1a989bb635821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_843bafd6b630b160ee70be5816bb46edcce55a1925de44e5ba8a2fe1ecba9b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_843bafd6b630b160ee70be5816bb46edcce55a1925de44e5ba8a2fe1ecba9b41->enter($__internal_843bafd6b630b160ee70be5816bb46edcce55a1925de44e5ba8a2fe1ecba9b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e321ea4c19319b5fbae2cc80a8d60fad1c4dab8109b8d3ab39a3afb4d9d01f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e321ea4c19319b5fbae2cc80a8d60fad1c4dab8109b8d3ab39a3afb4d9d01f4c->enter($__internal_e321ea4c19319b5fbae2cc80a8d60fad1c4dab8109b8d3ab39a3afb4d9d01f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_843bafd6b630b160ee70be5816bb46edcce55a1925de44e5ba8a2fe1ecba9b41->leave($__internal_843bafd6b630b160ee70be5816bb46edcce55a1925de44e5ba8a2fe1ecba9b41_prof);

        
        $__internal_e321ea4c19319b5fbae2cc80a8d60fad1c4dab8109b8d3ab39a3afb4d9d01f4c->leave($__internal_e321ea4c19319b5fbae2cc80a8d60fad1c4dab8109b8d3ab39a3afb4d9d01f4c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_faaeac7b268db1a8229500854e7ed466b61b128a2edf77c9fc626f88fbdbad8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faaeac7b268db1a8229500854e7ed466b61b128a2edf77c9fc626f88fbdbad8e->enter($__internal_faaeac7b268db1a8229500854e7ed466b61b128a2edf77c9fc626f88fbdbad8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df696ff8abbea4a4679846882b5780b012fe0bc2ff85067ff453d5ed452d6cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df696ff8abbea4a4679846882b5780b012fe0bc2ff85067ff453d5ed452d6cc2->enter($__internal_df696ff8abbea4a4679846882b5780b012fe0bc2ff85067ff453d5ed452d6cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_df696ff8abbea4a4679846882b5780b012fe0bc2ff85067ff453d5ed452d6cc2->leave($__internal_df696ff8abbea4a4679846882b5780b012fe0bc2ff85067ff453d5ed452d6cc2_prof);

        
        $__internal_faaeac7b268db1a8229500854e7ed466b61b128a2edf77c9fc626f88fbdbad8e->leave($__internal_faaeac7b268db1a8229500854e7ed466b61b128a2edf77c9fc626f88fbdbad8e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c94b73c48e6e945d560d4f5f4d4ea0a0b31ef91fd31fc3e956f08d30dc3ac70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c94b73c48e6e945d560d4f5f4d4ea0a0b31ef91fd31fc3e956f08d30dc3ac70->enter($__internal_8c94b73c48e6e945d560d4f5f4d4ea0a0b31ef91fd31fc3e956f08d30dc3ac70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4a34801ddfb4eef258b33dd64702657ac2ba45bc27b460390fc8110b21a506b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a34801ddfb4eef258b33dd64702657ac2ba45bc27b460390fc8110b21a506b6->enter($__internal_4a34801ddfb4eef258b33dd64702657ac2ba45bc27b460390fc8110b21a506b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4a34801ddfb4eef258b33dd64702657ac2ba45bc27b460390fc8110b21a506b6->leave($__internal_4a34801ddfb4eef258b33dd64702657ac2ba45bc27b460390fc8110b21a506b6_prof);

        
        $__internal_8c94b73c48e6e945d560d4f5f4d4ea0a0b31ef91fd31fc3e956f08d30dc3ac70->leave($__internal_8c94b73c48e6e945d560d4f5f4d4ea0a0b31ef91fd31fc3e956f08d30dc3ac70_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_db400f767aa3c7ff8355bd3d38aafffcc3a6df3d84e1a80887be2c55a00732e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db400f767aa3c7ff8355bd3d38aafffcc3a6df3d84e1a80887be2c55a00732e5->enter($__internal_db400f767aa3c7ff8355bd3d38aafffcc3a6df3d84e1a80887be2c55a00732e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e34e0054f0a59c33b9c9b920cd3e971c545d763acdae05609bb9a526e2efa6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34e0054f0a59c33b9c9b920cd3e971c545d763acdae05609bb9a526e2efa6d4->enter($__internal_e34e0054f0a59c33b9c9b920cd3e971c545d763acdae05609bb9a526e2efa6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e34e0054f0a59c33b9c9b920cd3e971c545d763acdae05609bb9a526e2efa6d4->leave($__internal_e34e0054f0a59c33b9c9b920cd3e971c545d763acdae05609bb9a526e2efa6d4_prof);

        
        $__internal_db400f767aa3c7ff8355bd3d38aafffcc3a6df3d84e1a80887be2c55a00732e5->leave($__internal_db400f767aa3c7ff8355bd3d38aafffcc3a6df3d84e1a80887be2c55a00732e5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/opt/lampp/htdocs/SymfonyPets/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
