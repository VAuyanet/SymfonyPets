<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_14d3d8ba891d22e8095fdf5e384162de2c41e69ac79c94734c896b2ad67e0f47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9568c4b8834e81024e6a6697e817dce5d3e438aec3f2a97c0fd8cb40d21ae3b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9568c4b8834e81024e6a6697e817dce5d3e438aec3f2a97c0fd8cb40d21ae3b5->enter($__internal_9568c4b8834e81024e6a6697e817dce5d3e438aec3f2a97c0fd8cb40d21ae3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_381d87b4a967588165de530f9ffbde9859e6b203a8995a0c2cfcac204aa07f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381d87b4a967588165de530f9ffbde9859e6b203a8995a0c2cfcac204aa07f5c->enter($__internal_381d87b4a967588165de530f9ffbde9859e6b203a8995a0c2cfcac204aa07f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9568c4b8834e81024e6a6697e817dce5d3e438aec3f2a97c0fd8cb40d21ae3b5->leave($__internal_9568c4b8834e81024e6a6697e817dce5d3e438aec3f2a97c0fd8cb40d21ae3b5_prof);

        
        $__internal_381d87b4a967588165de530f9ffbde9859e6b203a8995a0c2cfcac204aa07f5c->leave($__internal_381d87b4a967588165de530f9ffbde9859e6b203a8995a0c2cfcac204aa07f5c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_69b174297dd98e67e62eb66dc39d5214b40db774b514d73cd5face3e09b428e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b174297dd98e67e62eb66dc39d5214b40db774b514d73cd5face3e09b428e1->enter($__internal_69b174297dd98e67e62eb66dc39d5214b40db774b514d73cd5face3e09b428e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5695d9e9cae4ff1b55dee5a4c9fdd634547ef786279f68e66bdf60ac1f036774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5695d9e9cae4ff1b55dee5a4c9fdd634547ef786279f68e66bdf60ac1f036774->enter($__internal_5695d9e9cae4ff1b55dee5a4c9fdd634547ef786279f68e66bdf60ac1f036774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5695d9e9cae4ff1b55dee5a4c9fdd634547ef786279f68e66bdf60ac1f036774->leave($__internal_5695d9e9cae4ff1b55dee5a4c9fdd634547ef786279f68e66bdf60ac1f036774_prof);

        
        $__internal_69b174297dd98e67e62eb66dc39d5214b40db774b514d73cd5face3e09b428e1->leave($__internal_69b174297dd98e67e62eb66dc39d5214b40db774b514d73cd5face3e09b428e1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_86e3a5a6fb1f93047199f530d879f19b4b794fa71576c55617b4d3ec82584779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e3a5a6fb1f93047199f530d879f19b4b794fa71576c55617b4d3ec82584779->enter($__internal_86e3a5a6fb1f93047199f530d879f19b4b794fa71576c55617b4d3ec82584779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d7c4d0455030b0e616206b40d267cf8acdd373d36992a9964ec2c9ffacc17b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7c4d0455030b0e616206b40d267cf8acdd373d36992a9964ec2c9ffacc17b4->enter($__internal_9d7c4d0455030b0e616206b40d267cf8acdd373d36992a9964ec2c9ffacc17b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9d7c4d0455030b0e616206b40d267cf8acdd373d36992a9964ec2c9ffacc17b4->leave($__internal_9d7c4d0455030b0e616206b40d267cf8acdd373d36992a9964ec2c9ffacc17b4_prof);

        
        $__internal_86e3a5a6fb1f93047199f530d879f19b4b794fa71576c55617b4d3ec82584779->leave($__internal_86e3a5a6fb1f93047199f530d879f19b4b794fa71576c55617b4d3ec82584779_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_804447c804f8c80742163962aa50e56ec2a78c84ba634f65f2fc5b4dd32ebb01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_804447c804f8c80742163962aa50e56ec2a78c84ba634f65f2fc5b4dd32ebb01->enter($__internal_804447c804f8c80742163962aa50e56ec2a78c84ba634f65f2fc5b4dd32ebb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa30b73321180dd477f607b04825926b86b8868b47702d4b9c319a46baf4ace9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa30b73321180dd477f607b04825926b86b8868b47702d4b9c319a46baf4ace9->enter($__internal_aa30b73321180dd477f607b04825926b86b8868b47702d4b9c319a46baf4ace9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_aa30b73321180dd477f607b04825926b86b8868b47702d4b9c319a46baf4ace9->leave($__internal_aa30b73321180dd477f607b04825926b86b8868b47702d4b9c319a46baf4ace9_prof);

        
        $__internal_804447c804f8c80742163962aa50e56ec2a78c84ba634f65f2fc5b4dd32ebb01->leave($__internal_804447c804f8c80742163962aa50e56ec2a78c84ba634f65f2fc5b4dd32ebb01_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
