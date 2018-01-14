<?php

class partial_RecordHistory_Settings_19e6fef22de463ff776f6e1cdaec13873bc64560 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<div>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:elementHistory';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '</strong><br/>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
			<span class="btn btn-default" style="margin-bottom: 5px;">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$array17 = array (
);return $renderingContext->getVariableProvider()->getByPath('fullHistoryLink', $array17);
};
$arguments15 = array();
$arguments15['value'] = NULL;

$output14 .= isset($arguments15['value']) ? $arguments15['value'] : $renderChildrenClosure16();

$output14 .= '</span>
		';
return $output14;
};
$arguments9 = array();
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['0'] = $renderingContext->getVariableProvider()->getByPath('fullHistoryLink', $array12);

$expression13 = function($context) {return ($context["node0"]);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression13(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);
$arguments9['__thenClosure'] = $renderChildrenClosure10;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output6 .= '
	';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('singleElement', $array4);

$expression5 = function($context) {return ($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	<a name="settings_head"></a>
	<form name="settings" action="';
$array18 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('TYPO3_REQUEST_URI', $array18)]);

$output0 .= '" method="post">
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:settings';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output0 .= '</div>
					<table class="table">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
							<tr>
								<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['key'] = NULL;
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['htmlEscape'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$output27 = '';

$output27 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array28 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('key', $array28)]);
$arguments25['key'] = $output27;

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output24 .= '</td>
								<td>
									<div class="btn-group">
										<button class="btn btn-default dropdown-toggle" type="button" id="copymodeSelector"
														data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
$output299 = '';

$output299 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
$output428 = '';

$output428 .= '
															';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
$output431 = '';

$output431 .= '
																';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
$output435 = '';

$output435 .= '
																	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
$output466 = '';

$output466 .= '
																		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
																			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
$output483 = '';

$output483 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments486 = array();
$arguments486['key'] = NULL;
$arguments486['id'] = NULL;
$arguments486['default'] = NULL;
$arguments486['htmlEscape'] = NULL;
$arguments486['arguments'] = NULL;
$arguments486['extensionName'] = NULL;
$output488 = '';

$output488 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array489 = array (
);
$output488 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array489)]);
$arguments486['key'] = $output488;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext)]);
};
$arguments484 = array();

$output483 .= '';

$output483 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
$array492 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array492)]);
};
$arguments490 = array();
$arguments490['if'] = NULL;

$output483 .= '';

$output483 .= '
																			';
return $output483;
};
$arguments470 = array();
$arguments470['then'] = NULL;
$arguments470['else'] = NULL;
$arguments470['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array477 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments478 = array();
$arguments478['key'] = NULL;
$arguments478['id'] = NULL;
$arguments478['default'] = NULL;
$arguments478['htmlEscape'] = NULL;
$arguments478['arguments'] = NULL;
$arguments478['extensionName'] = NULL;
$output480 = '';

$output480 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array481 = array (
);
$output480 .= $renderingContext->getVariableProvider()->getByPath('singleValue.value', $array481);
$arguments478['key'] = $output480;
$array477['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$expression482 = function($context) {return ($context["node0"]);};
$arguments470['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression482(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array477)
					),
					$renderingContext
				);
$arguments470['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments472 = array();
$arguments472['key'] = NULL;
$arguments472['id'] = NULL;
$arguments472['default'] = NULL;
$arguments472['htmlEscape'] = NULL;
$arguments472['arguments'] = NULL;
$arguments472['extensionName'] = NULL;
$output474 = '';

$output474 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array475 = array (
);
$output474 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array475)]);
$arguments472['key'] = $output474;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext)]);
};
$arguments470['__elseClosures'][] = function() use ($renderingContext, $self) {
$array476 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array476)]);
};

$output469 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output469 .= '
																		';
return $output469;
};
$arguments467 = array();

$output466 .= '';

$output466 .= '
																	';
return $output466;
};
$arguments436 = array();
$arguments436['then'] = NULL;
$arguments436['else'] = NULL;
$arguments436['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array462 = array();
$array463 = array (
);$array462['0'] = $renderingContext->getVariableProvider()->getByPath('currentSelectionValue', $array463);
$array462['1'] = ' == ';
$array464 = array (
);$array462['2'] = $renderingContext->getVariableProvider()->getByPath('singleKey', $array464);

$expression465 = function($context) {return (($context["node0"]) == ($context["node2"]));};
$arguments436['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression465(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array462)
					),
					$renderingContext
				);
$arguments436['__thenClosure'] = function() use ($renderingContext, $self) {
$output438 = '';

$output438 .= '
																			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
$output452 = '';

$output452 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure456 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments455 = array();
$arguments455['key'] = NULL;
$arguments455['id'] = NULL;
$arguments455['default'] = NULL;
$arguments455['htmlEscape'] = NULL;
$arguments455['arguments'] = NULL;
$arguments455['extensionName'] = NULL;
$output457 = '';

$output457 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array458 = array (
);
$output457 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array458)]);
$arguments455['key'] = $output457;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments455, $renderChildrenClosure456, $renderingContext)]);
};
$arguments453 = array();

$output452 .= '';

$output452 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$array461 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array461)]);
};
$arguments459 = array();
$arguments459['if'] = NULL;

$output452 .= '';

$output452 .= '
																			';
return $output452;
};
$arguments439 = array();
$arguments439['then'] = NULL;
$arguments439['else'] = NULL;
$arguments439['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array446 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments447 = array();
$arguments447['key'] = NULL;
$arguments447['id'] = NULL;
$arguments447['default'] = NULL;
$arguments447['htmlEscape'] = NULL;
$arguments447['arguments'] = NULL;
$arguments447['extensionName'] = NULL;
$output449 = '';

$output449 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array450 = array (
);
$output449 .= $renderingContext->getVariableProvider()->getByPath('singleValue.value', $array450);
$arguments447['key'] = $output449;
$array446['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$expression451 = function($context) {return ($context["node0"]);};
$arguments439['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression451(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array446)
					),
					$renderingContext
				);
$arguments439['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments441 = array();
$arguments441['key'] = NULL;
$arguments441['id'] = NULL;
$arguments441['default'] = NULL;
$arguments441['htmlEscape'] = NULL;
$arguments441['arguments'] = NULL;
$arguments441['extensionName'] = NULL;
$output443 = '';

$output443 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array444 = array (
);
$output443 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array444)]);
$arguments441['key'] = $output443;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext)]);
};
$arguments439['__elseClosures'][] = function() use ($renderingContext, $self) {
$array445 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array445)]);
};

