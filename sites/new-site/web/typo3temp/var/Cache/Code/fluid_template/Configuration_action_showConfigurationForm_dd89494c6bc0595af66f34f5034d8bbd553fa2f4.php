<?php

class Configuration_action_showConfigurationForm_dd89494c6bc0595af66f34f5034d8bbd553fa2f4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'main';
}
public function hasLayout() {
return TRUE;
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
  'em' => 
  array (
    0 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
  ),
));
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['key'] = 'extConfTemplate.headline';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
		';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.key', $array3)]);

$output0 .= '
	</h1>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output4 = '';

$output4 .= '
	<div role="tabpanel">
		<ul class="nav nav-tabs" role="tablist">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
					<li role="presentation" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array17 = array();
$array18 = array (
);$array17['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iteration.isFirst', $array18)]);

$expression19 = function($context) {return ($context["node0"]);};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);
$arguments15['then'] = 'active';

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '">
						<a class="text-capitalize" href="#category-';
$array20 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('categoryNumber', $array20)]);

$output14 .= '" aria-controls="category-';
$array21 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('categoryNumber', $array21)]);

$output14 .= '" role="tab" data-toggle="tab">
							';
$array22 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.name', $array22)]);

$output14 .= '
						</a>
					</li>
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
);$array11['0'] = $renderingContext->getVariableProvider()->getByPath('category.name', $array12);

$expression13 = function($context) {return ($context["node0"]);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression13(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);
$arguments9['__thenClosure'] = $renderChildrenClosure10;

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
			';
return $output8;
};
$arguments5 = array();
$arguments5['each'] = NULL;
$arguments5['as'] = NULL;
$arguments5['key'] = NULL;
$arguments5['reverse'] = false;
$arguments5['iteration'] = NULL;
$array7 = array (
);$arguments5['each'] = $renderingContext->getVariableProvider()->getByPath('configuration', $array7);
$arguments5['as'] = 'category';
$arguments5['key'] = 'categoryNumber';
$arguments5['iteration'] = 'iteration';

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
		</ul>

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
			<div class="tab-content">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['name'] = NULL;
$arguments26['value'] = NULL;
$arguments26['property'] = NULL;
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['name'] = 'extensionKey';
$array28 = array (
);$arguments26['value'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array28);

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
						<div role="tabpanel" class="tab-pane ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iteration.isFirst', $array42)]);

$expression43 = function($context) {return ($context["node0"]);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['then'] = 'active';

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '" id="category-';
$array44 = array (
);
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('categoryNumber', $array44)]);

$output38 .= '">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
								<div class="form-section">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
											<h2 class="h4 form-section-headline">';
$array71 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('subcategory.label', $array71)]);

$output70 .= '</h2>
										';
return $output70;
};
$arguments68 = array();

$output67 .= '';

$output67 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
												<h3 class="h4 form-section-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['key'] = NULL;
$arguments83['id'] = NULL;
$arguments83['default'] = NULL;
$arguments83['htmlEscape'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['extensionName'] = NULL;
$arguments83['key'] = 'extConfTemplate.other';

$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext)]);

$output82 .= '</h3>
											';
return $output82;
};
$arguments75 = array();
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$arguments75['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array77 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$array80 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.subcategories', $array80);
};
$arguments78 = array();
$arguments78['subject'] = NULL;
$renderChildrenClosure79 = $arguments78['subject'] ? function() use ($arguments78) { return $arguments78['subject']; } : $renderChildrenClosure79;$array77['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);
$array77['1'] = ' > 1';

$expression81 = function($context) {return (($context["node0"]) > 1);};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)
					),
					$renderingContext
				);
$arguments75['__thenClosure'] = $renderChildrenClosure76;

$output74 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
										';
return $output74;
};
$arguments72 = array();
$arguments72['if'] = NULL;

$output67 .= '';

$output67 .= '
									';
