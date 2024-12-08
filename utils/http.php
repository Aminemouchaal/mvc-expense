<?php
function get_input_vars(){
    global $_SERVER;
    $REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];
    global $_POST;
    global $_GET;

    $vars = $_POST ;
    foreach ($vars as $k=>$var){
        if (is_array($var)) continue;
        $var = stripslashes($var);
        $vars[$k] = trim($var);
    }

    $vars2 = $_GET ;
    foreach ($vars2 as $k=>$v){
        if (is_array($v)) continue;
        $v = stripslashes($v);
        $vars[$k] = trim($v);
    }

    return $vars;
}
?>
