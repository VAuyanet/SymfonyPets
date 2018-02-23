<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_fffaeb478b2987bb7b5ece03ef70a3245bd567e390a16a1695e114d312304c59 extends Twig_Template
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
        $__internal_971ed458efe097d77d8f4498a4515eb1a369f409091386a589de165a54e92143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971ed458efe097d77d8f4498a4515eb1a369f409091386a589de165a54e92143->enter($__internal_971ed458efe097d77d8f4498a4515eb1a369f409091386a589de165a54e92143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_3f6ca0f29674a35472b56f4b6e13cc8ac3011adfdaf01eac50226886bbcab41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6ca0f29674a35472b56f4b6e13cc8ac3011adfdaf01eac50226886bbcab41b->enter($__internal_3f6ca0f29674a35472b56f4b6e13cc8ac3011adfdaf01eac50226886bbcab41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_971ed458efe097d77d8f4498a4515eb1a369f409091386a589de165a54e92143->leave($__internal_971ed458efe097d77d8f4498a4515eb1a369f409091386a589de165a54e92143_prof);

        
        $__internal_3f6ca0f29674a35472b56f4b6e13cc8ac3011adfdaf01eac50226886bbcab41b->leave($__internal_3f6ca0f29674a35472b56f4b6e13cc8ac3011adfdaf01eac50226886bbcab41b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
