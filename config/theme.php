<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Path to directory with themes
    |--------------------------------------------------------------------------
    |
    | The directory with your themes.
    |
    */

        'path'         => base_path('themes'),
    /*
    |--------------------------------------------------------------------------
    | Path to directory with assets
    |--------------------------------------------------------------------------
    |
    | The directory with assets.
    |
    */

        'assets_path'  => 'themes',
    /*
    |--------------------------------------------------------------------------
    | A pieces of theme collections
    |--------------------------------------------------------------------------
    |
    | Inside a theme path we need to set up directories to
    | keep "layouts", "assets" and "partials".
    |
    */

        'containerDir' => array(
            'assets' => 'assets',
            'lang' => 'lang',
            'layout' => 'layouts',
            'partial' => 'partials',
            'view' => 'views',
        ),
    'thames' => array(
        '' => 'Select Option',
        'ecelebrityspy1.local' => 'ecelebrityspy1.local',
        'ecelebrityspy2.local' => 'ecelebrityspy2.local',
    ),


);