return $output67;
};
$arguments49 = array();
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$arguments49['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('subcategory.label', $array65);

$expression66 = function($context) {return ($context["node0"]);};
$arguments49['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$arguments49['__thenClosure'] = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
											<h2 class="h4 form-section-headline">';
$array52 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('subcategory.label', $array52)]);

$output51 .= '</h2>
										';
return $output51;
};
$arguments49['__elseClosures'][] = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
												<h3 class="h4 form-section-headline">';
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
$arguments62['key'] = 'extConfTemplate.other';

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output61 .= '</h3>
											';
return $output61;
};
$arguments54 = array();
$arguments54['then'] = NULL;
$arguments54['else'] = NULL;
$arguments54['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array56 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$array59 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.subcategories', $array59);
};
$arguments57 = array();
$arguments57['subject'] = NULL;
$renderChildrenClosure58 = $arguments57['subject'] ? function() use ($arguments57) { return $arguments57['subject']; } : $renderChildrenClosure58;$array56['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);
$array56['1'] = ' > 1';

$expression60 = function($context) {return (($context["node0"]) > 1);};
$arguments54['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)
					),
					$renderingContext
				);
$arguments54['__thenClosure'] = $renderChildrenClosure55;

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
										';
return $output53;
};

$output48 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
										<div class="form-group form-group-dashed">
											<label for="em-';
$array89 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.name', $array89)]);

$output88 .= '">
												';
$array90 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.labelHeadline', $array90)]);

$output88 .= '<br>
												<span class="text-monospace text-normal">
													';
$array91 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.name', $array91)]);

$output88 .= '.';
$array92 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.name', $array92)]);

$output88 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
															';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
																(';
$array113 = array (
);
$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('label', $array113)]);

$output112 .= ')
															';
return $output112;
};
$arguments107 = array();
$arguments107['then'] = NULL;
$arguments107['else'] = NULL;
$arguments107['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['0'] = $renderingContext->getVariableProvider()->getByPath('label', $array110);

$expression111 = function($context) {return ($context["node0"]);};
$arguments107['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression111(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);
$arguments107['__thenClosure'] = $renderChildrenClosure108;

$output106 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
														';
return $output106;
};
$arguments99 = array();
$arguments99['map'] = NULL;
// Rendering Array
$array101 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['key'] = NULL;
$arguments102['id'] = NULL;
$arguments102['default'] = NULL;
$arguments102['htmlEscape'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['extensionName'] = NULL;
$output104 = '';

$output104 .= 'extConfTemplate.type.';
$array105 = array (
);
$output104 .= $renderingContext->getVariableProvider()->getByPath('item.type', $array105);
$arguments102['key'] = $output104;
$array101['label'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);
$arguments99['map'] = $array101;

$output98 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
													';
return $output98;
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('item.type', $array96);
$array95['1'] = ' != \'user\'';

$expression97 = function($context) {return (($context["node0"]) != 'user');};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments93['__thenClosure'] = $renderChildrenClosure94;

$output88 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output88 .= '
												</span>
											</label>
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
												<p class="text-danger">';
$array120 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.highlight', $array120)]);

$output119 .= '</p>
											';
return $output119;
};
$arguments114 = array();
$arguments114['then'] = NULL;
$arguments114['else'] = NULL;
$arguments114['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array116 = array();
$array117 = array (
);$array116['0'] = $renderingContext->getVariableProvider()->getByPath('item.highlight', $array117);

$expression118 = function($context) {return ($context["node0"]);};
$arguments114['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression118(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array116)
					),
					$renderingContext
				);
$arguments114['__thenClosure'] = $renderChildrenClosure115;

$output88 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output88 .= '
											<div class="form-control-wrap">
												';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Form\TypoScriptConstantsViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['additionalAttributes'] = NULL;
$arguments121['data'] = NULL;
$arguments121['name'] = NULL;
$arguments121['value'] = NULL;
$arguments121['configuration'] = NULL;
$arguments121['class'] = NULL;
$arguments121['dir'] = NULL;
$arguments121['id'] = NULL;
$arguments121['lang'] = NULL;
$arguments121['style'] = NULL;
$arguments121['title'] = NULL;
$arguments121['accesskey'] = NULL;
$arguments121['tabindex'] = NULL;
$arguments121['onclick'] = NULL;
$array123 = array (
);$arguments121['configuration'] = $renderingContext->getVariableProvider()->getByPath('item', $array123);

$output88 .= TYPO3\CMS\Extensionmanager\ViewHelpers\Form\TypoScriptConstantsViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output88 .= '
											</div>
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
												<div class="help-block">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$array132 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.labelText', $array132)]);
};
$arguments130 = array();
$arguments130['value'] = NULL;
$renderChildrenClosure131 = $arguments130['value'] ? function() use ($arguments130) { return $arguments130['value']; } : $renderChildrenClosure131;
$output129 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '</div>
											';
