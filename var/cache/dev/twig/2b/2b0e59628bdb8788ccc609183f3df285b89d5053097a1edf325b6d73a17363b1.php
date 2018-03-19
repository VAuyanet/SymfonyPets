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
        $__internal_3ccbe91b324873698312be181135a4302f933cc7094a90f0b557af9dd51f9a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ccbe91b324873698312be181135a4302f933cc7094a90f0b557af9dd51f9a14->enter($__internal_3ccbe91b324873698312be181135a4302f933cc7094a90f0b557af9dd51f9a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2533731fda73556a000835226bdd882e2ff2c57131f28ba35fb4a615d54ac667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2533731fda73556a000835226bdd882e2ff2c57131f28ba35fb4a615d54ac667->enter($__internal_2533731fda73556a000835226bdd882e2ff2c57131f28ba35fb4a615d54ac667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ccbe91b324873698312be181135a4302f933cc7094a90f0b557af9dd51f9a14->leave($__internal_3ccbe91b324873698312be181135a4302f933cc7094a90f0b557af9dd51f9a14_prof);

        
        $__internal_2533731fda73556a000835226bdd882e2ff2c57131f28ba35fb4a615d54ac667->leave($__internal_2533731fda73556a000835226bdd882e2ff2c57131f28ba35fb4a615d54ac667_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75270c7b6e972d6c41d021cf9d3f86d4f22b6df574837ea165a6445709fdc474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75270c7b6e972d6c41d021cf9d3f86d4f22b6df574837ea165a6445709fdc474->enter($__internal_75270c7b6e972d6c41d021cf9d3f86d4f22b6df574837ea165a6445709fdc474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c1443cdf285db2a9b6a8d5ee1974ad81fc12295c9905982f1bedcf8c31d80c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1443cdf285db2a9b6a8d5ee1974ad81fc12295c9905982f1bedcf8c31d80c9a->enter($__internal_c1443cdf285db2a9b6a8d5ee1974ad81fc12295c9905982f1bedcf8c31d80c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c1443cdf285db2a9b6a8d5ee1974ad81fc12295c9905982f1bedcf8c31d80c9a->leave($__internal_c1443cdf285db2a9b6a8d5ee1974ad81fc12295c9905982f1bedcf8c31d80c9a_prof);

        
        $__internal_75270c7b6e972d6c41d021cf9d3f86d4f22b6df574837ea165a6445709fdc474->leave($__internal_75270c7b6e972d6c41d021cf9d3f86d4f22b6df574837ea165a6445709fdc474_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d1c7231129f103617ac3d4b7a1fd1898b4af9d21361ffd3150add9702bf934e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1c7231129f103617ac3d4b7a1fd1898b4af9d21361ffd3150add9702bf934e->enter($__internal_3d1c7231129f103617ac3d4b7a1fd1898b4af9d21361ffd3150add9702bf934e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dde3a66f9b5687aba62e88c31edbcd35b1de01eec8db350f333d23088ee1aac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde3a66f9b5687aba62e88c31edbcd35b1de01eec8db350f333d23088ee1aac3->enter($__internal_dde3a66f9b5687aba62e88c31edbcd35b1de01eec8db350f333d23088ee1aac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dde3a66f9b5687aba62e88c31edbcd35b1de01eec8db350f333d23088ee1aac3->leave($__internal_dde3a66f9b5687aba62e88c31edbcd35b1de01eec8db350f333d23088ee1aac3_prof);

        
        $__internal_3d1c7231129f103617ac3d4b7a1fd1898b4af9d21361ffd3150add9702bf934e->leave($__internal_3d1c7231129f103617ac3d4b7a1fd1898b4af9d21361ffd3150add9702bf934e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3c6d47bbac9aa20a269e9a8d177d7415567a470fab404b0bf50bdfd89bb416b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3c6d47bbac9aa20a269e9a8d177d7415567a470fab404b0bf50bdfd89bb416b->enter($__internal_b3c6d47bbac9aa20a269e9a8d177d7415567a470fab404b0bf50bdfd89bb416b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_773472fa7e676f99e2a75cba115911c9d041159d8a04a67ba27d64c03b47a866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773472fa7e676f99e2a75cba115911c9d041159d8a04a67ba27d64c03b47a866->enter($__internal_773472fa7e676f99e2a75cba115911c9d041159d8a04a67ba27d64c03b47a866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_773472fa7e676f99e2a75cba115911c9d041159d8a04a67ba27d64c03b47a866->leave($__internal_773472fa7e676f99e2a75cba115911c9d041159d8a04a67ba27d64c03b47a866_prof);

        
        $__internal_b3c6d47bbac9aa20a269e9a8d177d7415567a470fab404b0bf50bdfd89bb416b->leave($__internal_b3c6d47bbac9aa20a269e9a8d177d7415567a470fab404b0bf50bdfd89bb416b_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/SymfonyPets/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
