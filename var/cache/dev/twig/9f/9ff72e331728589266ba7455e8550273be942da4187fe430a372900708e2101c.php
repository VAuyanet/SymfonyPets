<?php

/* petsWebBundle:subtasques:show.html.twig */
class __TwigTemplate_b4a6931f1cfbd90308e098bd5c2bb54a9990e85725b5465ae24de2ec3af8178d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "petsWebBundle:subtasques:show.html.twig", 1);
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
        $__internal_bb5ef634f78b8fac227969f174d4eec404da81c657da0023daeddb49102e22b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb5ef634f78b8fac227969f174d4eec404da81c657da0023daeddb49102e22b6->enter($__internal_bb5ef634f78b8fac227969f174d4eec404da81c657da0023daeddb49102e22b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:subtasques:show.html.twig"));

        $__internal_fdc746438008676da235743e18354f5902e6e40f7a0d0bd545e3050b23fa937f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc746438008676da235743e18354f5902e6e40f7a0d0bd545e3050b23fa937f->enter($__internal_fdc746438008676da235743e18354f5902e6e40f7a0d0bd545e3050b23fa937f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:subtasques:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb5ef634f78b8fac227969f174d4eec404da81c657da0023daeddb49102e22b6->leave($__internal_bb5ef634f78b8fac227969f174d4eec404da81c657da0023daeddb49102e22b6_prof);

        
        $__internal_fdc746438008676da235743e18354f5902e6e40f7a0d0bd545e3050b23fa937f->leave($__internal_fdc746438008676da235743e18354f5902e6e40f7a0d0bd545e3050b23fa937f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ffd5f574de4bcfe17b4e8b1d5900557d242a363e2b78d2dca3782891e06f6817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd5f574de4bcfe17b4e8b1d5900557d242a363e2b78d2dca3782891e06f6817->enter($__internal_ffd5f574de4bcfe17b4e8b1d5900557d242a363e2b78d2dca3782891e06f6817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e09ebdf563f5e2fffbc1255399f55b0a26498b29cc1086cff4141393f3833ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09ebdf563f5e2fffbc1255399f55b0a26498b29cc1086cff4141393f3833ecb->enter($__internal_e09ebdf563f5e2fffbc1255399f55b0a26498b29cc1086cff4141393f3833ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Subtasca</h1>

    <table>
        <tbody>
            <tr>
                <th>Idsubtasca</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subtasque"] ?? $this->getContext($context, "subtasque")), "idSubtasca", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titol</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subtasque"] ?? $this->getContext($context, "subtasque")), "titol", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcio</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subtasque"] ?? $this->getContext($context, "subtasque")), "descripcio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datainici</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["subtasque"] ?? $this->getContext($context, "subtasque")), "dataInici", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["subtasque"] ?? $this->getContext($context, "subtasque")), "dataInici", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datafinal</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["subtasque"] ?? $this->getContext($context, "subtasque")), "dataFinal", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["subtasque"] ?? $this->getContext($context, "subtasque")), "dataFinal", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Prioritat</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subtasque"] ?? $this->getContext($context, "subtasque")), "prioritat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Usuaris</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subtasque"] ?? $this->getContext($context, "subtasque")), "usuaris", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idtasca</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subtasque"] ?? $this->getContext($context, "subtasque")), "idTasca", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subtasques_index", array("idTasca" => $this->getAttribute(($context["subtasque"] ?? $this->getContext($context, "subtasque")), "idTasca", array()))), "html", null, true);
        echo "\">Tornar a la llista</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subtasques_edit", array("idSubtasca" => $this->getAttribute(($context["subtasque"] ?? $this->getContext($context, "subtasque")), "idSubtasca", array()))), "html", null, true);
        echo "\">Editar</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Eliminar\">
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e09ebdf563f5e2fffbc1255399f55b0a26498b29cc1086cff4141393f3833ecb->leave($__internal_e09ebdf563f5e2fffbc1255399f55b0a26498b29cc1086cff4141393f3833ecb_prof);

        
        $__internal_ffd5f574de4bcfe17b4e8b1d5900557d242a363e2b78d2dca3782891e06f6817->leave($__internal_ffd5f574de4bcfe17b4e8b1d5900557d242a363e2b78d2dca3782891e06f6817_prof);

    }

    public function getTemplateName()
    {
        return "petsWebBundle:subtasques:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 53,  132 => 51,  126 => 48,  120 => 45,  110 => 38,  103 => 34,  96 => 30,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Subtasca</h1>

    <table>
        <tbody>
            <tr>
                <th>Idsubtasca</th>
                <td>{{ subtasque.idSubtasca }}</td>
            </tr>
            <tr>
                <th>Titol</th>
                <td>{{ subtasque.titol }}</td>
            </tr>
            <tr>
                <th>Descripcio</th>
                <td>{{ subtasque.descripcio }}</td>
            </tr>
            <tr>
                <th>Datainici</th>
                <td>{% if subtasque.dataInici %}{{ subtasque.dataInici|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Datafinal</th>
                <td>{% if subtasque.dataFinal %}{{ subtasque.dataFinal|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Prioritat</th>
                <td>{{ subtasque.prioritat }}</td>
            </tr>
            <tr>
                <th>Usuaris</th>
                <td>{{ subtasque.usuaris }}</td>
            </tr>
            <tr>
                <th>Idtasca</th>
                <td>{{ subtasque.idTasca }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('subtasques_index', { 'idTasca': subtasque.idTasca }) }}\">Tornar a la llista</a>
        </li>
        <li>
            <a href=\"{{ path('subtasques_edit', { 'idSubtasca': subtasque.idSubtasca }) }}\">Editar</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Eliminar\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "petsWebBundle:subtasques:show.html.twig", "/opt/lampp/htdocs/SymfonyPets/src/pets/WebBundle/Resources/views/subtasques/show.html.twig");
    }
}