return $output129;
};
$arguments124 = array();
$arguments124['then'] = NULL;
$arguments124['else'] = NULL;
$arguments124['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['0'] = $renderingContext->getVariableProvider()->getByPath('item.labelText', $array127);

$expression128 = function($context) {return ($context["node0"]);};
$arguments124['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression128(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array126)
					),
					$renderingContext
				);
$arguments124['__thenClosure'] = $renderChildrenClosure125;

$output88 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output88 .= '
										</div>
									';
return $output88;
};
$arguments85 = array();
$arguments85['each'] = NULL;
$arguments85['as'] = NULL;
$arguments85['key'] = NULL;
$arguments85['reverse'] = false;
$arguments85['iteration'] = NULL;
$array87 = array (
);$arguments85['each'] = $renderingContext->getVariableProvider()->getByPath('subcategory.items', $array87);
$arguments85['as'] = 'item';

$output48 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output48 .= '
								</div>
							';
return $output48;
};
$arguments45 = array();
$arguments45['each'] = NULL;
$arguments45['as'] = NULL;
$arguments45['key'] = NULL;
$arguments45['reverse'] = false;
$arguments45['iteration'] = NULL;
$array47 = array (
);$arguments45['each'] = $renderingContext->getVariableProvider()->getByPath('category.subcategories', $array47);
$arguments45['as'] = 'subcategory';

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output38 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$array141 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.highlightText', $array141);
};
$arguments139 = array();
$arguments139['value'] = NULL;

$output138 .= isset($arguments139['value']) ? $arguments139['value'] : $renderChildrenClosure140();

$output138 .= '
							';
return $output138;
};
$arguments133 = array();
$arguments133['then'] = NULL;
$arguments133['else'] = NULL;
$arguments133['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['0'] = $renderingContext->getVariableProvider()->getByPath('category.highlightText', $array136);

$expression137 = function($context) {return ($context["node0"]);};
$arguments133['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression137(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array135)
					),
					$renderingContext
				);
$arguments133['__thenClosure'] = $renderChildrenClosure134;

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output38 .= '
						</div>
					';
return $output38;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('category.name', $array36);

$expression37 = function($context) {return ($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = $renderChildrenClosure34;

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
);$arguments29['each'] = $renderingContext->getVariableProvider()->getByPath('configuration', $array31);
$arguments29['as'] = 'category';
$arguments29['key'] = 'categoryNumber';
$arguments29['iteration'] = 'iteration';

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output25 .= '
			</div>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return '
				In order to allow form submit on pressing enter, a submit button is needed. See #66846
				The submit button is hidden as long as the save buttons are not part of the form yet.
			';
};
$arguments142 = array();

$output25 .= NULL;

