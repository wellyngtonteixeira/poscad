<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_33727356872726efe1c610ed9d3acd7eed028a45157b20cc4d3ac9278833493f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de916530049f60aa8d2fea4af2b13a03195ea3d962e4fe54fd7f4d664de9883b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de916530049f60aa8d2fea4af2b13a03195ea3d962e4fe54fd7f4d664de9883b->enter($__internal_de916530049f60aa8d2fea4af2b13a03195ea3d962e4fe54fd7f4d664de9883b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_099be60681a19ae6d7aff72077c4cefab5b84bcf63ff524fa24a06597b613972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099be60681a19ae6d7aff72077c4cefab5b84bcf63ff524fa24a06597b613972->enter($__internal_099be60681a19ae6d7aff72077c4cefab5b84bcf63ff524fa24a06597b613972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de916530049f60aa8d2fea4af2b13a03195ea3d962e4fe54fd7f4d664de9883b->leave($__internal_de916530049f60aa8d2fea4af2b13a03195ea3d962e4fe54fd7f4d664de9883b_prof);

        
        $__internal_099be60681a19ae6d7aff72077c4cefab5b84bcf63ff524fa24a06597b613972->leave($__internal_099be60681a19ae6d7aff72077c4cefab5b84bcf63ff524fa24a06597b613972_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4fb72b1204fce27bd3fa5e8211cdc9348a7f716a11eac182e104b6d2e010601d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb72b1204fce27bd3fa5e8211cdc9348a7f716a11eac182e104b6d2e010601d->enter($__internal_4fb72b1204fce27bd3fa5e8211cdc9348a7f716a11eac182e104b6d2e010601d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_64756bbaeb9c33bca555eea631834a513a6ade1054d2b33fcc9b4bc45e8c483d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64756bbaeb9c33bca555eea631834a513a6ade1054d2b33fcc9b4bc45e8c483d->enter($__internal_64756bbaeb9c33bca555eea631834a513a6ade1054d2b33fcc9b4bc45e8c483d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_64756bbaeb9c33bca555eea631834a513a6ade1054d2b33fcc9b4bc45e8c483d->leave($__internal_64756bbaeb9c33bca555eea631834a513a6ade1054d2b33fcc9b4bc45e8c483d_prof);

        
        $__internal_4fb72b1204fce27bd3fa5e8211cdc9348a7f716a11eac182e104b6d2e010601d->leave($__internal_4fb72b1204fce27bd3fa5e8211cdc9348a7f716a11eac182e104b6d2e010601d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05a058702794a8bbd558b2c9cd81bbd7859864c76a0abd38582116ece9b88d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a058702794a8bbd558b2c9cd81bbd7859864c76a0abd38582116ece9b88d50->enter($__internal_05a058702794a8bbd558b2c9cd81bbd7859864c76a0abd38582116ece9b88d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b4b9b2cfc66801f9415ef2f1189a12295ca4728a493cd2978ff9fc5acc2dddc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b9b2cfc66801f9415ef2f1189a12295ca4728a493cd2978ff9fc5acc2dddc8->enter($__internal_b4b9b2cfc66801f9415ef2f1189a12295ca4728a493cd2978ff9fc5acc2dddc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b4b9b2cfc66801f9415ef2f1189a12295ca4728a493cd2978ff9fc5acc2dddc8->leave($__internal_b4b9b2cfc66801f9415ef2f1189a12295ca4728a493cd2978ff9fc5acc2dddc8_prof);

        
        $__internal_05a058702794a8bbd558b2c9cd81bbd7859864c76a0abd38582116ece9b88d50->leave($__internal_05a058702794a8bbd558b2c9cd81bbd7859864c76a0abd38582116ece9b88d50_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74b79f967e6854d7e1275cd0cc90c818046ac976c168ff0947a8788c982f7b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b79f967e6854d7e1275cd0cc90c818046ac976c168ff0947a8788c982f7b35->enter($__internal_74b79f967e6854d7e1275cd0cc90c818046ac976c168ff0947a8788c982f7b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_943419c3783febb158f5c0dc86a3b445593f306df9b4b49ce55c14b1957f8da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943419c3783febb158f5c0dc86a3b445593f306df9b4b49ce55c14b1957f8da0->enter($__internal_943419c3783febb158f5c0dc86a3b445593f306df9b4b49ce55c14b1957f8da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_943419c3783febb158f5c0dc86a3b445593f306df9b4b49ce55c14b1957f8da0->leave($__internal_943419c3783febb158f5c0dc86a3b445593f306df9b4b49ce55c14b1957f8da0_prof);

        
        $__internal_74b79f967e6854d7e1275cd0cc90c818046ac976c168ff0947a8788c982f7b35->leave($__internal_74b79f967e6854d7e1275cd0cc90c818046ac976c168ff0947a8788c982f7b35_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\poscad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
