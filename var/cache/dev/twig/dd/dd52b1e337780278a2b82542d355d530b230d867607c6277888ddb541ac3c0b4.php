<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8142be88f30ddc2e15c390a592bfe4d1edcf12b006788748e7c1a989bb635821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef640cf4f057dc369f7746628ec9ebb4a88aebe1195b9b724bc60b5ceed66d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef640cf4f057dc369f7746628ec9ebb4a88aebe1195b9b724bc60b5ceed66d4d->enter($__internal_ef640cf4f057dc369f7746628ec9ebb4a88aebe1195b9b724bc60b5ceed66d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cce4a80efd78cf0256c8c969a7a92e9c1acb706e624732005670b479a19c1241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce4a80efd78cf0256c8c969a7a92e9c1acb706e624732005670b479a19c1241->enter($__internal_cce4a80efd78cf0256c8c969a7a92e9c1acb706e624732005670b479a19c1241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ef640cf4f057dc369f7746628ec9ebb4a88aebe1195b9b724bc60b5ceed66d4d->leave($__internal_ef640cf4f057dc369f7746628ec9ebb4a88aebe1195b9b724bc60b5ceed66d4d_prof);

        
        $__internal_cce4a80efd78cf0256c8c969a7a92e9c1acb706e624732005670b479a19c1241->leave($__internal_cce4a80efd78cf0256c8c969a7a92e9c1acb706e624732005670b479a19c1241_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_560fa5e03fbafcc3d8d932e71037335300725fe2cb1e270a7aba26012bd89155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560fa5e03fbafcc3d8d932e71037335300725fe2cb1e270a7aba26012bd89155->enter($__internal_560fa5e03fbafcc3d8d932e71037335300725fe2cb1e270a7aba26012bd89155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2cbbcd52a30094b49197f15421cd1d3b7f204f68840fb6d4815f1e3923c91f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbbcd52a30094b49197f15421cd1d3b7f204f68840fb6d4815f1e3923c91f9c->enter($__internal_2cbbcd52a30094b49197f15421cd1d3b7f204f68840fb6d4815f1e3923c91f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2cbbcd52a30094b49197f15421cd1d3b7f204f68840fb6d4815f1e3923c91f9c->leave($__internal_2cbbcd52a30094b49197f15421cd1d3b7f204f68840fb6d4815f1e3923c91f9c_prof);

        
        $__internal_560fa5e03fbafcc3d8d932e71037335300725fe2cb1e270a7aba26012bd89155->leave($__internal_560fa5e03fbafcc3d8d932e71037335300725fe2cb1e270a7aba26012bd89155_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ecc2b9ff7fbfcf10afcc735593d94a10bd55e5c4cdb5d54a92461872a088edc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc2b9ff7fbfcf10afcc735593d94a10bd55e5c4cdb5d54a92461872a088edc9->enter($__internal_ecc2b9ff7fbfcf10afcc735593d94a10bd55e5c4cdb5d54a92461872a088edc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e3c057ce82a576cff2dfe5ed3661791936782c717011c4ec309de31911dabf1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c057ce82a576cff2dfe5ed3661791936782c717011c4ec309de31911dabf1f->enter($__internal_e3c057ce82a576cff2dfe5ed3661791936782c717011c4ec309de31911dabf1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e3c057ce82a576cff2dfe5ed3661791936782c717011c4ec309de31911dabf1f->leave($__internal_e3c057ce82a576cff2dfe5ed3661791936782c717011c4ec309de31911dabf1f_prof);

        
        $__internal_ecc2b9ff7fbfcf10afcc735593d94a10bd55e5c4cdb5d54a92461872a088edc9->leave($__internal_ecc2b9ff7fbfcf10afcc735593d94a10bd55e5c4cdb5d54a92461872a088edc9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d11bebcdb4143dbf07332da1db14117a46d7c582fa2c6e0640822c360208828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d11bebcdb4143dbf07332da1db14117a46d7c582fa2c6e0640822c360208828->enter($__internal_2d11bebcdb4143dbf07332da1db14117a46d7c582fa2c6e0640822c360208828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43695afb8e8fafbe8a17e768bf6102ca68fad63c989bd4ecb0d05d0a36d3ea52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43695afb8e8fafbe8a17e768bf6102ca68fad63c989bd4ecb0d05d0a36d3ea52->enter($__internal_43695afb8e8fafbe8a17e768bf6102ca68fad63c989bd4ecb0d05d0a36d3ea52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_43695afb8e8fafbe8a17e768bf6102ca68fad63c989bd4ecb0d05d0a36d3ea52->leave($__internal_43695afb8e8fafbe8a17e768bf6102ca68fad63c989bd4ecb0d05d0a36d3ea52_prof);

        
        $__internal_2d11bebcdb4143dbf07332da1db14117a46d7c582fa2c6e0640822c360208828->leave($__internal_2d11bebcdb4143dbf07332da1db14117a46d7c582fa2c6e0640822c360208828_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
