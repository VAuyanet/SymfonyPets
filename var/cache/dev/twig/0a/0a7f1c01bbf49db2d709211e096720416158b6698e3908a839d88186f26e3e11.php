<?php

/* VallbonaWebBundle:Default:articlesDetall.html.twig */
class __TwigTemplate_f27c91f25a655c99055393af8dc83393d6f5ad35f9e3707c6fa15cc9aadd249e extends Twig_Template
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
        $__internal_ff786b6c0dc180892b477c5be34b911db42ebba6948dbceb1f10f6c9baf41ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff786b6c0dc180892b477c5be34b911db42ebba6948dbceb1f10f6c9baf41ce4->enter($__internal_ff786b6c0dc180892b477c5be34b911db42ebba6948dbceb1f10f6c9baf41ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:articlesDetall.html.twig"));

        $__internal_5441d2143c4542a07403ba4962d1b8916ac0d1d3f038566c325a472564a43656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5441d2143c4542a07403ba4962d1b8916ac0d1d3f038566c325a472564a43656->enter($__internal_5441d2143c4542a07403ba4962d1b8916ac0d1d3f038566c325a472564a43656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:articlesDetall.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Detall article</title>
</head>
<body>
    <h1>Detall article</h1>
    <p>Nom: ";
        // line 9
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo "</p>
    <p>Preu: ";
        // line 10
        echo twig_escape_filter($this->env, ($context["preu"] ?? $this->getContext($context, "preu")), "html", null, true);
        echo "</p>
</body>
</html>";
        
        $__internal_ff786b6c0dc180892b477c5be34b911db42ebba6948dbceb1f10f6c9baf41ce4->leave($__internal_ff786b6c0dc180892b477c5be34b911db42ebba6948dbceb1f10f6c9baf41ce4_prof);

        
        $__internal_5441d2143c4542a07403ba4962d1b8916ac0d1d3f038566c325a472564a43656->leave($__internal_5441d2143c4542a07403ba4962d1b8916ac0d1d3f038566c325a472564a43656_prof);

    }

    public function getTemplateName()
    {
        return "VallbonaWebBundle:Default:articlesDetall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  35 => 9,  25 => 1,);
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Detall article</title>
</head>
<body>
    <h1>Detall article</h1>
    <p>Nom: {{nom}}</p>
    <p>Preu: {{preu}}</p>
</body>
</html>", "VallbonaWebBundle:Default:articlesDetall.html.twig", "/opt/lampp/htdocs/projecteSymfony/src/Vallbona/WebBundle/Resources/views/Default/articlesDetall.html.twig");
    }
}
