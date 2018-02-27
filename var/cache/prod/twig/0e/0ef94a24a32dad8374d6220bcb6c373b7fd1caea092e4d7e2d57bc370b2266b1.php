<?php

/* petsWebBundle:Default:index.html.twig */
class __TwigTemplate_564b1cfdb370f2b0aa8db26b561c6cab09bf09593b31f37a9e85d9447a092d8b extends Twig_Template
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
        // line 1
        echo "Hello World!
";
    }

    public function getTemplateName()
    {
        return "petsWebBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "petsWebBundle:Default:index.html.twig", "/opt/lampp/htdocs/Symfony/SymfonyPets/src/pets/WebBundle/Resources/views/Default/index.html.twig");
    }
}
