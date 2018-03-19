<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c87710f357776402c9631da4bda3850b78ef8adca6273d8bd36cbe5e2fe827f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99acce302737eab9c7036fd89b5c0230a1442dbb6a3ebbaf535d55b3b8a74089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99acce302737eab9c7036fd89b5c0230a1442dbb6a3ebbaf535d55b3b8a74089->enter($__internal_99acce302737eab9c7036fd89b5c0230a1442dbb6a3ebbaf535d55b3b8a74089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e2fc75a0b6784112c242b5d49c91515653038b5422c987bc0b63207bf8b73fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2fc75a0b6784112c242b5d49c91515653038b5422c987bc0b63207bf8b73fe6->enter($__internal_e2fc75a0b6784112c242b5d49c91515653038b5422c987bc0b63207bf8b73fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99acce302737eab9c7036fd89b5c0230a1442dbb6a3ebbaf535d55b3b8a74089->leave($__internal_99acce302737eab9c7036fd89b5c0230a1442dbb6a3ebbaf535d55b3b8a74089_prof);

        
        $__internal_e2fc75a0b6784112c242b5d49c91515653038b5422c987bc0b63207bf8b73fe6->leave($__internal_e2fc75a0b6784112c242b5d49c91515653038b5422c987bc0b63207bf8b73fe6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_062fea3528b53517f62cb519b0e4cd7b5bf1aa5d9a5ac24586eb81b000c1a095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062fea3528b53517f62cb519b0e4cd7b5bf1aa5d9a5ac24586eb81b000c1a095->enter($__internal_062fea3528b53517f62cb519b0e4cd7b5bf1aa5d9a5ac24586eb81b000c1a095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a291703080e2c8866dbe040ce1103ecfe1b288270f9e84abdb5a429781ea8ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a291703080e2c8866dbe040ce1103ecfe1b288270f9e84abdb5a429781ea8ee9->enter($__internal_a291703080e2c8866dbe040ce1103ecfe1b288270f9e84abdb5a429781ea8ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a291703080e2c8866dbe040ce1103ecfe1b288270f9e84abdb5a429781ea8ee9->leave($__internal_a291703080e2c8866dbe040ce1103ecfe1b288270f9e84abdb5a429781ea8ee9_prof);

        
        $__internal_062fea3528b53517f62cb519b0e4cd7b5bf1aa5d9a5ac24586eb81b000c1a095->leave($__internal_062fea3528b53517f62cb519b0e4cd7b5bf1aa5d9a5ac24586eb81b000c1a095_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a4b130eae300465522fd193954fb0df759c26f6de28c5bb2a4c31240b8f3e1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4b130eae300465522fd193954fb0df759c26f6de28c5bb2a4c31240b8f3e1c4->enter($__internal_a4b130eae300465522fd193954fb0df759c26f6de28c5bb2a4c31240b8f3e1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_df46f5faeec088ae6a18e7faffaadc6763917cca8f31600d06be39db7cb7b995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df46f5faeec088ae6a18e7faffaadc6763917cca8f31600d06be39db7cb7b995->enter($__internal_df46f5faeec088ae6a18e7faffaadc6763917cca8f31600d06be39db7cb7b995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_df46f5faeec088ae6a18e7faffaadc6763917cca8f31600d06be39db7cb7b995->leave($__internal_df46f5faeec088ae6a18e7faffaadc6763917cca8f31600d06be39db7cb7b995_prof);

        
        $__internal_a4b130eae300465522fd193954fb0df759c26f6de28c5bb2a4c31240b8f3e1c4->leave($__internal_a4b130eae300465522fd193954fb0df759c26f6de28c5bb2a4c31240b8f3e1c4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_86e1084862a8928b0b8fbafe6063675118ef160921f24d5c975157c0ed218b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e1084862a8928b0b8fbafe6063675118ef160921f24d5c975157c0ed218b6e->enter($__internal_86e1084862a8928b0b8fbafe6063675118ef160921f24d5c975157c0ed218b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_61e8ea3385081e3653cdce4debc1d6f57436acf503daa6be30b16ca69e0b2cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e8ea3385081e3653cdce4debc1d6f57436acf503daa6be30b16ca69e0b2cab->enter($__internal_61e8ea3385081e3653cdce4debc1d6f57436acf503daa6be30b16ca69e0b2cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_61e8ea3385081e3653cdce4debc1d6f57436acf503daa6be30b16ca69e0b2cab->leave($__internal_61e8ea3385081e3653cdce4debc1d6f57436acf503daa6be30b16ca69e0b2cab_prof);

        
        $__internal_86e1084862a8928b0b8fbafe6063675118ef160921f24d5c975157c0ed218b6e->leave($__internal_86e1084862a8928b0b8fbafe6063675118ef160921f24d5c975157c0ed218b6e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/SymfonyPets/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
