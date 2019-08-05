<?php

$json = '[{"nome":"Glen","idade":46},{"nome":"Maria","idade":12}]';

$data = json_decode($json, true);

var_dump($data);