$output25 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['additionalAttributes'] = NULL;
$arguments144['data'] = NULL;
$arguments144['name'] = NULL;
$arguments144['value'] = NULL;
$arguments144['property'] = NULL;
$arguments144['disabled'] = NULL;
$arguments144['class'] = NULL;
$arguments144['dir'] = NULL;
$arguments144['id'] = NULL;
$arguments144['lang'] = NULL;
$arguments144['style'] = NULL;
$arguments144['title'] = NULL;
$arguments144['accesskey'] = NULL;
$arguments144['tabindex'] = NULL;
$arguments144['onclick'] = NULL;
$arguments144['name'] = 'mySubmit';
$arguments144['value'] = 'Go';
$arguments144['class'] = 'hidden';

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output25 .= '
		';
return $output25;
};
$arguments23 = array();
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['action'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['controller'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['pluginName'] = NULL;
$arguments23['pageUid'] = NULL;
$arguments23['object'] = NULL;
$arguments23['pageType'] = 0;
$arguments23['noCache'] = false;
$arguments23['noCacheHash'] = false;
$arguments23['section'] = '';
$arguments23['format'] = '';
$arguments23['additionalParams'] = array (
);
$arguments23['absolute'] = false;
$arguments23['addQueryString'] = false;
$arguments23['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments23['addQueryStringMethod'] = 'GET';
$arguments23['fieldNamePrefix'] = NULL;
$arguments23['actionUri'] = NULL;
$arguments23['objectName'] = NULL;
$arguments23['hiddenFieldClassName'] = NULL;
$arguments23['enctype'] = NULL;
$arguments23['method'] = NULL;
$arguments23['name'] = NULL;
$arguments23['onreset'] = NULL;
$arguments23['onsubmit'] = NULL;
$arguments23['target'] = NULL;
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['action'] = 'save';
$arguments23['name'] = 'configurationform';
$arguments23['id'] = 'configurationform';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output4 .= '
	</div>
';

return $output4;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output146 = '';

$output146 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['name'] = NULL;
$arguments147['name'] = 'main';

$output146 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output146 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['key'] = NULL;
$arguments152['id'] = NULL;
$arguments152['default'] = NULL;
$arguments152['htmlEscape'] = NULL;
$arguments152['arguments'] = NULL;
$arguments152['extensionName'] = NULL;
$arguments152['key'] = 'extConfTemplate.headline';

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext)]);

$output151 .= '
		';
$array154 = array (
);
$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.key', $array154)]);

$output151 .= '
	</h1>
';
return $output151;
};
$arguments149 = array();
$arguments149['name'] = NULL;
$arguments149['name'] = 'headline';

$output146 .= NULL;

$output146 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
	<div role="tabpanel">
		<ul class="nav nav-tabs" role="tablist">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output161 = '';

$output161 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
					<li role="presentation" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments168 = array();
$arguments168['then'] = NULL;
$arguments168['else'] = NULL;
$arguments168['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array170 = array();
$array171 = array (
);$array170['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iteration.isFirst', $array171)]);

$expression172 = function($context) {return ($context["node0"]);};
$arguments168['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression172(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array170)
					),
					$renderingContext
				);
$arguments168['then'] = 'active';

$output167 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '">
						<a class="text-capitalize" href="#category-';
$array173 = array (
);
$output167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('categoryNumber', $array173)]);

$output167 .= '" aria-controls="category-';
$array174 = array (
);
$output167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('categoryNumber', $array174)]);

$output167 .= '" role="tab" data-toggle="tab">
							';
$array175 = array (
);
$output167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.name', $array175)]);

$output167 .= '
						</a>
					</li>
				';
