<?php

header('Location: freeshot://authorize'.(!empty($_SERVER['QUERY_STRING'])?'?'.$_SERVER['QUERY_STRING']:''), true, '301');

?>
