<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a6d5f47775eae9850b0e5f541b5c0dcb4b38377a11f553de088e708b28b9c897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_4873e8be5132bdf80f62dedb65707ac0f3679ba2ae4631b901d37f5d4768c5aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4873e8be5132bdf80f62dedb65707ac0f3679ba2ae4631b901d37f5d4768c5aa->enter($__internal_4873e8be5132bdf80f62dedb65707ac0f3679ba2ae4631b901d37f5d4768c5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d261c864d231d78297d83054472e98572fb96de5d6b97fe715adba7f12eb45b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d261c864d231d78297d83054472e98572fb96de5d6b97fe715adba7f12eb45b2->enter($__internal_d261c864d231d78297d83054472e98572fb96de5d6b97fe715adba7f12eb45b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4873e8be5132bdf80f62dedb65707ac0f3679ba2ae4631b901d37f5d4768c5aa->leave($__internal_4873e8be5132bdf80f62dedb65707ac0f3679ba2ae4631b901d37f5d4768c5aa_prof);

        
        $__internal_d261c864d231d78297d83054472e98572fb96de5d6b97fe715adba7f12eb45b2->leave($__internal_d261c864d231d78297d83054472e98572fb96de5d6b97fe715adba7f12eb45b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a0b3f7d0d11528dd295d1f5c2181fb1911a1845a103261f942d3cca9e4333aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b3f7d0d11528dd295d1f5c2181fb1911a1845a103261f942d3cca9e4333aba->enter($__internal_a0b3f7d0d11528dd295d1f5c2181fb1911a1845a103261f942d3cca9e4333aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5ed3ea6d79849c249ae22658ee6537870e58b3159a7aa25fd7c6d1e0c470cbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed3ea6d79849c249ae22658ee6537870e58b3159a7aa25fd7c6d1e0c470cbd5->enter($__internal_5ed3ea6d79849c249ae22658ee6537870e58b3159a7aa25fd7c6d1e0c470cbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5ed3ea6d79849c249ae22658ee6537870e58b3159a7aa25fd7c6d1e0c470cbd5->leave($__internal_5ed3ea6d79849c249ae22658ee6537870e58b3159a7aa25fd7c6d1e0c470cbd5_prof);

        
        $__internal_a0b3f7d0d11528dd295d1f5c2181fb1911a1845a103261f942d3cca9e4333aba->leave($__internal_a0b3f7d0d11528dd295d1f5c2181fb1911a1845a103261f942d3cca9e4333aba_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98f2abf3c15fe9dc9c94a73007ae6be02f6155db07190bea27ddccc1edd3ee8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f2abf3c15fe9dc9c94a73007ae6be02f6155db07190bea27ddccc1edd3ee8e->enter($__internal_98f2abf3c15fe9dc9c94a73007ae6be02f6155db07190bea27ddccc1edd3ee8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_effb2ca4cc1e65b6e57cdd9727f5d9da67fa51bdcbb32f479d225fc340f10289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effb2ca4cc1e65b6e57cdd9727f5d9da67fa51bdcbb32f479d225fc340f10289->enter($__internal_effb2ca4cc1e65b6e57cdd9727f5d9da67fa51bdcbb32f479d225fc340f10289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_effb2ca4cc1e65b6e57cdd9727f5d9da67fa51bdcbb32f479d225fc340f10289->leave($__internal_effb2ca4cc1e65b6e57cdd9727f5d9da67fa51bdcbb32f479d225fc340f10289_prof);

        
        $__internal_98f2abf3c15fe9dc9c94a73007ae6be02f6155db07190bea27ddccc1edd3ee8e->leave($__internal_98f2abf3c15fe9dc9c94a73007ae6be02f6155db07190bea27ddccc1edd3ee8e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_394fdc8f3af3b1ef12706fb0c39ca1bbdae9924b300ca4df69d81c5c99567e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394fdc8f3af3b1ef12706fb0c39ca1bbdae9924b300ca4df69d81c5c99567e8c->enter($__internal_394fdc8f3af3b1ef12706fb0c39ca1bbdae9924b300ca4df69d81c5c99567e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e8b38a28403dcb7fd2dce749be260dc3eaabc712aa32f7692adecc2f87af736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8b38a28403dcb7fd2dce749be260dc3eaabc712aa32f7692adecc2f87af736->enter($__internal_3e8b38a28403dcb7fd2dce749be260dc3eaabc712aa32f7692adecc2f87af736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3e8b38a28403dcb7fd2dce749be260dc3eaabc712aa32f7692adecc2f87af736->leave($__internal_3e8b38a28403dcb7fd2dce749be260dc3eaabc712aa32f7692adecc2f87af736_prof);

        
        $__internal_394fdc8f3af3b1ef12706fb0c39ca1bbdae9924b300ca4df69d81c5c99567e8c->leave($__internal_394fdc8f3af3b1ef12706fb0c39ca1bbdae9924b300ca4df69d81c5c99567e8c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
