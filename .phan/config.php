<?php

return [
	'directory_list' => [
		'src',
		'lib',
		'vendor',
	],
	'exclude_analysis_directory_list' => [
		'vendor',
	],
	'suppress_issue_types' => [
		'PhanTypeInvalidBitwiseBinaryOperator',
		'PhanTypeObjectUnsetDeclaredProperty',
		'PhanUnreferencedUseNormal',
		'PhanUndeclaredVariable',
		'PhanUndeclaredClassMethod',
		'PhanTypeMismatchProperty',
		'PhanTypeExpectedObjectPropAccessButGotNull',
		'PhanUnreferencedUseNormal',
		'PhanTypeMismatchDimFetchNullable',
		'PhanTypeMismatchReturn',
		'PhanUndeclaredMethod',
		'PhanTypeMismatchArgument',
		'PhanUndeclaredFunction',
		'PhanUndeclaredStaticMethod',
		'PhanParamTooFew',
		'PhanUndeclaredConstant',
		'PhanTypeExpectedObjectPropAccess',
		'PhanParamTooMany',
		'PhanUndeclaredTypeParameter',
		'PhanUndeclaredProperty',
		'PhanTypeNonVarPassByRef',
		'PhanUnusedGotoLabel',
		'PhanTypeMismatchArgumentInternal',
		'PhanTypeMismatchDimFetch',
		'PhanTypeMismatchDimAssignment',
		'PhanTypeMismatchDimFetch',
		'PhanNonClassMethodCall',
		'PhanUndeclaredTypeReturnType',
		'PhanUndeclaredVariableDim',
		'PhanParamSignatureRealMismatchTooManyRequiredParameters',
		'PhanParamSignatureMismatch',
		'PhanTypeInvalidDimOffset',
	],
];