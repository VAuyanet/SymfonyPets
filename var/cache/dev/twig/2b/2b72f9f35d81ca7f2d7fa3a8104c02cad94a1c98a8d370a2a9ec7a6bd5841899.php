<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6bdc415026468751b0fd3b8ea4bb5b8b9e992dbfca85e1c86f20068b91fbe660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_4f144999d8a5229cdbea9debcd66c88eed533d9f2078cf250bac7dea27280911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f144999d8a5229cdbea9debcd66c88eed533d9f2078cf250bac7dea27280911->enter($__internal_4f144999d8a5229cdbea9debcd66c88eed533d9f2078cf250bac7dea27280911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f27dfde24e7b7a6cb9e91790bacb143922261cda0dc0f86ae9781c064b10fc21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27dfde24e7b7a6cb9e91790bacb143922261cda0dc0f86ae9781c064b10fc21->enter($__internal_f27dfde24e7b7a6cb9e91790bacb143922261cda0dc0f86ae9781c064b10fc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f144999d8a5229cdbea9debcd66c88eed533d9f2078cf250bac7dea27280911->leave($__internal_4f144999d8a5229cdbea9debcd66c88eed533d9f2078cf250bac7dea27280911_prof);

        
        $__internal_f27dfde24e7b7a6cb9e91790bacb143922261cda0dc0f86ae9781c064b10fc21->leave($__internal_f27dfde24e7b7a6cb9e91790bacb143922261cda0dc0f86ae9781c064b10fc21_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a651247ecea7293ec1a3f0b5651dfe561a41f6f0e31f47eb44cee6df7158585b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a651247ecea7293ec1a3f0b5651dfe561a41f6f0e31f47eb44cee6df7158585b->enter($__internal_a651247ecea7293ec1a3f0b5651dfe561a41f6f0e31f47eb44cee6df7158585b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c4c47fbc80c273667b4e177aec536b9e87e9c5e0e1d29b3ec50bbb9408e7815d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c47fbc80c273667b4e177aec536b9e87e9c5e0e1d29b3ec50bbb9408e7815d->enter($__internal_c4c47fbc80c273667b4e177aec536b9e87e9c5e0e1d29b3ec50bbb9408e7815d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c4c47fbc80c273667b4e177aec536b9e87e9c5e0e1d29b3ec50bbb9408e7815d->leave($__internal_c4c47fbc80c273667b4e177aec536b9e87e9c5e0e1d29b3ec50bbb9408e7815d_prof);

        
        $__internal_a651247ecea7293ec1a3f0b5651dfe561a41f6f0e31f47eb44cee6df7158585b->leave($__internal_a651247ecea7293ec1a3f0b5651dfe561a41f6f0e31f47eb44cee6df7158585b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2625e54e696b13890dfaab9d92f061f38ec82b34ef813df421c0afe53f164b6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2625e54e696b13890dfaab9d92f061f38ec82b34ef813df421c0afe53f164b6c->enter($__internal_2625e54e696b13890dfaab9d92f061f38ec82b34ef813df421c0afe53f164b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7e45417d924d4e24a066308e4778d54466ad14e143a53ff41c2d12f0da893c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e45417d924d4e24a066308e4778d54466ad14e143a53ff41c2d12f0da893c16->enter($__internal_7e45417d924d4e24a066308e4778d54466ad14e143a53ff41c2d12f0da893c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e45417d924d4e24a066308e4778d54466ad14e143a53ff41c2d12f0da893c16->leave($__internal_7e45417d924d4e24a066308e4778d54466ad14e143a53ff41c2d12f0da893c16_prof);

        
        $__internal_2625e54e696b13890dfaab9d92f061f38ec82b34ef813df421c0afe53f164b6c->leave($__internal_2625e54e696b13890dfaab9d92f061f38ec82b34ef813df421c0afe53f164b6c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0df35b3a161dbff55028d5ec626dc1b67f16efaafd7b74c3a4b4bf0d49515b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df35b3a161dbff55028d5ec626dc1b67f16efaafd7b74c3a4b4bf0d49515b34->enter($__internal_0df35b3a161dbff55028d5ec626dc1b67f16efaafd7b74c3a4b4bf0d49515b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_42121f635513c28e65ecaa2bd6ea05a264a95db3749a3f24718012a1eb6bf96b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42121f635513c28e65ecaa2bd6ea05a264a95db3749a3f24718012a1eb6bf96b->enter($__internal_42121f635513c28e65ecaa2bd6ea05a264a95db3749a3f24718012a1eb6bf96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_42121f635513c28e65ecaa2bd6ea05a264a95db3749a3f24718012a1eb6bf96b->leave($__internal_42121f635513c28e65ecaa2bd6ea05a264a95db3749a3f24718012a1eb6bf96b_prof);

        
        $__internal_0df35b3a161dbff55028d5ec626dc1b67f16efaafd7b74c3a4b4bf0d49515b34->leave($__internal_0df35b3a161dbff55028d5ec626dc1b67f16efaafd7b74c3a4b4bf0d49515b34_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/SymfonyPets/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
