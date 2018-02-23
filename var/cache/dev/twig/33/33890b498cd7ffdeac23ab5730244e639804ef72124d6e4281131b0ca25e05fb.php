<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3fd53ae1cbb15a96db84a39f8d5ffecc6917c0506d4403e3a5c6e3a20249a138 extends Twig_Template
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
        $__internal_8744e6c2fe1c54d1091ce952eea0aa2593c8595a7f7f7fc89af0c35997a28753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8744e6c2fe1c54d1091ce952eea0aa2593c8595a7f7f7fc89af0c35997a28753->enter($__internal_8744e6c2fe1c54d1091ce952eea0aa2593c8595a7f7f7fc89af0c35997a28753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6f2a04305213befe5f03c6b4acbcc1414e7600a9d2664cc399119ee777d3b8cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2a04305213befe5f03c6b4acbcc1414e7600a9d2664cc399119ee777d3b8cf->enter($__internal_6f2a04305213befe5f03c6b4acbcc1414e7600a9d2664cc399119ee777d3b8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8744e6c2fe1c54d1091ce952eea0aa2593c8595a7f7f7fc89af0c35997a28753->leave($__internal_8744e6c2fe1c54d1091ce952eea0aa2593c8595a7f7f7fc89af0c35997a28753_prof);

        
        $__internal_6f2a04305213befe5f03c6b4acbcc1414e7600a9d2664cc399119ee777d3b8cf->leave($__internal_6f2a04305213befe5f03c6b4acbcc1414e7600a9d2664cc399119ee777d3b8cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
