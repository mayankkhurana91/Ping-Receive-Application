<?php

class BuilderModule_action_index_c78a7442aac7aea5b8f05e03608fbb36adc5a20f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'be' => 
  array (
    0 => 'EBT\\ExtensionBuilder\\ViewHelpers',
  ),
));
}

/**
 * section header
 */
public function section_594fd1615a341c77829e83ed988f137e1ba96231(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['path'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['absolute'] = false;
$arguments1['path'] = 'jsDomainModeling/extbaseModeling.css';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '" />
';

return $output0;
}
/**
 * section iconButtons
 */
public function section_cfe02ef001375ab02a741661b53c8aacfcbfd7a0(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '
';
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '
	<h1>Extension Builder</h1>
	<p class="bodytext"> This page is intended to give you some overview about the workflow we suggest.</p>
	<h2>What is this extension builder about?</h2>
	<ul>
		<li>This extension builder helps you to build and manage applications based on <b>Extbase</b> and <b>Fluid</b>.</li>
		<li>We also want to provide a learning tool for <b>Domain-Driven Design</b></li>
	</ul>
	<h2>Domain Driven Design</h2>
	View <a href="http://www.infoq.com/presentations/model-to-work-evans" target="_blank">Putting the Model to Work and Strategic Design</a> by Eric Evans to get an introduction into Domain Driven Design (DDD).
	<h2>Domain Modelling</h2>
	At first, you will start creating your <b>Domain Model</b> with a graphical editor. This editor will do the following for you:
	<ul>
		<li><b>Extension Skeleton</b>: will create the extension directory structure needed</li>
		<li><b>Domain Model</b>: Will create basic classes for the Domain Model, residing under Domain/Model/</li>
		<li><b>Database Tables and TCA</b>: Will create Database Tables and TCA definitions which fit to the domain model.</li>
		<li><b>Skeleton Locallang Files</b>: Will create skeleton locallang files</li>
		<li><b>Plugin Configuration</b>: Will create a plugin configuration, so it will work out-of-the-box.</li>
		<li><b>Dynamic Scaffolding</b>: Automatically create all CRUD actions (Create, Read, Update, Delete) for Aggregate Roots!</li>
	</ul>
	Have a look at the Documentation <a href="https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html" target="_blank" >Using the Extension Builder</a> for more details.
	<br /><br />
	<p><b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return 'Go to the Domain Modeller';
};
$arguments4 = array();
$arguments4['action'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['controller'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['pluginName'] = NULL;
$arguments4['pageUid'] = NULL;
$arguments4['pageType'] = 0;
$arguments4['noCache'] = false;
$arguments4['noCacheHash'] = false;
$arguments4['section'] = '';
$arguments4['format'] = '';
$arguments4['linkAccessRestrictedPages'] = false;
$arguments4['additionalParams'] = array (
);
$arguments4['absolute'] = false;
$arguments4['addQueryString'] = false;
$arguments4['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments4['addQueryStringMethod'] = NULL;
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['name'] = NULL;
$arguments4['rel'] = NULL;
$arguments4['rev'] = NULL;
$arguments4['target'] = NULL;
$arguments4['action'] = 'domainmodelling';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '</b></p>

	<h2>Iterative model refinement</h2>
	The first version of the model will usually not be the one you\'ll use lateron. That\'s why you should take your time, and improve your model.<br />
	Useful things to know:
	<ul>
		<li><b>Dynamic Scaffolding</b>: The Scaffolding will automatically adjust the templates needed to render CRUD-functionality for your domain models.
			That is, if you modify your domain model by adding or removing fields, the standard CRUD actions display the new fields as well.
	</ul>
	When you start to modify the generated files, but still want to use the graphical modeler to extend your model, you have to enable the roundtrip feature
	in the Extension Builder settings in the Extension Manager. <br />
	You will find a file in your extension directory Configuration/ExtensionBuilder/settings.yaml.<br />
	There you can configure which files should be overwritten, kept or merged if you save your model.<br />
	A good practice would be, to let the Extension Builder generate the Partials for form fields and properties for you and include them in your templates.
	<br /><br />
	<h3>Please have a look at the <a href="https://docs.typo3.org/typo3cms/extensions/extension_builder/Developer/PublishToTer.html#security" target="_blank" >Security section</a> to avoid unsecure extensions!</h3>
';

return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output6 = '';

$output6 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['name'] = NULL;
$arguments7['name'] = 'Default';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output6 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
	<link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['path'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['absolute'] = false;
$arguments12['path'] = 'jsDomainModeling/extbaseModeling.css';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output11 .= '" />
';
return $output11;
};
$arguments9 = array();
$arguments9['name'] = NULL;
$arguments9['name'] = 'header';

$output6 .= NULL;

$output6 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return '
';
};
$arguments14 = array();
$arguments14['name'] = NULL;
$arguments14['name'] = 'iconButtons';

$output6 .= NULL;

$output6 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
	<h1>Extension Builder</h1>
	<p class="bodytext"> This page is intended to give you some overview about the workflow we suggest.</p>
	<h2>What is this extension builder about?</h2>
	<ul>
		<li>This extension builder helps you to build and manage applications based on <b>Extbase</b> and <b>Fluid</b>.</li>
		<li>We also want to provide a learning tool for <b>Domain-Driven Design</b></li>
	</ul>
	<h2>Domain Driven Design</h2>
	View <a href="http://www.infoq.com/presentations/model-to-work-evans" target="_blank">Putting the Model to Work and Strategic Design</a> by Eric Evans to get an introduction into Domain Driven Design (DDD).
	<h2>Domain Modelling</h2>
	At first, you will start creating your <b>Domain Model</b> with a graphical editor. This editor will do the following for you:
	<ul>
		<li><b>Extension Skeleton</b>: will create the extension directory structure needed</li>
		<li><b>Domain Model</b>: Will create basic classes for the Domain Model, residing under Domain/Model/</li>
		<li><b>Database Tables and TCA</b>: Will create Database Tables and TCA definitions which fit to the domain model.</li>
		<li><b>Skeleton Locallang Files</b>: Will create skeleton locallang files</li>
		<li><b>Plugin Configuration</b>: Will create a plugin configuration, so it will work out-of-the-box.</li>
		<li><b>Dynamic Scaffolding</b>: Automatically create all CRUD actions (Create, Read, Update, Delete) for Aggregate Roots!</li>
	</ul>
	Have a look at the Documentation <a href="https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html" target="_blank" >Using the Extension Builder</a> for more details.
	<br /><br />
	<p><b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return 'Go to the Domain Modeller';
};
$arguments19 = array();
$arguments19['action'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['controller'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['pluginName'] = NULL;
$arguments19['pageUid'] = NULL;
$arguments19['pageType'] = 0;
$arguments19['noCache'] = false;
$arguments19['noCacheHash'] = false;
$arguments19['section'] = '';
$arguments19['format'] = '';
$arguments19['linkAccessRestrictedPages'] = false;
$arguments19['additionalParams'] = array (
);
$arguments19['absolute'] = false;
$arguments19['addQueryString'] = false;
$arguments19['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments19['addQueryStringMethod'] = NULL;
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['name'] = NULL;
$arguments19['rel'] = NULL;
$arguments19['rev'] = NULL;
$arguments19['target'] = NULL;
$arguments19['action'] = 'domainmodelling';

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '</b></p>

	<h2>Iterative model refinement</h2>
	The first version of the model will usually not be the one you\'ll use lateron. That\'s why you should take your time, and improve your model.<br />
	Useful things to know:
	<ul>
		<li><b>Dynamic Scaffolding</b>: The Scaffolding will automatically adjust the templates needed to render CRUD-functionality for your domain models.
			That is, if you modify your domain model by adding or removing fields, the standard CRUD actions display the new fields as well.
	</ul>
	When you start to modify the generated files, but still want to use the graphical modeler to extend your model, you have to enable the roundtrip feature
	in the Extension Builder settings in the Extension Manager. <br />
	You will find a file in your extension directory Configuration/ExtensionBuilder/settings.yaml.<br />
	There you can configure which files should be overwritten, kept or merged if you save your model.<br />
	A good practice would be, to let the Extension Builder generate the Partials for form fields and properties for you and include them in your templates.
	<br /><br />
	<h3>Please have a look at the <a href="https://docs.typo3.org/typo3cms/extensions/extension_builder/Developer/PublishToTer.html#security" target="_blank" >Security section</a> to avoid unsecure extensions!</h3>
';
return $output18;
};
$arguments16 = array();
$arguments16['name'] = NULL;
$arguments16['name'] = 'content';

$output6 .= NULL;

return $output6;
}


}
#