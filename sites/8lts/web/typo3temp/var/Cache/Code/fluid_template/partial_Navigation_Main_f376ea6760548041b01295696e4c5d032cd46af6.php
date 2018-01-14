<?php

class partial_Navigation_Main_f376ea6760548041b01295696e4c5d032cd46af6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '
<header class="navbar navbar-';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.navigation.style', $array1)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['0'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array5);

$expression6 = function($context) {return ($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)
					),
					$renderingContext
				);
$arguments2['then'] = ' navbar-has-image';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.type', $array10);

$expression11 = function($context) {return ($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['else'] = ' navbar-top';
$output12 = '';

$output12 .= ' navbar-';
$array13 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.navigation.type', $array13)]);

$output12 .= ' navbar-fixed-';
$array14 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.navigation.type', $array14)]);
$arguments7['then'] = $output12;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '">
    <div class="container">
        <div class="navbar-header navbar-header-main">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
                        <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['src'] = NULL;
$arguments53['treatIdAsReference'] = false;
$arguments53['image'] = NULL;
$arguments53['crop'] = NULL;
$arguments53['cropVariant'] = 'default';
$arguments53['width'] = NULL;
$arguments53['height'] = NULL;
$arguments53['minWidth'] = NULL;
$arguments53['minHeight'] = NULL;
$arguments53['maxWidth'] = NULL;
$arguments53['maxHeight'] = NULL;
$arguments53['absolute'] = false;
$array55 = array (
);$arguments53['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array55);

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output52 .= '" alt="';
$array56 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array56)]);

$output52 .= '" height="';
$array57 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array57)]);

$output52 .= '" width="';
$array58 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array58)]);

$output52 .= '">
                        <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['src'] = NULL;
$arguments59['treatIdAsReference'] = false;
$arguments59['image'] = NULL;
$arguments59['crop'] = NULL;
$arguments59['cropVariant'] = 'default';
$arguments59['width'] = NULL;
$arguments59['height'] = NULL;
$arguments59['minWidth'] = NULL;
$arguments59['minHeight'] = NULL;
$arguments59['maxWidth'] = NULL;
$arguments59['maxHeight'] = NULL;
$arguments59['absolute'] = false;
$array61 = array (
);$arguments59['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.fileInverted', $array61);

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output52 .= '" alt="';
$array62 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array62)]);

$output52 .= '" height="';
$array63 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array63)]);

$output52 .= '" width="';
$array64 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array64)]);

$output52 .= '">
                    ';
return $output52;
};
$arguments48 = array();
$arguments48['pageUid'] = NULL;
$arguments48['additionalParams'] = array (
);
$arguments48['pageType'] = 0;
$arguments48['noCache'] = false;
$arguments48['noCacheHash'] = false;
$arguments48['section'] = '';
$arguments48['linkAccessRestrictedPages'] = false;
$arguments48['absolute'] = false;
$arguments48['addQueryString'] = false;
$arguments48['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments48['addQueryStringMethod'] = NULL;
$arguments48['additionalAttributes'] = NULL;
$arguments48['data'] = NULL;
$arguments48['class'] = NULL;
$arguments48['dir'] = NULL;
$arguments48['id'] = NULL;
$arguments48['lang'] = NULL;
$arguments48['style'] = NULL;
$arguments48['title'] = NULL;
$arguments48['accesskey'] = NULL;
$arguments48['tabindex'] = NULL;
$arguments48['onclick'] = NULL;
$arguments48['target'] = NULL;
$arguments48['rel'] = NULL;
$array50 = array (
);$arguments48['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array50);
$arguments48['class'] = 'navbar-brand navbar-brand-image';
$array51 = array (
);$arguments48['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array51);

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
                ';
return $output47;
};
$arguments45 = array();

$output44 .= '';

$output44 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$array72 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array72)]);
};
$arguments68 = array();
$arguments68['pageUid'] = NULL;
$arguments68['additionalParams'] = array (
);
$arguments68['pageType'] = 0;
$arguments68['noCache'] = false;
$arguments68['noCacheHash'] = false;
$arguments68['section'] = '';
$arguments68['linkAccessRestrictedPages'] = false;
$arguments68['absolute'] = false;
$arguments68['addQueryString'] = false;
$arguments68['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments68['addQueryStringMethod'] = NULL;
$arguments68['additionalAttributes'] = NULL;
$arguments68['data'] = NULL;
$arguments68['class'] = NULL;
$arguments68['dir'] = NULL;
$arguments68['id'] = NULL;
$arguments68['lang'] = NULL;
$arguments68['style'] = NULL;
$arguments68['title'] = NULL;
$arguments68['accesskey'] = NULL;
$arguments68['tabindex'] = NULL;
$arguments68['onclick'] = NULL;
$arguments68['target'] = NULL;
$arguments68['rel'] = NULL;
$array70 = array (
);$arguments68['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array70);
$arguments68['class'] = 'navbar-brand';
$array71 = array (
);$arguments68['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array71);

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
                ';
return $output67;
};
$arguments65 = array();
$arguments65['if'] = NULL;

$output44 .= '';

$output44 .= '
            ';
return $output44;
};
$arguments15 = array();
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array42);

