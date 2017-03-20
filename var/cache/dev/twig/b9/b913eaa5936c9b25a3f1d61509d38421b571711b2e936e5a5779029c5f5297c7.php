<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b36d2e6e19a9456289049e02c017f88943031e60768f7801a210a85b4b46e462 extends Twig_Template
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
        $__internal_01f50d7f4a918fe1c65f6b9ac0c33e8bb99b201c61f6c12a9a13ac6c2d5ab586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f50d7f4a918fe1c65f6b9ac0c33e8bb99b201c61f6c12a9a13ac6c2d5ab586->enter($__internal_01f50d7f4a918fe1c65f6b9ac0c33e8bb99b201c61f6c12a9a13ac6c2d5ab586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_86b97f13164d78537de404f1cbea3d45bb2fd56ed2ca98b77cc2f2c05f370c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b97f13164d78537de404f1cbea3d45bb2fd56ed2ca98b77cc2f2c05f370c53->enter($__internal_86b97f13164d78537de404f1cbea3d45bb2fd56ed2ca98b77cc2f2c05f370c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_01f50d7f4a918fe1c65f6b9ac0c33e8bb99b201c61f6c12a9a13ac6c2d5ab586->leave($__internal_01f50d7f4a918fe1c65f6b9ac0c33e8bb99b201c61f6c12a9a13ac6c2d5ab586_prof);

        
        $__internal_86b97f13164d78537de404f1cbea3d45bb2fd56ed2ca98b77cc2f2c05f370c53->leave($__internal_86b97f13164d78537de404f1cbea3d45bb2fd56ed2ca98b77cc2f2c05f370c53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
