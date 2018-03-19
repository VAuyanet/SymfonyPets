<?php

/* petsWebBundle:usuaris:new.html.twig */
class __TwigTemplate_19f1bda845b8f591af56f91bff33a6ad440214475c08bdcd72de8b73acfa027c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "petsWebBundle:usuaris:new.html.twig", 1);
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
        $__internal_bfc539b8b9746dc54a8bbbb3dfc998b97582aa6389117373256b1b9d274cfef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc539b8b9746dc54a8bbbb3dfc998b97582aa6389117373256b1b9d274cfef6->enter($__internal_bfc539b8b9746dc54a8bbbb3dfc998b97582aa6389117373256b1b9d274cfef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:usuaris:new.html.twig"));

        $__internal_822f623a433ccea1cd04b2894055999a97407757421201fcab531e5df14487db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822f623a433ccea1cd04b2894055999a97407757421201fcab531e5df14487db->enter($__internal_822f623a433ccea1cd04b2894055999a97407757421201fcab531e5df14487db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:usuaris:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfc539b8b9746dc54a8bbbb3dfc998b97582aa6389117373256b1b9d274cfef6->leave($__internal_bfc539b8b9746dc54a8bbbb3dfc998b97582aa6389117373256b1b9d274cfef6_prof);

        
        $__internal_822f623a433ccea1cd04b2894055999a97407757421201fcab531e5df14487db->leave($__internal_822f623a433ccea1cd04b2894055999a97407757421201fcab531e5df14487db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09b2f952c1af36fe8214501a7bed90806c3960cc2a5d47defbdca8932a11fa9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09b2f952c1af36fe8214501a7bed90806c3960cc2a5d47defbdca8932a11fa9f->enter($__internal_09b2f952c1af36fe8214501a7bed90806c3960cc2a5d47defbdca8932a11fa9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4ae627c7971c13ea62c09381e6e8a53731821e6852836af512a5e40ffce6702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ae627c7971c13ea62c09381e6e8a53731821e6852836af512a5e40ffce6702->enter($__internal_e4ae627c7971c13ea62c09381e6e8a53731821e6852836af512a5e40ffce6702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuari creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuaris_index");
        echo "\">Tornar a la llista</a>
        </li>
    </ul>
";
        
        $__internal_e4ae627c7971c13ea62c09381e6e8a53731821e6852836af512a5e40ffce6702->leave($__internal_e4ae627c7971c13ea62c09381e6e8a53731821e6852836af512a5e40ffce6702_prof);

        
        $__internal_09b2f952c1af36fe8214501a7bed90806c3960cc2a5d47defbdca8932a11fa9f->leave($__internal_09b2f952c1af36fe8214501a7bed90806c3960cc2a5d47defbdca8932a11fa9f_prof);

    }

    public function getTemplateName()
    {
        return "petsWebBundle:usuaris:new.html.twig";
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

{% block body %}
    <h1>Usuari creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('usuaris_index') }}\">Tornar a la llista</a>
        </li>
    </ul>
{% endblock %}
", "petsWebBundle:usuaris:new.html.twig", "/opt/lampp/htdocs/SymfonyPets/src/pets/WebBundle/Resources/views/usuaris/new.html.twig");
    }
}
