<?php

/* VallbonaWebBundle:Default:index.html.twig */
class __TwigTemplate_7a8f24017402abb96c348b24a95fdf6ffa6cf34db3bab132771f37a80fafbcdf extends Twig_Template
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
        $__internal_8d0b5de6bae60e9fcd0920763875ed58931d36b0b5d8fb281b4d132bb097060d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d0b5de6bae60e9fcd0920763875ed58931d36b0b5d8fb281b4d132bb097060d->enter($__internal_8d0b5de6bae60e9fcd0920763875ed58931d36b0b5d8fb281b4d132bb097060d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        $__internal_cc7b50b6d2e57df56662c90208098268d17496a70d3200b6d6fd6d7572c58783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7b50b6d2e57df56662c90208098268d17496a70d3200b6d6fd6d7572c58783->enter($__internal_cc7b50b6d2e57df56662c90208098268d17496a70d3200b6d6fd6d7572c58783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_8d0b5de6bae60e9fcd0920763875ed58931d36b0b5d8fb281b4d132bb097060d->leave($__internal_8d0b5de6bae60e9fcd0920763875ed58931d36b0b5d8fb281b4d132bb097060d_prof);

        
        $__internal_cc7b50b6d2e57df56662c90208098268d17496a70d3200b6d6fd6d7572c58783->leave($__internal_cc7b50b6d2e57df56662c90208098268d17496a70d3200b6d6fd6d7572c58783_prof);

    }

    public function getTemplateName()
    {
        return "VallbonaWebBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "VallbonaWebBundle:Default:index.html.twig", "/opt/lampp/htdocs/projecteSymfony/src/Vallbona/WebBundle/Resources/views/Default/index.html.twig");
    }
}
