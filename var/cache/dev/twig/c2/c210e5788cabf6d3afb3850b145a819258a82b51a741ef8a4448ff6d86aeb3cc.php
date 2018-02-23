<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_32c4ecc7ef9e1b53178bf7484c3a1557f5df16907efff51a36fc403f4d07e911 extends Twig_Template
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
        $__internal_bd57c44c9925810a78f2e53784de23d96b8d1066a218329edaead4cc1037761f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd57c44c9925810a78f2e53784de23d96b8d1066a218329edaead4cc1037761f->enter($__internal_bd57c44c9925810a78f2e53784de23d96b8d1066a218329edaead4cc1037761f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_103f1e710ff31c915311d2947e621ff589c345c2b1e304092c8ede2f55a70bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103f1e710ff31c915311d2947e621ff589c345c2b1e304092c8ede2f55a70bc9->enter($__internal_103f1e710ff31c915311d2947e621ff589c345c2b1e304092c8ede2f55a70bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_bd57c44c9925810a78f2e53784de23d96b8d1066a218329edaead4cc1037761f->leave($__internal_bd57c44c9925810a78f2e53784de23d96b8d1066a218329edaead4cc1037761f_prof);

        
        $__internal_103f1e710ff31c915311d2947e621ff589c345c2b1e304092c8ede2f55a70bc9->leave($__internal_103f1e710ff31c915311d2947e621ff589c345c2b1e304092c8ede2f55a70bc9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
