<?php

/* petsWebBundle:tasques:show.html.twig */
class __TwigTemplate_bee307a9c1505840a1b1f104016bcc9f3bd8aa2d01df958ec8277b873bc50577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "petsWebBundle:tasques:show.html.twig", 1);
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
        $__internal_61d309048dfefcb98616941485524f701ee9716f175d688bc84b594f8646df0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d309048dfefcb98616941485524f701ee9716f175d688bc84b594f8646df0e->enter($__internal_61d309048dfefcb98616941485524f701ee9716f175d688bc84b594f8646df0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:tasques:show.html.twig"));

        $__internal_6f3072d4c335206b108d1d3ed7667e6a041b2842c3b4a5463b03c57692272d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3072d4c335206b108d1d3ed7667e6a041b2842c3b4a5463b03c57692272d04->enter($__internal_6f3072d4c335206b108d1d3ed7667e6a041b2842c3b4a5463b03c57692272d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:tasques:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61d309048dfefcb98616941485524f701ee9716f175d688bc84b594f8646df0e->leave($__internal_61d309048dfefcb98616941485524f701ee9716f175d688bc84b594f8646df0e_prof);

        
        $__internal_6f3072d4c335206b108d1d3ed7667e6a041b2842c3b4a5463b03c57692272d04->leave($__internal_6f3072d4c335206b108d1d3ed7667e6a041b2842c3b4a5463b03c57692272d04_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_42b9659111f75fa3a2b51506e629e9aed1f101b3472406690aca46dc1408c222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b9659111f75fa3a2b51506e629e9aed1f101b3472406690aca46dc1408c222->enter($__internal_42b9659111f75fa3a2b51506e629e9aed1f101b3472406690aca46dc1408c222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9330a50c9bdb17e92062fcabfd5f8c9de0e824ca6a919cf7cb7669c02c82c86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9330a50c9bdb17e92062fcabfd5f8c9de0e824ca6a919cf7cb7669c02c82c86e->enter($__internal_9330a50c9bdb17e92062fcabfd5f8c9de0e824ca6a919cf7cb7669c02c82c86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Tasca</h1>

    <table>
        <tbody>
            <tr>
                <th>Idtasca</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tasque"] ?? $this->getContext($context, "tasque")), "idTasca", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titol</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tasque"] ?? $this->getContext($context, "tasque")), "titol", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcio</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tasque"] ?? $this->getContext($context, "tasque")), "descripcio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datainici</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["tasque"] ?? $this->getContext($context, "tasque")), "dataInici", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tasque"] ?? $this->getContext($context, "tasque")), "dataInici", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datafinal</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["tasque"] ?? $this->getContext($context, "tasque")), "dataFinal", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tasque"] ?? $this->getContext($context, "tasque")), "dataFinal", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Estat</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tasque"] ?? $this->getContext($context, "tasque")), "estat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prioritat</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tasque"] ?? $this->getContext($context, "tasque")), "prioritat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Departament</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tasque"] ?? $this->getContext($context, "tasque")), "departament", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasques_index");
        echo "\">Tornar a la llista</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasques_edit", array("idTasca" => $this->getAttribute(($context["tasque"] ?? $this->getContext($context, "tasque")), "idTasca", array()))), "html", null, true);
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
        
        $__internal_9330a50c9bdb17e92062fcabfd5f8c9de0e824ca6a919cf7cb7669c02c82c86e->leave($__internal_9330a50c9bdb17e92062fcabfd5f8c9de0e824ca6a919cf7cb7669c02c82c86e_prof);

        
        $__internal_42b9659111f75fa3a2b51506e629e9aed1f101b3472406690aca46dc1408c222->leave($__internal_42b9659111f75fa3a2b51506e629e9aed1f101b3472406690aca46dc1408c222_prof);

    }

    public function getTemplateName()
    {
        return "petsWebBundle:tasques:show.html.twig";
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
    <h1>Tasca</h1>

    <table>
        <tbody>
            <tr>
                <th>Idtasca</th>
                <td>{{ tasque.idTasca }}</td>
            </tr>
            <tr>
                <th>Titol</th>
                <td>{{ tasque.titol }}</td>
            </tr>
            <tr>
                <th>Descripcio</th>
                <td>{{ tasque.descripcio }}</td>
            </tr>
            <tr>
                <th>Datainici</th>
                <td>{% if tasque.dataInici %}{{ tasque.dataInici|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Datafinal</th>
                <td>{% if tasque.dataFinal %}{{ tasque.dataFinal|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Estat</th>
                <td>{{ tasque.estat }}</td>
            </tr>
            <tr>
                <th>Prioritat</th>
                <td>{{ tasque.prioritat }}</td>
            </tr>
            <tr>
                <th>Departament</th>
                <td>{{ tasque.departament }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('tasques_index') }}\">Tornar a la llista</a>
        </li>
        <li>
            <a href=\"{{ path('tasques_edit', { 'idTasca': tasque.idTasca }) }}\">Editar</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Eliminar\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "petsWebBundle:tasques:show.html.twig", "/opt/lampp/htdocs/SymfonyPets/src/pets/WebBundle/Resources/views/tasques/show.html.twig");
    }
}
