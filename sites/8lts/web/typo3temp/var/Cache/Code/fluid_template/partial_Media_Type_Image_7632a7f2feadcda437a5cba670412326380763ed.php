<?php

class partial_Media_Type_Image_7632a7f2feadcda437a5cba670412326380763ed extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<figure class="image">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['section'] = NULL;
$arguments90['partial'] = NULL;
$arguments90['delegate'] = NULL;
$arguments90['renderable'] = NULL;
$arguments90['arguments'] = array (
);
$arguments90['optional'] = false;
$arguments90['default'] = NULL;
$arguments90['contentAs'] = NULL;
$arguments90['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array93);
$array94 = array (
);$array92['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array94);
$array95 = array (
);$array92['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array95);
$arguments90['arguments'] = $array92;

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
            ';
return $output89;
};
$arguments85 = array();
$arguments85['parameter'] = NULL;
$arguments85['target'] = '';
$arguments85['class'] = '';
$arguments85['title'] = '';
$arguments85['additionalParams'] = '';
$arguments85['additionalAttributes'] = array (
);
$arguments85['useCacheHash'] = false;
$array87 = array (
);$arguments85['parameter'] = $renderingContext->getVariableProvider()->getByPath('file.link', $array87);
$array88 = array (
);$arguments85['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array88);

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
        ';
return $output84;
};
$arguments82 = array();

$output81 .= '';

$output81 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['src'] = NULL;
$arguments134['treatIdAsReference'] = false;
$arguments134['image'] = NULL;
$arguments134['crop'] = NULL;
$arguments134['cropVariant'] = 'default';
$arguments134['width'] = NULL;
$arguments134['height'] = NULL;
$arguments134['minWidth'] = NULL;
$arguments134['minHeight'] = NULL;
$arguments134['maxWidth'] = NULL;
$arguments134['maxHeight'] = NULL;
$arguments134['absolute'] = false;
$array136 = array (
);$arguments134['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array136);
$arguments134['maxHeight'] = 1200;
$arguments134['maxWidth'] = 1200;

$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext)]);

$output133 .= '" title="';
$array137 = array (
);
$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.title', $array137)]);

$output133 .= '" data-lightbox-caption="';
$array138 = array (
);
$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.description', $array138)]);

$output133 .= '" class="';
$array139 = array (
);
$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.lightbox.cssClass', $array139)]);

$output133 .= '" data-lightbox-width="';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['property'] = NULL;
$arguments140['property'] = 'width';

$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext)]);

$output133 .= '" data-lightbox-height="';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['property'] = NULL;
$arguments142['property'] = 'height';

$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext)]);

$output133 .= '" rel="';
$array144 = array (
);
$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.lightbox.prefix', $array144)]);

$output133 .= '-';
$array145 = array (
);
$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array145)]);

$output133 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['section'] = NULL;
$arguments146['partial'] = NULL;
$arguments146['delegate'] = NULL;
$arguments146['renderable'] = NULL;
$arguments146['arguments'] = array (
);
$arguments146['optional'] = false;
$arguments146['default'] = NULL;
$arguments146['contentAs'] = NULL;
$arguments146['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array148 = array();
$array149 = array (
);$array148['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array149);
$array150 = array (
);$array148['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array150);
$array151 = array (
);$array148['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array151);
$arguments146['arguments'] = $array148;

$output133 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output133 .= '
                    </a>
                ';
return $output133;
};
$arguments131 = array();

$output130 .= '';

$output130 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['section'] = NULL;
$arguments155['partial'] = NULL;
$arguments155['delegate'] = NULL;
$arguments155['renderable'] = NULL;
$arguments155['arguments'] = array (
);
$arguments155['optional'] = false;
$arguments155['default'] = NULL;
$arguments155['contentAs'] = NULL;
$arguments155['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array157 = array();
$array158 = array (
);$array157['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array158);
$array159 = array (
);$array157['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array159);
$array160 = array (
);$array157['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array160);
$arguments155['arguments'] = $array157;

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output154 .= '
                ';
return $output154;
};
$arguments152 = array();
$arguments152['if'] = NULL;

$output130 .= '';

$output130 .= '
            ';
return $output130;
};
$arguments99 = array();
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$arguments99['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array127 = array();
$array128 = array (
);$array127['0'] = $renderingContext->getVariableProvider()->getByPath('data.image_zoom', $array128);

$expression129 = function($context) {return ($context["node0"]);};
$arguments99['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression129(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array127)
					),
					$renderingContext
				);
$arguments99['__thenClosure'] = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['src'] = NULL;
$arguments102['treatIdAsReference'] = false;
$arguments102['image'] = NULL;
$arguments102['crop'] = NULL;
$arguments102['cropVariant'] = 'default';
$arguments102['width'] = NULL;
$arguments102['height'] = NULL;
$arguments102['minWidth'] = NULL;
$arguments102['minHeight'] = NULL;
$arguments102['maxWidth'] = NULL;
$arguments102['maxHeight'] = NULL;
$arguments102['absolute'] = false;
$array104 = array (
);$arguments102['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array104);
$arguments102['maxHeight'] = 1200;
$arguments102['maxWidth'] = 1200;

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext)]);

$output101 .= '" title="';
$array105 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.title', $array105)]);

$output101 .= '" data-lightbox-caption="';
$array106 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.description', $array106)]);

$output101 .= '" class="';
$array107 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.lightbox.cssClass', $array107)]);

$output101 .= '" data-lightbox-width="';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['property'] = NULL;
$arguments108['property'] = 'width';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext)]);

