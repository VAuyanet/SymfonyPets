<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f072bb457faad82d262e89df58c07aa48caa41f94a16c80213dd0012d72fe0ce extends Twig_Template
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
        $__internal_861025011a86f63f02fe4e1200e15d94370be4251ca591368a6159bcdb71f163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861025011a86f63f02fe4e1200e15d94370be4251ca591368a6159bcdb71f163->enter($__internal_861025011a86f63f02fe4e1200e15d94370be4251ca591368a6159bcdb71f163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_d7a0429025a8be6631b95686e7535174137e0ccf8a5a933682c97415c8df070c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a0429025a8be6631b95686e7535174137e0ccf8a5a933682c97415c8df070c->enter($__internal_d7a0429025a8be6631b95686e7535174137e0ccf8a5a933682c97415c8df070c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_861025011a86f63f02fe4e1200e15d94370be4251ca591368a6159bcdb71f163->leave($__internal_861025011a86f63f02fe4e1200e15d94370be4251ca591368a6159bcdb71f163_prof);

        
        $__internal_d7a0429025a8be6631b95686e7535174137e0ccf8a5a933682c97415c8df070c->leave($__internal_d7a0429025a8be6631b95686e7535174137e0ccf8a5a933682c97415c8df070c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
