<?php

function foo($i) {
  echo "$i\n";
  foo($i + 1);
}

$i = xdebug_get_stack_depth();
ini_set("hhvm.xdebug-not-done.max_nesting_level", $i + 3);
echo "$i\n";
foo($i + 1);