$expression43 = function($context) {return ($context["node0"]);};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments15['__thenClosure'] = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
                        <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['src'] = NULL;
$arguments23['treatIdAsReference'] = false;
$arguments23['image'] = NULL;
$arguments23['crop'] = NULL;
$arguments23['cropVariant'] = 'default';
$arguments23['width'] = NULL;
$arguments23['height'] = NULL;
$arguments23['minWidth'] = NULL;
$arguments23['minHeight'] = NULL;
$arguments23['maxWidth'] = NULL;
$arguments23['maxHeight'] = NULL;
$arguments23['absolute'] = false;
$array25 = array (
);$arguments23['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array25);

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output22 .= '" alt="';
$array26 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array26)]);

$output22 .= '" height="';
$array27 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array27)]);

$output22 .= '" width="';
$array28 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array28)]);

$output22 .= '">
                        <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['src'] = NULL;
$arguments29['treatIdAsReference'] = false;
$arguments29['image'] = NULL;
$arguments29['crop'] = NULL;
$arguments29['cropVariant'] = 'default';
$arguments29['width'] = NULL;
$arguments29['height'] = NULL;
$arguments29['minWidth'] = NULL;
$arguments29['minHeight'] = NULL;
$arguments29['maxWidth'] = NULL;
$arguments29['maxHeight'] = NULL;
$arguments29['absolute'] = false;
$array31 = array (
);$arguments29['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.fileInverted', $array31);

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output22 .= '" alt="';
$array32 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array32)]);

$output22 .= '" height="';
$array33 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array33)]);

$output22 .= '" width="';
$array34 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array34)]);

$output22 .= '">
                    ';
return $output22;
};
$arguments18 = array();
$arguments18['pageUid'] = NULL;
$arguments18['additionalParams'] = array (
);
$arguments18['pageType'] = 0;
$arguments18['noCache'] = false;
$arguments18['noCacheHash'] = false;
$arguments18['section'] = '';
$arguments18['linkAccessRestrictedPages'] = false;
$arguments18['absolute'] = false;
$arguments18['addQueryString'] = false;
$arguments18['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments18['addQueryStringMethod'] = NULL;
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$arguments18['target'] = NULL;
$arguments18['rel'] = NULL;
$array20 = array (
);$arguments18['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array20);
$arguments18['class'] = 'navbar-brand navbar-brand-image';
$array21 = array (
);$arguments18['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array21);

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
                ';
return $output17;
};
$arguments15['__elseClosures'][] = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$array40 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array40)]);
};
$arguments36 = array();
$arguments36['pageUid'] = NULL;
$arguments36['additionalParams'] = array (
);
$arguments36['pageType'] = 0;
$arguments36['noCache'] = false;
$arguments36['noCacheHash'] = false;
$arguments36['section'] = '';
$arguments36['linkAccessRestrictedPages'] = false;
$arguments36['absolute'] = false;
$arguments36['addQueryString'] = false;
$arguments36['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments36['addQueryStringMethod'] = NULL;
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['class'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['id'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
$arguments36['target'] = NULL;
$arguments36['rel'] = NULL;
$array38 = array (
);$arguments36['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array38);
$arguments36['class'] = 'navbar-brand';
$array39 = array (
);$arguments36['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array39);

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
                ';
return $output35;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return '
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            ';
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array76);

$expression77 = function($context) {return ($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
$arguments73['__thenClosure'] = $renderChildrenClosure74;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output0 .= '
            <span class="navbar-header-border-bottom"></span>
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
            <nav class="navbar-collapse collapse" role="navigation">
                <ul class="nav navbar-nav navbar-main">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
                        <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.active', $array91);

$expression92 = function($context) {return ($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$arguments88['then'] = 'active';

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array96);

$expression97 = function($context) {return ($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments93['then'] = 'dropdown';

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output87 .= '">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output242 = '';

$output242 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
$output245 = '';

$output245 .= '
                                    <p class="navbar-text">';
$array246 = array (
);
$output245 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array246)]);

$output245 .= '</p>
                                ';
return $output245;
};
$arguments243 = array();

$output242 .= '';

$output242 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$output318 = '';

$output318 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
$output321 = '';

$output321 .= '
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <span>';
$array322 = array (
);
$output321 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array322)]);

$output321 .= '</span>
                                                <b class="caret"></b>
                                                <span class="bar"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
$output326 = '';

$output326 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
$output350 = '';

$output350 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
$output353 = '';

$output353 .= '
                                                            <li class="dropdown-header">';
$array354 = array (
);
$output353 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array354)]);

