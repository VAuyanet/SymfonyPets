<?php

/* petsWebBundle:usuaris:edit.html.twig */
class __TwigTemplate_f3734360c8c7782af6423023c3b3783dc41a9b80193a6a5f1458622dc9e7e2df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "petsWebBundle:usuaris:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0291fcee4552cce56614ac4e36a84d28222d216c97c9b91f601e834dd4b28c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0291fcee4552cce56614ac4e36a84d28222d216c97c9b91f601e834dd4b28c93->enter($__internal_0291fcee4552cce56614ac4e36a84d28222d216c97c9b91f601e834dd4b28c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:usuaris:edit.html.twig"));

        $__internal_7ffdec8aeb1a2b848456e1f8cb250b426650dc229d49f6a3f02db90bee9a5c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ffdec8aeb1a2b848456e1f8cb250b426650dc229d49f6a3f02db90bee9a5c74->enter($__internal_7ffdec8aeb1a2b848456e1f8cb250b426650dc229d49f6a3f02db90bee9a5c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:usuaris:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0291fcee4552cce56614ac4e36a84d28222d216c97c9b91f601e834dd4b28c93->leave($__internal_0291fcee4552cce56614ac4e36a84d28222d216c97c9b91f601e834dd4b28c93_prof);

        
        $__internal_7ffdec8aeb1a2b848456e1f8cb250b426650dc229d49f6a3f02db90bee9a5c74->leave($__internal_7ffdec8aeb1a2b848456e1f8cb250b426650dc229d49f6a3f02db90bee9a5c74_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eae656e0699c7a7dee44451c5ecd15d3e4b4f34c9e446194f6241ce5a1e7a7ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eae656e0699c7a7dee44451c5ecd15d3e4b4f34c9e446194f6241ce5a1e7a7ef->enter($__internal_eae656e0699c7a7dee44451c5ecd15d3e4b4f34c9e446194f6241ce5a1e7a7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8168772d8cf0cb30bcb246d5a4557073fb420277f24f3bca0fa8172c42dd4b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8168772d8cf0cb30bcb246d5a4557073fb420277f24f3bca0fa8172c42dd4b4->enter($__internal_d8168772d8cf0cb30bcb246d5a4557073fb420277f24f3bca0fa8172c42dd4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Editar Usuari</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Editar usuari\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuaris_index");
        echo "\">Tornar a la llista</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Borrar usuari\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d8168772d8cf0cb30bcb246d5a4557073fb420277f24f3bca0fa8172c42dd4b4->leave($__internal_d8168772d8cf0cb30bcb246d5a4557073fb420277f24f3bca0fa8172c42dd4b4_prof);

        
        $__internal_eae656e0699c7a7dee44451c5ecd15d3e4b4f34c9e446194f6241ce5a1e7a7ef->leave($__internal_eae656e0699c7a7dee44451c5ecd15d3e4b4f34c9e446194f6241ce5a1e7a7ef_prof);

    }

    public function getTemplateName()
    {
        return "petsWebBundle:usuaris:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <h1>Editar Usuari</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Editar usuari\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('usuaris_index') }}\">Tornar a la llista</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Borrar usuari\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "petsWebBundle:usuaris:edit.html.twig", "/opt/lampp/htdocs/SymfonyPets/src/pets/WebBundle/Resources/views/usuaris/edit.html.twig");
    }
}
