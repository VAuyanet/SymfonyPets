<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_93825f0c7238c4301ad41276fd1c63641f2734c0def4149794edf8f380ae0a93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c8a4a6bcae00c77670e43e9b6c8ae65cf4abe7b8fc9d33209d16c0ae2a50efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c8a4a6bcae00c77670e43e9b6c8ae65cf4abe7b8fc9d33209d16c0ae2a50efe->enter($__internal_9c8a4a6bcae00c77670e43e9b6c8ae65cf4abe7b8fc9d33209d16c0ae2a50efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6bf4c13b7c4c293578022db3a94315e15db805a80fab5545707b1ee0bb6b89c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf4c13b7c4c293578022db3a94315e15db805a80fab5545707b1ee0bb6b89c1->enter($__internal_6bf4c13b7c4c293578022db3a94315e15db805a80fab5545707b1ee0bb6b89c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c8a4a6bcae00c77670e43e9b6c8ae65cf4abe7b8fc9d33209d16c0ae2a50efe->leave($__internal_9c8a4a6bcae00c77670e43e9b6c8ae65cf4abe7b8fc9d33209d16c0ae2a50efe_prof);

        
        $__internal_6bf4c13b7c4c293578022db3a94315e15db805a80fab5545707b1ee0bb6b89c1->leave($__internal_6bf4c13b7c4c293578022db3a94315e15db805a80fab5545707b1ee0bb6b89c1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_201b9f01467a2bbc221d62ef7f4e449e257583f282c942e0bfe7f873e146497f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201b9f01467a2bbc221d62ef7f4e449e257583f282c942e0bfe7f873e146497f->enter($__internal_201b9f01467a2bbc221d62ef7f4e449e257583f282c942e0bfe7f873e146497f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ee5f0a9d3346cf7dcabe57104ead038757476181e9148e152b3be766de248d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5f0a9d3346cf7dcabe57104ead038757476181e9148e152b3be766de248d8b->enter($__internal_ee5f0a9d3346cf7dcabe57104ead038757476181e9148e152b3be766de248d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ee5f0a9d3346cf7dcabe57104ead038757476181e9148e152b3be766de248d8b->leave($__internal_ee5f0a9d3346cf7dcabe57104ead038757476181e9148e152b3be766de248d8b_prof);

        
        $__internal_201b9f01467a2bbc221d62ef7f4e449e257583f282c942e0bfe7f873e146497f->leave($__internal_201b9f01467a2bbc221d62ef7f4e449e257583f282c942e0bfe7f873e146497f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_40b0e3a43eed7c153ba2b667a44bf7568e741d69c892769ce3f2ec4c935d33f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b0e3a43eed7c153ba2b667a44bf7568e741d69c892769ce3f2ec4c935d33f8->enter($__internal_40b0e3a43eed7c153ba2b667a44bf7568e741d69c892769ce3f2ec4c935d33f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09e18560826d8f4b13ad1116685f4860ab84f941b0b7f79e26b7873460f92fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e18560826d8f4b13ad1116685f4860ab84f941b0b7f79e26b7873460f92fe0->enter($__internal_09e18560826d8f4b13ad1116685f4860ab84f941b0b7f79e26b7873460f92fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_09e18560826d8f4b13ad1116685f4860ab84f941b0b7f79e26b7873460f92fe0->leave($__internal_09e18560826d8f4b13ad1116685f4860ab84f941b0b7f79e26b7873460f92fe0_prof);

        
        $__internal_40b0e3a43eed7c153ba2b667a44bf7568e741d69c892769ce3f2ec4c935d33f8->leave($__internal_40b0e3a43eed7c153ba2b667a44bf7568e741d69c892769ce3f2ec4c935d33f8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
