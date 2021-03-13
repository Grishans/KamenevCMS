<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\Kamenev_at_cms/themes/kamenev/partials/wedding.htm */
class __TwigTemplate_a31a1ee09e4be441dff27ba8dfa442f7080284bc1adaee9d2b1e2d8220e069f6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 1, "for" => 6);
        $filters = array("escape" => 8, "raw" => 9, "replace" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'raw', 'replace'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["services"] = twig_get_attribute($this->env, $this->source, ($context["serviceList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        echo "<section class=\"wedding section\">
    <div class=\"container\">
        <div class=\"wedding__block\">
            <div class=\"wedding__sl-info slide-arrows\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 7
            echo "                    <div class=\"wedding__sl-text\">
                        <h2>";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</h2>
                        <p>";
            // line 9
            echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["service"], "desc", [], "any", false, false, true, 9), 9, $this->source), ["<p>" => "", "</p>" => ""]);
            echo "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            </div>
            <div class=\"wedding__sl\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 15
            echo "                    <div class=\"wedding__sl-content\">
                        <div class=\"img\">
                            <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "image_1", [], "any", false, false, true, 17), "path", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "\" alt=\"wedding\">
                        </div>
                        <div class=\"img\">
                            <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "image_2", [], "any", false, false, true, 20), "path", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\" alt=\"wedding\">
                        </div>
                        <div class=\"img\">
                            <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "image_3", [], "any", false, false, true, 23), "path", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\" alt=\"wedding\">
                        </div>
                        <h2>";
            // line 25
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["service"], "category", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "</h2>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\Kamenev_at_cms/themes/kamenev/partials/wedding.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 28,  119 => 25,  114 => 23,  108 => 20,  102 => 17,  98 => 15,  94 => 14,  90 => 12,  81 => 9,  77 => 8,  74 => 7,  70 => 6,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set services = serviceList.records %}
<section class=\"wedding section\">
    <div class=\"container\">
        <div class=\"wedding__block\">
            <div class=\"wedding__sl-info slide-arrows\">
                {% for service in services %}
                    <div class=\"wedding__sl-text\">
                        <h2>{{ service.title }}</h2>
                        <p>{{ service.desc|replace({'<p>':'','</p>':''})|raw }}</p>
                    </div>
                {% endfor %}
            </div>
            <div class=\"wedding__sl\">
                {% for service in services %}
                    <div class=\"wedding__sl-content\">
                        <div class=\"img\">
                            <img src=\"{{ service.image_1.path }}\" alt=\"wedding\">
                        </div>
                        <div class=\"img\">
                            <img src=\"{{ service.image_2.path }}\" alt=\"wedding\">
                        </div>
                        <div class=\"img\">
                            <img src=\"{{ service.image_3.path }}\" alt=\"wedding\">
                        </div>
                        <h2>{{ service.category }}</h2>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
</section>", "D:\\Kamenev_at_cms/themes/kamenev/partials/wedding.htm", "");
    }
}