$output438 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output438 .= '
																		';
return $output438;
};

$output435 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext);

$output435 .= '
																';
return $output435;
};
$arguments432 = array();
$arguments432['each'] = NULL;
$arguments432['as'] = NULL;
$arguments432['key'] = NULL;
$arguments432['reverse'] = false;
$arguments432['iteration'] = NULL;
$array434 = array (
);$arguments432['each'] = $renderingContext->getVariableProvider()->getByPath('values', $array434);
$arguments432['as'] = 'singleValue';
$arguments432['key'] = 'singleKey';

$output431 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output431 .= '
															';
return $output431;
};
$arguments429 = array();

$output428 .= '';

$output428 .= '
															';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
$output495 = '';

$output495 .= '
																';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
$output499 = '';

$output499 .= '
																	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
$output529 = '';

$output529 .= '
																		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
$output532 = '';

$output532 .= '
																			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure534 = function() use ($renderingContext, $self) {
$output546 = '';

$output546 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments549 = array();
$arguments549['key'] = NULL;
$arguments549['id'] = NULL;
$arguments549['default'] = NULL;
$arguments549['htmlEscape'] = NULL;
$arguments549['arguments'] = NULL;
$arguments549['extensionName'] = NULL;
$output551 = '';

$output551 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array552 = array (
);
$output551 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array552)]);
$arguments549['key'] = $output551;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext)]);
};
$arguments547 = array();

$output546 .= '';

$output546 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure554 = function() use ($renderingContext, $self) {
$array555 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array555)]);
};
$arguments553 = array();
$arguments553['if'] = NULL;

$output546 .= '';

$output546 .= '
																			';
return $output546;
};
$arguments533 = array();
$arguments533['then'] = NULL;
$arguments533['else'] = NULL;
$arguments533['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array540 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure542 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments541 = array();
$arguments541['key'] = NULL;
$arguments541['id'] = NULL;
$arguments541['default'] = NULL;
$arguments541['htmlEscape'] = NULL;
$arguments541['arguments'] = NULL;
$arguments541['extensionName'] = NULL;
$output543 = '';

$output543 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array544 = array (
);
$output543 .= $renderingContext->getVariableProvider()->getByPath('singleValue.value', $array544);
$arguments541['key'] = $output543;
$array540['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments541, $renderChildrenClosure542, $renderingContext);

$expression545 = function($context) {return ($context["node0"]);};
$arguments533['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression545(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array540)
					),
					$renderingContext
				);
$arguments533['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure536 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments535 = array();
$arguments535['key'] = NULL;
$arguments535['id'] = NULL;
$arguments535['default'] = NULL;
$arguments535['htmlEscape'] = NULL;
$arguments535['arguments'] = NULL;
$arguments535['extensionName'] = NULL;
$output537 = '';

$output537 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array538 = array (
);
$output537 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array538)]);
$arguments535['key'] = $output537;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments535, $renderChildrenClosure536, $renderingContext)]);
};
$arguments533['__elseClosures'][] = function() use ($renderingContext, $self) {
$array539 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array539)]);
};

$output532 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments533, $renderChildrenClosure534, $renderingContext);

$output532 .= '
																		';
return $output532;
};
$arguments530 = array();

$output529 .= '';

$output529 .= '
																	';
return $output529;
};
$arguments500 = array();
$arguments500['then'] = NULL;
$arguments500['else'] = NULL;
$arguments500['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array526 = array();
$array527 = array (
);$array526['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isFirst', $array527);

$expression528 = function($context) {return ($context["node0"]);};
$arguments500['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression528(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array526)
					),
					$renderingContext
				);
$arguments500['__thenClosure'] = function() use ($renderingContext, $self) {
$output502 = '';

$output502 .= '
																			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
$output516 = '';

$output516 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure520 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments519 = array();
$arguments519['key'] = NULL;
$arguments519['id'] = NULL;
$arguments519['default'] = NULL;
$arguments519['htmlEscape'] = NULL;
$arguments519['arguments'] = NULL;
$arguments519['extensionName'] = NULL;
$output521 = '';

$output521 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array522 = array (
);
$output521 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array522)]);
$arguments519['key'] = $output521;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments519, $renderChildrenClosure520, $renderingContext)]);
};
$arguments517 = array();

$output516 .= '';

$output516 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure524 = function() use ($renderingContext, $self) {
$array525 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array525)]);
};
$arguments523 = array();
$arguments523['if'] = NULL;

$output516 .= '';

$output516 .= '
																			';
return $output516;
};
$arguments503 = array();
$arguments503['then'] = NULL;
$arguments503['else'] = NULL;
$arguments503['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array510 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure512 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments511 = array();
$arguments511['key'] = NULL;
$arguments511['id'] = NULL;
$arguments511['default'] = NULL;
$arguments511['htmlEscape'] = NULL;
$arguments511['arguments'] = NULL;
$arguments511['extensionName'] = NULL;
$output513 = '';

$output513 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array514 = array (
);
$output513 .= $renderingContext->getVariableProvider()->getByPath('singleValue.value', $array514);
$arguments511['key'] = $output513;
$array510['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext);

$expression515 = function($context) {return ($context["node0"]);};
$arguments503['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression515(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array510)
					),
					$renderingContext
				);
$arguments503['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments505 = array();
$arguments505['key'] = NULL;
$arguments505['id'] = NULL;
$arguments505['default'] = NULL;
$arguments505['htmlEscape'] = NULL;
$arguments505['arguments'] = NULL;
$arguments505['extensionName'] = NULL;
$output507 = '';

$output507 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array508 = array (
);
$output507 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array508)]);
$arguments505['key'] = $output507;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext)]);
};
$arguments503['__elseClosures'][] = function() use ($renderingContext, $self) {
$array509 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array509)]);
};

