<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_975d12f5ed2ddb4482a15bae5c0e6b3fa491bfa0115d3e0e8f6a28c57bbeba33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6ba54aa5aa0376ba33a39aa3963dd19fe5c15f495d0798e90c2017de0eed8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6ba54aa5aa0376ba33a39aa3963dd19fe5c15f495d0798e90c2017de0eed8c0->enter($__internal_b6ba54aa5aa0376ba33a39aa3963dd19fe5c15f495d0798e90c2017de0eed8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9dc5168e6d933f943e55a0bc8e6033ee2edd868d61854840870f1d04d347dca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc5168e6d933f943e55a0bc8e6033ee2edd868d61854840870f1d04d347dca8->enter($__internal_9dc5168e6d933f943e55a0bc8e6033ee2edd868d61854840870f1d04d347dca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6ba54aa5aa0376ba33a39aa3963dd19fe5c15f495d0798e90c2017de0eed8c0->leave($__internal_b6ba54aa5aa0376ba33a39aa3963dd19fe5c15f495d0798e90c2017de0eed8c0_prof);

        
        $__internal_9dc5168e6d933f943e55a0bc8e6033ee2edd868d61854840870f1d04d347dca8->leave($__internal_9dc5168e6d933f943e55a0bc8e6033ee2edd868d61854840870f1d04d347dca8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e300613bb187a29c5534eb2e32b1e5a821904cb9ff5df2a296822e1d3bec2f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e300613bb187a29c5534eb2e32b1e5a821904cb9ff5df2a296822e1d3bec2f7->enter($__internal_5e300613bb187a29c5534eb2e32b1e5a821904cb9ff5df2a296822e1d3bec2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7a050c21a737cc87ac464877cdbdcee8430c181acb785081e9a8e7c28b3bdf49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a050c21a737cc87ac464877cdbdcee8430c181acb785081e9a8e7c28b3bdf49->enter($__internal_7a050c21a737cc87ac464877cdbdcee8430c181acb785081e9a8e7c28b3bdf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7a050c21a737cc87ac464877cdbdcee8430c181acb785081e9a8e7c28b3bdf49->leave($__internal_7a050c21a737cc87ac464877cdbdcee8430c181acb785081e9a8e7c28b3bdf49_prof);

        
        $__internal_5e300613bb187a29c5534eb2e32b1e5a821904cb9ff5df2a296822e1d3bec2f7->leave($__internal_5e300613bb187a29c5534eb2e32b1e5a821904cb9ff5df2a296822e1d3bec2f7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ba6dcfb13b5dee34581e6897a432dd96e998c6b8349c4974bc1efba098727e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba6dcfb13b5dee34581e6897a432dd96e998c6b8349c4974bc1efba098727e7->enter($__internal_6ba6dcfb13b5dee34581e6897a432dd96e998c6b8349c4974bc1efba098727e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63f855fe4d98ba5480a6318c694925474a1e070338eb92e30f26a35dce3b86c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f855fe4d98ba5480a6318c694925474a1e070338eb92e30f26a35dce3b86c4->enter($__internal_63f855fe4d98ba5480a6318c694925474a1e070338eb92e30f26a35dce3b86c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_63f855fe4d98ba5480a6318c694925474a1e070338eb92e30f26a35dce3b86c4->leave($__internal_63f855fe4d98ba5480a6318c694925474a1e070338eb92e30f26a35dce3b86c4_prof);

        
        $__internal_6ba6dcfb13b5dee34581e6897a432dd96e998c6b8349c4974bc1efba098727e7->leave($__internal_6ba6dcfb13b5dee34581e6897a432dd96e998c6b8349c4974bc1efba098727e7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d92d39ffad09ad84f29b6ff38decaaa98dfeb62b2732626e676573d4a0efc09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92d39ffad09ad84f29b6ff38decaaa98dfeb62b2732626e676573d4a0efc09d->enter($__internal_d92d39ffad09ad84f29b6ff38decaaa98dfeb62b2732626e676573d4a0efc09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93ac348a60ca20f2f36b65268e3fed88954bdeb79c9cb6e33319bc3a9d73f2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ac348a60ca20f2f36b65268e3fed88954bdeb79c9cb6e33319bc3a9d73f2f9->enter($__internal_93ac348a60ca20f2f36b65268e3fed88954bdeb79c9cb6e33319bc3a9d73f2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_93ac348a60ca20f2f36b65268e3fed88954bdeb79c9cb6e33319bc3a9d73f2f9->leave($__internal_93ac348a60ca20f2f36b65268e3fed88954bdeb79c9cb6e33319bc3a9d73f2f9_prof);

        
        $__internal_d92d39ffad09ad84f29b6ff38decaaa98dfeb62b2732626e676573d4a0efc09d->leave($__internal_d92d39ffad09ad84f29b6ff38decaaa98dfeb62b2732626e676573d4a0efc09d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\poscad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
