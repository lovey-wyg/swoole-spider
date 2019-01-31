<?php
/**
 * Created by PhpStorm.
 * User: wyg
 * Date: 2019/1/31
 * Time: 17:34
 */

require_once './vendor/autoload.php';

use Spider\Tool\Tool;

$number = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$numberTool = new Tool();

$num = $numberTool->sum($number);

echo $num;