return $output167;
};
$arguments162 = array();
$arguments162['then'] = NULL;
$arguments162['else'] = NULL;
$arguments162['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array164 = array();
$array165 = array (
);$array164['0'] = $renderingContext->getVariableProvider()->getByPath('category.name', $array165);

$expression166 = function($context) {return ($context["node0"]);};
$arguments162['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression166(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);
$arguments162['__thenClosure'] = $renderChildrenClosure163;

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output161 .= '
			';
return $output161;
};
$arguments158 = array();
$arguments158['each'] = NULL;
$arguments158['as'] = NULL;
$arguments158['key'] = NULL;
$arguments158['reverse'] = false;
$arguments158['iteration'] = NULL;
$array160 = array (
);$arguments158['each'] = $renderingContext->getVariableProvider()->getByPath('configuration', $array160);
$arguments158['as'] = 'category';
$arguments158['key'] = 'categoryNumber';
$arguments158['iteration'] = 'iteration';

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output157 .= '
		</ul>

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
			<div class="tab-content">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['additionalAttributes'] = NULL;
$arguments179['data'] = NULL;
$arguments179['name'] = NULL;
$arguments179['value'] = NULL;
$arguments179['property'] = NULL;
$arguments179['class'] = NULL;
$arguments179['dir'] = NULL;
$arguments179['id'] = NULL;
$arguments179['lang'] = NULL;
$arguments179['style'] = NULL;
$arguments179['title'] = NULL;
$arguments179['accesskey'] = NULL;
$arguments179['tabindex'] = NULL;
$arguments179['onclick'] = NULL;
$arguments179['name'] = 'extensionKey';
$array181 = array (
);$arguments179['value'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array181);

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output178 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
						<div role="tabpanel" class="tab-pane ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['then'] = NULL;
$arguments192['else'] = NULL;
$arguments192['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array194 = array();
$array195 = array (
);$array194['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iteration.isFirst', $array195)]);

$expression196 = function($context) {return ($context["node0"]);};
$arguments192['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression196(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array194)
					),
					$renderingContext
				);
$arguments192['then'] = 'active';

$output191 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output191 .= '" id="category-';
$array197 = array (
);
$output191 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('categoryNumber', $array197)]);

$output191 .= '">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
								<div class="form-section">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
											<h2 class="h4 form-section-headline">';
$array224 = array (
);
$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('subcategory.label', $array224)]);

$output223 .= '</h2>
										';
return $output223;
};
$arguments221 = array();

$output220 .= '';

$output220 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$output235 = '';

$output235 .= '
												<h3 class="h4 form-section-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['key'] = NULL;
$arguments236['id'] = NULL;
$arguments236['default'] = NULL;
$arguments236['htmlEscape'] = NULL;
$arguments236['arguments'] = NULL;
$arguments236['extensionName'] = NULL;
$arguments236['key'] = 'extConfTemplate.other';

$output235 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext)]);

$output235 .= '</h3>
											';
return $output235;
};
$arguments228 = array();
$arguments228['then'] = NULL;
$arguments228['else'] = NULL;
$arguments228['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array230 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
$array233 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.subcategories', $array233);
};
$arguments231 = array();
$arguments231['subject'] = NULL;
$renderChildrenClosure232 = $arguments231['subject'] ? function() use ($arguments231) { return $arguments231['subject']; } : $renderChildrenClosure232;$array230['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);
$array230['1'] = ' > 1';

$expression234 = function($context) {return (($context["node0"]) > 1);};
$arguments228['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression234(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array230)
					),
					$renderingContext
				);
$arguments228['__thenClosure'] = $renderChildrenClosure229;

$output227 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output227 .= '
										';
return $output227;
};
$arguments225 = array();
$arguments225['if'] = NULL;

$output220 .= '';

$output220 .= '
									';
return $output220;
};
$arguments202 = array();
$arguments202['then'] = NULL;
$arguments202['else'] = NULL;
$arguments202['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array217 = array();
$array218 = array (
);$array217['0'] = $renderingContext->getVariableProvider()->getByPath('subcategory.label', $array218);

$expression219 = function($context) {return ($context["node0"]);};
$arguments202['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression219(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array217)
					),
					$renderingContext
				);
$arguments202['__thenClosure'] = function() use ($renderingContext, $self) {
$output204 = '';

$output204 .= '
											<h2 class="h4 form-section-headline">';
$array205 = array (
);
$output204 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('subcategory.label', $array205)]);

