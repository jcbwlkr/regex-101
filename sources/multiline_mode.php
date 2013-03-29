<?php

$regex = "
# This is a regex
.+
";

var_export(preg_match("/{$regex}/x", "Foobar"));
