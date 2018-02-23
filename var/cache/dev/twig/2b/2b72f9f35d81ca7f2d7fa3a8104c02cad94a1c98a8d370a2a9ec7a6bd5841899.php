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
        $__internal_8defef18766d34cb7ceece60ae3977fba98ceac5312a8c9d92f261abb572d62f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8defef18766d34cb7ceece60ae3977fba98ceac5312a8c9d92f261abb572d62f->enter($__internal_8defef18766d34cb7ceece60ae3977fba98ceac5312a8c9d92f261abb572d62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_431fc1267286f819a297254b9702b2f8a4b1a7fb5a97f11c1576453c65d24fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431fc1267286f819a297254b9702b2f8a4b1a7fb5a97f11c1576453c65d24fd5->enter($__internal_431fc1267286f819a297254b9702b2f8a4b1a7fb5a97f11c1576453c65d24fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8defef18766d34cb7ceece60ae3977fba98ceac5312a8c9d92f261abb572d62f->leave($__internal_8defef18766d34cb7ceece60ae3977fba98ceac5312a8c9d92f261abb572d62f_prof);

        
        $__internal_431fc1267286f819a297254b9702b2f8a4b1a7fb5a97f11c1576453c65d24fd5->leave($__internal_431fc1267286f819a297254b9702b2f8a4b1a7fb5a97f11c1576453c65d24fd5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2b8adebb4d432434f2c5e9ef44c5488f1eb77a1b131d7556c80e2dfdaa70ff77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b8adebb4d432434f2c5e9ef44c5488f1eb77a1b131d7556c80e2dfdaa70ff77->enter($__internal_2b8adebb4d432434f2c5e9ef44c5488f1eb77a1b131d7556c80e2dfdaa70ff77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_81b00bb09686e2150d82f56992ff27bc703ab7869b105ee852617a94d1bbc4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b00bb09686e2150d82f56992ff27bc703ab7869b105ee852617a94d1bbc4a9->enter($__internal_81b00bb09686e2150d82f56992ff27bc703ab7869b105ee852617a94d1bbc4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_81b00bb09686e2150d82f56992ff27bc703ab7869b105ee852617a94d1bbc4a9->leave($__internal_81b00bb09686e2150d82f56992ff27bc703ab7869b105ee852617a94d1bbc4a9_prof);

        
        $__internal_2b8adebb4d432434f2c5e9ef44c5488f1eb77a1b131d7556c80e2dfdaa70ff77->leave($__internal_2b8adebb4d432434f2c5e9ef44c5488f1eb77a1b131d7556c80e2dfdaa70ff77_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f0707f9bd8eed2f3ebdb0d72d08cba09b00ceb21504ceb5bf30a90de32056f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0707f9bd8eed2f3ebdb0d72d08cba09b00ceb21504ceb5bf30a90de32056f60->enter($__internal_f0707f9bd8eed2f3ebdb0d72d08cba09b00ceb21504ceb5bf30a90de32056f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e53766db1001664171f9c77c191bfdb8043ce35444c1749c0d161d6ca7c8d2c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53766db1001664171f9c77c191bfdb8043ce35444c1749c0d161d6ca7c8d2c1->enter($__internal_e53766db1001664171f9c77c191bfdb8043ce35444c1749c0d161d6ca7c8d2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e53766db1001664171f9c77c191bfdb8043ce35444c1749c0d161d6ca7c8d2c1->leave($__internal_e53766db1001664171f9c77c191bfdb8043ce35444c1749c0d161d6ca7c8d2c1_prof);

        
        $__internal_f0707f9bd8eed2f3ebdb0d72d08cba09b00ceb21504ceb5bf30a90de32056f60->leave($__internal_f0707f9bd8eed2f3ebdb0d72d08cba09b00ceb21504ceb5bf30a90de32056f60_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0ba651a8c8d80ca8ef6588910dae6dbf3b423aa8447571783364d3ce6b32cee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ba651a8c8d80ca8ef6588910dae6dbf3b423aa8447571783364d3ce6b32cee->enter($__internal_c0ba651a8c8d80ca8ef6588910dae6dbf3b423aa8447571783364d3ce6b32cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bd16babdd25c245f0cc194c748de80e93f65fb368697e54f1c02ec2ebab26d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd16babdd25c245f0cc194c748de80e93f65fb368697e54f1c02ec2ebab26d8a->enter($__internal_bd16babdd25c245f0cc194c748de80e93f65fb368697e54f1c02ec2ebab26d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bd16babdd25c245f0cc194c748de80e93f65fb368697e54f1c02ec2ebab26d8a->leave($__internal_bd16babdd25c245f0cc194c748de80e93f65fb368697e54f1c02ec2ebab26d8a_prof);

        
        $__internal_c0ba651a8c8d80ca8ef6588910dae6dbf3b423aa8447571783364d3ce6b32cee->leave($__internal_c0ba651a8c8d80ca8ef6588910dae6dbf3b423aa8447571783364d3ce6b32cee_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
