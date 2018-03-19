<?php

/* petsWebBundle:usuaris:index.html.twig */
class __TwigTemplate_d1415b68b029f44f948b4bd5cee9744469c2d04e0899c7b99630569a3fd8e475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "petsWebBundle:usuaris:index.html.twig", 1);
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
        $__internal_73df2060843856d110e92cab896f4e41e99fc87da5d5e878ae8f72e4cde13cf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73df2060843856d110e92cab896f4e41e99fc87da5d5e878ae8f72e4cde13cf4->enter($__internal_73df2060843856d110e92cab896f4e41e99fc87da5d5e878ae8f72e4cde13cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:usuaris:index.html.twig"));

        $__internal_2a59f9ae89cb693d4a4ef728254a2115ebb880d2eac585abb1039cf4acb95fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a59f9ae89cb693d4a4ef728254a2115ebb880d2eac585abb1039cf4acb95fd5->enter($__internal_2a59f9ae89cb693d4a4ef728254a2115ebb880d2eac585abb1039cf4acb95fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:usuaris:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73df2060843856d110e92cab896f4e41e99fc87da5d5e878ae8f72e4cde13cf4->leave($__internal_73df2060843856d110e92cab896f4e41e99fc87da5d5e878ae8f72e4cde13cf4_prof);

        
        $__internal_2a59f9ae89cb693d4a4ef728254a2115ebb880d2eac585abb1039cf4acb95fd5->leave($__internal_2a59f9ae89cb693d4a4ef728254a2115ebb880d2eac585abb1039cf4acb95fd5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08882da82ec75a6abf83fe530dfc69a2b51ada395a3bdde30174bead6e5f4848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08882da82ec75a6abf83fe530dfc69a2b51ada395a3bdde30174bead6e5f4848->enter($__internal_08882da82ec75a6abf83fe530dfc69a2b51ada395a3bdde30174bead6e5f4848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1d7e92e3efa449de0421c52801a872377f8cb0965ea609d98f7ba6102d97fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d7e92e3efa449de0421c52801a872377f8cb0965ea609d98f7ba6102d97fbd->enter($__internal_f1d7e92e3efa449de0421c52801a872377f8cb0965ea609d98f7ba6102d97fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuaris</h1>

    <table>
        <thead>
            <tr>
                <th>Idusuari</th>
                <th>Nom</th>
                <th>Cognoms</th>
                <th>Email</th>
                <th>Perfil</th>
                <th>Password</th>
                <th>Departament</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usuaris"] ?? $this->getContext($context, "usuaris")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuari"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuaris_show", array("idUsuari" => $this->getAttribute($context["usuari"], "idUsuari", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuari"], "idUsuari", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuari"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuari"], "cognoms", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuari"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuari"], "role", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuari"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuari"], "departament", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuaris_show", array("idUsuari" => $this->getAttribute($context["usuari"], "idUsuari", array()))), "html", null, true);
            echo "\">Mostrar</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuaris_edit", array("idUsuari" => $this->getAttribute($context["usuari"], "idUsuari", array()))), "html", null, true);
            echo "\">Editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuari'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuaris_new");
        echo "\">Crear un nou usuari</a>
        </li>
    </ul>
";
        
        $__internal_f1d7e92e3efa449de0421c52801a872377f8cb0965ea609d98f7ba6102d97fbd->leave($__internal_f1d7e92e3efa449de0421c52801a872377f8cb0965ea609d98f7ba6102d97fbd_prof);

        
        $__internal_08882da82ec75a6abf83fe530dfc69a2b51ada395a3bdde30174bead6e5f4848->leave($__internal_08882da82ec75a6abf83fe530dfc69a2b51ada395a3bdde30174bead6e5f4848_prof);

    }

    public function getTemplateName()
    {
        return "petsWebBundle:usuaris:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 46,  125 => 41,  113 => 35,  107 => 32,  100 => 28,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Usuaris</h1>

    <table>
        <thead>
            <tr>
                <th>Idusuari</th>
                <th>Nom</th>
                <th>Cognoms</th>
                <th>Email</th>
                <th>Perfil</th>
                <th>Password</th>
                <th>Departament</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for usuari in usuaris %}
            <tr>
                <td><a href=\"{{ path('usuaris_show', { 'idUsuari': usuari.idUsuari }) }}\">{{ usuari.idUsuari }}</a></td>
                <td>{{ usuari.nom }}</td>
                <td>{{ usuari.cognoms }}</td>
                <td>{{ usuari.email }}</td>
                <td>{{ usuari.role }}</td>
                <td>{{ usuari.password }}</td>
                <td>{{ usuari.departament }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('usuaris_show', { 'idUsuari': usuari.idUsuari }) }}\">Mostrar</a>
                        </li>
                        <li>
                            <a href=\"{{ path('usuaris_edit', { 'idUsuari': usuari.idUsuari }) }}\">Editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('usuaris_new') }}\">Crear un nou usuari</a>
        </li>
    </ul>
{% endblock %}
", "petsWebBundle:usuaris:index.html.twig", "/opt/lampp/htdocs/SymfonyPets/src/pets/WebBundle/Resources/views/usuaris/index.html.twig");
    }
}
