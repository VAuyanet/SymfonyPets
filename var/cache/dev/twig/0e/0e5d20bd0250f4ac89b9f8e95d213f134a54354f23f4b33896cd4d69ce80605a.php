<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ae0deb548ed99a91ddc8a7df55d0a1acc3ea1fc685b45c5178e2688d3a04071f extends Twig_Template
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
        $__internal_5edf34d096776624b86e248cc712017dfebcbcafd197fbe272004d192d3a5065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5edf34d096776624b86e248cc712017dfebcbcafd197fbe272004d192d3a5065->enter($__internal_5edf34d096776624b86e248cc712017dfebcbcafd197fbe272004d192d3a5065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_dbcad5f1ad4fb9269bdbf25366061b15af8ec0da05322bda383c915e640291ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbcad5f1ad4fb9269bdbf25366061b15af8ec0da05322bda383c915e640291ed->enter($__internal_dbcad5f1ad4fb9269bdbf25366061b15af8ec0da05322bda383c915e640291ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_5edf34d096776624b86e248cc712017dfebcbcafd197fbe272004d192d3a5065->leave($__internal_5edf34d096776624b86e248cc712017dfebcbcafd197fbe272004d192d3a5065_prof);

        
        $__internal_dbcad5f1ad4fb9269bdbf25366061b15af8ec0da05322bda383c915e640291ed->leave($__internal_dbcad5f1ad4fb9269bdbf25366061b15af8ec0da05322bda383c915e640291ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
