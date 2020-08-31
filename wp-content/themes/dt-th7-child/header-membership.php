<?php
/**
 * The header for our Member site
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>  >
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="profile" href="https://gmpg.org/xfn/11" />
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo get_theme_file_uri() . '/style-membership.css'; ?>">
        <link rel="stylesheet" href="<?php echo get_theme_file_uri() . '/style-course.css'; ?>">
        <link rel="stylesheet" href="<?php echo 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css'; ?>">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
        <!-- <script type="text/javascript" src="<?php //get_theme_file_uri() . '/js/membership-navigation.js'; ?>"></script> -->
        <style>
            .menu-item-54657:before {
                content: url("data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAASCAYAAAC5DOVpAAABR0lEQVQ4jc3UvyuvYRjH8ZdfGxspLEcpyoQynMhkcVIyGJgslJJS/ghlsZnOoJTlnDOc2WITWb5lEFEWWShF+dmt66lvT74PX5NPPd3d1/W53t1d93U/NYd3DwrUiN+YwB/M4raSvbYA1I5dDGEBw7FvrxbWhz00YBAbsTZEvO+zsPE4QQk/cR7x89iXIj/+EWwJf7GJMdzk8jcR3wzfUnmyPtY6rGMeK1ir1Bc8hu84fF1YxFOCNWEbI5jEvwJQuRLoBFv4gak0GjvowS8cfBJUrn78x1FtXHmCzHwBJOpS/XA6WerRHDpR8wXYC07T+KSTrWL5HdNoamqYs+8xxiOvVL9a/04iUxvuMV0WS+PQUqmgCJb0UMXtFr7NqvV9YVnPnmNNryBTd4WaXlznYm/12c+xFfvoyJnO4qlkukJzznOBAVy+ApbaSIRDiMmjAAAAAElFTkSuQmCC");
                margin: 0.6rem;
                line-height: 1;
                vertical-align: middle;
            }

            .menu-item-54654:before {
                content: url("data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAAYCAYAAAAs7gcTAAABtUlEQVQ4jY3TP0hWYRQG8F/2DWqDUC6mZTREfygKQtCCICisoTKioYaiIWhyEQoChwSDQGxwaW0ooj/UIkFQNNVXQyAhBNHfIRtCocEo0zh17ucNPqIHLvd9uc99z3Oe87xLXsz+kNiCs9iLVszgES7ieVAK8ilciT0e4z1WYjeWoh9jQe7CE0ziCF5ZxCrcwXbsrGTpnziIIUSpk7iEbTiM1zgXJ4e2CVxGW5K/oBntWXEgeoqTWzCP29lkI57hEB7gU+5bGlJdNLQZJ9CHrViHYWwq+qgkOVyIsrOYQxO+5b4pv9fInajWkXGzJEMh4wP25UC6sR8rcAZ70o0aOax7iY3Y4M+6M62bTGl/yfiYMipZKXwfw1R53Au4jodp4Xz+8DV9n05ZRxsWJ+tWjvtAriMXx3EvZdZO/i9Eue9pz91/8MLGtjj5PnZhDT7XIUa230UyQ/NIDuJGeltG5OYalmG0kmEZxAW8STlvM8tRfnnelvHyterFefTksKLx8DeIv/spkwusxdXM8NPyh7LPBVZjB9bXsy4QmTid6458H8tcB2LC1YIcJ8UNLiPSFk9gCtVf7nR3xrBqtMcAAAAASUVORK5CYII=");
                margin: 0.6rem;
                line-height: 1;
                vertical-align: middle;
            }

            .menu-item-54650:before {
                content: url("data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAPCAYAAAALWoRrAAABUElEQVQ4jaXTLUhkURjG8Z+zg6hgUEGXTSsY3CImt4kW0SJbFgxrUCw2+6rVZFm2KCxmLRpEMJnEOEmZsioIIi6WDX4wjsqRM8HDvTLoU+4978f/Pu/LPQ2lm4qoEex6n84xUcQyOtATcT9x/QZ0AdNYDU4fcYZGdKET//ElaXrAYTTwKcndx9xMgBZjcDE+11CJbhcy3ExhFgMZudHYq5iRDPqNMhoSNzuYwzb+xHiYbAXNtcI8aNjNUkb8e3z+xVZ8/5wW5UE3cZsR38+prws6GMdMVY7nMMm3PEYe9Ah7GTs9xi/0JfXhzzjA2GvQsPzujMZ2fER/kgurqtYOhRxoNSf+GOGpXsTynF7hJBm/Gi9FuIqnSX24gXcpNDQHFzX1YjjD5Qa+YijJhfFb8eEZVrqpXOAfWuK+5pMP1Kuwyh9oC9BxrKPpDaBUl5h8An5eSwHkBjiSAAAAAElFTkSuQmCC");
                margin: 0.6rem;
                line-height: 1;
                vertical-align: middle;
            }

            .menu-item-54652:before {
                content: url("data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAOCAYAAAAvxDzwAAABXUlEQVQ4jZXTv0tVYRgH8I+HVApRCXFKGgxqcHJR01GQpmhoqlXBsBIUJwcHRcQlQf8EBwe3aIkgqCgkuIVQa0NcxaFa4pI/UF54Ll5u9xy4X3g58Pz4Pt/n+76npVQ5EbiK77ipeSxiJXVdqWl9ghvxrTRBeR/PsI7jKmEPlvCugOwVjhrEP8VmD7FdXXkrlOXhPBp2c/Kv0YGRLNQ9wgu05JysgCxhE8MYTCvPoz1UdtcUtSVPcghacRrKE96jjKdp5b+4VjC9GVSSwgd4jIMwN2EuFGzkkE2hF8t18XL1Ur7gLWbDr19Yw2oO4XR43ol/tYmsQfEddOFDwaofw+PB+kQWf8h19EfsLs7wuYBwH8n7kfpE8nABfXHGcAuHNTfYCKnvZ9T+RziEb7gdE3fwHD/wBl/xJwakZzWA8Xi/k40I93AvzE3NpfBmBqOYCEsSfoeyl/FuU/0lcAFG0U3xPpc2YgAAAABJRU5ErkJggg==");
                margin: 0.6rem;
                line-height: 1;
                vertical-align: middle;
            }

            .menu-item-54653:before {
                content: url("data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAQCAYAAAAS7Y8mAAABz0lEQVQ4jaXUy6uOURQG8J9L4gzIneRSLhEDA4VcziGZ6PhmGBgYKMXEyJgiI2Rkwh9gII6kEymSEoOTS0bI4QzUKaE4jnur1q7t9Sn1PfXW7nn3fvZaz15rjRkY+bYexzHOn5iDCXjd4H/hLO5jL/ahC0vws2waj7XYiqf4UQkszss+NoRXYmleHP+HMRMR4L1auGAT1mABLuI5piS3C19xCaMpegGDeILLaP1LeA/O5Xp3xUfaB3N9FF8y9bc4kfwj9OJIOTS2EohUPuE2uiu+J20aTH4kLdhSWfcSy7GsnXB/RtKTqRVcwSosRF9G/B3v82Ef4GTubZVDURWHcQZTMR/zcBND6XFXRjqalfAqz07C3KoSIqt32NyMWD5Ef6M6AndStOANZmFdxV3FBsxoJ/y/GMpIe6v9fam3oxPhsOVu7SkeZqW0OhGWqa/IZpEZXMN2TKzreBF25mWPK34jtuX6ekP4VNpxOrmwY390ci0ch4/leqDiD+RMCMyu+OjMZ5l6Eb6Fz8HVVpzPkouvfu0YMoU/1MaOyGh6nokLQrM7Io4SCYQ/UfgF07LlI4oaMSdWZ3vH8AmhaJSo95h8L3AjGuQDJv/1NJ2A4d+8kmhW/uIg5wAAAABJRU5ErkJggg==");
                margin: 0.6rem;
                line-height: 1;
                vertical-align: middle;
            }

            .menu-item-54655:before {
                content: url("data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAARCAYAAAAyhueAAAAB+0lEQVQ4jZXUWYhPARQG8J//DE1JnmxlSZSGKC9IyM6DUp4IhZQUZRTZkxdL8qAoSpQsD0rxJGuJEhn7liHLWJpkG0tEOjoz/bsmzZy63e2c757zfd+57Wq//dSKqMBQTMhjFJ5iBD4Xy0v/wavGEhxHA65iM7riCAZiVkuF5Z32xnhMzHOPfP4YZ/O4jrqow1t0wS3Mxp0i6Casz2evcC5BPqERp7EcG9A58wZhJDbiV3beWA56DZWYiQdZNAcH83oHpuMJJhemDeBLWID9TZyGCF/RvQwwYiqe4RAWoV92X10AvYyP2XmzUDH2aBwuJNeiD6bkeKHyFtzD3LK84LVjitnM6WtcSCU7oSaFiqRHaaVJKczzFCmmG4aeOJY5Y/AS9aUc+0Z+ZADWoArnsTY/WJFjRnF/fMj88OxwLMYy3A16KpO3sdiaglUVaJifbojCH+nTmnz3Ls9fsBLjgqLodFeKsi07qSyA7saqBFiHo1iNNziJ77iPFzgQPi+lXfZiRZp7aUGEhlS/LldzX052CvPQNxdA+rpD+Ub1ysTG5C/EGpzv3icFTUvx0L/RHldCyOIPJbrcmb69iDMJFEL+bgGoKaalJrFVM4r87cGQ/HHE9rQ2FqaAsXUniqDdMiG4vt0G0Ni2mwEYN0XQ+hw59rgtERxu/1uAP0vkippglKiOAAAAAElFTkSuQmCC");
                margin: 0.6rem;
                line-height: 1;
                vertical-align: middle;
            }

            .tech_support a.support:before {
                content: url("data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAB6UlEQVQ4jZXUS4iOYRQH8N/MfHIpt8YC5TJWSFhhMpFZsZB7yQYLUrKcjZW9DYqd64oiLDRRRC5lYYGi5NLkErnkmvulU+erp7dvvhn/envf3nPO/znnf855WhZ3r1ZgOLZjPWZhqMb4iQc4gb34WPeqFe6zcRqTcQbHSscKRmABdmIbIqubJeF0XMVTzMG9fohKHMAuHMelPOBuK1oz9VdYOEiyOh6jO9/BUYsMN2S58/EhHYdhcxMNv+MwvuEzNuJWcEVTzmUzuouAmSlBWz+Ev9GZjanjYhwQGc7D7kpAlN3+H6UHLqAnCMfhRcU4BYeaZPgry3xe/Ivv9iD8hNGVgC8p9JB+CEPDr5V/YyIuCO+gC/sL45sciZIwDn7bpOSu+tjEMK/EhMI4F8/wpHgeNSGL2BU4G10elUGXsRZ/U7vOyia9y2qqaMEpLEFHLddrK05mt3tyLK41yaiOkGQfVmEd3rdN7ZgRtvs51KHbIjzMNawi9nwsxmM5jmApduCoXLs69mAZJuE6NhW2kehFX8oTCRzM5nWWDa1VMjifF0VfjkFgImKbpqU0r1PP2JKX1RKqhIE/qaFcwd70CyluDyRqWXIVMVc3smlxNQ1INhDhmrxBgrhRgxqiUcmB2Igr2IIfgyWDfzzhbx2l3pC2AAAAAElFTkSuQmCC");
                margin: 0.6rem;
                line-height: 1;
                vertical-align: middle;                
            }

            .tech_support a.messages:before {
                content: url("data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAATCAYAAACgADyUAAAAz0lEQVQ4je3TMUuCURSH8V/R1BA5ZURQfQtxEF5XJ/sOLe19gaY+QbOj0OYoOomj4BSEIDhJRDSES1Zy47yFNPQ21wNnuHCeey/n/u9GLWs+4BxtXxyjHlXFIZYY4RqtJL4j1QQLlLGHFwzRxy220cApOltxxgBd7GCOcUgL67RwgatcvMOlYtynrs2Czd/4C2I+1SNk8ValWJ9EEA6wG32PEYRPMYuUJF4xwzRC0cMT3rCPSgpMLp7hJnZ7/s1Vl7FrYf4D8IOYpvnxVQqDFc/YK0peXHOQAAAAAElFTkSuQmCC");
                margin: 0.6rem;
                line-height: 1;
                vertical-align: middle;                
            }            

            html {
                margin-top: 0 !important;
            }
        </style>
    </head>
    <script type="text/javascript">


        jQuery(document).ready(function() {

            console.log("inside script");



            jQuery('body#membership-site .mobile-menu-button #menuToggle').on('click', function () {

                console.log("after click");
                // jQuery('body#membership-site .container-fluid #menu-wrapper').css('display', 'flex');
                jQuery('body#membership-site .sidebar').slideDown();
                // jQuery('body#membership-site .menu').slideDown();
                jQuery('body#membership-site #menuToggle2').css('display', 'flex');
                jQuery('body#membership-site #menuToggle2 i.fa-times').css('display', 'flex');
                jQuery('body#membership-site #menuToggle i.fa-bars').css('display', 'none');

            });

            jQuery('body#membership-site .mobile-menu-button #menuToggle2').on('click', function () {

                console.log("close");
                jQuery('body#membership-site .sidebar').slideUp();
                jQuery('body#membership-site #menuToggle i.fa-bars').css('display', 'flex');
                jQuery('body#membership-site #menuToggle2 i.fa-times').css('display', 'none');
                jQuery('body#membership-site #menuToggle2').css('display', 'none');
            });

            var screen = jQuery(window);
            jQuery(screen).on('resize', function (){
                if (screen.width() >= 901) {
                    jQuery('body#membership-site .sidebar').show();
                    jQuery('body#membership-site #menuToggle2 i.fa-times').css('display', 'none');
                    jQuery('body#membership-site #menuToggle2').css('display', 'none');
                    jQuery('body#membership-site #menuToggle i.fa-bars').css('display', 'none');
                }

                if (screen.width() < 901) {
                    jQuery('body#membership-site .sidebar').hide();
                    jQuery('body#membership-site #menuToggle2 i.fa-times').css('display', 'none');
                    jQuery('body#membership-site #menuToggle2').css('display', 'none');
                    jQuery('body#membership-site #menuToggle i.fa-bars').css('display', 'flex');
                }

            });

        });
    </script>

    <body <?php body_class('no-js'); ?> id="membership-site">

        <div class="membership-top">
            <div class="logo"></div><!--logo-->
            <div></div>
            <div class="sidebar-footer bg-gray d-flex align-items-center justify-content-center p-3">
                        <a href="<?php echo wp_logout_url('/log-out/'); ?>">

                            Logout
                        </a>
            </div>
        </div>

        <div class="mobile-menu-button">
            <button id="menuToggle" class="menu-toggle btn-secondary" aria-controls="primary-menu" data-toggle="collapse" data-target="#collapseMenu" aria-expanded="false" aria-controls="collapseMenu">
            <i class="fas fa-bars icon-rotates"></i></button>
            <button id="menuToggle2" class="menu-toggle btn-secondary" aria-controls="primary-menu" data-toggle="collapse" data-target="#collapseMenu" aria-expanded="false" aria-controls="collapseMenu"><i class="fas fa-times icon-rotates"></i></button>
        </div>

        <div class="grid_wrapper">

          <div class="sidebar">

            <!-- <div class="logo"></div>(logo)-->
            <div class="menu">
                <?php
                    $current_user = wp_get_current_user();
                    // "<pre>";
                    // var_dump($current_user);

                    // "</pre>";
                    $nameArr = explode(" ", $current_user->display_name);

                ?>
                <!-- <img src="https://betterthansuccess.com/wp-content/uploads/2020/08/BTS_default_profile.png" alt="profile image"> -->

                <?php echo get_avatar(get_current_user_id(), 150);?>
                <p class="text-center text-light mt-1">Hello, <?= $nameArr[0]; ?></p>
                <p>
                    <?php get_search_form(); ?>
                </p>

                <?php
                    wp_nav_menu([
                        'theme_location' => 'guw_membership_menu',
                        'menu_id'        => 'guw_membership_menu',
                        'menu_class'     => 'p-3 m-0',
                    ]);
                ?>
                <div class="line"></div>
                <div class="tech_support">
                    <a class="messages" href="<?php get_template_directory_uri(); ?>/member-account">My Account</a>
                    <a class="support" href="<?php get_template_directory_uri(); ?>/contact-us">Support</a>
                </div>

            </div><!--menu-->

          </div><!--sidebar-->
