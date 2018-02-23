<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_68f8a600a97daab33526f76ef500b32f261595419993e3dba667d3bdc4d891bd extends Twig_Template
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
        $__internal_6ce6ae04c262cf036b2d3a093033c57cd42adac4c0ce07bb5fc31308b5d0e6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce6ae04c262cf036b2d3a093033c57cd42adac4c0ce07bb5fc31308b5d0e6aa->enter($__internal_6ce6ae04c262cf036b2d3a093033c57cd42adac4c0ce07bb5fc31308b5d0e6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_c6f208fa3abd5f1b1ae1ad70ca96865d4c628213d3f6d1192a0d99626c1c04fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f208fa3abd5f1b1ae1ad70ca96865d4c628213d3f6d1192a0d99626c1c04fc->enter($__internal_c6f208fa3abd5f1b1ae1ad70ca96865d4c628213d3f6d1192a0d99626c1c04fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6ce6ae04c262cf036b2d3a093033c57cd42adac4c0ce07bb5fc31308b5d0e6aa->leave($__internal_6ce6ae04c262cf036b2d3a093033c57cd42adac4c0ce07bb5fc31308b5d0e6aa_prof);

        
        $__internal_c6f208fa3abd5f1b1ae1ad70ca96865d4c628213d3f6d1192a0d99626c1c04fc->leave($__internal_c6f208fa3abd5f1b1ae1ad70ca96865d4c628213d3f6d1192a0d99626c1c04fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