$output353 .= '</li>
                                                        ';
return $output353;
};
$arguments351 = array();

$output350 .= '';

$output350 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
$output357 = '';

$output357 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments358 = array();
$arguments358['then'] = NULL;
$arguments358['else'] = NULL;
$arguments358['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array360 = array();
$array361 = array (
);$array360['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array361);

$expression362 = function($context) {return ($context["node0"]);};
$arguments358['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression362(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array360)
					),
					$renderingContext
				);
$arguments358['then'] = 'active';

$output357 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output357 .= '">
                                                                <a href="';
$array363 = array (
);
$output357 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array363)]);

$output357 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments364 = array();
$arguments364['then'] = NULL;
$arguments364['else'] = NULL;
$arguments364['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array366 = array();
$array367 = array (
);$array366['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array367);

$expression368 = function($context) {return ($context["node0"]);};
$arguments364['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression368(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array366)
					),
					$renderingContext
				);
$output369 = '';

$output369 .= ' target="';
$array370 = array (
);
$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array370)]);

$output369 .= '"';
$arguments364['then'] = $output369;

$output357 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext);

$output357 .= ' title="';
$array371 = array (
);
$output357 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array371)]);

$output357 .= '">
                                                                    <span>';
$array372 = array (
);
$output357 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array372)]);

$output357 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output357;
};
$arguments355 = array();
$arguments355['if'] = NULL;

$output350 .= '';

$output350 .= '
                                                    ';
return $output350;
};
$arguments327 = array();
$arguments327['then'] = NULL;
$arguments327['else'] = NULL;
$arguments327['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array347 = array();
$array348 = array (
);$array347['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array348);

$expression349 = function($context) {return ($context["node0"]);};
$arguments327['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression349(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array347)
					),
					$renderingContext
				);
$arguments327['__thenClosure'] = function() use ($renderingContext, $self) {
$output329 = '';

$output329 .= '
                                                            <li class="dropdown-header">';
$array330 = array (
);
$output329 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array330)]);

$output329 .= '</li>
                                                        ';
return $output329;
};
$arguments327['__elseClosures'][] = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['then'] = NULL;
$arguments332['else'] = NULL;
$arguments332['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array334 = array();
$array335 = array (
);$array334['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array335);

$expression336 = function($context) {return ($context["node0"]);};
$arguments332['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression336(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array334)
					),
					$renderingContext
				);
$arguments332['then'] = 'active';

$output331 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output331 .= '">
                                                                <a href="';
$array337 = array (
);
$output331 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array337)]);

$output331 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments338 = array();
$arguments338['then'] = NULL;
$arguments338['else'] = NULL;
$arguments338['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array340 = array();
$array341 = array (
);$array340['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array341);

$expression342 = function($context) {return ($context["node0"]);};
$arguments338['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression342(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array340)
					),
					$renderingContext
				);
$output343 = '';

$output343 .= ' target="';
$array344 = array (
);
$output343 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array344)]);

$output343 .= '"';
$arguments338['then'] = $output343;

$output331 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);

$output331 .= ' title="';
$array345 = array (
);
$output331 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array345)]);

$output331 .= '">
                                                                    <span>';
$array346 = array (
);
$output331 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array346)]);

$output331 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output331;
};

$output326 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);

$output326 .= '
                                                ';
