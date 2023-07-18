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

/* checkout/confirmation.html.twig */
class __TwigTemplate_923f847a386c93ba33e369674c5f3d04be072d337f1b0514b9fabc4c98a8d4ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/confirmation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/confirmation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "checkout/confirmation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"app\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <aside class=\"col-xs-12 col-lg-3\"></aside>

                <div class=\"col-xs-12 col-lg-9\">
                    <div class=\"row\">
                        <div class=\"top-bar\">
                            <h1 class=\"ml-2\">
                                Thank you for your purchase!
                            </h1>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"component-light purchase\">
                            <p>
                                To complete the transaction, please print this page and mail it together
                                with a check or money order to the following address:
                            </p>
                            <code>
                                1233 Nineties Dr.<br />
                                10443 Vintage City, MI<br />
                                USA
                            </code>
                            <p>
                                Your products will arrive within 12-24 weeks... or probably later.
                            </p>

                            <hr />

                            Order Details<br /><br />

                            <code>
                                Customer Name: ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 37, $this->source); })()), "customerName", [], "any", false, false, false, 37), "html", null, true);
        echo "<br />
                                Address: ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 38, $this->source); })()), "customerAddress", [], "any", false, false, false, 38), "html", null, true);
        echo "<br />
                                Zip: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 39, $this->source); })()), "customerZip", [], "any", false, false, false, 39), "html", null, true);
        echo "<br />
                                City: ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 40, $this->source); })()), "customerCity", [], "any", false, false, false, 40), "html", null, true);
        echo "<br />
                                Phone: ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 41, $this->source); })()), "customerPhone", [], "any", false, false, false, 41), "html", null, true);
        echo "<br />
                            </code>
                            <hr />

                            <table class=\"table\">
                                <tbody>
                                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 47, $this->source); })()), "purchaseItems", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            echo "                                        <tr>
                                            <td>
                                                ";
            // line 50
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 50))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
            }
            // line 51
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 54), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                \$";
            // line 57
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 57), "price", [], "any", false, false, false, 57) / 100), 2), "html", null, true);
            echo " <br />
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td class=\"flex-grow-1\">
                                            Total Price:
                                        </td>
                                        <td></td>
                                        <td>
                                        \$";
        // line 70
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 70, $this->source); })()) / 100), 2), "html", null, true);
        echo "
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "checkout/confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 70,  163 => 61,  153 => 57,  147 => 54,  140 => 51,  136 => 50,  132 => 48,  128 => 47,  119 => 41,  115 => 40,  111 => 39,  107 => 38,  103 => 37,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"app\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <aside class=\"col-xs-12 col-lg-3\"></aside>

                <div class=\"col-xs-12 col-lg-9\">
                    <div class=\"row\">
                        <div class=\"top-bar\">
                            <h1 class=\"ml-2\">
                                Thank you for your purchase!
                            </h1>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"component-light purchase\">
                            <p>
                                To complete the transaction, please print this page and mail it together
                                with a check or money order to the following address:
                            </p>
                            <code>
                                1233 Nineties Dr.<br />
                                10443 Vintage City, MI<br />
                                USA
                            </code>
                            <p>
                                Your products will arrive within 12-24 weeks... or probably later.
                            </p>

                            <hr />

                            Order Details<br /><br />

                            <code>
                                Customer Name: {{ purchase.customerName }}<br />
                                Address: {{ purchase.customerAddress }}<br />
                                Zip: {{ purchase.customerZip }}<br />
                                City: {{ purchase.customerCity }}<br />
                                Phone: {{ purchase.customerPhone }}<br />
                            </code>
                            <hr />

                            <table class=\"table\">
                                <tbody>
                                    {% for item in purchase.purchaseItems %}
                                        <tr>
                                            <td>
                                                {% if item.color is not null %}{{ item.color.name }}{% endif %}
                                                {{ item.product.name }}
                                            </td>
                                            <td>
                                                {{ item.quantity }}
                                            </td>
                                            <td>
                                                \${{ (item.product.price / 100)|number_format(2) }} <br />
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td class=\"flex-grow-1\">
                                            Total Price:
                                        </td>
                                        <td></td>
                                        <td>
                                        \${{ (totalPrice / 100)|number_format(2) }}
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "checkout/confirmation.html.twig", "/var/www/html/vue2/templates/checkout/confirmation.html.twig");
    }
}
