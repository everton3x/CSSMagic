<?php
if(isset($_GET['cor'])){
	$theme = $_GET['cor'];
}else{
	$theme = 'red';
}

$themes = [];

$themes['red']['background-color'] = '#ff3333';
$themes['red']['color'] = '#ffcccc';
$themes['red']['border-color'] = '#ff0000';

$themes['green']['background-color'] = '#00e600';
$themes['green']['color'] = '#ccffcc';
$themes['green']['border-color'] = '#008000';

$themes['blue']['background-color'] = '#4d94ff';
$themes['blue']['color'] = '#e6f0ff';
$themes['blue']['border-color'] = '#0052cc';

require '../CSSMagic.php';

$mytheme = new CSSMagic\Theme('My first theme');

$selector1 = new CSSMagic\Selector('body');
$selector1->addRule(new CSSMagic\Rule('color', $themes[$theme]['color']));
$selector1->addRule(new CSSMagic\Rule('background-color', $themes[$theme]['background-color']));

$selector2 = new CSSMagic\Selector('#paragrafo');
$selector2->addRule(new CSSMagic\Rule('font-style', 'italic'));

$selector3 = new CSSMagic\Selector('.myclass');
$selector3->addRule(new CSSMagic\Rule('border', 'thin solid'));
$selector3->addRule(new CSSMagic\Rule('border-color', $themes[$theme]['border-color']));

$mytheme->addSelector($selector1);
$mytheme->addSelector($selector2);
$mytheme->addSelector($selector3);

header("Content-Type: text/css");

echo $mytheme->getThemeString();
