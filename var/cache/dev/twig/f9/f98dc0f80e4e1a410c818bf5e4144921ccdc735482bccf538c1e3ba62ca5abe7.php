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
        $__internal_a1d5b4162fdf90f61cbc0c39f54cae8aebc6f7d7381983f705dcd048f168e38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d5b4162fdf90f61cbc0c39f54cae8aebc6f7d7381983f705dcd048f168e38e->enter($__internal_a1d5b4162fdf90f61cbc0c39f54cae8aebc6f7d7381983f705dcd048f168e38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2962b45237f13813d6d662467498b68318627475ba28f2559c82c28defe15011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2962b45237f13813d6d662467498b68318627475ba28f2559c82c28defe15011->enter($__internal_2962b45237f13813d6d662467498b68318627475ba28f2559c82c28defe15011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1d5b4162fdf90f61cbc0c39f54cae8aebc6f7d7381983f705dcd048f168e38e->leave($__internal_a1d5b4162fdf90f61cbc0c39f54cae8aebc6f7d7381983f705dcd048f168e38e_prof);

        
        $__internal_2962b45237f13813d6d662467498b68318627475ba28f2559c82c28defe15011->leave($__internal_2962b45237f13813d6d662467498b68318627475ba28f2559c82c28defe15011_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_131341739c88ac57932604188f810ce2d9a6ab3a4fcaaff7bc9e547d06d01d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131341739c88ac57932604188f810ce2d9a6ab3a4fcaaff7bc9e547d06d01d74->enter($__internal_131341739c88ac57932604188f810ce2d9a6ab3a4fcaaff7bc9e547d06d01d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_83bb424b6f21666a0b659e370e904bd09d224abc9e88d3cb700f7fba67437575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83bb424b6f21666a0b659e370e904bd09d224abc9e88d3cb700f7fba67437575->enter($__internal_83bb424b6f21666a0b659e370e904bd09d224abc9e88d3cb700f7fba67437575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_83bb424b6f21666a0b659e370e904bd09d224abc9e88d3cb700f7fba67437575->leave($__internal_83bb424b6f21666a0b659e370e904bd09d224abc9e88d3cb700f7fba67437575_prof);

        
        $__internal_131341739c88ac57932604188f810ce2d9a6ab3a4fcaaff7bc9e547d06d01d74->leave($__internal_131341739c88ac57932604188f810ce2d9a6ab3a4fcaaff7bc9e547d06d01d74_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3678daea5e273293bddf960d63965c12d2fe577a9b70aa4d69c1a2c1f2d3fc8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3678daea5e273293bddf960d63965c12d2fe577a9b70aa4d69c1a2c1f2d3fc8d->enter($__internal_3678daea5e273293bddf960d63965c12d2fe577a9b70aa4d69c1a2c1f2d3fc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cd5d6d87f190dff548952d319a875449bd4189744e4d3048954d363a5e7013a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5d6d87f190dff548952d319a875449bd4189744e4d3048954d363a5e7013a3->enter($__internal_cd5d6d87f190dff548952d319a875449bd4189744e4d3048954d363a5e7013a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cd5d6d87f190dff548952d319a875449bd4189744e4d3048954d363a5e7013a3->leave($__internal_cd5d6d87f190dff548952d319a875449bd4189744e4d3048954d363a5e7013a3_prof);

        
        $__internal_3678daea5e273293bddf960d63965c12d2fe577a9b70aa4d69c1a2c1f2d3fc8d->leave($__internal_3678daea5e273293bddf960d63965c12d2fe577a9b70aa4d69c1a2c1f2d3fc8d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73a9a3e513c21f20fa8463d9fbeaba1d1e5e52d12027b1939aa44c8f75ee4320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a9a3e513c21f20fa8463d9fbeaba1d1e5e52d12027b1939aa44c8f75ee4320->enter($__internal_73a9a3e513c21f20fa8463d9fbeaba1d1e5e52d12027b1939aa44c8f75ee4320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_15504a728e74f5df901dc167e8ed1e37314cfc81b49002dca8457221a867e68b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15504a728e74f5df901dc167e8ed1e37314cfc81b49002dca8457221a867e68b->enter($__internal_15504a728e74f5df901dc167e8ed1e37314cfc81b49002dca8457221a867e68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_15504a728e74f5df901dc167e8ed1e37314cfc81b49002dca8457221a867e68b->leave($__internal_15504a728e74f5df901dc167e8ed1e37314cfc81b49002dca8457221a867e68b_prof);

        
        $__internal_73a9a3e513c21f20fa8463d9fbeaba1d1e5e52d12027b1939aa44c8f75ee4320->leave($__internal_73a9a3e513c21f20fa8463d9fbeaba1d1e5e52d12027b1939aa44c8f75ee4320_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
