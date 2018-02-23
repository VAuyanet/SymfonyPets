<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_3493af3fc756179f7f6a6e5d68ec04c96d7ea04c3713f8665a1163029b5a11ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe8d5b05043a7192ae0c6b6e2f814328cc4f27f542511f13cc2a0a99f7dbd5e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe8d5b05043a7192ae0c6b6e2f814328cc4f27f542511f13cc2a0a99f7dbd5e2->enter($__internal_fe8d5b05043a7192ae0c6b6e2f814328cc4f27f542511f13cc2a0a99f7dbd5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_e3e7b299591f5ba7638bb6681095566e95897988dab525c363f06d12102364e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e7b299591f5ba7638bb6681095566e95897988dab525c363f06d12102364e0->enter($__internal_e3e7b299591f5ba7638bb6681095566e95897988dab525c363f06d12102364e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_fe8d5b05043a7192ae0c6b6e2f814328cc4f27f542511f13cc2a0a99f7dbd5e2->leave($__internal_fe8d5b05043a7192ae0c6b6e2f814328cc4f27f542511f13cc2a0a99f7dbd5e2_prof);

        
        $__internal_e3e7b299591f5ba7638bb6681095566e95897988dab525c363f06d12102364e0->leave($__internal_e3e7b299591f5ba7638bb6681095566e95897988dab525c363f06d12102364e0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
