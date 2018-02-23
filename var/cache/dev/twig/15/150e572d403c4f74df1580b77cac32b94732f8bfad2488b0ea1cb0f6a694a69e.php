<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_26b44532e7218e92e5c8c7328e8a8d53224bedd0f50225e77c009556501ebe6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d55a5b95203ba77509865089d412ea99afcf2fa5ea4779a930ac690d887a44da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d55a5b95203ba77509865089d412ea99afcf2fa5ea4779a930ac690d887a44da->enter($__internal_d55a5b95203ba77509865089d412ea99afcf2fa5ea4779a930ac690d887a44da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_96cebf1611c0fc5c8639ede4b049c79a10de2eb4b01690087f8fc1068cdc974f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cebf1611c0fc5c8639ede4b049c79a10de2eb4b01690087f8fc1068cdc974f->enter($__internal_96cebf1611c0fc5c8639ede4b049c79a10de2eb4b01690087f8fc1068cdc974f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d55a5b95203ba77509865089d412ea99afcf2fa5ea4779a930ac690d887a44da->leave($__internal_d55a5b95203ba77509865089d412ea99afcf2fa5ea4779a930ac690d887a44da_prof);

        
        $__internal_96cebf1611c0fc5c8639ede4b049c79a10de2eb4b01690087f8fc1068cdc974f->leave($__internal_96cebf1611c0fc5c8639ede4b049c79a10de2eb4b01690087f8fc1068cdc974f_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_98e627d3d50d63128a17e2b6671ef5687f36d0c006c051b2fbf11390fac12e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e627d3d50d63128a17e2b6671ef5687f36d0c006c051b2fbf11390fac12e71->enter($__internal_98e627d3d50d63128a17e2b6671ef5687f36d0c006c051b2fbf11390fac12e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c0b066e4b990154e27e21e16308c842b4da85c2be7c85cad3944a8326fe9c802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b066e4b990154e27e21e16308c842b4da85c2be7c85cad3944a8326fe9c802->enter($__internal_c0b066e4b990154e27e21e16308c842b4da85c2be7c85cad3944a8326fe9c802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_c0b066e4b990154e27e21e16308c842b4da85c2be7c85cad3944a8326fe9c802->leave($__internal_c0b066e4b990154e27e21e16308c842b4da85c2be7c85cad3944a8326fe9c802_prof);

        
        $__internal_98e627d3d50d63128a17e2b6671ef5687f36d0c006c051b2fbf11390fac12e71->leave($__internal_98e627d3d50d63128a17e2b6671ef5687f36d0c006c051b2fbf11390fac12e71_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_248c12464c57b866daab0637bf12ff8842185092d4d4704c061f2cba9353ef73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248c12464c57b866daab0637bf12ff8842185092d4d4704c061f2cba9353ef73->enter($__internal_248c12464c57b866daab0637bf12ff8842185092d4d4704c061f2cba9353ef73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_db42911bcdf60bb4a8b83f578a3e6ab647fb2e554cd35c6cc1a0a990288f0c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db42911bcdf60bb4a8b83f578a3e6ab647fb2e554cd35c6cc1a0a990288f0c15->enter($__internal_db42911bcdf60bb4a8b83f578a3e6ab647fb2e554cd35c6cc1a0a990288f0c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_db42911bcdf60bb4a8b83f578a3e6ab647fb2e554cd35c6cc1a0a990288f0c15->leave($__internal_db42911bcdf60bb4a8b83f578a3e6ab647fb2e554cd35c6cc1a0a990288f0c15_prof);

        
        $__internal_248c12464c57b866daab0637bf12ff8842185092d4d4704c061f2cba9353ef73->leave($__internal_248c12464c57b866daab0637bf12ff8842185092d4d4704c061f2cba9353ef73_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