return $output326;
};
$arguments323 = array();
$arguments323['each'] = NULL;
$arguments323['as'] = NULL;
$arguments323['key'] = NULL;
$arguments323['reverse'] = false;
$arguments323['iteration'] = NULL;
$array325 = array (
);$arguments323['each'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array325);
$arguments323['as'] = 'child';

$output321 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output321 .= '
                                            </ul>
                                        ';
return $output321;
};
$arguments319 = array();

$output318 .= '';

$output318 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
                                            <a href="';
$array376 = array (
);
$output375 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.link', $array376)]);

$output375 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments377 = array();
$arguments377['then'] = NULL;
$arguments377['else'] = NULL;
$arguments377['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array379 = array();
$array380 = array (
);$array379['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array380);

$expression381 = function($context) {return ($context["node0"]);};
$arguments377['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression381(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array379)
					),
					$renderingContext
				);
$output382 = '';

$output382 .= ' target="';
$array383 = array (
);
$output382 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array383)]);

$output382 .= '"';
$arguments377['then'] = $output382;

$output375 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext);

$output375 .= ' title="';
$array384 = array (
);
$output375 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array384)]);

$output375 .= '">
                                                <span>';
$array385 = array (
);
$output375 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array385)]);

$output375 .= '</span>
                                                <span class="bar"></span>
                                            </a>
                                        ';
return $output375;
};
$arguments373 = array();
$arguments373['if'] = NULL;

$output318 .= '';

$output318 .= '
                                    ';
return $output318;
};
$arguments250 = array();
$arguments250['then'] = NULL;
$arguments250['else'] = NULL;
$arguments250['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array315 = array();
$array316 = array (
);$array315['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array316);

$expression317 = function($context) {return ($context["node0"]);};
$arguments250['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression317(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array315)
					),
					$renderingContext
				);
$arguments250['__thenClosure'] = function() use ($renderingContext, $self) {
$output252 = '';

$output252 .= '
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <span>';
$array253 = array (
);
$output252 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array253)]);

$output252 .= '</span>
                                                <b class="caret"></b>
                                                <span class="bar"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
$output281 = '';

$output281 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
$output284 = '';

$output284 .= '
                                                            <li class="dropdown-header">';
$array285 = array (
);
$output284 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array285)]);

$output284 .= '</li>
                                                        ';
return $output284;
};
$arguments282 = array();

$output281 .= '';

$output281 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments289 = array();
$arguments289['then'] = NULL;
$arguments289['else'] = NULL;
$arguments289['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array291 = array();
$array292 = array (
);$array291['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array292);

$expression293 = function($context) {return ($context["node0"]);};
$arguments289['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression293(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array291)
					),
					$renderingContext
				);
$arguments289['then'] = 'active';

$output288 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output288 .= '">
                                                                <a href="';
$array294 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array294)]);

$output288 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments295 = array();
$arguments295['then'] = NULL;
$arguments295['else'] = NULL;
$arguments295['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array297 = array();
$array298 = array (
);$array297['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array298);

$expression299 = function($context) {return ($context["node0"]);};
$arguments295['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression299(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array297)
					),
					$renderingContext
				);
$output300 = '';

$output300 .= ' target="';
$array301 = array (
);
$output300 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array301)]);

$output300 .= '"';
$arguments295['then'] = $output300;

$output288 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output288 .= ' title="';
$array302 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array302)]);

$output288 .= '">
                                                                    <span>';
$array303 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array303)]);

$output288 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output288;
};
$arguments286 = array();
$arguments286['if'] = NULL;

$output281 .= '';

$output281 .= '
                                                    ';
return $output281;
};
$arguments258 = array();
$arguments258['then'] = NULL;
$arguments258['else'] = NULL;
$arguments258['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array278 = array();
$array279 = array (
);$array278['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array279);

$expression280 = function($context) {return ($context["node0"]);};
$arguments258['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression280(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array278)
					),
					$renderingContext
				);
$arguments258['__thenClosure'] = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
                                                            <li class="dropdown-header">';
$array261 = array (
);
$output260 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array261)]);

$output260 .= '</li>
                                                        ';