$output502 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext);

$output502 .= '
																		';
return $output502;
};

$output499 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext);

$output499 .= '
																';
return $output499;
};
$arguments496 = array();
$arguments496['each'] = NULL;
$arguments496['as'] = NULL;
$arguments496['key'] = NULL;
$arguments496['reverse'] = false;
$arguments496['iteration'] = NULL;
$array498 = array (
);$arguments496['each'] = $renderingContext->getVariableProvider()->getByPath('values', $array498);
$arguments496['as'] = 'singleValue';
$arguments496['iteration'] = 'iterator';

$output495 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);

$output495 .= '
															';
return $output495;
};
$arguments493 = array();
$arguments493['if'] = NULL;

$output428 .= '';

$output428 .= '
														';
return $output428;
};
$arguments300 = array();
$arguments300['then'] = NULL;
$arguments300['else'] = NULL;
$arguments300['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array425 = array();
$array426 = array (
);$array425['0'] = $renderingContext->getVariableProvider()->getByPath('currentSelectionValue', $array426);

$expression427 = function($context) {return ($context["node0"]);};
$arguments300['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression427(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array425)
					),
					$renderingContext
				);
$arguments300['__thenClosure'] = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
																';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$output306 = '';

$output306 .= '
																	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$output337 = '';

$output337 .= '
																		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$output340 = '';

$output340 .= '
																			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
$output354 = '';

$output354 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments357 = array();
$arguments357['key'] = NULL;
$arguments357['id'] = NULL;
$arguments357['default'] = NULL;
$arguments357['htmlEscape'] = NULL;
$arguments357['arguments'] = NULL;
$arguments357['extensionName'] = NULL;
$output359 = '';

$output359 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array360 = array (
);
$output359 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array360)]);
$arguments357['key'] = $output359;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext)]);
};
$arguments355 = array();

$output354 .= '';

$output354 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$array363 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array363)]);
};
$arguments361 = array();
$arguments361['if'] = NULL;

$output354 .= '';

$output354 .= '
																			';
return $output354;
};
$arguments341 = array();
$arguments341['then'] = NULL;
$arguments341['else'] = NULL;
$arguments341['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array348 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments349 = array();
$arguments349['key'] = NULL;
$arguments349['id'] = NULL;
$arguments349['default'] = NULL;
$arguments349['htmlEscape'] = NULL;
$arguments349['arguments'] = NULL;
$arguments349['extensionName'] = NULL;
$output351 = '';

$output351 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array352 = array (
);
$output351 .= $renderingContext->getVariableProvider()->getByPath('singleValue.value', $array352);
$arguments349['key'] = $output351;
$array348['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$expression353 = function($context) {return ($context["node0"]);};
$arguments341['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression353(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array348)
					),
					$renderingContext
				);
$arguments341['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments343 = array();
$arguments343['key'] = NULL;
$arguments343['id'] = NULL;
$arguments343['default'] = NULL;
$arguments343['htmlEscape'] = NULL;
$arguments343['arguments'] = NULL;
$arguments343['extensionName'] = NULL;
$output345 = '';

$output345 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array346 = array (
);
$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array346)]);
$arguments343['key'] = $output345;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext)]);
};
$arguments341['__elseClosures'][] = function() use ($renderingContext, $self) {
$array347 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array347)]);
};

$output340 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output340 .= '
																		';
return $output340;
};
$arguments338 = array();

$output337 .= '';

$output337 .= '
																	';
return $output337;
};
$arguments307 = array();
$arguments307['then'] = NULL;
$arguments307['else'] = NULL;
$arguments307['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array333 = array();
$array334 = array (
);$array333['0'] = $renderingContext->getVariableProvider()->getByPath('currentSelectionValue', $array334);
$array333['1'] = ' == ';
$array335 = array (
);$array333['2'] = $renderingContext->getVariableProvider()->getByPath('singleKey', $array335);

$expression336 = function($context) {return (($context["node0"]) == ($context["node2"]));};
$arguments307['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression336(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array333)
					),
					$renderingContext
				);
$arguments307['__thenClosure'] = function() use ($renderingContext, $self) {
$output309 = '';

$output309 .= '
																			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$output323 = '';

$output323 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments326 = array();
$arguments326['key'] = NULL;
$arguments326['id'] = NULL;
$arguments326['default'] = NULL;
$arguments326['htmlEscape'] = NULL;
$arguments326['arguments'] = NULL;
$arguments326['extensionName'] = NULL;
$output328 = '';

$output328 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array329 = array (
);
$output328 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array329)]);
$arguments326['key'] = $output328;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext)]);
};
$arguments324 = array();

$output323 .= '';

$output323 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
$array332 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array332)]);
};
$arguments330 = array();
$arguments330['if'] = NULL;

$output323 .= '';

$output323 .= '
																			';
return $output323;
};
$arguments310 = array();
$arguments310['then'] = NULL;
$arguments310['else'] = NULL;
$arguments310['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array317 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['key'] = NULL;
$arguments318['id'] = NULL;
$arguments318['default'] = NULL;
$arguments318['htmlEscape'] = NULL;
$arguments318['arguments'] = NULL;
$arguments318['extensionName'] = NULL;
$output320 = '';

$output320 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array321 = array (
);
$output320 .= $renderingContext->getVariableProvider()->getByPath('singleValue.value', $array321);
$arguments318['key'] = $output320;
$array317['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$expression322 = function($context) {return ($context["node0"]);};
$arguments310['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression322(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array317)
					),
					$renderingContext
				);
$arguments310['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['key'] = NULL;
$arguments312['id'] = NULL;
$arguments312['default'] = NULL;
$arguments312['htmlEscape'] = NULL;
$arguments312['arguments'] = NULL;
$arguments312['extensionName'] = NULL;
$output314 = '';

$output314 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array315 = array (
);
$output314 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array315)]);
$arguments312['key'] = $output314;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext)]);
};
$arguments310['__elseClosures'][] = function() use ($renderingContext, $self) {
$array316 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array316)]);
};

