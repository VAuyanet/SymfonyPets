<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ccf06df31639b7c9b2857bbf3c5e82ca65ad8846bad8b03705b504d691c84a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_23ded560e98c284abdb0fbba7d7c2a4117496bf160b75fcb1f50bee953264733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ded560e98c284abdb0fbba7d7c2a4117496bf160b75fcb1f50bee953264733->enter($__internal_23ded560e98c284abdb0fbba7d7c2a4117496bf160b75fcb1f50bee953264733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6163f7df14fd04f44387d47cdf063c028940b962d12e3e04a04552431113a356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6163f7df14fd04f44387d47cdf063c028940b962d12e3e04a04552431113a356->enter($__internal_6163f7df14fd04f44387d47cdf063c028940b962d12e3e04a04552431113a356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23ded560e98c284abdb0fbba7d7c2a4117496bf160b75fcb1f50bee953264733->leave($__internal_23ded560e98c284abdb0fbba7d7c2a4117496bf160b75fcb1f50bee953264733_prof);

        
        $__internal_6163f7df14fd04f44387d47cdf063c028940b962d12e3e04a04552431113a356->leave($__internal_6163f7df14fd04f44387d47cdf063c028940b962d12e3e04a04552431113a356_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43aa95bea120fbde0e0d6402d9ecc629b433e15d3a5a03e61c6c1079dc4d0dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43aa95bea120fbde0e0d6402d9ecc629b433e15d3a5a03e61c6c1079dc4d0dc5->enter($__internal_43aa95bea120fbde0e0d6402d9ecc629b433e15d3a5a03e61c6c1079dc4d0dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9ae2bfaa2edecf706edd7e63c00e008e0fef1cf06993bcb9e60dc68dbcffdbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae2bfaa2edecf706edd7e63c00e008e0fef1cf06993bcb9e60dc68dbcffdbf2->enter($__internal_9ae2bfaa2edecf706edd7e63c00e008e0fef1cf06993bcb9e60dc68dbcffdbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9ae2bfaa2edecf706edd7e63c00e008e0fef1cf06993bcb9e60dc68dbcffdbf2->leave($__internal_9ae2bfaa2edecf706edd7e63c00e008e0fef1cf06993bcb9e60dc68dbcffdbf2_prof);

        
        $__internal_43aa95bea120fbde0e0d6402d9ecc629b433e15d3a5a03e61c6c1079dc4d0dc5->leave($__internal_43aa95bea120fbde0e0d6402d9ecc629b433e15d3a5a03e61c6c1079dc4d0dc5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0049af3548c8b2102d6a54a68703de246e6f9a7eae861acecadcf64d09b29dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0049af3548c8b2102d6a54a68703de246e6f9a7eae861acecadcf64d09b29dd3->enter($__internal_0049af3548c8b2102d6a54a68703de246e6f9a7eae861acecadcf64d09b29dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f0df7b5607e074913d86485456056541c9e5c805f04a5e2270e2f5fadeb9e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0df7b5607e074913d86485456056541c9e5c805f04a5e2270e2f5fadeb9e07->enter($__internal_4f0df7b5607e074913d86485456056541c9e5c805f04a5e2270e2f5fadeb9e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4f0df7b5607e074913d86485456056541c9e5c805f04a5e2270e2f5fadeb9e07->leave($__internal_4f0df7b5607e074913d86485456056541c9e5c805f04a5e2270e2f5fadeb9e07_prof);

        
        $__internal_0049af3548c8b2102d6a54a68703de246e6f9a7eae861acecadcf64d09b29dd3->leave($__internal_0049af3548c8b2102d6a54a68703de246e6f9a7eae861acecadcf64d09b29dd3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5da9cd98ec459a38441cd095cac8bffaddace792114012818bdd59e828b588fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da9cd98ec459a38441cd095cac8bffaddace792114012818bdd59e828b588fc->enter($__internal_5da9cd98ec459a38441cd095cac8bffaddace792114012818bdd59e828b588fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bddc224d0a6470375441615e02f29094fd466f38a5f5bbc74daacebc79e34f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bddc224d0a6470375441615e02f29094fd466f38a5f5bbc74daacebc79e34f23->enter($__internal_bddc224d0a6470375441615e02f29094fd466f38a5f5bbc74daacebc79e34f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_bddc224d0a6470375441615e02f29094fd466f38a5f5bbc74daacebc79e34f23->leave($__internal_bddc224d0a6470375441615e02f29094fd466f38a5f5bbc74daacebc79e34f23_prof);

        
        $__internal_5da9cd98ec459a38441cd095cac8bffaddace792114012818bdd59e828b588fc->leave($__internal_5da9cd98ec459a38441cd095cac8bffaddace792114012818bdd59e828b588fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