$output204 .= '</h2>
										';
return $output204;
};
$arguments202['__elseClosures'][] = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
												<h3 class="h4 form-section-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['key'] = NULL;
$arguments215['id'] = NULL;
$arguments215['default'] = NULL;
$arguments215['htmlEscape'] = NULL;
$arguments215['arguments'] = NULL;
$arguments215['extensionName'] = NULL;
$arguments215['key'] = 'extConfTemplate.other';

$output214 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext)]);

$output214 .= '</h3>
											';
return $output214;
};
$arguments207 = array();
$arguments207['then'] = NULL;
$arguments207['else'] = NULL;
$arguments207['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array209 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$array212 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.subcategories', $array212);
};
$arguments210 = array();
$arguments210['subject'] = NULL;
$renderChildrenClosure211 = $arguments210['subject'] ? function() use ($arguments210) { return $arguments210['subject']; } : $renderChildrenClosure211;$array209['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);
$array209['1'] = ' > 1';

$expression213 = function($context) {return (($context["node0"]) > 1);};
$arguments207['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression213(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array209)
					),
					$renderingContext
				);
$arguments207['__thenClosure'] = $renderChildrenClosure208;

$output206 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output206 .= '
										';
return $output206;
};

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
$output241 = '';

$output241 .= '
										<div class="form-group form-group-dashed">
											<label for="em-';
$array242 = array (
);
$output241 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.name', $array242)]);

$output241 .= '">
												';
$array243 = array (
);
$output241 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.labelHeadline', $array243)]);

$output241 .= '<br>
												<span class="text-monospace text-normal">
													';
$array244 = array (
);
$output241 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.name', $array244)]);

$output241 .= '.';
$array245 = array (
);
$output241 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.name', $array245)]);

$output241 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '
															';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
																(';
$array266 = array (
);
$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('label', $array266)]);

$output265 .= ')
															';
return $output265;
};
$arguments260 = array();
$arguments260['then'] = NULL;
$arguments260['else'] = NULL;
$arguments260['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array262 = array();
$array263 = array (
);$array262['0'] = $renderingContext->getVariableProvider()->getByPath('label', $array263);

$expression264 = function($context) {return ($context["node0"]);};
$arguments260['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression264(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array262)
					),
					$renderingContext
				);
$arguments260['__thenClosure'] = $renderChildrenClosure261;

$output259 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output259 .= '
														';
return $output259;
};
$arguments252 = array();
$arguments252['map'] = NULL;
// Rendering Array
$array254 = array();
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

$output257 .= 'extConfTemplate.type.';
$array258 = array (
);
$output257 .= $renderingContext->getVariableProvider()->getByPath('item.type', $array258);
$arguments255['key'] = $output257;
$array254['label'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);
$arguments252['map'] = $array254;

$output251 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output251 .= '
													';
return $output251;
};
$arguments246 = array();
$arguments246['then'] = NULL;
$arguments246['else'] = NULL;
$arguments246['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array248 = array();
$array249 = array (
);$array248['0'] = $renderingContext->getVariableProvider()->getByPath('item.type', $array249);
$array248['1'] = ' != \'user\'';

$expression250 = function($context) {return (($context["node0"]) != 'user');};
$arguments246['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression250(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array248)
					),
					$renderingContext
				);
$arguments246['__thenClosure'] = $renderChildrenClosure247;

$output241 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output241 .= '
												</span>
											</label>
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
												<p class="text-danger">';
$array273 = array (
);
$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.highlight', $array273)]);

$output272 .= '</p>
											';
return $output272;
};
$arguments267 = array();
$arguments267['then'] = NULL;
$arguments267['else'] = NULL;
$arguments267['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array269 = array();
$array270 = array (
);$array269['0'] = $renderingContext->getVariableProvider()->getByPath('item.highlight', $array270);

$expression271 = function($context) {return ($context["node0"]);};
$arguments267['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression271(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array269)
					),
					$renderingContext
				);
