<?php

return [

    /*
	|--------------------------------------------------------------------------
	| Package Authors
	|--------------------------------------------------------------------------
	|
	| When you create new packages NewUp will automatically add the
    | following authors to the generated "composer.json" file.
    | You can add as many authors as you like to the list.
	|
    */
    'authors' => [
        [
            'name' => 'Your Name',
            'email' => 'Your email'
        ]
    ],

    /*
	|--------------------------------------------------------------------------
	| Package License
	|--------------------------------------------------------------------------
	|
	| When you create new packages NewUp will automatically set the
    | license for the newly created package template. You should
    | set the following license to your preferred license.
	|
    */
    'license' => 'MIT',

    /*
	|--------------------------------------------------------------------------
	| Strict Composer Values
	|--------------------------------------------------------------------------
	|
	| By default, the NewUp utility is pretty strict when validating
    | package authors and licenses. If you set the "authors" and
    | "license" config entries, you don't have to worry what
    | this setting does. If you didn't, NewUp will throw
    | various errors. Set this to 'false' to suppress
    | these error messages. You should really set
    | the above configuration entries, however.
	|
    */
    'strictComposerValues' => true,

];