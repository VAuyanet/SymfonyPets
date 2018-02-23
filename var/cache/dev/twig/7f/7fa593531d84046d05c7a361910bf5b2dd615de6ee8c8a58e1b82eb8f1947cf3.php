<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ec416e03217a3aec189a9d755b2511ba70848f3dd3b036c5dc3f5ff39e9a9384 extends Twig_Template
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
        $__internal_989a2e62d699449fb3d42f2f078f8a836f613fccd9dd4b79d2a2492288371ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989a2e62d699449fb3d42f2f078f8a836f613fccd9dd4b79d2a2492288371ee6->enter($__internal_989a2e62d699449fb3d42f2f078f8a836f613fccd9dd4b79d2a2492288371ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_37c7723997802bbea2c3f3349dc2ed35a77d77dd9f3bedb4b96a3651f3beec8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c7723997802bbea2c3f3349dc2ed35a77d77dd9f3bedb4b96a3651f3beec8b->enter($__internal_37c7723997802bbea2c3f3349dc2ed35a77d77dd9f3bedb4b96a3651f3beec8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_989a2e62d699449fb3d42f2f078f8a836f613fccd9dd4b79d2a2492288371ee6->leave($__internal_989a2e62d699449fb3d42f2f078f8a836f613fccd9dd4b79d2a2492288371ee6_prof);

        
        $__internal_37c7723997802bbea2c3f3349dc2ed35a77d77dd9f3bedb4b96a3651f3beec8b->leave($__internal_37c7723997802bbea2c3f3349dc2ed35a77d77dd9f3bedb4b96a3651f3beec8b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