return $output260;
};
$arguments258['__elseClosures'][] = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments263 = array();
$arguments263['then'] = NULL;
$arguments263['else'] = NULL;
$arguments263['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array265 = array();
$array266 = array (
);$array265['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array266);

$expression267 = function($context) {return ($context["node0"]);};
$arguments263['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression267(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array265)
					),
					$renderingContext
				);
$arguments263['then'] = 'active';

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output262 .= '">
                                                                <a href="';
$array268 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array268)]);

$output262 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments269 = array();
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$arguments269['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array271 = array();
$array272 = array (
);$array271['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array272);

$expression273 = function($context) {return ($context["node0"]);};
$arguments269['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression273(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array271)
					),
					$renderingContext
				);
$output274 = '';

$output274 .= ' target="';
$array275 = array (
);
$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array275)]);

$output274 .= '"';
$arguments269['then'] = $output274;

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output262 .= ' title="';
$array276 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array276)]);

$output262 .= '">
                                                                    <span>';
$array277 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array277)]);

$output262 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output262;
};

$output257 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output257 .= '
                                                ';
return $output257;
};
$arguments254 = array();
$arguments254['each'] = NULL;
$arguments254['as'] = NULL;
$arguments254['key'] = NULL;
$arguments254['reverse'] = false;
$arguments254['iteration'] = NULL;
$array256 = array (
);$arguments254['each'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array256);
$arguments254['as'] = 'child';

$output252 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output252 .= '
                                            </ul>
                                        ';
return $output252;
};
$arguments250['__elseClosures'][] = function() use ($renderingContext, $self) {
$output304 = '';

$output304 .= '
                                            <a href="';
$array305 = array (
);
$output304 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.link', $array305)]);

$output304 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['then'] = NULL;
$arguments306['else'] = NULL;
$arguments306['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array308 = array();
$array309 = array (
);$array308['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array309);

$expression310 = function($context) {return ($context["node0"]);};
$arguments306['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression310(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array308)
					),
					$renderingContext
				);
$output311 = '';

$output311 .= ' target="';
$array312 = array (
);
$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array312)]);

$output311 .= '"';
$arguments306['then'] = $output311;

$output304 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output304 .= ' title="';
$array313 = array (
);
$output304 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array313)]);

$output304 .= '">
                                                <span>';
$array314 = array (
);
$output304 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array314)]);

$output304 .= '</span>
                                                <span class="bar"></span>
                                            </a>
                                        ';
return $output304;
};

$output249 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output249 .= '
                                ';
return $output249;
};
$arguments247 = array();
$arguments247['if'] = NULL;

$output242 .= '';

$output242 .= '
                            ';
return $output242;
};
$arguments98 = array();
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$arguments98['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array239 = array();
$array240 = array (
);$array239['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.spacer', $array240);

$expression241 = function($context) {return ($context["node0"]);};
$arguments98['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression241(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array239)
					),
					$renderingContext
				);
$arguments98['__thenClosure'] = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
                                    <p class="navbar-text">';
$array101 = array (
);
$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array101)]);

$output100 .= '</p>
                                ';
return $output100;
};
$arguments98['__elseClosures'][] = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$output174 = '';

$output174 .= '
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <span>';
$array175 = array (
);
$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array175)]);

$output174 .= '</span>
                                                <b class="caret"></b>
                                                <span class="bar"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
                                                            <li class="dropdown-header">';
$array207 = array (
);
$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array207)]);

$output206 .= '</li>
                                                        ';
return $output206;
};
$arguments204 = array();

$output203 .= '';

$output203 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output210 = '';

$output210 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments211 = array();
$arguments211['then'] = NULL;
$arguments211['else'] = NULL;
$arguments211['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array213 = array();
$array214 = array (
);$array213['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array214);

$expression215 = function($context) {return ($context["node0"]);};
$arguments211['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression215(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array213)
					),
					$renderingContext
				);
$arguments211['then'] = 'active';

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output210 .= '">
                                                                <a href="';
$array216 = array (
);
$output210 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array216)]);

$output210 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['then'] = NULL;
$arguments217['else'] = NULL;
$arguments217['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array219 = array();
$array220 = array (
);$array219['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array220);

$expression221 = function($context) {return ($context["node0"]);};
$arguments217['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression221(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array219)
					),
					$renderingContext
				);
$output222 = '';

$output222 .= ' target="';
$array223 = array (
);
$output222 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array223)]);

$output222 .= '"';
$arguments217['then'] = $output222;

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output210 .= ' title="';
$array224 = array (
);
$output210 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array224)]);

