<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_74404cfbaab62615167fa8295a48daeebaad5590d20ad9ca14845a1f5d98fa59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e043ae0874a859429f158118bf82916265e325ad7b46bbcdb65e08f83ab8619d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e043ae0874a859429f158118bf82916265e325ad7b46bbcdb65e08f83ab8619d->enter($__internal_e043ae0874a859429f158118bf82916265e325ad7b46bbcdb65e08f83ab8619d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_160b8b28c7d9aa3f8778f6c74a85bddc5d88762b94ca5e9e2ba48ee5dfedaacd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160b8b28c7d9aa3f8778f6c74a85bddc5d88762b94ca5e9e2ba48ee5dfedaacd->enter($__internal_160b8b28c7d9aa3f8778f6c74a85bddc5d88762b94ca5e9e2ba48ee5dfedaacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_e043ae0874a859429f158118bf82916265e325ad7b46bbcdb65e08f83ab8619d->leave($__internal_e043ae0874a859429f158118bf82916265e325ad7b46bbcdb65e08f83ab8619d_prof);

        
        $__internal_160b8b28c7d9aa3f8778f6c74a85bddc5d88762b94ca5e9e2ba48ee5dfedaacd->leave($__internal_160b8b28c7d9aa3f8778f6c74a85bddc5d88762b94ca5e9e2ba48ee5dfedaacd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
