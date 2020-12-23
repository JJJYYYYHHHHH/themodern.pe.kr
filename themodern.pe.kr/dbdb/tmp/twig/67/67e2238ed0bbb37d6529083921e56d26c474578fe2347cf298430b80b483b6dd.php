<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* table/search/geom_func.twig */
class __TwigTemplate_a2a605aa77d8ad9b171dba47c9a28052de85c4c2f1a7f25f1632ddebe6ea3144 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "<td>
    ";
        // line 3
        $context["geom_types"] = PhpMyAdmin\Util::getGISDatatypes();
        // line 4
        echo "    ";
        if (twig_in_filter($this->getAttribute(($context["column_types"] ?? null), ($context["column_index"] ?? null), [], "array"), ($context["geom_types"] ?? null))) {
            // line 5
            echo "        <select class=\"geom_func\" name=\"geom_func[";
            echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
            echo "]\">
            ";
            // line 7
            echo "            ";
            $context["funcs"] = PhpMyAdmin\Util::getGISFunctions($this->getAttribute(($context["column_types"] ?? null), ($context["column_index"] ?? null), [], "array"), true, true);
            // line 8
            echo "
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["funcs"] ?? null));
            foreach ($context['_seq'] as $context["func_name"] => $context["func"]) {
                // line 10
                echo "                ";
                $context["name"] = (($this->getAttribute($context["func"], "display", [], "array", true, true)) ? ($this->getAttribute($context["func"], "display", [], "array")) : ($context["func_name"]));
                // line 11
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 12
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['func_name'], $context['func'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </select>
    ";
        } else {
            // line 17
            echo "        &nbsp;
    ";
        }
        // line 19
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "table/search/geom_func.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  74 => 17,  70 => 15,  61 => 12,  56 => 11,  53 => 10,  49 => 9,  46 => 8,  43 => 7,  38 => 5,  35 => 4,  33 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/search/geom_func.twig", "/jyhjyh777/www/dbdb/templates/table/search/geom_func.twig");
    }
}
