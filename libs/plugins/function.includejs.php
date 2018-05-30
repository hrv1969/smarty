<?php
/**
 * Undocumented function
 *
 * @param [type] $params
 * @return void
 */

function smarty_function_includejs($params, $smarty)
{
    if (!isset($params["file"])) {
        return;
    }
    $f = dirname($smarty->source->filepath) . "/" . $params["file"];

    if (file_exists($f)) {
        $ret = "<script type=\"text/javascript\" language=\"javascript\">";
        $ret .= file_get_contents($f);
        $ret .= "</script>";
    }

    return $ret;
}