$output210 .= '">
                                                                    <span>';
$array225 = array (
);
$output210 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array225)]);

$output210 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output210;
};
$arguments208 = array();
$arguments208['if'] = NULL;

$output203 .= '';

$output203 .= '
                                                    ';
return $output203;
};
$arguments180 = array();
$arguments180['then'] = NULL;
$arguments180['else'] = NULL;
$arguments180['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array200 = array();
$array201 = array (
);$array200['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array201);

$expression202 = function($context) {return ($context["node0"]);};
$arguments180['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression202(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array200)
					),
					$renderingContext
				);
$arguments180['__thenClosure'] = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
                                                            <li class="dropdown-header">';
$array183 = array (
);
$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array183)]);

$output182 .= '</li>
                                                        ';
return $output182;
};
$arguments180['__elseClosures'][] = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['then'] = NULL;
$arguments185['else'] = NULL;
$arguments185['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array187 = array();
$array188 = array (
);$array187['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array188);

$expression189 = function($context) {return ($context["node0"]);};
$arguments185['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression189(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array187)
					),
					$renderingContext
				);
$arguments185['then'] = 'active';

$output184 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output184 .= '">
                                                                <a href="';
$array190 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array190)]);

$output184 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['then'] = NULL;
$arguments191['else'] = NULL;
$arguments191['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array193 = array();
$array194 = array (
);$array193['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array194);

$expression195 = function($context) {return ($context["node0"]);};
$arguments191['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression195(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array193)
					),
					$renderingContext
				);
$output196 = '';

$output196 .= ' target="';
$array197 = array (
);
$output196 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array197)]);

$output196 .= '"';
$arguments191['then'] = $output196;

$output184 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output184 .= ' title="';
$array198 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array198)]);

$output184 .= '">
                                                                    <span>';
$array199 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array199)]);

$output184 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output184;
};

$output179 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
                                                ';
return $output179;
};
$arguments176 = array();
$arguments176['each'] = NULL;
$arguments176['as'] = NULL;
$arguments176['key'] = NULL;
$arguments176['reverse'] = false;
$arguments176['iteration'] = NULL;
$array178 = array (
);$arguments176['each'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array178);
$arguments176['as'] = 'child';

$output174 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output174 .= '
                                            </ul>
                                        ';
return $output174;
};
$arguments172 = array();

$output171 .= '';

$output171 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
                                            <a href="';
$array229 = array (
);
$output228 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.link', $array229)]);

$output228 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['then'] = NULL;
$arguments230['else'] = NULL;
$arguments230['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array232 = array();
$array233 = array (
);$array232['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array233);

$expression234 = function($context) {return ($context["node0"]);};
$arguments230['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression234(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array232)
					),
					$renderingContext
				);
$output235 = '';

$output235 .= ' target="';
$array236 = array (
);
$output235 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array236)]);

$output235 .= '"';
$arguments230['then'] = $output235;

$output228 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output228 .= ' title="';
$array237 = array (
);
$output228 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array237)]);

$output228 .= '">
                                                <span>';
$array238 = array (
);
$output228 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array238)]);

$output228 .= '</span>
                                                <span class="bar"></span>
                                            </a>
                                        ';
return $output228;
};
$arguments226 = array();
$arguments226['if'] = NULL;

$output171 .= '';

$output171 .= '
                                    ';
return $output171;
};
$arguments103 = array();
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array168 = array();
$array169 = array (
);$array168['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array169);

$expression170 = function($context) {return ($context["node0"]);};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression170(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array168)
					),
					$renderingContext
				);
$arguments103['__thenClosure'] = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <span>';
$array106 = array (
);
$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array106)]);

$output105 .= '</span>
                                                <b class="caret"></b>
                                                <span class="bar"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
                                                            <li class="dropdown-header">';
$array138 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array138)]);

$output137 .= '</li>
                                                        ';
return $output137;
};
$arguments135 = array();

$output134 .= '';

$output134 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['then'] = NULL;
$arguments142['else'] = NULL;
$arguments142['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array144 = array();
$array145 = array (
);$array144['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array145);

$expression146 = function($context) {return ($context["node0"]);};
$arguments142['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression146(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array144)
					),
					$renderingContext
				);
$arguments142['then'] = 'active';

$output141 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output141 .= '">
                                                                <a href="';
$array147 = array (
);
$output141 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array147)]);

