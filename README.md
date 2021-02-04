### YAAP THEME (Above laravel 6)
    https://github.com/yaapis/Theme
    
### INSTALLATION
    composer require yaap/theme
    Installation is done
    
### CREATE
    php artisan theme:destroy default
        
### DELETE
    php artisan theme:destroy default
    
    
### INITIALIZATION
    Theme::init($name)
     
### CALL VIEW
    View::make('hello');
    View::make('emails.notify');
    
### HOW TO USE IT (with full installation process)
    1. To install package
    composer require yaap/theme
    
    If you want to give custom path (It is optional -> if you want to overwrite default config.)
    php artisan vendor:publish --provider="YAAP\Theme\ThemeServiceProvider"
    
    2. THEME PATH ADJUSTMENT     
    After you crate theme 
    php artisan theme:create default
    php artisan theme:create mob
    php artisan theme:create  desktop
    
    NOTE:
       In old version it create theme folder inside resources
       and in NEW Version it create Theme folder in root.
       
       After creating theme put that theme inside same theme name folder
       like IF you create mob theme, create mob folder and put 
       that theme inside..... like I Did in this project...
       TO more clear got to 
       -> (app/http/middleware/themeSelector.php, app/Providers/AppServiceProvider.php)
       check those comments...
       
       (I done not know they we have to do this, but if you did this is work...)
        
        Tips Hack it
         change all config name into default
        (themes/default/default/config, themes/mob/default/config)
        EX: 'name' => 'default',  (IN all theme)
        Now you can select your desire theme by changing theme path (app/Providers/AppServiceProvider.php)
            Config::set('theme.path', $mob); 
        with changing theme name.
                
    3. SETUP TO RUN THEME
        A.Inside app/providers/AppServiceProvider.php
        USE FOLLOWING CODE:-
        
        public function boot()
            {
                $this->changeThemePath();
        
            }
        
            public function changeThemePath(){
                $default = base_path('themes/default');
                $mob = base_path('themes/mob');
                Config::set('theme.path', $default);
            }
        
        B. CREATE MIDDLEWARE
            app/http/middleware/ThemeSelector.php
            
            Copy the code and paste it.
          
        C. REGISTER MIDDLEWARE (ThemeSelector.php)
            app/http/kernel.php
            
            USE FOLLOWING CODE LIKE THIS PROJECT:-    
            use App\Http\Middleware\ThemeSelector;
            ThemeSelector::class,
        
        D. IN ROUTE
            web.php
            Route::get('/anypath', function() {
            //    return View::make('hello');
                return view('welcome');
            });
            
            To call your view you can use make or view both work.

### AppServiceProvider
    Here we set theme path like above and pass it into theme. path
    
    
### MIDDLEWARE
    Here we initilise theme which theme you want to run,
    But one thing you have to pass same theme path from
    appserviceprovider.
    
### FINAL STEP
    After all this agian you have to face error but not a big 
    deal, that is just js and css issue which in master file
    inside theme just comment it.
    
    
    
### HAPPY CODDING...   

### Open Source Licenses and Notices
The open source license for the Software included in the "Open Source Notices" 
documentation that is included with the Software. 
That documentation also includes copies of all applicable open source licenses.               

### LINK 
    For below laravel 6
    https://github.com/laravel-practice/yaap-theme-laravel5.8
    