$output309 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);

$output309 .= '
																		';
return $output309;
};

$output306 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output306 .= '
																';
return $output306;
};
$arguments303 = array();
$arguments303['each'] = NULL;
$arguments303['as'] = NULL;
$arguments303['key'] = NULL;
$arguments303['reverse'] = false;
$arguments303['iteration'] = NULL;
$array305 = array (
);$arguments303['each'] = $renderingContext->getVariableProvider()->getByPath('values', $array305);
$arguments303['as'] = 'singleValue';
$arguments303['key'] = 'singleKey';

$output302 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output302 .= '
															';
return $output302;
};
$arguments300['__elseClosures'][] = function() use ($renderingContext, $self) {
$output364 = '';

$output364 .= '
																';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
$output368 = '';

$output368 .= '
																	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
$output398 = '';

$output398 .= '
																		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
$output401 = '';

$output401 .= '
																			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$output415 = '';

$output415 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure417 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments418 = array();
$arguments418['key'] = NULL;
$arguments418['id'] = NULL;
$arguments418['default'] = NULL;
$arguments418['htmlEscape'] = NULL;
$arguments418['arguments'] = NULL;
$arguments418['extensionName'] = NULL;
$output420 = '';

$output420 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array421 = array (
);
$output420 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array421)]);
$arguments418['key'] = $output420;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext)]);
};
$arguments416 = array();

$output415 .= '';

$output415 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
$array424 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array424)]);
};
$arguments422 = array();
$arguments422['if'] = NULL;

$output415 .= '';

$output415 .= '
																			';
return $output415;
};
$arguments402 = array();
$arguments402['then'] = NULL;
$arguments402['else'] = NULL;
$arguments402['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array409 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments410 = array();
$arguments410['key'] = NULL;
$arguments410['id'] = NULL;
$arguments410['default'] = NULL;
$arguments410['htmlEscape'] = NULL;
$arguments410['arguments'] = NULL;
$arguments410['extensionName'] = NULL;
$output412 = '';

$output412 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array413 = array (
);
$output412 .= $renderingContext->getVariableProvider()->getByPath('singleValue.value', $array413);
$arguments410['key'] = $output412;
$array409['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext);

$expression414 = function($context) {return ($context["node0"]);};
$arguments402['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression414(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array409)
					),
					$renderingContext
				);
$arguments402['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments404 = array();
$arguments404['key'] = NULL;
$arguments404['id'] = NULL;
$arguments404['default'] = NULL;
$arguments404['htmlEscape'] = NULL;
$arguments404['arguments'] = NULL;
$arguments404['extensionName'] = NULL;
$output406 = '';

$output406 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array407 = array (
);
$output406 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array407)]);
$arguments404['key'] = $output406;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext)]);
};
$arguments402['__elseClosures'][] = function() use ($renderingContext, $self) {
$array408 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array408)]);
};

$output401 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output401 .= '
																		';
return $output401;
};
$arguments399 = array();

$output398 .= '';

$output398 .= '
																	';
return $output398;
};
$arguments369 = array();
$arguments369['then'] = NULL;
$arguments369['else'] = NULL;
$arguments369['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array395 = array();
$array396 = array (
);$array395['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isFirst', $array396);

$expression397 = function($context) {return ($context["node0"]);};
$arguments369['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression397(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array395)
					),
					$renderingContext
				);
$arguments369['__thenClosure'] = function() use ($renderingContext, $self) {
$output371 = '';

$output371 .= '
																			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
$output385 = '';

$output385 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments388 = array();
$arguments388['key'] = NULL;
$arguments388['id'] = NULL;
$arguments388['default'] = NULL;
$arguments388['htmlEscape'] = NULL;
$arguments388['arguments'] = NULL;
$arguments388['extensionName'] = NULL;
$output390 = '';

$output390 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array391 = array (
);
$output390 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array391)]);
$arguments388['key'] = $output390;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext)]);
};
$arguments386 = array();

$output385 .= '';

$output385 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
$array394 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array394)]);
};
$arguments392 = array();
$arguments392['if'] = NULL;

$output385 .= '';

$output385 .= '
																			';
return $output385;
};
$arguments372 = array();
$arguments372['then'] = NULL;
$arguments372['else'] = NULL;
$arguments372['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array379 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments380 = array();
$arguments380['key'] = NULL;
$arguments380['id'] = NULL;
$arguments380['default'] = NULL;
$arguments380['htmlEscape'] = NULL;
$arguments380['arguments'] = NULL;
$arguments380['extensionName'] = NULL;
$output382 = '';

$output382 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array383 = array (
);
$output382 .= $renderingContext->getVariableProvider()->getByPath('singleValue.value', $array383);
$arguments380['key'] = $output382;
$array379['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext);

$expression384 = function($context) {return ($context["node0"]);};
$arguments372['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression384(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array379)
					),
					$renderingContext
				);
$arguments372['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments374 = array();
$arguments374['key'] = NULL;
$arguments374['id'] = NULL;
$arguments374['default'] = NULL;
$arguments374['htmlEscape'] = NULL;
$arguments374['arguments'] = NULL;
$arguments374['extensionName'] = NULL;
$output376 = '';

$output376 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array377 = array (
);
$output376 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array377)]);
$arguments374['key'] = $output376;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext)]);
};
$arguments372['__elseClosures'][] = function() use ($renderingContext, $self) {
$array378 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array378)]);
};

$output371 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext);

$output371 .= '
																		';
return $output371;
};

$output368 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);

$output368 .= '
																';
