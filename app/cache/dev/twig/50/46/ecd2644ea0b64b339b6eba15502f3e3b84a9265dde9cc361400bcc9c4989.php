<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_5046ecd2644ea0b64b339b6eba15502f3e3b84a9265dde9cc361400bcc9c4989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("knp_menu.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "request"), "method");
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        // line 10
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "roles"), "method")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 14
                    $context["display"] = $this->env->getExtension('security')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) : ("")))) {
            // line 19
            $context["active"] = false;
            // line 20
            if (((( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "admin"), "method")) && $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "admin"), "method"), "hasroute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "admin"), "method"), "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "admin"), "method"), "code", array())))) {
                // line 21
                $context["active"] = true;
            } elseif (($this->getAttribute(            // line 22
(isset($context["item"]) ? $context["item"] : null), "route", array(), "any", true, true) && ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "_route"), "method") == $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array())))) {
                // line 23
                $context["active"] = true;
            } else {
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    if ( !(isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        // line 26
                        if (((( !twig_test_empty($this->getAttribute($context["child"], "getExtra", array(0 => "admin"), "method")) && $this->getAttribute($this->getAttribute($context["child"], "getExtra", array(0 => "admin"), "method"), "hasroute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($context["child"], "getExtra", array(0 => "admin"), "method"), "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($this->getAttribute($context["child"], "getExtra", array(0 => "admin"), "method"), "code", array())))) {
                            // line 27
                            $context["active"] = true;
                        } elseif (($this->getAttribute(                        // line 28
$context["child"], "route", array(), "any", true, true) && ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "_route"), "method") == $this->getAttribute($context["child"], "route", array())))) {
                            // line 29
                            $context["active"] = true;
                        }
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 34
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) == 1)) {
                // line 35
                $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setAttribute", array(0 => "class", 1 => trim(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method") . " treeview"))), "method");
            }
            // line 37
            if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                // line 38
                $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setAttribute", array(0 => "class", 1 => trim(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method") . " active"))), "method");
                // line 39
                $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => trim(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            }
            // line 42
            $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => trim(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 43
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
    }

    // line 47
    public function block_linkElement($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        ob_start();
        // line 49
        echo "        ";
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translationdomain", 1 => "messages"), "method");
        // line 50
        echo "        ";
        $context["icon"] = ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\"></i>") : (""));
        // line 51
        echo "        ";
        $context["is_link"] = true;
        // line 52
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 56
    public function block_spanElement($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        ob_start();
        // line 58
        echo "
        <a href=\"#\">
            ";
        // line 60
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "label_catalogue"), "method");
        // line 61
        echo "            ";
        $context["icon"] = (((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "icon"), "method"))) : (""))) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method")) : (""));
        // line 62
        echo "            ";
        echo ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")))) : (""));
        echo "
            ";
        // line 63
        $this->displayParentBlock("spanElement", $context, $blocks);
        echo "
            <i class=\"fa pull-right fa-angle-left\"></i>
        </a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 69
    public function block_label($context, array $blocks = array())
    {
        if ((array_key_exists("is_link", $context) && (isset($context["is_link"]) ? $context["is_link"] : $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 69,  170 => 63,  165 => 62,  162 => 61,  160 => 60,  156 => 58,  153 => 57,  150 => 56,  142 => 52,  139 => 51,  136 => 50,  133 => 49,  130 => 48,  127 => 47,  119 => 43,  117 => 42,  114 => 39,  112 => 38,  110 => 37,  107 => 35,  105 => 34,  96 => 29,  94 => 28,  92 => 27,  90 => 26,  85 => 25,  82 => 23,  80 => 22,  78 => 21,  76 => 20,  74 => 19,  72 => 18,  64 => 14,  59 => 13,  57 => 12,  55 => 10,  52 => 9,  47 => 6,  45 => 5,  43 => 4,  40 => 3,  11 => 1,);
    }
}
