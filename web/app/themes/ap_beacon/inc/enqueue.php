<?php 
    class AIOSSTARTETHEMEENQUEUE
    {

        /**
         * Admin constructor.
         */
        public function __construct()
        {
            add_action( 'wp_enqueue_scripts', [$this, 'ai_starter_theme_enqueue_assets'] );
        }

        /*
        * Enqueue theme styles and scripts
        */
        function ai_starter_theme_enqueue_assets() {
            
            /* AIOS CDN */
            $cdn = 'https://resources.agentimage.com';

            /* Fonts */
            wp_enqueue_style( 'default-font', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
            /* Styles */
            wp_enqueue_style( 'aios-starter-theme-defaults', get_template_directory_uri().'/assets/css/defaults.min.css' );
            wp_enqueue_style( 'aios-starter-theme-style', get_template_directory_uri().'/assets/css/global.css' );

            
            /* Enqueue globals */
            wp_register_script('aios-starter-theme-global', $cdn . '/libraries/js/global.min.js');
            wp_enqueue_script('aios-starter-theme-global');

            // Load Splide library from CDN
            wp_enqueue_script( 'splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', [], '4.1.4', true ); 
            wp_enqueue_style( 'splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css' );  

            wp_enqueue_script('custom-splide-init', get_template_directory_uri() . '/src/js/home.js', ['jquery'], null, true );                      
            wp_enqueue_script('aios-starter-theme-script', get_template_directory_uri() . '/assets/js/scripts.js');
            /* Scripts */


            /* Homepage Specific Enqueue */
            if( is_home() ) {
                wp_enqueue_style( 'aios-starter-theme-home', get_template_directory_uri().'/assets/css/homepage.css' );
            }
        }
    }

    new AIOSSTARTETHEMEENQUEUE();