return $output368;
};
$arguments365 = array();
$arguments365['each'] = NULL;
$arguments365['as'] = NULL;
$arguments365['key'] = NULL;
$arguments365['reverse'] = false;
$arguments365['iteration'] = NULL;
$array367 = array (
);$arguments365['each'] = $renderingContext->getVariableProvider()->getByPath('values', $array367);
$arguments365['as'] = 'singleValue';
$arguments365['iteration'] = 'iterator';

$output364 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output364 .= '
															';
return $output364;
};

$output299 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);

$output299 .= '
													';
return $output299;
};
$arguments297 = array();

$output296 .= '';

$output296 .= '
												';
return $output296;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array292 = array();
$array293 = array (
);$array292['0'] = $renderingContext->getVariableProvider()->getByPath('currentSelectionKey', $array293);
$array292['1'] = ' == ';
$array294 = array (
);$array292['2'] = $renderingContext->getVariableProvider()->getByPath('key', $array294);

$expression295 = function($context) {return (($context["node0"]) == ($context["node2"]));};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression295(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array292)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
															';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
																';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
																	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$output202 = '';

$output202 .= '
																		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
																			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments222 = array();
$arguments222['key'] = NULL;
$arguments222['id'] = NULL;
$arguments222['default'] = NULL;
$arguments222['htmlEscape'] = NULL;
$arguments222['arguments'] = NULL;
$arguments222['extensionName'] = NULL;
$output224 = '';

$output224 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array225 = array (
);
$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array225)]);
$arguments222['key'] = $output224;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext)]);
};
$arguments220 = array();

$output219 .= '';

$output219 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$array228 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array228)]);
};
$arguments226 = array();
$arguments226['if'] = NULL;

$output219 .= '';

$output219 .= '
																			';
return $output219;
};
$arguments206 = array();
$arguments206['then'] = NULL;
$arguments206['else'] = NULL;
$arguments206['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array213 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments214 = array();
$arguments214['key'] = NULL;
$arguments214['id'] = NULL;
$arguments214['default'] = NULL;
$arguments214['htmlEscape'] = NULL;
$arguments214['arguments'] = NULL;
$arguments214['extensionName'] = NULL;
$output216 = '';

$output216 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array217 = array (
);
$output216 .= $renderingContext->getVariableProvider()->getByPath('singleValue.value', $array217);
$arguments214['key'] = $output216;
$array213['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$expression218 = function($context) {return ($context["node0"]);};
$arguments206['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression218(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array213)
					),
					$renderingContext
				);
$arguments206['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['key'] = NULL;
$arguments208['id'] = NULL;
$arguments208['default'] = NULL;
$arguments208['htmlEscape'] = NULL;
$arguments208['arguments'] = NULL;
$arguments208['extensionName'] = NULL;
$output210 = '';

$output210 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array211 = array (
);
$output210 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array211)]);
$arguments208['key'] = $output210;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext)]);
};
$arguments206['__elseClosures'][] = function() use ($renderingContext, $self) {
$array212 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array212)]);
};

$output205 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output205 .= '
																		';
return $output205;
};
$arguments203 = array();

$output202 .= '';

$output202 .= '
																	';
return $output202;
};
$arguments172 = array();
$arguments172['then'] = NULL;
$arguments172['else'] = NULL;
$arguments172['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array198 = array();
$array199 = array (
);$array198['0'] = $renderingContext->getVariableProvider()->getByPath('currentSelectionValue', $array199);
$array198['1'] = ' == ';
$array200 = array (
);$array198['2'] = $renderingContext->getVariableProvider()->getByPath('singleKey', $array200);

$expression201 = function($context) {return (($context["node0"]) == ($context["node2"]));};
$arguments172['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression201(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array198)
					),
					$renderingContext
				);
$arguments172['__thenClosure'] = function() use ($renderingContext, $self) {
$output174 = '';

$output174 .= '
																			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['key'] = NULL;
$arguments191['id'] = NULL;
$arguments191['default'] = NULL;
$arguments191['htmlEscape'] = NULL;
$arguments191['arguments'] = NULL;
$arguments191['extensionName'] = NULL;
$output193 = '';

$output193 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array194 = array (
);
$output193 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array194)]);
$arguments191['key'] = $output193;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext)]);
};
$arguments189 = array();

$output188 .= '';

$output188 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$array197 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array197)]);
};
$arguments195 = array();
$arguments195['if'] = NULL;

$output188 .= '';

$output188 .= '
																			';
return $output188;
};
$arguments175 = array();
$arguments175['then'] = NULL;
$arguments175['else'] = NULL;
$arguments175['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array182 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['key'] = NULL;
$arguments183['id'] = NULL;
$arguments183['default'] = NULL;
$arguments183['htmlEscape'] = NULL;
$arguments183['arguments'] = NULL;
$arguments183['extensionName'] = NULL;
$output185 = '';

$output185 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array186 = array (
);
$output185 .= $renderingContext->getVariableProvider()->getByPath('singleValue.value', $array186);
$arguments183['key'] = $output185;
$array182['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$expression187 = function($context) {return ($context["node0"]);};
$arguments175['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression187(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array182)
					),
					$renderingContext
				);
$arguments175['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['key'] = NULL;
$arguments177['id'] = NULL;
$arguments177['default'] = NULL;
$arguments177['htmlEscape'] = NULL;
$arguments177['arguments'] = NULL;
$arguments177['extensionName'] = NULL;
$output179 = '';

$output179 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array180 = array (
);
$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array180)]);
$arguments177['key'] = $output179;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext)]);
};
$arguments175['__elseClosures'][] = function() use ($renderingContext, $self) {
$array181 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array181)]);
};

$output174 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output174 .= '
																		';
return $output174;
};

$output171 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= '
																';
return $output171;
};
$arguments168 = array();
$arguments168['each'] = NULL;
$arguments168['as'] = NULL;
$arguments168['key'] = NULL;
$arguments168['reverse'] = false;
$arguments168['iteration'] = NULL;
$array170 = array (
);$arguments168['each'] = $renderingContext->getVariableProvider()->getByPath('values', $array170);
$arguments168['as'] = 'singleValue';
$arguments168['key'] = 'singleKey';

