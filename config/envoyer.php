<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Project
    |--------------------------------------------------------------------------
    |
    | By default, the Envoyer.io deploy command will deploy the following
    | project from the projects configuration array when you do not supply
    | a project key as an option to the command.
    |
    */

    'default' => 'example-project',

    /*
    |--------------------------------------------------------------------------
    | Envoyer.io Projects
    |--------------------------------------------------------------------------
    |
    | This array contains Envoyer.io projects paired with their webhook
    | deployment keys. You'll find these keys on the 'Deployment Hooks' tab
    | under your Envoyer.io projects.
    |
    | It is recommended to specify project names in a "slug" format, since
    | they can be used as a parameter to the artisan command.
    |
    */

    'projects' => [

        'example-project' => 'webhook_key_here'

    ]

];