$output141 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['then'] = NULL;
$arguments148['else'] = NULL;
$arguments148['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array150 = array();
$array151 = array (
);$array150['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array151);

$expression152 = function($context) {return ($context["node0"]);};
$arguments148['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression152(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array150)
					),
					$renderingContext
				);
$output153 = '';

$output153 .= ' target="';
$array154 = array (
);
$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array154)]);

$output153 .= '"';
$arguments148['then'] = $output153;

$output141 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output141 .= ' title="';
$array155 = array (
);
$output141 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array155)]);

$output141 .= '">
                                                                    <span>';
$array156 = array (
);
$output141 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array156)]);

$output141 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output141;
};
$arguments139 = array();
$arguments139['if'] = NULL;

$output134 .= '';

$output134 .= '
                                                    ';
return $output134;
};
$arguments111 = array();
$arguments111['then'] = NULL;
$arguments111['else'] = NULL;
$arguments111['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array132);

$expression133 = function($context) {return ($context["node0"]);};
$arguments111['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression133(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)
					),
					$renderingContext
				);
$arguments111['__thenClosure'] = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
                                                            <li class="dropdown-header">';
$array114 = array (
);
$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array114)]);

$output113 .= '</li>
                                                        ';
return $output113;
};
$arguments111['__elseClosures'][] = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$arguments116['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array119);

$expression120 = function($context) {return ($context["node0"]);};
$arguments116['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments116['then'] = 'active';

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output115 .= '">
                                                                <a href="';
$array121 = array (
);
$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array121)]);

$output115 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['then'] = NULL;
$arguments122['else'] = NULL;
$arguments122['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array124 = array();
$array125 = array (
);$array124['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array125);

$expression126 = function($context) {return ($context["node0"]);};
$arguments122['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression126(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)
					),
					$renderingContext
				);
$output127 = '';

$output127 .= ' target="';
$array128 = array (
);
$output127 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array128)]);

$output127 .= '"';
$arguments122['then'] = $output127;

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output115 .= ' title="';
$array129 = array (
);
$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array129)]);

$output115 .= '">
                                                                    <span>';
$array130 = array (
);
$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array130)]);

$output115 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output115;
};

$output110 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output110 .= '
                                                ';
return $output110;
};
$arguments107 = array();
$arguments107['each'] = NULL;
$arguments107['as'] = NULL;
$arguments107['key'] = NULL;
$arguments107['reverse'] = false;
$arguments107['iteration'] = NULL;
$array109 = array (
);$arguments107['each'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array109);
$arguments107['as'] = 'child';

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output105 .= '
                                            </ul>
                                        ';
return $output105;
};
$arguments103['__elseClosures'][] = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
                                            <a href="';
$array158 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.link', $array158)]);

$output157 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['then'] = NULL;
$arguments159['else'] = NULL;
$arguments159['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array161 = array();
$array162 = array (
);$array161['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array162);

$expression163 = function($context) {return ($context["node0"]);};
$arguments159['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression163(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)
					),
					$renderingContext
				);
$output164 = '';

$output164 .= ' target="';
$array165 = array (
);
$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array165)]);

$output164 .= '"';
$arguments159['then'] = $output164;

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output157 .= ' title="';
$array166 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array166)]);

$output157 .= '">
                                                <span>';
$array167 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array167)]);

$output157 .= '</span>
                                                <span class="bar"></span>
                                            </a>
                                        ';
return $output157;
};

$output102 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '
                                ';
return $output102;
};

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output87 .= '
                        </li>
                    ';
return $output87;
};
$arguments84 = array();
$arguments84['each'] = NULL;
$arguments84['as'] = NULL;
$arguments84['key'] = NULL;
$arguments84['reverse'] = false;
$arguments84['iteration'] = NULL;
$array86 = array (
);$arguments84['each'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array86);
$arguments84['as'] = 'mainnavigationItem';

$output83 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '
                </ul>
            </nav>
        ';
return $output83;
};
$arguments78 = array();
$arguments78['then'] = NULL;
$arguments78['else'] = NULL;
$arguments78['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array81);

$expression82 = function($context) {return ($context["node0"]);};
$arguments78['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression82(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);
$arguments78['__thenClosure'] = $renderChildrenClosure79;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output0 .= '
    </div>
</header>

';

return $output0;
}


}
#