$output167 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '
															';
return $output167;
};
$arguments165 = array();

$output164 .= '';

$output164 .= '
															';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
$output231 = '';

$output231 .= '
																';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
$output235 = '';

$output235 .= '
																	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
																		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
																			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output282 = '';

$output282 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments285 = array();
$arguments285['key'] = NULL;
$arguments285['id'] = NULL;
$arguments285['default'] = NULL;
$arguments285['htmlEscape'] = NULL;
$arguments285['arguments'] = NULL;
$arguments285['extensionName'] = NULL;
$output287 = '';

$output287 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array288 = array (
);
$output287 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array288)]);
$arguments285['key'] = $output287;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext)]);
};
$arguments283 = array();

$output282 .= '';

$output282 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
$array291 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array291)]);
};
$arguments289 = array();
$arguments289['if'] = NULL;

$output282 .= '';

$output282 .= '
																			';
return $output282;
};
$arguments269 = array();
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$arguments269['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array276 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments277 = array();
$arguments277['key'] = NULL;
$arguments277['id'] = NULL;
$arguments277['default'] = NULL;
$arguments277['htmlEscape'] = NULL;
$arguments277['arguments'] = NULL;
$arguments277['extensionName'] = NULL;
$output279 = '';

$output279 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array280 = array (
);
$output279 .= $renderingContext->getVariableProvider()->getByPath('singleValue.value', $array280);
$arguments277['key'] = $output279;
$array276['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);

$expression281 = function($context) {return ($context["node0"]);};
$arguments269['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression281(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array276)
					),
					$renderingContext
				);
$arguments269['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments271 = array();
$arguments271['key'] = NULL;
$arguments271['id'] = NULL;
$arguments271['default'] = NULL;
$arguments271['htmlEscape'] = NULL;
$arguments271['arguments'] = NULL;
$arguments271['extensionName'] = NULL;
$output273 = '';

$output273 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array274 = array (
);
$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array274)]);
$arguments271['key'] = $output273;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext)]);
};
$arguments269['__elseClosures'][] = function() use ($renderingContext, $self) {
$array275 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array275)]);
};

$output268 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output268 .= '
																		';
return $output268;
};
$arguments266 = array();

$output265 .= '';

$output265 .= '
																	';
return $output265;
};
$arguments236 = array();
$arguments236['then'] = NULL;
$arguments236['else'] = NULL;
$arguments236['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array262 = array();
$array263 = array (
);$array262['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isFirst', $array263);

$expression264 = function($context) {return ($context["node0"]);};
$arguments236['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression264(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array262)
					),
					$renderingContext
				);
$arguments236['__thenClosure'] = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
																			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$output252 = '';

$output252 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments255 = array();
$arguments255['key'] = NULL;
$arguments255['id'] = NULL;
$arguments255['default'] = NULL;
$arguments255['htmlEscape'] = NULL;
$arguments255['arguments'] = NULL;
$arguments255['extensionName'] = NULL;
$output257 = '';

$output257 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array258 = array (
);
$output257 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array258)]);
$arguments255['key'] = $output257;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext)]);
};
$arguments253 = array();

$output252 .= '';

$output252 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$array261 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array261)]);
};
$arguments259 = array();
$arguments259['if'] = NULL;

$output252 .= '';

$output252 .= '
																			';
return $output252;
};
$arguments239 = array();
$arguments239['then'] = NULL;
$arguments239['else'] = NULL;
$arguments239['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array246 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments247 = array();
$arguments247['key'] = NULL;
$arguments247['id'] = NULL;
$arguments247['default'] = NULL;
$arguments247['htmlEscape'] = NULL;
$arguments247['arguments'] = NULL;
$arguments247['extensionName'] = NULL;
$output249 = '';

$output249 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array250 = array (
);
$output249 .= $renderingContext->getVariableProvider()->getByPath('singleValue.value', $array250);
$arguments247['key'] = $output249;
$array246['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$expression251 = function($context) {return ($context["node0"]);};
$arguments239['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression251(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array246)
					),
					$renderingContext
				);
$arguments239['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['key'] = NULL;
$arguments241['id'] = NULL;
$arguments241['default'] = NULL;
$arguments241['htmlEscape'] = NULL;
$arguments241['arguments'] = NULL;
$arguments241['extensionName'] = NULL;
$output243 = '';

$output243 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array244 = array (
);
$output243 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array244)]);
$arguments241['key'] = $output243;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext)]);
};
$arguments239['__elseClosures'][] = function() use ($renderingContext, $self) {
$array245 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array245)]);
};

$output238 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output238 .= '
																		';
return $output238;
};

$output235 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output235 .= '
																';
return $output235;
};
$arguments232 = array();
$arguments232['each'] = NULL;
$arguments232['as'] = NULL;
$arguments232['key'] = NULL;
$arguments232['reverse'] = false;
$arguments232['iteration'] = NULL;
$array234 = array (
);$arguments232['each'] = $renderingContext->getVariableProvider()->getByPath('values', $array234);
$arguments232['as'] = 'singleValue';
$arguments232['iteration'] = 'iterator';

$output231 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output231 .= '
															';
return $output231;
};
$arguments229 = array();
$arguments229['if'] = NULL;

$output164 .= '';

$output164 .= '
														';
return $output164;
};
$arguments36 = array();
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$arguments36['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array161 = array();
$array162 = array (
);$array161['0'] = $renderingContext->getVariableProvider()->getByPath('currentSelectionValue', $array162);

$expression163 = function($context) {return ($context["node0"]);};
$arguments36['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression163(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)
					),
					$renderingContext
				);
$arguments36['__thenClosure'] = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
																';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
																	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
																		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
																			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['key'] = NULL;
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['htmlEscape'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$output95 = '';

$output95 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array96 = array (
);
$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array96)]);
$arguments93['key'] = $output95;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);
};
$arguments91 = array();

$output90 .= '';

$output90 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$array99 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array99)]);
};
$arguments97 = array();
$arguments97['if'] = NULL;

$output90 .= '';

