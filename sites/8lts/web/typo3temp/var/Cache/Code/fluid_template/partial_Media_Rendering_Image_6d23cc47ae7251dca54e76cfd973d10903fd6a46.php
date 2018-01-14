<?php

class partial_Media_Rendering_Image_6d23cc47ae7251dca54e76cfd973d10903fd6a46 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['src'] = NULL;
$arguments1['treatIdAsReference'] = false;
$arguments1['image'] = NULL;
$arguments1['crop'] = NULL;
$arguments1['cropVariant'] = 'default';
$arguments1['width'] = NULL;
$arguments1['height'] = NULL;
$arguments1['minWidth'] = NULL;
$arguments1['minHeight'] = NULL;
$arguments1['maxWidth'] = NULL;
$arguments1['maxHeight'] = NULL;
$arguments1['absolute'] = false;
$arguments1['src'] = 'EXT:bootstrap_package/Resources/Public/Images/blank.gif';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '" data-src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['src'] = NULL;
$arguments3['treatIdAsReference'] = false;
$arguments3['image'] = NULL;
$arguments3['crop'] = NULL;
$arguments3['cropVariant'] = 'default';
$arguments3['width'] = NULL;
$arguments3['height'] = NULL;
$arguments3['minWidth'] = NULL;
$arguments3['minHeight'] = NULL;
$arguments3['maxWidth'] = NULL;
$arguments3['maxHeight'] = NULL;
$arguments3['absolute'] = false;
$array5 = array (
);$arguments3['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array5);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '" data-large="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['src'] = NULL;
$arguments6['treatIdAsReference'] = false;
$arguments6['image'] = NULL;
$arguments6['crop'] = NULL;
$arguments6['cropVariant'] = 'default';
$arguments6['width'] = NULL;
$arguments6['height'] = NULL;
$arguments6['minWidth'] = NULL;
$arguments6['minHeight'] = NULL;
$arguments6['maxWidth'] = NULL;
$arguments6['maxHeight'] = NULL;
$arguments6['absolute'] = false;
$array8 = array (
);$arguments6['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array8);
$arguments6['cropVariant'] = 'default';
$arguments6['maxWidth'] = 1140;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output0 .= '" data-medium="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['src'] = NULL;
$arguments9['treatIdAsReference'] = false;
$arguments9['image'] = NULL;
$arguments9['crop'] = NULL;
$arguments9['cropVariant'] = 'default';
$arguments9['width'] = NULL;
$arguments9['height'] = NULL;
$arguments9['minWidth'] = NULL;
$arguments9['minHeight'] = NULL;
$arguments9['maxWidth'] = NULL;
$arguments9['maxHeight'] = NULL;
$arguments9['absolute'] = false;
$array11 = array (
);$arguments9['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array11);
$arguments9['cropVariant'] = 'medium';
$arguments9['maxWidth'] = 940;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '" data-small="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['src'] = NULL;
$arguments12['treatIdAsReference'] = false;
$arguments12['image'] = NULL;
$arguments12['crop'] = NULL;
$arguments12['cropVariant'] = 'default';
$arguments12['width'] = NULL;
$arguments12['height'] = NULL;
$arguments12['minWidth'] = NULL;
$arguments12['minHeight'] = NULL;
$arguments12['maxWidth'] = NULL;
$arguments12['maxHeight'] = NULL;
$arguments12['absolute'] = false;
$array14 = array (
);$arguments12['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array14);
$arguments12['cropVariant'] = 'small';
$arguments12['maxWidth'] = 720;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output0 .= '" data-extrasmall="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['src'] = NULL;
$arguments15['treatIdAsReference'] = false;
$arguments15['image'] = NULL;
$arguments15['crop'] = NULL;
$arguments15['cropVariant'] = 'default';
$arguments15['width'] = NULL;
$arguments15['height'] = NULL;
$arguments15['minWidth'] = NULL;
$arguments15['minHeight'] = NULL;
$arguments15['maxWidth'] = NULL;
$arguments15['maxHeight'] = NULL;
$arguments15['absolute'] = false;
$array17 = array (
);$arguments15['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array17);
$arguments15['cropVariant'] = 'extrasmall';
$arguments15['maxWidth'] = 320;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output0 .= '" title="';
$array18 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.title', $array18)]);

$output0 .= '" alt="';
$array19 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.alternative', $array19)]);

$output0 .= '" class="lazyload" data-preload="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['0'] = $renderingContext->getVariableProvider()->getByPath('settings.preload.images', $array23);

$expression24 = function($context) {return ($context["node0"]);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$arguments20['then'] = 'true';
$arguments20['else'] = 'false';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '" />
<noscript>
    <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['src'] = NULL;
$arguments25['treatIdAsReference'] = false;
$arguments25['image'] = NULL;
$arguments25['crop'] = NULL;
$arguments25['cropVariant'] = 'default';
$arguments25['width'] = NULL;
$arguments25['height'] = NULL;
$arguments25['minWidth'] = NULL;
$arguments25['minHeight'] = NULL;
$arguments25['maxWidth'] = NULL;
$arguments25['maxHeight'] = NULL;
$arguments25['absolute'] = false;
$array27 = array (
);$arguments25['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array27);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output0 .= '" title="';
$array28 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.title', $array28)]);

$output0 .= '" alt="';
$array29 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.alternative', $array29)]);

$output0 .= '" />
</noscript>

';

return $output0;
}


}
#