<?php

/* petsWebBundle:subtasques:index.html.twig */
class __TwigTemplate_4b5079b485fe04c479074b1207c76cb51044c593e11920dae15647e36c675e5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "petsWebBundle:subtasques:index.html.twig", 1);
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
        $__internal_845b6d92f9d00d491d0fd4830e5ab2f0c2e544fef944dc70d6c0541c2876ec20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_845b6d92f9d00d491d0fd4830e5ab2f0c2e544fef944dc70d6c0541c2876ec20->enter($__internal_845b6d92f9d00d491d0fd4830e5ab2f0c2e544fef944dc70d6c0541c2876ec20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:subtasques:index.html.twig"));

        $__internal_0aeb0b1248870dc45c0d1c7b0477710b3776e56c58515ef43296c2a186320fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aeb0b1248870dc45c0d1c7b0477710b3776e56c58515ef43296c2a186320fbe->enter($__internal_0aeb0b1248870dc45c0d1c7b0477710b3776e56c58515ef43296c2a186320fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:subtasques:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_845b6d92f9d00d491d0fd4830e5ab2f0c2e544fef944dc70d6c0541c2876ec20->leave($__internal_845b6d92f9d00d491d0fd4830e5ab2f0c2e544fef944dc70d6c0541c2876ec20_prof);

        
        $__internal_0aeb0b1248870dc45c0d1c7b0477710b3776e56c58515ef43296c2a186320fbe->leave($__internal_0aeb0b1248870dc45c0d1c7b0477710b3776e56c58515ef43296c2a186320fbe_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_878a7a8d1185a81af74ad8c9c4a659cfa338598c789716b49772d1fdf77cca91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878a7a8d1185a81af74ad8c9c4a659cfa338598c789716b49772d1fdf77cca91->enter($__internal_878a7a8d1185a81af74ad8c9c4a659cfa338598c789716b49772d1fdf77cca91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c83d2b251c8f7f5087ded990b104228507531b60c476a1d5340431e39a778d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83d2b251c8f7f5087ded990b104228507531b60c476a1d5340431e39a778d6c->enter($__internal_c83d2b251c8f7f5087ded990b104228507531b60c476a1d5340431e39a778d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Subtasques de&nbsp;&nbsp;<sub>\"";
        echo twig_escape_filter($this->env, ($context["titolTasca"] ?? $this->getContext($context, "titolTasca")), "html", null, true);
        echo "\"</sub></h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Idsubtasca</th>
                <th>Titol</th>
                <th>Descripcio</th>
                <th>Datainici</th>
                <th>Datafinal</th>
                <th>Prioritat</th>
                <th>Usuaris</th>
                <th>Idtasca</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subtasques"] ?? $this->getContext($context, "subtasques")));
        foreach ($context['_seq'] as $context["_key"] => $context["subtasque"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subtasques_show", array("idSubtasca" => $this->getAttribute($context["subtasque"], "idSubtasca", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subtasque"], "idSubtasca", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["subtasque"], "titol", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["subtasque"], "descripcio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["subtasque"], "dataInici", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["subtasque"], "dataInici", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["subtasque"], "dataFinal", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["subtasque"], "dataFinal", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["subtasque"], "prioritat", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["subtasque"], "usuaris", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["subtasque"], "idTasca", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subtasques_show", array("idSubtasca" => $this->getAttribute($context["subtasque"], "idSubtasca", array()))), "html", null, true);
            echo "\">Mostrar</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subtasques_edit", array("idSubtasca" => $this->getAttribute($context["subtasque"], "idSubtasca", array()))), "html", null, true);
            echo "\">Editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subtasque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subtasques_new");
        echo "\">Crear una nova subtasca</a>
        </li>
    </ul>
";
        
        $__internal_c83d2b251c8f7f5087ded990b104228507531b60c476a1d5340431e39a778d6c->leave($__internal_c83d2b251c8f7f5087ded990b104228507531b60c476a1d5340431e39a778d6c_prof);

        
        $__internal_878a7a8d1185a81af74ad8c9c4a659cfa338598c789716b49772d1fdf77cca91->leave($__internal_878a7a8d1185a81af74ad8c9c4a659cfa338598c789716b49772d1fdf77cca91_prof);

    }

    public function getTemplateName()
    {
        return "petsWebBundle:subtasques:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 48,  136 => 43,  124 => 37,  118 => 34,  111 => 30,  107 => 29,  103 => 28,  97 => 27,  91 => 26,  87 => 25,  83 => 24,  77 => 23,  74 => 22,  70 => 21,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Subtasques de&nbsp;&nbsp;<sub>\"{{ titolTasca }}\"</sub></h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Idsubtasca</th>
                <th>Titol</th>
                <th>Descripcio</th>
                <th>Datainici</th>
                <th>Datafinal</th>
                <th>Prioritat</th>
                <th>Usuaris</th>
                <th>Idtasca</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for subtasque in subtasques %}
            <tr>
                <td><a href=\"{{ path('subtasques_show', { 'idSubtasca': subtasque.idSubtasca }) }}\">{{ subtasque.idSubtasca }}</a></td>
                <td>{{ subtasque.titol }}</td>
                <td>{{ subtasque.descripcio }}</td>
                <td>{% if subtasque.dataInici %}{{ subtasque.dataInici|date('Y-m-d') }}{% endif %}</td>
                <td>{% if subtasque.dataFinal %}{{ subtasque.dataFinal|date('Y-m-d') }}{% endif %}</td>
                <td>{{ subtasque.prioritat }}</td>
                <td>{{ subtasque.usuaris }}</td>
                <td>{{ subtasque.idTasca }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('subtasques_show', { 'idSubtasca': subtasque.idSubtasca }) }}\">Mostrar</a>
                        </li>
                        <li>
                            <a href=\"{{ path('subtasques_edit', { 'idSubtasca': subtasque.idSubtasca }) }}\">Editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('subtasques_new') }}\">Crear una nova subtasca</a>
        </li>
    </ul>
{% endblock %}
", "petsWebBundle:subtasques:index.html.twig", "/opt/lampp/htdocs/SymfonyPets/src/pets/WebBundle/Resources/views/subtasques/index.html.twig");
    }
}