$output90 .= '
																			';
return $output90;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array84 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['key'] = NULL;
$arguments85['id'] = NULL;
$arguments85['default'] = NULL;
$arguments85['htmlEscape'] = NULL;
$arguments85['arguments'] = NULL;
$arguments85['extensionName'] = NULL;
$output87 = '';

$output87 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array88 = array (
);
$output87 .= $renderingContext->getVariableProvider()->getByPath('singleValue.value', $array88);
$arguments85['key'] = $output87;
$array84['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$expression89 = function($context) {return ($context["node0"]);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression89(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
$arguments77['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['key'] = NULL;
$arguments79['id'] = NULL;
$arguments79['default'] = NULL;
$arguments79['htmlEscape'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['extensionName'] = NULL;
$output81 = '';

$output81 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array82 = array (
);
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array82)]);
$arguments79['key'] = $output81;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext)]);
};
$arguments77['__elseClosures'][] = function() use ($renderingContext, $self) {
$array83 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array83)]);
};

$output76 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
																		';
return $output76;
};
$arguments74 = array();

$output73 .= '';

$output73 .= '
																	';
return $output73;
};
$arguments43 = array();
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$arguments43['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('currentSelectionValue', $array70);
$array69['1'] = ' == ';
$array71 = array (
);$array69['2'] = $renderingContext->getVariableProvider()->getByPath('singleKey', $array71);

$expression72 = function($context) {return (($context["node0"]) == ($context["node2"]));};
$arguments43['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments43['__thenClosure'] = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
																			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['key'] = NULL;
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['htmlEscape'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$output64 = '';

$output64 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array65 = array (
);
$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array65)]);
$arguments62['key'] = $output64;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);
};
$arguments60 = array();

$output59 .= '';

$output59 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$array68 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array68)]);
};
$arguments66 = array();
$arguments66['if'] = NULL;

$output59 .= '';

$output59 .= '
																			';
return $output59;
};
$arguments46 = array();
$arguments46['then'] = NULL;
$arguments46['else'] = NULL;
$arguments46['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array53 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['key'] = NULL;
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['htmlEscape'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$output56 = '';

$output56 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array57 = array (
);
$output56 .= $renderingContext->getVariableProvider()->getByPath('singleValue.value', $array57);
$arguments54['key'] = $output56;
$array53['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$expression58 = function($context) {return ($context["node0"]);};
$arguments46['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
$arguments46['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['key'] = NULL;
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['htmlEscape'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$output50 = '';

$output50 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array51 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array51)]);
$arguments48['key'] = $output50;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);
};
$arguments46['__elseClosures'][] = function() use ($renderingContext, $self) {
$array52 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array52)]);
};

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
																		';
return $output45;
};

$output42 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
																';
return $output42;
};
$arguments39 = array();
$arguments39['each'] = NULL;
$arguments39['as'] = NULL;
$arguments39['key'] = NULL;
$arguments39['reverse'] = false;
$arguments39['iteration'] = NULL;
$array41 = array (
);$arguments39['each'] = $renderingContext->getVariableProvider()->getByPath('values', $array41);
$arguments39['as'] = 'singleValue';
$arguments39['key'] = 'singleKey';

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
															';
return $output38;
};
$arguments36['__elseClosures'][] = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
																';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
																	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
																		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
																			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['key'] = NULL;
$arguments154['id'] = NULL;
$arguments154['default'] = NULL;
$arguments154['htmlEscape'] = NULL;
$arguments154['arguments'] = NULL;
$arguments154['extensionName'] = NULL;
$output156 = '';

$output156 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array157 = array (
);
$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array157)]);
$arguments154['key'] = $output156;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext)]);
};
$arguments152 = array();

$output151 .= '';

$output151 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$array160 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array160)]);
};
$arguments158 = array();
$arguments158['if'] = NULL;

$output151 .= '';

$output151 .= '
																			';
return $output151;
};
$arguments138 = array();
$arguments138['then'] = NULL;
$arguments138['else'] = NULL;
$arguments138['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array145 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['key'] = NULL;
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['htmlEscape'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$output148 = '';

$output148 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array149 = array (
);
$output148 .= $renderingContext->getVariableProvider()->getByPath('singleValue.value', $array149);
$arguments146['key'] = $output148;
$array145['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$expression150 = function($context) {return ($context["node0"]);};
$arguments138['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression150(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array145)
					),
					$renderingContext
				);
$arguments138['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['key'] = NULL;
$arguments140['id'] = NULL;
$arguments140['default'] = NULL;
$arguments140['htmlEscape'] = NULL;
$arguments140['arguments'] = NULL;
$arguments140['extensionName'] = NULL;
$output142 = '';

$output142 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array143 = array (
);
$output142 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array143)]);
$arguments140['key'] = $output142;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext)]);
};
$arguments138['__elseClosures'][] = function() use ($renderingContext, $self) {
$array144 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array144)]);
};

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
																		';
return $output137;
};
$arguments135 = array();

$output134 .= '';

$output134 .= '
																	';
return $output134;
};
$arguments105 = array();
$arguments105['then'] = NULL;
$arguments105['else'] = NULL;
$arguments105['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isFirst', $array132);

$expression133 = function($context) {return ($context["node0"]);};
$arguments105['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression133(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)
					),
					$renderingContext
				);
$arguments105['__thenClosure'] = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
																			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['key'] = NULL;
$arguments124['id'] = NULL;
$arguments124['default'] = NULL;
$arguments124['htmlEscape'] = NULL;
$arguments124['arguments'] = NULL;
$arguments124['extensionName'] = NULL;
$output126 = '';

$output126 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array127 = array (
);
$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array127)]);
$arguments124['key'] = $output126;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext)]);
};
$arguments122 = array();

$output121 .= '';

$output121 .= '
																				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$array130 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array130)]);
};
$arguments128 = array();
$arguments128['if'] = NULL;

$output121 .= '';

$output121 .= '
																			';
