<?php



/**
 * Customizer additions.
 */
// require_once get_template_directory() . './customizer.php';

if (!defined("MY_THEME_DIR")) {
    define("MY_THEME_DIR", trailingslashit(get_stylesheet_directory()));
}

  require_once MY_THEME_DIR.'./customizer.php';


if (!function_exists('ariel2020_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */

    function ariel2020_setup()
    {

        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        //        load_theme_textdomain( 'ariel2020', get_template_directory() . '/languages' );

        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        //        add_theme_support( 'automatic-feed-links' );

        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support('post-thumbnails');

        /**
         * Add support for two custom navigation menus.
         */
        // register_nav_menus( array(
        //     'primary'   => __( 'Primary Menu', 'ariel2020' ),
        //     'secondary' => __('Secondary Menu', 'ariel2020' )
        // ) );

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
    }
endif; // ariel2020_setup
add_action('after_setup_theme', 'ariel2020_setup');



add_filter('the_content', 'ariel2020_onlyimages');

function ariel2020_onlyimages($the_content)
{


    // echo '<script>';
    // echo 'console.log('. json_encode(in_category('works')) .')';
    // echo '</script>';

    if (in_category('works')) {
        preg_match_all("#<figure.*</figure\>#", $the_content, $matches);
        //  preg_match("#<img(.+?)src=(.+?)\/>#", $the_content, $matches);
        /** $matches is an array, $matches[0] holds the img code */
        // echo $matches[0];


        // g$atoarray ='';
        // for ($i = 0 ; $i < count($matches) ; $i++) {


        //     for ($j=0; $j <  count($matches[$i]); $j++) {
        //         $gatoarray  .= '<li class="splide__slide">'.$matches[$i][$j].'<li>';
        //     }

        //     // $gatoarray  .= '<img ' .  $matches[$i][$i];
        // }

        $gatoarray = '';

        for ($j = 0; $j < count($matches); $j++) {
            for ($i = 0; $i < count($matches[$j]); $i++) {
                $gatoarray  .= '<li class="splide__slide"> <span class="helper"></span>' . $matches[$j][$i] . '</li>';
            }
        }
    } else {
        $gatoarray  = $the_content;
    }


    return  $gatoarray;
    // return  $gatoarray;
    // return  implode ( $matches );
}


// .       - Any Character Except New Line
// \d      - Digit (0-9)
// \D      - Not a Digit (0-9)
// \w      - Word Character (a-z, A-Z, 0-9, _)
// \W      - Not a Word Character
// \s      - Whitespace (space, tab, newline)
// \S      - Not Whitespace (space, tab, newline)

// \b      - Word Boundary
// \B      - Not a Word Boundary
// ^       - Beginning of a String
// $       - End of a String

// []      - Matches Characters in brackets
// [^ ]    - Matches Characters NOT in brackets
// |       - Either Or
// ( )     - Group

// Quantifiers:
// *       - 0 or More
// +       - 1 or More
// ?       - 0 or One
// {3}     - Exact Number
// {3,4}   - Range of Numbers (Minimum, Maximum)


// #### Sample Regexs ####

// [a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+





function my_widget_place()
{
    register_sidebar(array(
        'name' => __('Front Sidebar', 'yourtheme'),
        'id' => 'sidebar-1',
        'description' => __('This is description', 'yourtheme'),
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}


add_action('widgets_init', 'my_widget_place');







function register_my_nav_bar()
{
    register_nav_menu('my_new_menu', __('Our new menu'));
}

add_action('init', 'register_my_nav_bar');

//
// function curator($the_content-param){
//
//
//
// return
// }






/* Inline script printed out in the header */
add_action('wp_head', 'tutsplus_add_script_wp_head');
function tutsplus_add_script_wp_head()
{
    ?>
    <script>
        console.log("I'm an inline script tag added to the header.");
    </script>
<?php
}

?>
