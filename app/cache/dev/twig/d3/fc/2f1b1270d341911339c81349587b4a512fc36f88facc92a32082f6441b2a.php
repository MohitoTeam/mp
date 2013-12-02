<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_d3fc2f1b1270d341911339c81349587b4a512fc36f88facc92a32082f6441b2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <!--
    <div class=\"row-fluid\">
        <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
        echo "\" method=\"GET\"  class=\"form-search\">
            <div class=\"input-append\">
                <input type=\"text\" name=\"q\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "html", null, true);
        echo "\" class=\"input-large search-query\"/>
                <button type=\"submit\" class=\"btn\">Search</button>
            </div>
        </form>
    </div>
    -->

    <h1>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        echo "</h1>

    ";
        // line 30
        if ((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))) {
            // line 31
            echo "        ";
            $context["count"] = 0;
            // line 32
            echo "        <div class=\"row-fluid\">

            ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 35
                echo "                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 36
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                        // line 37
                        echo "                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                        // line 38
                        echo "                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "
                ";
                // line 40
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 41
                    echo "                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 42
                        echo "                        ";
                        if ((((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) % 3) == 0)) {
                            // line 43
                            echo "                            </div><div class=\"row-fluid\">
                        ";
                        }
                        // line 45
                        echo "
                        ";
                        // line 46
                        $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
                        // line 47
                        echo "                        ";
                        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")))) {
                            // line 48
                            echo "                            ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "admin_code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code"), "page" => 0, "per_page" => 10)));
                            // line 55
                            echo "
                        ";
                        }
                        // line 57
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "                ";
                }
                // line 59
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        </div>
    ";
        }
        // line 62
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  688 => 230,  683 => 227,  677 => 224,  672 => 222,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  548 => 165,  523 => 156,  517 => 155,  506 => 151,  495 => 148,  491 => 147,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  434 => 130,  417 => 126,  408 => 124,  390 => 125,  376 => 119,  369 => 115,  363 => 114,  328 => 74,  317 => 70,  271 => 55,  261 => 50,  231 => 33,  180 => 120,  225 => 89,  207 => 83,  126 => 55,  344 => 97,  340 => 95,  338 => 76,  315 => 90,  295 => 88,  259 => 70,  190 => 175,  53 => 20,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  608 => 202,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 149,  483 => 144,  473 => 150,  467 => 148,  465 => 139,  462 => 138,  451 => 141,  446 => 139,  428 => 129,  425 => 128,  414 => 125,  403 => 121,  400 => 161,  388 => 124,  358 => 113,  349 => 103,  347 => 102,  339 => 100,  336 => 99,  332 => 75,  324 => 92,  319 => 71,  311 => 89,  307 => 66,  297 => 84,  282 => 83,  277 => 81,  233 => 62,  223 => 58,  200 => 55,  184 => 48,  178 => 119,  146 => 63,  118 => 46,  306 => 140,  303 => 65,  300 => 138,  292 => 87,  286 => 80,  280 => 82,  274 => 77,  263 => 104,  248 => 115,  236 => 35,  216 => 28,  192 => 87,  70 => 25,  690 => 231,  681 => 203,  676 => 401,  674 => 223,  664 => 218,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  613 => 204,  605 => 201,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  557 => 169,  550 => 326,  542 => 163,  538 => 319,  531 => 312,  526 => 157,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 132,  486 => 145,  481 => 143,  466 => 280,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 127,  415 => 247,  361 => 107,  346 => 196,  331 => 187,  326 => 93,  304 => 174,  291 => 82,  272 => 76,  257 => 49,  242 => 112,  213 => 86,  152 => 99,  114 => 88,  104 => 40,  97 => 31,  318 => 144,  316 => 121,  299 => 64,  293 => 61,  288 => 85,  284 => 106,  281 => 105,  279 => 104,  275 => 57,  265 => 125,  256 => 102,  253 => 47,  250 => 67,  228 => 59,  222 => 30,  215 => 54,  210 => 22,  197 => 79,  174 => 64,  153 => 48,  113 => 37,  76 => 13,  181 => 47,  175 => 118,  161 => 38,  137 => 60,  110 => 36,  194 => 177,  186 => 111,  165 => 76,  160 => 68,  150 => 55,  134 => 58,  129 => 42,  65 => 26,  124 => 52,  399 => 158,  396 => 159,  394 => 118,  383 => 224,  377 => 115,  371 => 113,  366 => 210,  359 => 140,  357 => 139,  352 => 138,  348 => 136,  345 => 97,  342 => 101,  335 => 93,  329 => 95,  325 => 73,  321 => 92,  308 => 118,  289 => 59,  276 => 102,  270 => 100,  267 => 156,  260 => 123,  249 => 98,  245 => 97,  239 => 94,  237 => 86,  234 => 84,  232 => 136,  218 => 77,  202 => 73,  191 => 76,  188 => 174,  185 => 173,  170 => 78,  167 => 60,  155 => 66,  148 => 97,  127 => 32,  90 => 18,  84 => 16,  77 => 28,  34 => 15,  100 => 41,  81 => 15,  58 => 22,  20 => 1,  23 => 18,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 136,  444 => 132,  440 => 148,  437 => 131,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 170,  398 => 119,  393 => 158,  387 => 152,  384 => 122,  381 => 121,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 112,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 68,  309 => 117,  305 => 115,  298 => 173,  294 => 111,  285 => 84,  283 => 58,  278 => 86,  268 => 54,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 95,  229 => 73,  220 => 56,  214 => 98,  177 => 63,  169 => 69,  140 => 44,  132 => 43,  128 => 58,  107 => 24,  61 => 28,  273 => 101,  269 => 75,  254 => 69,  243 => 65,  240 => 86,  238 => 36,  235 => 74,  230 => 105,  227 => 32,  224 => 102,  221 => 88,  219 => 29,  217 => 87,  208 => 57,  204 => 73,  179 => 72,  159 => 49,  143 => 29,  135 => 48,  119 => 39,  102 => 42,  71 => 32,  67 => 24,  63 => 4,  59 => 165,  28 => 14,  201 => 182,  196 => 52,  183 => 121,  171 => 102,  166 => 110,  163 => 68,  158 => 67,  156 => 36,  151 => 61,  142 => 58,  138 => 93,  136 => 58,  121 => 91,  117 => 89,  105 => 27,  91 => 38,  62 => 25,  49 => 18,  38 => 18,  94 => 86,  89 => 37,  85 => 28,  75 => 34,  68 => 31,  56 => 81,  87 => 17,  31 => 3,  25 => 12,  21 => 12,  24 => 13,  26 => 14,  93 => 68,  88 => 37,  78 => 26,  46 => 19,  44 => 21,  27 => 14,  19 => 11,  79 => 35,  72 => 54,  69 => 53,  47 => 19,  40 => 19,  37 => 12,  22 => 12,  246 => 90,  157 => 64,  145 => 60,  139 => 59,  131 => 25,  123 => 48,  120 => 47,  115 => 45,  111 => 43,  108 => 42,  101 => 40,  98 => 39,  96 => 31,  83 => 82,  74 => 78,  66 => 30,  55 => 21,  52 => 20,  50 => 25,  43 => 21,  41 => 14,  35 => 11,  32 => 16,  29 => 15,  209 => 95,  203 => 278,  199 => 80,  193 => 51,  189 => 71,  187 => 75,  182 => 84,  176 => 45,  173 => 112,  168 => 60,  164 => 109,  162 => 70,  154 => 66,  149 => 62,  147 => 46,  144 => 45,  141 => 94,  133 => 55,  130 => 57,  125 => 40,  122 => 44,  116 => 43,  112 => 47,  109 => 44,  106 => 35,  103 => 41,  99 => 26,  95 => 20,  92 => 19,  86 => 33,  82 => 36,  80 => 29,  73 => 7,  64 => 184,  60 => 24,  57 => 27,  54 => 26,  51 => 21,  48 => 67,  45 => 18,  42 => 17,  39 => 16,  36 => 19,  33 => 16,  30 => 14,);
    }
}