$output101 .= '" data-lightbox-height="';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['property'] = NULL;
$arguments110['property'] = 'height';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext)]);

$output101 .= '" rel="';
$array112 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.lightbox.prefix', $array112)]);

$output101 .= '-';
$array113 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array113)]);

$output101 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['section'] = NULL;
$arguments114['partial'] = NULL;
$arguments114['delegate'] = NULL;
$arguments114['renderable'] = NULL;
$arguments114['arguments'] = array (
);
$arguments114['optional'] = false;
$arguments114['default'] = NULL;
$arguments114['contentAs'] = NULL;
$arguments114['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array116 = array();
$array117 = array (
);$array116['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array117);
$array118 = array (
);$array116['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array118);
$array119 = array (
);$array116['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array119);
$arguments114['arguments'] = $array116;

$output101 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output101 .= '
                    </a>
                ';
return $output101;
};
$arguments99['__elseClosures'][] = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['section'] = NULL;
$arguments121['partial'] = NULL;
$arguments121['delegate'] = NULL;
$arguments121['renderable'] = NULL;
$arguments121['arguments'] = array (
);
$arguments121['optional'] = false;
$arguments121['default'] = NULL;
$arguments121['contentAs'] = NULL;
$arguments121['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array124);
$array125 = array (
);$array123['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array125);
$array126 = array (
);$array123['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array126);
$arguments121['arguments'] = $array123;

$output120 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output120 .= '
                ';
return $output120;
};

$output98 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
        ';
return $output98;
};
$arguments96 = array();
$arguments96['if'] = NULL;

$output81 .= '';

$output81 .= '
    ';
return $output81;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['0'] = $renderingContext->getVariableProvider()->getByPath('file.link', $array79);

$expression80 = function($context) {return ($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression80(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['section'] = NULL;
$arguments9['partial'] = NULL;
$arguments9['delegate'] = NULL;
$arguments9['renderable'] = NULL;
$arguments9['arguments'] = array (
);
$arguments9['optional'] = false;
$arguments9['default'] = NULL;
$arguments9['contentAs'] = NULL;
$arguments9['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array12);
$array13 = array (
);$array11['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array13);
$array14 = array (
);$array11['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array14);
$arguments9['arguments'] = $array11;

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
            ';
return $output8;
};
$arguments4 = array();
$arguments4['parameter'] = NULL;
$arguments4['target'] = '';
$arguments4['class'] = '';
$arguments4['title'] = '';
$arguments4['additionalParams'] = '';
$arguments4['additionalAttributes'] = array (
);
$arguments4['useCacheHash'] = false;
$array6 = array (
);$arguments4['parameter'] = $renderingContext->getVariableProvider()->getByPath('file.link', $array6);
$array7 = array (
);$arguments4['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array7);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['src'] = NULL;
$arguments51['treatIdAsReference'] = false;
$arguments51['image'] = NULL;
$arguments51['crop'] = NULL;
$arguments51['cropVariant'] = 'default';
$arguments51['width'] = NULL;
$arguments51['height'] = NULL;
$arguments51['minWidth'] = NULL;
$arguments51['minHeight'] = NULL;
$arguments51['maxWidth'] = NULL;
$arguments51['maxHeight'] = NULL;
$arguments51['absolute'] = false;
$array53 = array (
);$arguments51['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array53);
$arguments51['maxHeight'] = 1200;
$arguments51['maxWidth'] = 1200;

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output50 .= '" title="';
$array54 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.title', $array54)]);

$output50 .= '" data-lightbox-caption="';
$array55 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.description', $array55)]);

$output50 .= '" class="';
$array56 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.lightbox.cssClass', $array56)]);

$output50 .= '" data-lightbox-width="';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['property'] = NULL;
$arguments57['property'] = 'width';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output50 .= '" data-lightbox-height="';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['property'] = NULL;
$arguments59['property'] = 'height';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output50 .= '" rel="';
$array61 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.lightbox.prefix', $array61)]);

$output50 .= '-';
$array62 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array62)]);

$output50 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['section'] = NULL;
$arguments63['partial'] = NULL;
$arguments63['delegate'] = NULL;
$arguments63['renderable'] = NULL;
$arguments63['arguments'] = array (
);
$arguments63['optional'] = false;
$arguments63['default'] = NULL;
$arguments63['contentAs'] = NULL;
$arguments63['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array66);
$array67 = array (
);$array65['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array67);
$array68 = array (
);$array65['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array68);
$arguments63['arguments'] = $array65;

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output50 .= '
                    </a>
                ';
return $output50;
};
$arguments48 = array();

$output47 .= '';

$output47 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['section'] = NULL;
$arguments72['partial'] = NULL;
$arguments72['delegate'] = NULL;
$arguments72['renderable'] = NULL;
$arguments72['arguments'] = array (
);
$arguments72['optional'] = false;
$arguments72['default'] = NULL;
$arguments72['contentAs'] = NULL;
$arguments72['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array74 = array();
$array75 = array (
);$array74['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array75);
$array76 = array (
);$array74['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array76);
$array77 = array (
);$array74['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array77);
$arguments72['arguments'] = $array74;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '
                ';
return $output71;
};
$arguments69 = array();
$arguments69['if'] = NULL;

$output47 .= '';

$output47 .= '
            ';
return $output47;
};
$arguments16 = array();
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$arguments16['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['0'] = $renderingContext->getVariableProvider()->getByPath('data.image_zoom', $array45);

$expression46 = function($context) {return ($context["node0"]);};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression46(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)
					),
					$renderingContext
				);
$arguments16['__thenClosure'] = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['src'] = NULL;
$arguments19['treatIdAsReference'] = false;
$arguments19['image'] = NULL;
$arguments19['crop'] = NULL;
$arguments19['cropVariant'] = 'default';
$arguments19['width'] = NULL;
$arguments19['height'] = NULL;
$arguments19['minWidth'] = NULL;
$arguments19['minHeight'] = NULL;
$arguments19['maxWidth'] = NULL;
$arguments19['maxHeight'] = NULL;
$arguments19['absolute'] = false;
$array21 = array (
);$arguments19['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array21);
$arguments19['maxHeight'] = 1200;
$arguments19['maxWidth'] = 1200;

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output18 .= '" title="';
$array22 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.title', $array22)]);

$output18 .= '" data-lightbox-caption="';
$array23 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.description', $array23)]);

$output18 .= '" class="';
$array24 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.lightbox.cssClass', $array24)]);

$output18 .= '" data-lightbox-width="';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['property'] = NULL;
$arguments25['property'] = 'width';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output18 .= '" data-lightbox-height="';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['property'] = NULL;
$arguments27['property'] = 'height';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output18 .= '" rel="';
$array29 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.lightbox.prefix', $array29)]);

$output18 .= '-';
$array30 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array30)]);

$output18 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['section'] = NULL;
$arguments31['partial'] = NULL;
$arguments31['delegate'] = NULL;
$arguments31['renderable'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['optional'] = false;
$arguments31['default'] = NULL;
$arguments31['contentAs'] = NULL;
$arguments31['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array34);
$array35 = array (
);$array33['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array35);
$array36 = array (
);$array33['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array36);
$arguments31['arguments'] = $array33;

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output18 .= '
                    </a>
                ';
return $output18;
};
$arguments16['__elseClosures'][] = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['section'] = NULL;
$arguments38['partial'] = NULL;
$arguments38['delegate'] = NULL;
$arguments38['renderable'] = NULL;
$arguments38['arguments'] = array (
);
$arguments38['optional'] = false;
$arguments38['default'] = NULL;
$arguments38['contentAs'] = NULL;
$arguments38['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array41);
$array42 = array (
);$array40['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array42);
$array43 = array (
);$array40['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array43);
$arguments38['arguments'] = $array40;

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '
                ';
return $output37;
};

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
        ';
return $output15;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
        <figcaption class="caption">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$array169 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.description', $array169)]);
};
$arguments167 = array();
$arguments167['value'] = NULL;
$renderChildrenClosure168 = $arguments167['value'] ? function() use ($arguments167) { return $arguments167['value']; } : $renderChildrenClosure168;
$output166 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output166 .= '</figcaption>
    ';
return $output166;
};
$arguments161 = array();
$arguments161['then'] = NULL;
$arguments161['else'] = NULL;
$arguments161['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array163 = array();
$array164 = array (
);$array163['0'] = $renderingContext->getVariableProvider()->getByPath('file.description', $array164);

$expression165 = function($context) {return ($context["node0"]);};
$arguments161['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression165(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array163)
					),
					$renderingContext
				);
$arguments161['__thenClosure'] = $renderChildrenClosure162;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output0 .= '
</figure>

';

return $output0;
}


}
#