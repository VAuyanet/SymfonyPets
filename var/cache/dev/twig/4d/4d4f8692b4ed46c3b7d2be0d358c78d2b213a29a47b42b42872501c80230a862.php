<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c43000fe0a97536004bd1662cc95ba996ed7913a124e700c760bbe10eb132f97 extends Twig_Template
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
        $__internal_5d4454598a8f14a919651faa32c8b1fc6aab4b66e10ad4be8e89c70667f15cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4454598a8f14a919651faa32c8b1fc6aab4b66e10ad4be8e89c70667f15cc0->enter($__internal_5d4454598a8f14a919651faa32c8b1fc6aab4b66e10ad4be8e89c70667f15cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_9940f26ccc3105e7ecf42c28cc813857879a856860c461af26fe8ca8921f7127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9940f26ccc3105e7ecf42c28cc813857879a856860c461af26fe8ca8921f7127->enter($__internal_9940f26ccc3105e7ecf42c28cc813857879a856860c461af26fe8ca8921f7127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5d4454598a8f14a919651faa32c8b1fc6aab4b66e10ad4be8e89c70667f15cc0->leave($__internal_5d4454598a8f14a919651faa32c8b1fc6aab4b66e10ad4be8e89c70667f15cc0_prof);

        
        $__internal_9940f26ccc3105e7ecf42c28cc813857879a856860c461af26fe8ca8921f7127->leave($__internal_9940f26ccc3105e7ecf42c28cc813857879a856860c461af26fe8ca8921f7127_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