$arguments267['__thenClosure'] = $renderChildrenClosure268;

$output241 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output241 .= '
											<div class="form-control-wrap">
												';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Form\TypoScriptConstantsViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments274 = array();
$arguments274['additionalAttributes'] = NULL;
$arguments274['data'] = NULL;
$arguments274['name'] = NULL;
$arguments274['value'] = NULL;
$arguments274['configuration'] = NULL;
$arguments274['class'] = NULL;
$arguments274['dir'] = NULL;
$arguments274['id'] = NULL;
$arguments274['lang'] = NULL;
$arguments274['style'] = NULL;
$arguments274['title'] = NULL;
$arguments274['accesskey'] = NULL;
$arguments274['tabindex'] = NULL;
$arguments274['onclick'] = NULL;
$array276 = array (
);$arguments274['configuration'] = $renderingContext->getVariableProvider()->getByPath('item', $array276);

$output241 .= TYPO3\CMS\Extensionmanager\ViewHelpers\Form\TypoScriptConstantsViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output241 .= '
											</div>
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
$output282 = '';

$output282 .= '
												<div class="help-block">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$array285 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.labelText', $array285)]);
};
$arguments283 = array();
$arguments283['value'] = NULL;
$renderChildrenClosure284 = $arguments283['value'] ? function() use ($arguments283) { return $arguments283['value']; } : $renderChildrenClosure284;
$output282 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output282 .= '</div>
											';
return $output282;
};
$arguments277 = array();
$arguments277['then'] = NULL;
$arguments277['else'] = NULL;
$arguments277['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array279 = array();
$array280 = array (
);$array279['0'] = $renderingContext->getVariableProvider()->getByPath('item.labelText', $array280);

$expression281 = function($context) {return ($context["node0"]);};
$arguments277['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression281(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array279)
					),
					$renderingContext
				);
$arguments277['__thenClosure'] = $renderChildrenClosure278;

$output241 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);

$output241 .= '
										</div>
									';
return $output241;
};
$arguments238 = array();
$arguments238['each'] = NULL;
$arguments238['as'] = NULL;
$arguments238['key'] = NULL;
$arguments238['reverse'] = false;
$arguments238['iteration'] = NULL;
$array240 = array (
);$arguments238['each'] = $renderingContext->getVariableProvider()->getByPath('subcategory.items', $array240);
$arguments238['as'] = 'item';

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output201 .= '
								</div>
							';
return $output201;
};
$arguments198 = array();
$arguments198['each'] = NULL;
$arguments198['as'] = NULL;
$arguments198['key'] = NULL;
$arguments198['reverse'] = false;
$arguments198['iteration'] = NULL;
$array200 = array (
);$arguments198['each'] = $renderingContext->getVariableProvider()->getByPath('category.subcategories', $array200);
$arguments198['as'] = 'subcategory';

$output191 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output191 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
$output291 = '';

$output291 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$array294 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.highlightText', $array294);
};
$arguments292 = array();
$arguments292['value'] = NULL;

$output291 .= isset($arguments292['value']) ? $arguments292['value'] : $renderChildrenClosure293();

$output291 .= '
							';
return $output291;
};
$arguments286 = array();
$arguments286['then'] = NULL;
$arguments286['else'] = NULL;
$arguments286['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array288 = array();
$array289 = array (
);$array288['0'] = $renderingContext->getVariableProvider()->getByPath('category.highlightText', $array289);

$expression290 = function($context) {return ($context["node0"]);};
$arguments286['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression290(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array288)
					),
					$renderingContext
				);
$arguments286['__thenClosure'] = $renderChildrenClosure287;

$output191 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output191 .= '
						</div>
					';
