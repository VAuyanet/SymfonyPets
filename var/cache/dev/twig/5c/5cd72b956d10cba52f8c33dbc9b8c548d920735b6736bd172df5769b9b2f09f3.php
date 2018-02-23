<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_60d323e41511724e9a0795bfebea260f337c41c0c6ad284d1e6b781ac0094084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_e0f6d3f99ec5adeb1131d0533b6ddebac0c76608d3c34daa0bf4ea127167ac77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f6d3f99ec5adeb1131d0533b6ddebac0c76608d3c34daa0bf4ea127167ac77->enter($__internal_e0f6d3f99ec5adeb1131d0533b6ddebac0c76608d3c34daa0bf4ea127167ac77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d4a68f64e63f24537d19abf0d104aa1bfde9096508d7896dddec0e619ca44d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a68f64e63f24537d19abf0d104aa1bfde9096508d7896dddec0e619ca44d5f->enter($__internal_d4a68f64e63f24537d19abf0d104aa1bfde9096508d7896dddec0e619ca44d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0f6d3f99ec5adeb1131d0533b6ddebac0c76608d3c34daa0bf4ea127167ac77->leave($__internal_e0f6d3f99ec5adeb1131d0533b6ddebac0c76608d3c34daa0bf4ea127167ac77_prof);

        
        $__internal_d4a68f64e63f24537d19abf0d104aa1bfde9096508d7896dddec0e619ca44d5f->leave($__internal_d4a68f64e63f24537d19abf0d104aa1bfde9096508d7896dddec0e619ca44d5f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e7c86220cae6f118b5ca54ab8a5b1531f444dffebd41289bcc0d5b0d805de473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c86220cae6f118b5ca54ab8a5b1531f444dffebd41289bcc0d5b0d805de473->enter($__internal_e7c86220cae6f118b5ca54ab8a5b1531f444dffebd41289bcc0d5b0d805de473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_83b922806e5d1d609afb210102045ad6599b78c619e62b937e7c730a5ef3efb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b922806e5d1d609afb210102045ad6599b78c619e62b937e7c730a5ef3efb0->enter($__internal_83b922806e5d1d609afb210102045ad6599b78c619e62b937e7c730a5ef3efb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_83b922806e5d1d609afb210102045ad6599b78c619e62b937e7c730a5ef3efb0->leave($__internal_83b922806e5d1d609afb210102045ad6599b78c619e62b937e7c730a5ef3efb0_prof);

        
        $__internal_e7c86220cae6f118b5ca54ab8a5b1531f444dffebd41289bcc0d5b0d805de473->leave($__internal_e7c86220cae6f118b5ca54ab8a5b1531f444dffebd41289bcc0d5b0d805de473_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ecc966962ae403922382006bacd1be74ab5b614452d420abe9b5e14b0923f323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc966962ae403922382006bacd1be74ab5b614452d420abe9b5e14b0923f323->enter($__internal_ecc966962ae403922382006bacd1be74ab5b614452d420abe9b5e14b0923f323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fa3afc079326324e4201e4286e50ebb023ed207012933eb949356a5fe1f6bec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3afc079326324e4201e4286e50ebb023ed207012933eb949356a5fe1f6bec3->enter($__internal_fa3afc079326324e4201e4286e50ebb023ed207012933eb949356a5fe1f6bec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fa3afc079326324e4201e4286e50ebb023ed207012933eb949356a5fe1f6bec3->leave($__internal_fa3afc079326324e4201e4286e50ebb023ed207012933eb949356a5fe1f6bec3_prof);

        
        $__internal_ecc966962ae403922382006bacd1be74ab5b614452d420abe9b5e14b0923f323->leave($__internal_ecc966962ae403922382006bacd1be74ab5b614452d420abe9b5e14b0923f323_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e68b52f4ee9129f6b54c8f346330082cfb67063012b75a40680b9f0af11c5e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e68b52f4ee9129f6b54c8f346330082cfb67063012b75a40680b9f0af11c5e6a->enter($__internal_e68b52f4ee9129f6b54c8f346330082cfb67063012b75a40680b9f0af11c5e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e0943148e4f8f7634bd4034543222c124bba12b44124d4ea96f14ba59aee8db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0943148e4f8f7634bd4034543222c124bba12b44124d4ea96f14ba59aee8db8->enter($__internal_e0943148e4f8f7634bd4034543222c124bba12b44124d4ea96f14ba59aee8db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e0943148e4f8f7634bd4034543222c124bba12b44124d4ea96f14ba59aee8db8->leave($__internal_e0943148e4f8f7634bd4034543222c124bba12b44124d4ea96f14ba59aee8db8_prof);

        
        $__internal_e68b52f4ee9129f6b54c8f346330082cfb67063012b75a40680b9f0af11c5e6a->leave($__internal_e68b52f4ee9129f6b54c8f346330082cfb67063012b75a40680b9f0af11c5e6a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
