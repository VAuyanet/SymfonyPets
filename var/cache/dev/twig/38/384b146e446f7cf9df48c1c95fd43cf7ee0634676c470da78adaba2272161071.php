<?php

/* petsWebBundle:tasques:new.html.twig */
class __TwigTemplate_fa8bb258d50f57c3bf4c57fea8fb3036b689fe0c2f42022264745a4999123179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "petsWebBundle:tasques:new.html.twig", 1);
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
        $__internal_3f458c9b4ec396a17d7aba5d60f8ff662987441c4fdc33b2138aef42fbb40d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f458c9b4ec396a17d7aba5d60f8ff662987441c4fdc33b2138aef42fbb40d95->enter($__internal_3f458c9b4ec396a17d7aba5d60f8ff662987441c4fdc33b2138aef42fbb40d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:tasques:new.html.twig"));

        $__internal_d929ebf6311a783667eb73c86bfd8efe34be1427c0815bdda923fb8f5d0778ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d929ebf6311a783667eb73c86bfd8efe34be1427c0815bdda923fb8f5d0778ff->enter($__internal_d929ebf6311a783667eb73c86bfd8efe34be1427c0815bdda923fb8f5d0778ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:tasques:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f458c9b4ec396a17d7aba5d60f8ff662987441c4fdc33b2138aef42fbb40d95->leave($__internal_3f458c9b4ec396a17d7aba5d60f8ff662987441c4fdc33b2138aef42fbb40d95_prof);

        
        $__internal_d929ebf6311a783667eb73c86bfd8efe34be1427c0815bdda923fb8f5d0778ff->leave($__internal_d929ebf6311a783667eb73c86bfd8efe34be1427c0815bdda923fb8f5d0778ff_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6b4f4f30cd83428f34bc86462e393b550bd37841228d328b67474e6ce438dcca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b4f4f30cd83428f34bc86462e393b550bd37841228d328b67474e6ce438dcca->enter($__internal_6b4f4f30cd83428f34bc86462e393b550bd37841228d328b67474e6ce438dcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_35a942dbe02b33b8498affabd0dd78433d97165e03fcdc76dd32155960d5a964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a942dbe02b33b8498affabd0dd78433d97165e03fcdc76dd32155960d5a964->enter($__internal_35a942dbe02b33b8498affabd0dd78433d97165e03fcdc76dd32155960d5a964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Tasques creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasques_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_35a942dbe02b33b8498affabd0dd78433d97165e03fcdc76dd32155960d5a964->leave($__internal_35a942dbe02b33b8498affabd0dd78433d97165e03fcdc76dd32155960d5a964_prof);

        
        $__internal_6b4f4f30cd83428f34bc86462e393b550bd37841228d328b67474e6ce438dcca->leave($__internal_6b4f4f30cd83428f34bc86462e393b550bd37841228d328b67474e6ce438dcca_prof);

    }

    public function getTemplateName()
    {
        return "petsWebBundle:tasques:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
    <h1>Tasques creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('tasques_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "petsWebBundle:tasques:new.html.twig", "/opt/lampp/htdocs/SymfonyPets/src/pets/WebBundle/Resources/views/tasques/new.html.twig");
    }
}
