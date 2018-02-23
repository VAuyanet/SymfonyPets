<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f099fc96f6c4bdc2627f4db5980f7bfd4bd3005352c87a19779e0587d7440481 extends Twig_Template
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
        $__internal_edbf91af396170a7b774906a3a68b7974cfdc9cd36253f151c797c153c931d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edbf91af396170a7b774906a3a68b7974cfdc9cd36253f151c797c153c931d02->enter($__internal_edbf91af396170a7b774906a3a68b7974cfdc9cd36253f151c797c153c931d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_ce1e7583c749e3ae8661207260b1338e0344f33f91e89392c32bbd354712e56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1e7583c749e3ae8661207260b1338e0344f33f91e89392c32bbd354712e56a->enter($__internal_ce1e7583c749e3ae8661207260b1338e0344f33f91e89392c32bbd354712e56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_edbf91af396170a7b774906a3a68b7974cfdc9cd36253f151c797c153c931d02->leave($__internal_edbf91af396170a7b774906a3a68b7974cfdc9cd36253f151c797c153c931d02_prof);

        
        $__internal_ce1e7583c749e3ae8661207260b1338e0344f33f91e89392c32bbd354712e56a->leave($__internal_ce1e7583c749e3ae8661207260b1338e0344f33f91e89392c32bbd354712e56a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
