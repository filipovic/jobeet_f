<?php

/* EnsJobeetBundle:Job:list.html.twig */
class __TwigTemplate_cb76beb96e3858173a8097859b0bd22f55eaa0517bc4a0c59623b3bc74cbe474 extends Twig_Template
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
        echo "<!-- src/Ens/JobeetBundle/Resources/views/Job/list.html.twig -->
<table class=\"jobs\">
  ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "jobs"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 4
            echo "    <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($this->getContext($context, "loop"), "index")), "html", null, true);
            echo "\">
      <td class=\"location\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "location"), "html", null, true);
            echo "</td>
      <td class=\"position\">
        <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "company" => $this->getAttribute($this->getContext($context, "entity"), "companyslug"), "location" => $this->getAttribute($this->getContext($context, "entity"), "locationslug"), "position" => $this->getAttribute($this->getContext($context, "entity"), "positionslug"))), "html", null, true);
            echo "\">
          ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "position"), "html", null, true);
            echo "
        </a>
      </td>
      <td class=\"company\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "company"), "html", null, true);
            echo "</td>
    </tr>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  60 => 11,  54 => 8,  50 => 7,  19 => 1,  225 => 83,  222 => 82,  218 => 14,  215 => 13,  208 => 11,  205 => 10,  200 => 6,  197 => 5,  186 => 99,  181 => 97,  173 => 92,  168 => 90,  160 => 84,  158 => 82,  154 => 80,  145 => 78,  141 => 77,  138 => 76,  129 => 74,  124 => 73,  119 => 57,  103 => 53,  99 => 52,  82 => 38,  78 => 37,  69 => 31,  59 => 24,  55 => 23,  45 => 5,  40 => 4,  35 => 10,  31 => 8,  23 => 3,  122 => 29,  106 => 54,  98 => 24,  95 => 23,  93 => 22,  90 => 21,  88 => 20,  79 => 16,  74 => 14,  68 => 11,  49 => 10,  46 => 9,  43 => 8,  37 => 13,  32 => 4,  29 => 5,);
    }
}
