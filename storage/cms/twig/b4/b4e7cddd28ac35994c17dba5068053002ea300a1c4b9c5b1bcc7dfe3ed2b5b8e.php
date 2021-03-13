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

/* D:\Kamenev_at_cms/themes/kamenev/partials/partners.htm */
class __TwigTemplate_3746c11ee4ff366a44129b6fb750d7c184912a09ae01583ab838611adca78890 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 8, "if" => 9);
        $filters = array("escape" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape'],
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
        $context["partners"] = twig_get_attribute($this->env, $this->source, ($context["partnerList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        echo "<section class=\"partners section\">
    <div class=\"container container-gutter\">
        <h2 class=\"sub-title\">Партнеры</h2>
        <div class=\"partners__block\">
            <div class=\"partners__item partners__item-left\">
                <div class=\"partners__slider slide-arrows\">
                    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
            // line 9
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["partner"], "orientation", [], "any", false, false, true, 9) == 2)) {
                // line 10
                echo "                        <div class=\"partners__img\">
                            <img src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partner"], "image", [], "any", false, false, true, 11), "thumb", [0 => 715, 1 => 420, 2 => ["mode" => "auto", "quality" => 75]], "method", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "\" alt=\"partners\">
                        </div>
                        ";
            }
            // line 14
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                </div>

            </div>
            <div class=\"partners__item partners__item-right\">
                <div class=\"partners__slider slide-arrows\">
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
            // line 21
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["partner"], "orientation", [], "any", false, false, true, 21) == 1)) {
                // line 22
                echo "                            <div class=\"partners__img partners__img__horizontal\">
                                <img src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partner"], "image", [], "any", false, false, true, 23), "thumb", [0 => 225, 1 => 420, 2 => ["mode" => "auto", "quality" => 75]], "method", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "\" alt=\"partners\">
                            </div>
                        ";
            }
            // line 26
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "   
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\Kamenev_at_cms/themes/kamenev/partials/partners.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 26,  111 => 23,  108 => 22,  105 => 21,  101 => 20,  94 => 15,  88 => 14,  82 => 11,  79 => 10,  76 => 9,  72 => 8,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set partners = partnerList.records %}
<section class=\"partners section\">
    <div class=\"container container-gutter\">
        <h2 class=\"sub-title\">Партнеры</h2>
        <div class=\"partners__block\">
            <div class=\"partners__item partners__item-left\">
                <div class=\"partners__slider slide-arrows\">
                    {% for partner in partners %}
                        {% if partner.orientation == 2 %}
                        <div class=\"partners__img\">
                            <img src=\"{{ partner.image.thumb(715, 420, {mode:'auto',quality:75}) }}\" alt=\"partners\">
                        </div>
                        {% endif %}
                    {% endfor %}
                </div>

            </div>
            <div class=\"partners__item partners__item-right\">
                <div class=\"partners__slider slide-arrows\">
                    {% for partner in partners %}
                        {% if partner.orientation == 1 %}
                            <div class=\"partners__img partners__img__horizontal\">
                                <img src=\"{{ partner.image.thumb(225, 420, {mode:'auto',quality:75}) }}\" alt=\"partners\">
                            </div>
                        {% endif %}
                    {% endfor %}   
                </div>
            </div>
        </div>
    </div>
</section>", "D:\\Kamenev_at_cms/themes/kamenev/partials/partners.htm", "");
    }
}
