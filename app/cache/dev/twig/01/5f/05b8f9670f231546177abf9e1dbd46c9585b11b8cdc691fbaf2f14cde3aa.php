<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_015f05b8f9670f231546177abf9e1dbd46c9585b11b8cdc691fbaf2f14cde3aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig");

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"icon-ok\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"icon-remove\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view_group"]) ? $context["view_group"] : $this->getContext($context, "view_group")), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show"), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  513 => 160,  500 => 157,  488 => 153,  477 => 150,  470 => 135,  463 => 133,  460 => 132,  449 => 123,  441 => 105,  426 => 102,  419 => 98,  410 => 96,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  333 => 117,  226 => 67,  205 => 59,  172 => 52,  370 => 100,  367 => 131,  343 => 91,  330 => 87,  327 => 86,  320 => 84,  313 => 82,  310 => 81,  302 => 114,  296 => 111,  287 => 72,  262 => 63,  12 => 34,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  688 => 230,  683 => 227,  677 => 224,  672 => 222,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  548 => 165,  523 => 156,  517 => 161,  506 => 151,  495 => 155,  491 => 147,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  434 => 130,  417 => 126,  408 => 124,  390 => 125,  376 => 119,  369 => 136,  363 => 114,  328 => 74,  317 => 70,  271 => 66,  261 => 50,  231 => 33,  180 => 104,  225 => 89,  207 => 83,  126 => 55,  344 => 97,  340 => 90,  338 => 76,  315 => 83,  295 => 88,  259 => 70,  190 => 175,  53 => 18,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  608 => 202,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 173,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 149,  483 => 144,  473 => 150,  467 => 134,  465 => 139,  462 => 138,  451 => 141,  446 => 122,  428 => 129,  425 => 128,  414 => 125,  403 => 121,  400 => 161,  388 => 107,  358 => 113,  349 => 103,  347 => 118,  339 => 100,  336 => 99,  332 => 88,  324 => 116,  319 => 71,  311 => 89,  307 => 115,  297 => 84,  282 => 80,  277 => 68,  233 => 62,  223 => 66,  200 => 55,  184 => 48,  178 => 119,  146 => 63,  118 => 49,  306 => 140,  303 => 65,  300 => 113,  292 => 87,  286 => 80,  280 => 79,  274 => 77,  263 => 104,  248 => 115,  236 => 35,  216 => 25,  192 => 55,  70 => 29,  690 => 231,  681 => 203,  676 => 401,  674 => 223,  664 => 218,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  613 => 204,  605 => 201,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  557 => 177,  550 => 326,  542 => 163,  538 => 319,  531 => 312,  526 => 164,  518 => 307,  514 => 306,  509 => 304,  504 => 158,  492 => 132,  486 => 145,  481 => 143,  466 => 280,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 127,  415 => 97,  361 => 127,  346 => 92,  331 => 187,  326 => 93,  304 => 79,  291 => 109,  272 => 76,  257 => 61,  242 => 112,  213 => 86,  152 => 63,  114 => 50,  104 => 43,  97 => 41,  318 => 144,  316 => 121,  299 => 64,  293 => 75,  288 => 108,  284 => 106,  281 => 105,  279 => 104,  275 => 77,  265 => 64,  256 => 102,  253 => 47,  250 => 67,  228 => 59,  222 => 30,  215 => 54,  210 => 22,  197 => 56,  174 => 53,  153 => 48,  113 => 46,  76 => 35,  181 => 47,  175 => 118,  161 => 38,  137 => 47,  110 => 45,  194 => 177,  186 => 54,  165 => 76,  160 => 48,  150 => 58,  134 => 58,  129 => 56,  65 => 29,  124 => 43,  399 => 158,  396 => 159,  394 => 118,  383 => 224,  377 => 82,  371 => 113,  366 => 210,  359 => 140,  357 => 125,  352 => 121,  348 => 136,  345 => 97,  342 => 101,  335 => 93,  329 => 95,  325 => 73,  321 => 92,  308 => 118,  289 => 59,  276 => 102,  270 => 100,  267 => 156,  260 => 62,  249 => 70,  245 => 97,  239 => 94,  237 => 86,  234 => 84,  232 => 136,  218 => 77,  202 => 73,  191 => 76,  188 => 21,  185 => 20,  170 => 78,  167 => 60,  155 => 66,  148 => 44,  127 => 34,  90 => 38,  84 => 36,  77 => 34,  34 => 16,  100 => 36,  81 => 36,  58 => 25,  20 => 11,  23 => 12,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 132,  440 => 148,  437 => 131,  435 => 258,  430 => 103,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 95,  402 => 170,  398 => 119,  393 => 158,  387 => 152,  384 => 122,  381 => 121,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 68,  309 => 117,  305 => 115,  298 => 173,  294 => 111,  285 => 81,  283 => 70,  278 => 86,  268 => 54,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 63,  169 => 51,  140 => 41,  132 => 57,  128 => 44,  107 => 48,  61 => 27,  273 => 101,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 36,  235 => 74,  230 => 105,  227 => 32,  224 => 102,  221 => 88,  219 => 29,  217 => 87,  208 => 60,  204 => 73,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 31,  102 => 43,  71 => 32,  67 => 19,  63 => 31,  59 => 27,  28 => 14,  201 => 57,  196 => 52,  183 => 121,  171 => 102,  166 => 50,  163 => 49,  158 => 67,  156 => 36,  151 => 45,  142 => 42,  138 => 93,  136 => 39,  121 => 52,  117 => 49,  105 => 44,  91 => 39,  62 => 28,  49 => 23,  38 => 19,  94 => 40,  89 => 42,  85 => 37,  75 => 31,  68 => 30,  56 => 27,  87 => 38,  31 => 15,  25 => 13,  21 => 11,  24 => 13,  26 => 14,  93 => 40,  88 => 37,  78 => 36,  46 => 22,  44 => 20,  27 => 14,  19 => 11,  79 => 34,  72 => 30,  69 => 33,  47 => 22,  40 => 19,  37 => 17,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 51,  131 => 45,  123 => 33,  120 => 48,  115 => 47,  111 => 41,  108 => 45,  101 => 46,  98 => 42,  96 => 44,  83 => 36,  74 => 33,  66 => 32,  55 => 18,  52 => 23,  50 => 20,  43 => 20,  41 => 20,  35 => 17,  32 => 14,  29 => 15,  209 => 24,  203 => 278,  199 => 80,  193 => 51,  189 => 71,  187 => 75,  182 => 84,  176 => 102,  173 => 112,  168 => 60,  164 => 54,  162 => 70,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 94,  133 => 51,  130 => 35,  125 => 46,  122 => 45,  116 => 30,  112 => 47,  109 => 45,  106 => 35,  103 => 44,  99 => 45,  95 => 37,  92 => 43,  86 => 37,  82 => 38,  80 => 35,  73 => 34,  64 => 27,  60 => 27,  57 => 27,  54 => 25,  51 => 23,  48 => 22,  45 => 21,  42 => 20,  39 => 18,  36 => 18,  33 => 16,  30 => 15,);
    }
}
