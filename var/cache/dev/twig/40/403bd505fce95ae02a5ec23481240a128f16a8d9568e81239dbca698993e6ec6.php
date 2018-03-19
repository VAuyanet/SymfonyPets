<?php

/* petsWebBundle:tasques:index.html.twig */
class __TwigTemplate_828b5296de274fc847c4ce25bbd98e3ea326d0c6a563c556690e677cd9c365b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "petsWebBundle:tasques:index.html.twig", 1);
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
        $__internal_dd7a108e005d57e5b071b05cbe2d2d4de52330f853f117086786e26c30ac9f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd7a108e005d57e5b071b05cbe2d2d4de52330f853f117086786e26c30ac9f2e->enter($__internal_dd7a108e005d57e5b071b05cbe2d2d4de52330f853f117086786e26c30ac9f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:tasques:index.html.twig"));

        $__internal_4265ae839ddf069d2893dc11cca761c972b609ab818bf8f22e09a0d32d42ac75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4265ae839ddf069d2893dc11cca761c972b609ab818bf8f22e09a0d32d42ac75->enter($__internal_4265ae839ddf069d2893dc11cca761c972b609ab818bf8f22e09a0d32d42ac75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:tasques:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd7a108e005d57e5b071b05cbe2d2d4de52330f853f117086786e26c30ac9f2e->leave($__internal_dd7a108e005d57e5b071b05cbe2d2d4de52330f853f117086786e26c30ac9f2e_prof);

        
        $__internal_4265ae839ddf069d2893dc11cca761c972b609ab818bf8f22e09a0d32d42ac75->leave($__internal_4265ae839ddf069d2893dc11cca761c972b609ab818bf8f22e09a0d32d42ac75_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_958f54e5caaad5ed7490d31f6b09eed1f64f6fe34a3042f2b33af3e89710370b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_958f54e5caaad5ed7490d31f6b09eed1f64f6fe34a3042f2b33af3e89710370b->enter($__internal_958f54e5caaad5ed7490d31f6b09eed1f64f6fe34a3042f2b33af3e89710370b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_001ddf78943e53b38015fb17a5202611a8801413c8e3ccfa59abe25257a07a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001ddf78943e53b38015fb17a5202611a8801413c8e3ccfa59abe25257a07a12->enter($__internal_001ddf78943e53b38015fb17a5202611a8801413c8e3ccfa59abe25257a07a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Tasques</h1>

    <table>
        <thead>
            <tr>
                <th>Idtasca</th>
                <th>Titol</th>
                <th>Descripcio</th>
                <th>Datainici</th>
                <th>Datafinal</th>
                <th>Estat</th>
                <th>Prioritat</th>
                <th>Departament</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasques"] ?? $this->getContext($context, "tasques")));
        foreach ($context['_seq'] as $context["_key"] => $context["tasque"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasques_show", array("idTasca" => $this->getAttribute($context["tasque"], "idTasca", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tasque"], "idTasca", array()), "html", null, true);
            echo "</a></td>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subtasques_index", array("idTasca" => $this->getAttribute($context["tasque"], "idTasca", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tasque"], "titol", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["tasque"], "descripcio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["tasque"], "dataInici", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tasque"], "dataInici", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["tasque"], "dataFinal", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tasque"], "dataFinal", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["tasque"], "estat", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["tasque"], "prioritat", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["tasque"], "departament", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasques_show", array("idTasca" => $this->getAttribute($context["tasque"], "idTasca", array()))), "html", null, true);
            echo "\">Mostrar</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasques_edit", array("idTasca" => $this->getAttribute($context["tasque"], "idTasca", array()))), "html", null, true);
            echo "\">Editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tasque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasques_new");
        echo "\">Crear una nova tasca</a>
        </li>
    </ul>
";
        
        $__internal_001ddf78943e53b38015fb17a5202611a8801413c8e3ccfa59abe25257a07a12->leave($__internal_001ddf78943e53b38015fb17a5202611a8801413c8e3ccfa59abe25257a07a12_prof);

        
        $__internal_958f54e5caaad5ed7490d31f6b09eed1f64f6fe34a3042f2b33af3e89710370b->leave($__internal_958f54e5caaad5ed7490d31f6b09eed1f64f6fe34a3042f2b33af3e89710370b_prof);

    }

    public function getTemplateName()
    {
        return "petsWebBundle:tasques:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 48,  136 => 43,  124 => 37,  118 => 34,  111 => 30,  107 => 29,  103 => 28,  97 => 27,  91 => 26,  87 => 25,  81 => 24,  75 => 23,  72 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tasques</h1>

    <table>
        <thead>
            <tr>
                <th>Idtasca</th>
                <th>Titol</th>
                <th>Descripcio</th>
                <th>Datainici</th>
                <th>Datafinal</th>
                <th>Estat</th>
                <th>Prioritat</th>
                <th>Departament</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for tasque in tasques %}
            <tr>
                <td><a href=\"{{ path('tasques_show', { 'idTasca': tasque.idTasca }) }}\">{{ tasque.idTasca }}</a></td>
                <td><a href=\"{{ path('subtasques_index', {'idTasca': tasque.idTasca}) }}\">{{ tasque.titol}}</a></td>
                <td>{{ tasque.descripcio }}</td>
                <td>{% if tasque.dataInici %}{{ tasque.dataInici|date('Y-m-d') }}{% endif %}</td>
                <td>{% if tasque.dataFinal %}{{ tasque.dataFinal|date('Y-m-d') }}{% endif %}</td>
                <td>{{ tasque.estat }}</td>
                <td>{{ tasque.prioritat }}</td>
                <td>{{ tasque.departament }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('tasques_show', { 'idTasca': tasque.idTasca }) }}\">Mostrar</a>
                        </li>
                        <li>
                            <a href=\"{{ path('tasques_edit', { 'idTasca': tasque.idTasca }) }}\">Editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('tasques_new') }}\">Crear una nova tasca</a>
        </li>
    </ul>
{% endblock %}
", "petsWebBundle:tasques:index.html.twig", "/opt/lampp/htdocs/SymfonyPets/src/pets/WebBundle/Resources/views/tasques/index.html.twig");
    }
}
