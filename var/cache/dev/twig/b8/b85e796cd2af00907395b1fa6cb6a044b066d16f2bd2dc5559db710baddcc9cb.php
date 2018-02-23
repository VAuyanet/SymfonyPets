<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_49bb974e56e11c68bc338419765de7be76379401802c1623d8804632636b5b8c extends Twig_Template
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
        $__internal_b6d2c97301455bea6c805767ef42dda74b62a94970e001da4a346b30c9131acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d2c97301455bea6c805767ef42dda74b62a94970e001da4a346b30c9131acc->enter($__internal_b6d2c97301455bea6c805767ef42dda74b62a94970e001da4a346b30c9131acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_97bf4d375b0a8d2d9e6e364205279e3f9293030c8f370f3d6471620e6444e741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97bf4d375b0a8d2d9e6e364205279e3f9293030c8f370f3d6471620e6444e741->enter($__internal_97bf4d375b0a8d2d9e6e364205279e3f9293030c8f370f3d6471620e6444e741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_b6d2c97301455bea6c805767ef42dda74b62a94970e001da4a346b30c9131acc->leave($__internal_b6d2c97301455bea6c805767ef42dda74b62a94970e001da4a346b30c9131acc_prof);

        
        $__internal_97bf4d375b0a8d2d9e6e364205279e3f9293030c8f370f3d6471620e6444e741->leave($__internal_97bf4d375b0a8d2d9e6e364205279e3f9293030c8f370f3d6471620e6444e741_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
