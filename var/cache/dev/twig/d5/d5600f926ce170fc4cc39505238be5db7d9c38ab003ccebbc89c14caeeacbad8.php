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
        $__internal_537907f5b1711761e5d0eba8d945252c304e7eb9d7d008ae5f53287ae946b7d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537907f5b1711761e5d0eba8d945252c304e7eb9d7d008ae5f53287ae946b7d9->enter($__internal_537907f5b1711761e5d0eba8d945252c304e7eb9d7d008ae5f53287ae946b7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        $__internal_04bf304982ba8e67689d265357ff84205a43403455f6fa3b0584bca03fa6632e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04bf304982ba8e67689d265357ff84205a43403455f6fa3b0584bca03fa6632e->enter($__internal_04bf304982ba8e67689d265357ff84205a43403455f6fa3b0584bca03fa6632e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_537907f5b1711761e5d0eba8d945252c304e7eb9d7d008ae5f53287ae946b7d9->leave($__internal_537907f5b1711761e5d0eba8d945252c304e7eb9d7d008ae5f53287ae946b7d9_prof);

        
        $__internal_04bf304982ba8e67689d265357ff84205a43403455f6fa3b0584bca03fa6632e->leave($__internal_04bf304982ba8e67689d265357ff84205a43403455f6fa3b0584bca03fa6632e_prof);

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
