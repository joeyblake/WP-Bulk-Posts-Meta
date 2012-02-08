<?php
#
# Place into this file all functions that must exist in the global scope.
# Good examples of this include template functions. Bad examples include
# anything that could otherwise be scoped to your plugin, e.g., action
# and filter hooks.
#
# Also, if you want to make your global functionality pluggable
# (overridable by the user's functions.php or by other plugins), make sure
# to wrap your functions in a call to function_exists('your_function_name').
#
# @see http://php.net/manual/en/function.function-exists.php
#

if (!function_exists('is_awesome')):

function is_awesome() {
  return true;
}


endif; // END is_awesome