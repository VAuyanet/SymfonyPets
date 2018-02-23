<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4988eb23707d8fdeb5a3076d68e58262a30b1e39da2d608b743765576fe38c49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_3c1434b1418939dc03ad3b8e9c53b201fa5a839485be33e9a0541ddd4578f5b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1434b1418939dc03ad3b8e9c53b201fa5a839485be33e9a0541ddd4578f5b9->enter($__internal_3c1434b1418939dc03ad3b8e9c53b201fa5a839485be33e9a0541ddd4578f5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_ecabb3c237d06166ea88b44de56e24532351bcf2d315e1e2bde34670d286a9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecabb3c237d06166ea88b44de56e24532351bcf2d315e1e2bde34670d286a9b0->enter($__internal_ecabb3c237d06166ea88b44de56e24532351bcf2d315e1e2bde34670d286a9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c1434b1418939dc03ad3b8e9c53b201fa5a839485be33e9a0541ddd4578f5b9->leave($__internal_3c1434b1418939dc03ad3b8e9c53b201fa5a839485be33e9a0541ddd4578f5b9_prof);

        
        $__internal_ecabb3c237d06166ea88b44de56e24532351bcf2d315e1e2bde34670d286a9b0->leave($__internal_ecabb3c237d06166ea88b44de56e24532351bcf2d315e1e2bde34670d286a9b0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_31aafe7f571efa7fbf533722d0d0300d7665a92a3f30104aed261d779de01f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31aafe7f571efa7fbf533722d0d0300d7665a92a3f30104aed261d779de01f47->enter($__internal_31aafe7f571efa7fbf533722d0d0300d7665a92a3f30104aed261d779de01f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31a6b9218e354cb2aebe5e90a278c8508a42b5c44cda7ea4d18fbd4c4cd0c30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a6b9218e354cb2aebe5e90a278c8508a42b5c44cda7ea4d18fbd4c4cd0c30d->enter($__internal_31a6b9218e354cb2aebe5e90a278c8508a42b5c44cda7ea4d18fbd4c4cd0c30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_31a6b9218e354cb2aebe5e90a278c8508a42b5c44cda7ea4d18fbd4c4cd0c30d->leave($__internal_31a6b9218e354cb2aebe5e90a278c8508a42b5c44cda7ea4d18fbd4c4cd0c30d_prof);

        
        $__internal_31aafe7f571efa7fbf533722d0d0300d7665a92a3f30104aed261d779de01f47->leave($__internal_31aafe7f571efa7fbf533722d0d0300d7665a92a3f30104aed261d779de01f47_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71e7104f184848312dbc26d4fb5f53d55dc15bab420fdb53c4f8547a5062ccf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e7104f184848312dbc26d4fb5f53d55dc15bab420fdb53c4f8547a5062ccf2->enter($__internal_71e7104f184848312dbc26d4fb5f53d55dc15bab420fdb53c4f8547a5062ccf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9121a367f909aebeee5ccfed20ed218d480ff0c0c9c841eb8a444a2b3bce0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9121a367f909aebeee5ccfed20ed218d480ff0c0c9c841eb8a444a2b3bce0aa->enter($__internal_b9121a367f909aebeee5ccfed20ed218d480ff0c0c9c841eb8a444a2b3bce0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b9121a367f909aebeee5ccfed20ed218d480ff0c0c9c841eb8a444a2b3bce0aa->leave($__internal_b9121a367f909aebeee5ccfed20ed218d480ff0c0c9c841eb8a444a2b3bce0aa_prof);

        
        $__internal_71e7104f184848312dbc26d4fb5f53d55dc15bab420fdb53c4f8547a5062ccf2->leave($__internal_71e7104f184848312dbc26d4fb5f53d55dc15bab420fdb53c4f8547a5062ccf2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
