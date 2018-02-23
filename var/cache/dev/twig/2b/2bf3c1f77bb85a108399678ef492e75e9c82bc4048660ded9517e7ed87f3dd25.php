<?php

/* VallbonaWebBundle:Default:index.html.twig */
class __TwigTemplate_f74e0e8a9ab82934ef0d9cf6de47acc17c979430e7613ba3cea9baa82c1992ef extends Twig_Template
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
        $__internal_327d272a1196c1519749b1b526986263ae1a8475c95aece48e584b06643fbe59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_327d272a1196c1519749b1b526986263ae1a8475c95aece48e584b06643fbe59->enter($__internal_327d272a1196c1519749b1b526986263ae1a8475c95aece48e584b06643fbe59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        $__internal_53415743ebcb4c980e799bfffed15c66ea822dc0dd8d0eb3d95e81785153e238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53415743ebcb4c980e799bfffed15c66ea822dc0dd8d0eb3d95e81785153e238->enter($__internal_53415743ebcb4c980e799bfffed15c66ea822dc0dd8d0eb3d95e81785153e238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_327d272a1196c1519749b1b526986263ae1a8475c95aece48e584b06643fbe59->leave($__internal_327d272a1196c1519749b1b526986263ae1a8475c95aece48e584b06643fbe59_prof);

        
        $__internal_53415743ebcb4c980e799bfffed15c66ea822dc0dd8d0eb3d95e81785153e238->leave($__internal_53415743ebcb4c980e799bfffed15c66ea822dc0dd8d0eb3d95e81785153e238_prof);

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
