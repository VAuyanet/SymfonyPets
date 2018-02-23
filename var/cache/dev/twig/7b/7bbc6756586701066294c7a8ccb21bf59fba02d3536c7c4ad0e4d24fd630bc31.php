<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6d0f50cba474bfec7fecf72838ccc16de71bea2a7b088bceb8b45da9ee452166 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c43138dacd9e211404e612536162d4e4569f25145e2046e0912019cbd761f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c43138dacd9e211404e612536162d4e4569f25145e2046e0912019cbd761f73->enter($__internal_0c43138dacd9e211404e612536162d4e4569f25145e2046e0912019cbd761f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e603a8b3be9507590a525c16f3d72eea3801346dabe9816c46788f77b426fbdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e603a8b3be9507590a525c16f3d72eea3801346dabe9816c46788f77b426fbdb->enter($__internal_e603a8b3be9507590a525c16f3d72eea3801346dabe9816c46788f77b426fbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0c43138dacd9e211404e612536162d4e4569f25145e2046e0912019cbd761f73->leave($__internal_0c43138dacd9e211404e612536162d4e4569f25145e2046e0912019cbd761f73_prof);

        
        $__internal_e603a8b3be9507590a525c16f3d72eea3801346dabe9816c46788f77b426fbdb->leave($__internal_e603a8b3be9507590a525c16f3d72eea3801346dabe9816c46788f77b426fbdb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3ff329d5259675a7ea16ec8fb45e679e33f9385898b0a09a2a8589ef5ac79d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ff329d5259675a7ea16ec8fb45e679e33f9385898b0a09a2a8589ef5ac79d4->enter($__internal_a3ff329d5259675a7ea16ec8fb45e679e33f9385898b0a09a2a8589ef5ac79d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c164e68c905ac1182dba8814160d4fe247ce773b9bc43d31baebd7a1c370d8f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c164e68c905ac1182dba8814160d4fe247ce773b9bc43d31baebd7a1c370d8f7->enter($__internal_c164e68c905ac1182dba8814160d4fe247ce773b9bc43d31baebd7a1c370d8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c164e68c905ac1182dba8814160d4fe247ce773b9bc43d31baebd7a1c370d8f7->leave($__internal_c164e68c905ac1182dba8814160d4fe247ce773b9bc43d31baebd7a1c370d8f7_prof);

        
        $__internal_a3ff329d5259675a7ea16ec8fb45e679e33f9385898b0a09a2a8589ef5ac79d4->leave($__internal_a3ff329d5259675a7ea16ec8fb45e679e33f9385898b0a09a2a8589ef5ac79d4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
