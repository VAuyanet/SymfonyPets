<?php

/* base.html.twig */
class __TwigTemplate_58fcb55423d3274a662181a229734752e725144dd63773cc99fa1c7691dad048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cef78df1a1040f41db532ead0d0266b60130406cfb31bfd32f63a146c5296b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef78df1a1040f41db532ead0d0266b60130406cfb31bfd32f63a146c5296b4f->enter($__internal_cef78df1a1040f41db532ead0d0266b60130406cfb31bfd32f63a146c5296b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_75bbb177c8f61ef972ce6f39aa5f069da7cc8ba1b0c8a11f096750bd4f305249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75bbb177c8f61ef972ce6f39aa5f069da7cc8ba1b0c8a11f096750bd4f305249->enter($__internal_75bbb177c8f61ef972ce6f39aa5f069da7cc8ba1b0c8a11f096750bd4f305249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cef78df1a1040f41db532ead0d0266b60130406cfb31bfd32f63a146c5296b4f->leave($__internal_cef78df1a1040f41db532ead0d0266b60130406cfb31bfd32f63a146c5296b4f_prof);

        
        $__internal_75bbb177c8f61ef972ce6f39aa5f069da7cc8ba1b0c8a11f096750bd4f305249->leave($__internal_75bbb177c8f61ef972ce6f39aa5f069da7cc8ba1b0c8a11f096750bd4f305249_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9410e4a0111a88e97845a77962561bc0c354bb2605412278abf4d1ba7c731a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9410e4a0111a88e97845a77962561bc0c354bb2605412278abf4d1ba7c731a2a->enter($__internal_9410e4a0111a88e97845a77962561bc0c354bb2605412278abf4d1ba7c731a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7a62fc66763b8d404c52475cfc8370382a09dc6fb4ac62672dd0915c5ddf266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a62fc66763b8d404c52475cfc8370382a09dc6fb4ac62672dd0915c5ddf266->enter($__internal_c7a62fc66763b8d404c52475cfc8370382a09dc6fb4ac62672dd0915c5ddf266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c7a62fc66763b8d404c52475cfc8370382a09dc6fb4ac62672dd0915c5ddf266->leave($__internal_c7a62fc66763b8d404c52475cfc8370382a09dc6fb4ac62672dd0915c5ddf266_prof);

        
        $__internal_9410e4a0111a88e97845a77962561bc0c354bb2605412278abf4d1ba7c731a2a->leave($__internal_9410e4a0111a88e97845a77962561bc0c354bb2605412278abf4d1ba7c731a2a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bda082cb1d901a10222ee6a0e616d80440f77fded7bc9443733c44ceb27ce9e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bda082cb1d901a10222ee6a0e616d80440f77fded7bc9443733c44ceb27ce9e0->enter($__internal_bda082cb1d901a10222ee6a0e616d80440f77fded7bc9443733c44ceb27ce9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ccbde08c615ce5b381daf2d324da2cbb90025253f8fc4606795c46a6058a6fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccbde08c615ce5b381daf2d324da2cbb90025253f8fc4606795c46a6058a6fde->enter($__internal_ccbde08c615ce5b381daf2d324da2cbb90025253f8fc4606795c46a6058a6fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ccbde08c615ce5b381daf2d324da2cbb90025253f8fc4606795c46a6058a6fde->leave($__internal_ccbde08c615ce5b381daf2d324da2cbb90025253f8fc4606795c46a6058a6fde_prof);

        
        $__internal_bda082cb1d901a10222ee6a0e616d80440f77fded7bc9443733c44ceb27ce9e0->leave($__internal_bda082cb1d901a10222ee6a0e616d80440f77fded7bc9443733c44ceb27ce9e0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3586c0ab70ed45ec1aba345dc426a209dcc0e885ddd51851c5a09c2219197bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3586c0ab70ed45ec1aba345dc426a209dcc0e885ddd51851c5a09c2219197bd6->enter($__internal_3586c0ab70ed45ec1aba345dc426a209dcc0e885ddd51851c5a09c2219197bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d92e821832b1a4d06b95d4ff17816bb72169d8c5f18e161ee022e97ada6eb81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d92e821832b1a4d06b95d4ff17816bb72169d8c5f18e161ee022e97ada6eb81->enter($__internal_4d92e821832b1a4d06b95d4ff17816bb72169d8c5f18e161ee022e97ada6eb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4d92e821832b1a4d06b95d4ff17816bb72169d8c5f18e161ee022e97ada6eb81->leave($__internal_4d92e821832b1a4d06b95d4ff17816bb72169d8c5f18e161ee022e97ada6eb81_prof);

        
        $__internal_3586c0ab70ed45ec1aba345dc426a209dcc0e885ddd51851c5a09c2219197bd6->leave($__internal_3586c0ab70ed45ec1aba345dc426a209dcc0e885ddd51851c5a09c2219197bd6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24be04e2bcb10bba8fc98aae17c7023ad921a011e0e57e25ed29179c6e5f7afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24be04e2bcb10bba8fc98aae17c7023ad921a011e0e57e25ed29179c6e5f7afd->enter($__internal_24be04e2bcb10bba8fc98aae17c7023ad921a011e0e57e25ed29179c6e5f7afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_63adc2d2cf23e7833ffdc0d8c410a1e8a147f436f190e3e211f8d537e21cc074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63adc2d2cf23e7833ffdc0d8c410a1e8a147f436f190e3e211f8d537e21cc074->enter($__internal_63adc2d2cf23e7833ffdc0d8c410a1e8a147f436f190e3e211f8d537e21cc074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_63adc2d2cf23e7833ffdc0d8c410a1e8a147f436f190e3e211f8d537e21cc074->leave($__internal_63adc2d2cf23e7833ffdc0d8c410a1e8a147f436f190e3e211f8d537e21cc074_prof);

        
        $__internal_24be04e2bcb10bba8fc98aae17c7023ad921a011e0e57e25ed29179c6e5f7afd->leave($__internal_24be04e2bcb10bba8fc98aae17c7023ad921a011e0e57e25ed29179c6e5f7afd_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/opt/lampp/htdocs/projecteSymfony/app/Resources/views/base.html.twig");
    }
}
