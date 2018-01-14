<?php

class layout_Default_html_0d1d44c6f279b8efb947cb91ce5ead30345b8315 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
<div id="top"></div>
<div class="body-bg';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['0'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.type', $array7);

$expression8 = function($context) {return ($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression8(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)
					),
					$renderingContext
				);
$output9 = '';

$output9 .= ' body-bg-';
$array10 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.navigation.type', $array10)]);
$arguments4['then'] = $output9;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '">

    <a class="sr-only sr-only-focusable" href="#content">
        <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['key'] = 'skiptomaincontent';
$arguments11['extensionName'] = 'bootstrap_package';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output3 .= '</span>
    </a>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['section'] = NULL;
$arguments13['partial'] = NULL;
$arguments13['delegate'] = NULL;
$arguments13['renderable'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['optional'] = false;
$arguments13['default'] = NULL;
$arguments13['contentAs'] = NULL;
$arguments13['partial'] = 'Navigation/Main';
$arguments13['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['section'] = NULL;
$arguments16['partial'] = NULL;
$arguments16['delegate'] = NULL;
$arguments16['renderable'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['optional'] = false;
$arguments16['default'] = NULL;
$arguments16['contentAs'] = NULL;
$arguments16['partial'] = 'Navigation/Breadcrumb';
$arguments16['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output3 .= '

    <div id="content" class="main-section">
        <!--TYPO3SEARCH_begin-->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['section'] = NULL;
$arguments19['partial'] = NULL;
$arguments19['delegate'] = NULL;
$arguments19['renderable'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['optional'] = false;
$arguments19['default'] = NULL;
$arguments19['contentAs'] = NULL;
$arguments19['section'] = 'Main';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output3 .= '
        <!--TYPO3SEARCH_end-->
    </div>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['section'] = NULL;
$arguments21['partial'] = NULL;
$arguments21['delegate'] = NULL;
$arguments21['renderable'] = NULL;
$arguments21['arguments'] = array (
);
$arguments21['optional'] = false;
$arguments21['default'] = NULL;
$arguments21['contentAs'] = NULL;
$arguments21['partial'] = 'Structure/Footer';
$arguments21['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['section'] = NULL;
$arguments24['partial'] = NULL;
$arguments24['delegate'] = NULL;
$arguments24['renderable'] = NULL;
$arguments24['arguments'] = array (
);
$arguments24['optional'] = false;
$arguments24['default'] = NULL;
$arguments24['contentAs'] = NULL;
$arguments24['partial'] = 'Structure/ScrollTop';
$arguments24['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output3 .= '

</div>
';
return $output3;
};
$arguments1 = array();

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#