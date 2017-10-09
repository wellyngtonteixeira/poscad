<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1f9d97c675f70e9c43c470474d792c83d55c06e4224d44e8a030c5d8ba7b6da0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7199995c10ae7d61b30d032357ccb3a56ba17e3f2779faa7d2468301a87d6e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7199995c10ae7d61b30d032357ccb3a56ba17e3f2779faa7d2468301a87d6e7b->enter($__internal_7199995c10ae7d61b30d032357ccb3a56ba17e3f2779faa7d2468301a87d6e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3c964517b04777344dc018e80ccf5f04385a80f261e253a1ff3643c2269c3d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c964517b04777344dc018e80ccf5f04385a80f261e253a1ff3643c2269c3d75->enter($__internal_3c964517b04777344dc018e80ccf5f04385a80f261e253a1ff3643c2269c3d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7199995c10ae7d61b30d032357ccb3a56ba17e3f2779faa7d2468301a87d6e7b->leave($__internal_7199995c10ae7d61b30d032357ccb3a56ba17e3f2779faa7d2468301a87d6e7b_prof);

        
        $__internal_3c964517b04777344dc018e80ccf5f04385a80f261e253a1ff3643c2269c3d75->leave($__internal_3c964517b04777344dc018e80ccf5f04385a80f261e253a1ff3643c2269c3d75_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7e11165c7b1182138abab1c97d3e6f4b0a35661bafdb3a2490b3793b0618774d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e11165c7b1182138abab1c97d3e6f4b0a35661bafdb3a2490b3793b0618774d->enter($__internal_7e11165c7b1182138abab1c97d3e6f4b0a35661bafdb3a2490b3793b0618774d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c2cfaf7637e4cd58d3f19dc7f75e43ff81916d0c3bb0dabf000c3e182d07a123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2cfaf7637e4cd58d3f19dc7f75e43ff81916d0c3bb0dabf000c3e182d07a123->enter($__internal_c2cfaf7637e4cd58d3f19dc7f75e43ff81916d0c3bb0dabf000c3e182d07a123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c2cfaf7637e4cd58d3f19dc7f75e43ff81916d0c3bb0dabf000c3e182d07a123->leave($__internal_c2cfaf7637e4cd58d3f19dc7f75e43ff81916d0c3bb0dabf000c3e182d07a123_prof);

        
        $__internal_7e11165c7b1182138abab1c97d3e6f4b0a35661bafdb3a2490b3793b0618774d->leave($__internal_7e11165c7b1182138abab1c97d3e6f4b0a35661bafdb3a2490b3793b0618774d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\poscad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
