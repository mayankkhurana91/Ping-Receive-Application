<?php

class Standard_action_SpecialStart_347933678796ed2e0b9c0e727603ff5fff19984a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Default';
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
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['data'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array4);
$array3['colPos'] = 3;
$arguments1['data'] = $array3;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

    <div class="section section-default">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['typoscriptObjectPath'] = NULL;
$arguments5['data'] = NULL;
$arguments5['currentValueKey'] = NULL;
$arguments5['table'] = '';
$arguments5['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array8);
$array7['colPos'] = 20;
$arguments5['data'] = $array7;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
                </div>
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['typoscriptObjectPath'] = NULL;
$arguments9['data'] = NULL;
$arguments9['currentValueKey'] = NULL;
$arguments9['table'] = '';
$arguments9['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array12);
$array11['colPos'] = 21;
$arguments9['data'] = $array11;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
                </div>
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['typoscriptObjectPath'] = NULL;
$arguments13['data'] = NULL;
$arguments13['currentValueKey'] = NULL;
$arguments13['table'] = '';
$arguments13['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array16);
$array15['colPos'] = 22;
$arguments13['data'] = $array15;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
                </div>
            </div>
        </div>
    </div>
    <div class="section section-light">
        <div class="container">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['typoscriptObjectPath'] = NULL;
$arguments17['data'] = NULL;
$arguments17['currentValueKey'] = NULL;
$arguments17['table'] = '';
$arguments17['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array20);
$array19['colPos'] = 0;
$arguments17['data'] = $array19;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
        </div>
    </div>

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output21 = '';

$output21 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['name'] = NULL;
$arguments22['name'] = 'Default';

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output21 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['typoscriptObjectPath'] = NULL;
$arguments27['data'] = NULL;
$arguments27['currentValueKey'] = NULL;
$arguments27['table'] = '';
$arguments27['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array30);
$array29['colPos'] = 3;
$arguments27['data'] = $array29;

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '

    <div class="section section-default">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['typoscriptObjectPath'] = NULL;
$arguments31['data'] = NULL;
$arguments31['currentValueKey'] = NULL;
$arguments31['table'] = '';
$arguments31['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array34);
$array33['colPos'] = 20;
$arguments31['data'] = $array33;

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output26 .= '
                </div>
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['typoscriptObjectPath'] = NULL;
$arguments35['data'] = NULL;
$arguments35['currentValueKey'] = NULL;
$arguments35['table'] = '';
$arguments35['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array38);
$array37['colPos'] = 21;
$arguments35['data'] = $array37;

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output26 .= '
                </div>
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['typoscriptObjectPath'] = NULL;
$arguments39['data'] = NULL;
$arguments39['currentValueKey'] = NULL;
$arguments39['table'] = '';
$arguments39['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array42);
$array41['colPos'] = 22;
$arguments39['data'] = $array41;

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output26 .= '
                </div>
            </div>
        </div>
    </div>
    <div class="section section-light">
        <div class="container">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['typoscriptObjectPath'] = NULL;
$arguments43['data'] = NULL;
$arguments43['currentValueKey'] = NULL;
$arguments43['table'] = '';
$arguments43['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array46);
$array45['colPos'] = 0;
$arguments43['data'] = $array45;

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output26 .= '
        </div>
    </div>

';
return $output26;
};
$arguments24 = array();
$arguments24['name'] = NULL;
$arguments24['name'] = 'Main';

$output21 .= NULL;

$output21 .= '

';

return $output21;
}


}
#