<?php

/* petsWebBundle:tasques:edit.html.twig */
class __TwigTemplate_02223ee812ec85a6a6ee23aebf13b2680b1356431074468aa4903e072a34b486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "petsWebBundle:tasques:edit.html.twig", 1);
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
        $__internal_39c04bd7af6ea23165551c77d56f2f18707c3bc330c65338d1b7d1db68c93bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c04bd7af6ea23165551c77d56f2f18707c3bc330c65338d1b7d1db68c93bb6->enter($__internal_39c04bd7af6ea23165551c77d56f2f18707c3bc330c65338d1b7d1db68c93bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:tasques:edit.html.twig"));

        $__internal_7efb71d9ff42a0c11a897ea94b82d17c396180eced8e2f8ccdc4fbc7affe877f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efb71d9ff42a0c11a897ea94b82d17c396180eced8e2f8ccdc4fbc7affe877f->enter($__internal_7efb71d9ff42a0c11a897ea94b82d17c396180eced8e2f8ccdc4fbc7affe877f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:tasques:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39c04bd7af6ea23165551c77d56f2f18707c3bc330c65338d1b7d1db68c93bb6->leave($__internal_39c04bd7af6ea23165551c77d56f2f18707c3bc330c65338d1b7d1db68c93bb6_prof);

        
        $__internal_7efb71d9ff42a0c11a897ea94b82d17c396180eced8e2f8ccdc4fbc7affe877f->leave($__internal_7efb71d9ff42a0c11a897ea94b82d17c396180eced8e2f8ccdc4fbc7affe877f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d7bea2cfb224cfa57068b57d766fa1a16be9f016c4bcc81935063fea74395bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7bea2cfb224cfa57068b57d766fa1a16be9f016c4bcc81935063fea74395bc0->enter($__internal_d7bea2cfb224cfa57068b57d766fa1a16be9f016c4bcc81935063fea74395bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_352e22d492be3c2f795cdd464db2b85a667e1221ab81d6ea5dabfd7ed56847a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352e22d492be3c2f795cdd464db2b85a667e1221ab81d6ea5dabfd7ed56847a2->enter($__internal_352e22d492be3c2f795cdd464db2b85a667e1221ab81d6ea5dabfd7ed56847a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Editar Tasca</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasques_index");
        echo "\">Tornar a la llista</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_352e22d492be3c2f795cdd464db2b85a667e1221ab81d6ea5dabfd7ed56847a2->leave($__internal_352e22d492be3c2f795cdd464db2b85a667e1221ab81d6ea5dabfd7ed56847a2_prof);

        
        $__internal_d7bea2cfb224cfa57068b57d766fa1a16be9f016c4bcc81935063fea74395bc0->leave($__internal_d7bea2cfb224cfa57068b57d766fa1a16be9f016c4bcc81935063fea74395bc0_prof);

    }

    public function getTemplateName()
    {
        return "petsWebBundle:tasques:edit.html.twig";
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

{% block content %}
    <h1>Editar Tasca</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('tasques_index') }}\">Tornar a la llista</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "petsWebBundle:tasques:edit.html.twig", "/opt/lampp/htdocs/SymfonyPets/src/pets/WebBundle/Resources/views/tasques/edit.html.twig");
    }
}