return $output121;
};
$arguments108 = array();
$arguments108['then'] = NULL;
$arguments108['else'] = NULL;
$arguments108['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array115 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['key'] = NULL;
$arguments116['id'] = NULL;
$arguments116['default'] = NULL;
$arguments116['htmlEscape'] = NULL;
$arguments116['arguments'] = NULL;
$arguments116['extensionName'] = NULL;
$output118 = '';

$output118 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array119 = array (
);
$output118 .= $renderingContext->getVariableProvider()->getByPath('singleValue.value', $array119);
$arguments116['key'] = $output118;
$array115['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$expression120 = function($context) {return ($context["node0"]);};
$arguments108['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array115)
					),
					$renderingContext
				);
$arguments108['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['key'] = NULL;
$arguments110['id'] = NULL;
$arguments110['default'] = NULL;
$arguments110['htmlEscape'] = NULL;
$arguments110['arguments'] = NULL;
$arguments110['extensionName'] = NULL;
$output112 = '';

$output112 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array113 = array (
);
$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array113)]);
$arguments110['key'] = $output112;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext)]);
};
$arguments108['__elseClosures'][] = function() use ($renderingContext, $self) {
$array114 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array114)]);
};

$output107 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
																		';
return $output107;
};

$output104 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
																';
return $output104;
};
$arguments101 = array();
$arguments101['each'] = NULL;
$arguments101['as'] = NULL;
$arguments101['key'] = NULL;
$arguments101['reverse'] = false;
$arguments101['iteration'] = NULL;
$array103 = array (
);$arguments101['each'] = $renderingContext->getVariableProvider()->getByPath('values', $array103);
$arguments101['as'] = 'singleValue';
$arguments101['iteration'] = 'iterator';

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
															';
return $output100;
};

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
													';
return $output35;
};

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
											';
return $output32;
};
$arguments29 = array();
$arguments29['each'] = NULL;
$arguments29['as'] = NULL;
$arguments29['key'] = NULL;
$arguments29['reverse'] = false;
$arguments29['iteration'] = NULL;
$array31 = array (
);$arguments29['each'] = $renderingContext->getVariableProvider()->getByPath('currentSelection', $array31);
$arguments29['as'] = 'currentSelectionValue';
$arguments29['key'] = 'currentSelectionKey';

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output24 .= '
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" aria-labelledby="copymodeSelector">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
$output559 = '';

$output559 .= '
												<li><a href="#"
															 onclick="document.settings.method=\'POST\'; document.settings.action=';
$array560 = array (
);
$output559 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.scriptUrl', $array560)]);

$output559 .= '; document.settings.submit()">
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure562 = function() use ($renderingContext, $self) {
$output574 = '';

$output574 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments577 = array();
$arguments577['key'] = NULL;
$arguments577['id'] = NULL;
$arguments577['default'] = NULL;
$arguments577['htmlEscape'] = NULL;
$arguments577['arguments'] = NULL;
$arguments577['extensionName'] = NULL;
$output579 = '';

$output579 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array580 = array (
);
$output579 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array580)]);
$arguments577['key'] = $output579;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments577, $renderChildrenClosure578, $renderingContext)]);
};
$arguments575 = array();

$output574 .= '';

$output574 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure582 = function() use ($renderingContext, $self) {
$array583 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array583)]);
};
$arguments581 = array();
$arguments581['if'] = NULL;

$output574 .= '';

$output574 .= '
													';
return $output574;
};
$arguments561 = array();
$arguments561['then'] = NULL;
$arguments561['else'] = NULL;
$arguments561['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array568 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments569 = array();
$arguments569['key'] = NULL;
$arguments569['id'] = NULL;
$arguments569['default'] = NULL;
$arguments569['htmlEscape'] = NULL;
$arguments569['arguments'] = NULL;
$arguments569['extensionName'] = NULL;
$output571 = '';

$output571 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array572 = array (
);
$output571 .= $renderingContext->getVariableProvider()->getByPath('singleValue.value', $array572);
$arguments569['key'] = $output571;
$array568['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext);

$expression573 = function($context) {return ($context["node0"]);};
$arguments561['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression573(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array568)
					),
					$renderingContext
				);
$arguments561['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure564 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments563 = array();
$arguments563['key'] = NULL;
$arguments563['id'] = NULL;
$arguments563['default'] = NULL;
$arguments563['htmlEscape'] = NULL;
$arguments563['arguments'] = NULL;
$arguments563['extensionName'] = NULL;
$output565 = '';

$output565 .= 'LLL:EXT:lang/Resources/Private/Language/locallang_show_rechis.xlf:';
$array566 = array (
);
$output565 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array566)]);
$arguments563['key'] = $output565;
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments563, $renderChildrenClosure564, $renderingContext)]);
};
$arguments561['__elseClosures'][] = function() use ($renderingContext, $self) {
$array567 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('singleValue.value', $array567)]);
};

$output559 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments561, $renderChildrenClosure562, $renderingContext);

$output559 .= '
												</a></li>
											';
return $output559;
};
$arguments556 = array();
$arguments556['each'] = NULL;
$arguments556['as'] = NULL;
$arguments556['key'] = NULL;
$arguments556['reverse'] = false;
$arguments556['iteration'] = NULL;
$array558 = array (
);$arguments556['each'] = $renderingContext->getVariableProvider()->getByPath('values', $array558);
$arguments556['as'] = 'singleValue';
$arguments556['key'] = 'singleKey';

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments556, $renderChildrenClosure557, $renderingContext);

$output24 .= '
										</ul>
									</div>
								</td>
							</tr>
						';
return $output24;
};
$arguments21 = array();
$arguments21['each'] = NULL;
$arguments21['as'] = NULL;
$arguments21['key'] = NULL;
$arguments21['reverse'] = false;
$arguments21['iteration'] = NULL;
$array23 = array (
);$arguments21['each'] = $renderingContext->getVariableProvider()->getByPath('settings', $array23);
$arguments21['as'] = 'values';
$arguments21['key'] = 'key';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '
					</table>
				</div>
			</div>
		</div>
	</form>
</div>
';

return $output0;
}


}
#