return $output191;
};
$arguments186 = array();
$arguments186['then'] = NULL;
$arguments186['else'] = NULL;
$arguments186['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array188 = array();
$array189 = array (
);$array188['0'] = $renderingContext->getVariableProvider()->getByPath('category.name', $array189);

$expression190 = function($context) {return ($context["node0"]);};
$arguments186['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression190(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array188)
					),
					$renderingContext
				);
$arguments186['__thenClosure'] = $renderChildrenClosure187;

$output185 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output185 .= '
				';
return $output185;
};
$arguments182 = array();
$arguments182['each'] = NULL;
$arguments182['as'] = NULL;
$arguments182['key'] = NULL;
$arguments182['reverse'] = false;
$arguments182['iteration'] = NULL;
$array184 = array (
);$arguments182['each'] = $renderingContext->getVariableProvider()->getByPath('configuration', $array184);
$arguments182['as'] = 'category';
$arguments182['key'] = 'categoryNumber';
$arguments182['iteration'] = 'iteration';

$output178 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output178 .= '
			</div>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
return '
				In order to allow form submit on pressing enter, a submit button is needed. See #66846
				The submit button is hidden as long as the save buttons are not part of the form yet.
			';
};
$arguments295 = array();

$output178 .= NULL;

$output178 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['additionalAttributes'] = NULL;
$arguments297['data'] = NULL;
$arguments297['name'] = NULL;
$arguments297['value'] = NULL;
$arguments297['property'] = NULL;
$arguments297['disabled'] = NULL;
$arguments297['class'] = NULL;
$arguments297['dir'] = NULL;
$arguments297['id'] = NULL;
$arguments297['lang'] = NULL;
$arguments297['style'] = NULL;
$arguments297['title'] = NULL;
$arguments297['accesskey'] = NULL;
$arguments297['tabindex'] = NULL;
$arguments297['onclick'] = NULL;
$arguments297['name'] = 'mySubmit';
$arguments297['value'] = 'Go';
$arguments297['class'] = 'hidden';

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output178 .= '
		';
return $output178;
};
$arguments176 = array();
$arguments176['additionalAttributes'] = NULL;
$arguments176['data'] = NULL;
$arguments176['action'] = NULL;
$arguments176['arguments'] = array (
);
$arguments176['controller'] = NULL;
$arguments176['extensionName'] = NULL;
$arguments176['pluginName'] = NULL;
$arguments176['pageUid'] = NULL;
$arguments176['object'] = NULL;
$arguments176['pageType'] = 0;
$arguments176['noCache'] = false;
$arguments176['noCacheHash'] = false;
$arguments176['section'] = '';
$arguments176['format'] = '';
$arguments176['additionalParams'] = array (
);
$arguments176['absolute'] = false;
$arguments176['addQueryString'] = false;
$arguments176['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments176['addQueryStringMethod'] = 'GET';
$arguments176['fieldNamePrefix'] = NULL;
$arguments176['actionUri'] = NULL;
$arguments176['objectName'] = NULL;
$arguments176['hiddenFieldClassName'] = NULL;
$arguments176['enctype'] = NULL;
$arguments176['method'] = NULL;
$arguments176['name'] = NULL;
$arguments176['onreset'] = NULL;
$arguments176['onsubmit'] = NULL;
$arguments176['target'] = NULL;
$arguments176['class'] = NULL;
$arguments176['dir'] = NULL;
$arguments176['id'] = NULL;
$arguments176['lang'] = NULL;
$arguments176['style'] = NULL;
$arguments176['title'] = NULL;
$arguments176['accesskey'] = NULL;
$arguments176['tabindex'] = NULL;
$arguments176['onclick'] = NULL;
$arguments176['action'] = 'save';
$arguments176['name'] = 'configurationform';
$arguments176['id'] = 'configurationform';

$output157 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output157 .= '
	</div>
';
return $output157;
};
$arguments155 = array();
$arguments155['name'] = NULL;
$arguments155['name'] = 'content';

$output146 .= NULL;

$output146 .= '
';

return $output146;
}


}
#