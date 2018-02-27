<?php

/* petsWebBundle:Default:index.html.twig */
class __TwigTemplate_ec6c0b74ff1d2de34092af573676c76257d3471d379e8d96283f90bc75abb651 extends Twig_Template
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
        $__internal_2fdc8dcf94194494b46009bae343dd9710a83d4d94367c5cab8e62ea900b5df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fdc8dcf94194494b46009bae343dd9710a83d4d94367c5cab8e62ea900b5df5->enter($__internal_2fdc8dcf94194494b46009bae343dd9710a83d4d94367c5cab8e62ea900b5df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:Default:index.html.twig"));

        $__internal_79c76aa24b2e21f85fd02fd373a4b3b84fdc9642e5d9db4ba6289c066dea1f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c76aa24b2e21f85fd02fd373a4b3b84fdc9642e5d9db4ba6289c066dea1f45->enter($__internal_79c76aa24b2e21f85fd02fd373a4b3b84fdc9642e5d9db4ba6289c066dea1f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "petsWebBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_2fdc8dcf94194494b46009bae343dd9710a83d4d94367c5cab8e62ea900b5df5->leave($__internal_2fdc8dcf94194494b46009bae343dd9710a83d4d94367c5cab8e62ea900b5df5_prof);

        
        $__internal_79c76aa24b2e21f85fd02fd373a4b3b84fdc9642e5d9db4ba6289c066dea1f45->leave($__internal_79c76aa24b2e21f85fd02fd373a4b3b84fdc9642e5d9db4ba6289c066dea1f45_prof);

    }

    public function getTemplateName()
    {
        return "petsWebBundle:Default:index.html.twig";
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
", "petsWebBundle:Default:index.html.twig", "/opt/lampp/htdocs/Symfony/SymfonyPets/src/pets/WebBundle/Resources/views/Default/index.html.twig");
    }
}
