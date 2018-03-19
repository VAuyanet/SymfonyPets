<?php

/* petsWebBundle:Default:index.html.twig */
class __TwigTemplate_ec6c0b74ff1d2de34092af573676c76257d3471d379e8d96283f90bc75abb651 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "petsWebBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23b88f5fabdd5573d942ae7d16ff3e1ac1f81b7962586df95b9bc87ec710c2d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b88f5fabdd5573d942ae7d16ff3e1ac1f81b7962586df95b9bc87ec710c2d8->enter($__internal_23b88f5fabdd5573d942ae7d16ff3e1ac1f81b7962586df95b9bc87ec710c2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:Default:index.html.twig"));

        $__internal_5a3009a080062bc737e6f4a64152f0086e8001c99ad779b2b530dfb3e8ce19d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3009a080062bc737e6f4a64152f0086e8001c99ad779b2b530dfb3e8ce19d8->enter($__internal_5a3009a080062bc737e6f4a64152f0086e8001c99ad779b2b530dfb3e8ce19d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23b88f5fabdd5573d942ae7d16ff3e1ac1f81b7962586df95b9bc87ec710c2d8->leave($__internal_23b88f5fabdd5573d942ae7d16ff3e1ac1f81b7962586df95b9bc87ec710c2d8_prof);

        
        $__internal_5a3009a080062bc737e6f4a64152f0086e8001c99ad779b2b530dfb3e8ce19d8->leave($__internal_5a3009a080062bc737e6f4a64152f0086e8001c99ad779b2b530dfb3e8ce19d8_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_c7dcb3210cb87cd6187d0c30d3fd39a263388c602bf24981cb9d18469b21a8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7dcb3210cb87cd6187d0c30d3fd39a263388c602bf24981cb9d18469b21a8cb->enter($__internal_c7dcb3210cb87cd6187d0c30d3fd39a263388c602bf24981cb9d18469b21a8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8e0d7b29fdf30fbd64722bec2e86584b7bfbdc5885f610ca857fdafe7794980c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0d7b29fdf30fbd64722bec2e86584b7bfbdc5885f610ca857fdafe7794980c->enter($__internal_8e0d7b29fdf30fbd64722bec2e86584b7bfbdc5885f610ca857fdafe7794980c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <h1>PAGINA INICIAL</h1>

";
        
        $__internal_8e0d7b29fdf30fbd64722bec2e86584b7bfbdc5885f610ca857fdafe7794980c->leave($__internal_8e0d7b29fdf30fbd64722bec2e86584b7bfbdc5885f610ca857fdafe7794980c_prof);

        
        $__internal_c7dcb3210cb87cd6187d0c30d3fd39a263388c602bf24981cb9d18469b21a8cb->leave($__internal_c7dcb3210cb87cd6187d0c30d3fd39a263388c602bf24981cb9d18469b21a8cb_prof);

    }

    public function getTemplateName()
    {
        return "petsWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block content %}
    <h1>PAGINA INICIAL</h1>

{% endblock %}", "petsWebBundle:Default:index.html.twig", "/opt/lampp/htdocs/SymfonyPets/src/pets/WebBundle/Resources/views/Default/index.html.twig");
    }
}
