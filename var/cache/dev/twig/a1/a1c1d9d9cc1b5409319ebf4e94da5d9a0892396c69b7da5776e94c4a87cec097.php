<?php

/* petsWebBundle:subtasques:edit.html.twig */
class __TwigTemplate_03eca930270ca1615ae74822fabc567c65e31879e8fb50651562ab571b00395a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "petsWebBundle:subtasques:edit.html.twig", 1);
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
        $__internal_2351881f33de5cffd933deae50239da6da6754039b0d6fe109ccea7db8204a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2351881f33de5cffd933deae50239da6da6754039b0d6fe109ccea7db8204a5c->enter($__internal_2351881f33de5cffd933deae50239da6da6754039b0d6fe109ccea7db8204a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:subtasques:edit.html.twig"));

        $__internal_9e76c4bea11f6ee4600c3fe43d3183a4d79a04b0bb0d05db2fa3c7c4bf109a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e76c4bea11f6ee4600c3fe43d3183a4d79a04b0bb0d05db2fa3c7c4bf109a4e->enter($__internal_9e76c4bea11f6ee4600c3fe43d3183a4d79a04b0bb0d05db2fa3c7c4bf109a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:subtasques:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2351881f33de5cffd933deae50239da6da6754039b0d6fe109ccea7db8204a5c->leave($__internal_2351881f33de5cffd933deae50239da6da6754039b0d6fe109ccea7db8204a5c_prof);

        
        $__internal_9e76c4bea11f6ee4600c3fe43d3183a4d79a04b0bb0d05db2fa3c7c4bf109a4e->leave($__internal_9e76c4bea11f6ee4600c3fe43d3183a4d79a04b0bb0d05db2fa3c7c4bf109a4e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3068c26091b9278ca1a880944bb25c7bcb522dfdccbbd0abd3eb4394214030f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3068c26091b9278ca1a880944bb25c7bcb522dfdccbbd0abd3eb4394214030f5->enter($__internal_3068c26091b9278ca1a880944bb25c7bcb522dfdccbbd0abd3eb4394214030f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9c5e1343f38b76a73ec61b516d8d8a00e930343ab2ce207d809fb85a15e01b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5e1343f38b76a73ec61b516d8d8a00e930343ab2ce207d809fb85a15e01b54->enter($__internal_9c5e1343f38b76a73ec61b516d8d8a00e930343ab2ce207d809fb85a15e01b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Editar Subtasca</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Editar subtasca\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subtasques_index", array("idTasca" => $this->getAttribute(($context["subtasque"] ?? $this->getContext($context, "subtasque")), "idTasca", array()))), "html", null, true);
        echo "\">Tornar a la llista</a>        </li>
        <li>
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Eliminar subtasca\">
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
</ul>
";
        
        $__internal_9c5e1343f38b76a73ec61b516d8d8a00e930343ab2ce207d809fb85a15e01b54->leave($__internal_9c5e1343f38b76a73ec61b516d8d8a00e930343ab2ce207d809fb85a15e01b54_prof);

        
        $__internal_3068c26091b9278ca1a880944bb25c7bcb522dfdccbbd0abd3eb4394214030f5->leave($__internal_3068c26091b9278ca1a880944bb25c7bcb522dfdccbbd0abd3eb4394214030f5_prof);

    }

    public function getTemplateName()
    {
        return "petsWebBundle:subtasques:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  74 => 15,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Editar Subtasca</h1>

    {{ form_start(edit_form) }}
    {{ form_widget(edit_form) }}
    <input type=\"submit\" value=\"Editar subtasca\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('subtasques_index', { 'idTasca': subtasque.idTasca }) }}\">Tornar a la llista</a>        </li>
        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Eliminar subtasca\">
            {{ form_end(delete_form) }}
        </li>
</ul>
{% endblock %}
", "petsWebBundle:subtasques:edit.html.twig", "/opt/lampp/htdocs/SymfonyPets/src/pets/WebBundle/Resources/views/subtasques/edit.html.twig");
    }
}
