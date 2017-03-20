<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5c8a93f9279c071eb1993a6e7156b7eaf9453bd2282a2e26b1b2b32c701fc34e extends Twig_Template
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
        $__internal_bbd700a5cb70cafec22c6f95480d689c2f11b184239b9adb3f3d92e235be3289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbd700a5cb70cafec22c6f95480d689c2f11b184239b9adb3f3d92e235be3289->enter($__internal_bbd700a5cb70cafec22c6f95480d689c2f11b184239b9adb3f3d92e235be3289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_62b68af3208d3378d1a0bed06f1caaba997e17e871c25ca57639c6b1881647e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b68af3208d3378d1a0bed06f1caaba997e17e871c25ca57639c6b1881647e8->enter($__internal_62b68af3208d3378d1a0bed06f1caaba997e17e871c25ca57639c6b1881647e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bbd700a5cb70cafec22c6f95480d689c2f11b184239b9adb3f3d92e235be3289->leave($__internal_bbd700a5cb70cafec22c6f95480d689c2f11b184239b9adb3f3d92e235be3289_prof);

        
        $__internal_62b68af3208d3378d1a0bed06f1caaba997e17e871c25ca57639c6b1881647e8->leave($__internal_62b68af3208d3378d1a0bed06f1caaba997e17e871c25ca57639c6b1881647e8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cecc2dd24b6c749e0736f1cbce3ddfb5af4c6a36096cf842982e8959e205b0c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cecc2dd24b6c749e0736f1cbce3ddfb5af4c6a36096cf842982e8959e205b0c8->enter($__internal_cecc2dd24b6c749e0736f1cbce3ddfb5af4c6a36096cf842982e8959e205b0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5328b9e790e17b676afa10bdcde3296316e4636cc5dcbf91483cb9570ed3d3d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5328b9e790e17b676afa10bdcde3296316e4636cc5dcbf91483cb9570ed3d3d9->enter($__internal_5328b9e790e17b676afa10bdcde3296316e4636cc5dcbf91483cb9570ed3d3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5328b9e790e17b676afa10bdcde3296316e4636cc5dcbf91483cb9570ed3d3d9->leave($__internal_5328b9e790e17b676afa10bdcde3296316e4636cc5dcbf91483cb9570ed3d3d9_prof);

        
        $__internal_cecc2dd24b6c749e0736f1cbce3ddfb5af4c6a36096cf842982e8959e205b0c8->leave($__internal_cecc2dd24b6c749e0736f1cbce3ddfb5af4c6a36096cf842982e8959e205b0c8_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
