<?php

/**
 * Control look and behaviours of login, lost password and registration.
 */

namespace Hwale\Core;

class Login
{
    /**
     * capability
     *
     * The WordPress capability to determine which members
     * can access the dashboard.
     *
     * https://wordpress.org/support/article/roles-and-capabilities/
     *
     * @var string
     */
    private $capability = '';

    /**
     * redirectUrl
     *
     * The URL members who are not allowed to access the dashboard
     * should be redirected to.
     *
     * @var string
     */
    private $redirectUrl = '';

    /**
     * loginEnqueue
     *
     * Set style sheet for the login, lost password and registration pages.
     * @return void
     */
    private function loginEnqueue()
    {
        add_action('login_enqueue_scripts', fn() =>  wp_enqueue_style('app', get_theme_file_uri('/build/app.css')));
        // Set logo image
        add_action(
            'login_enqueue_scripts',
            function () {
                $logoUrl = get_stylesheet_directory_uri() . '/images/logo-login.svg';
                $logo = get_field('logo', 'company_info') ?: null;

                if ($logo) {
                    $logoUrl = $logo['url'];
                }

                echo "<style type=\"text/css\">
                    #login h1 a,
                    .login h1 a {
                        background-image: url({$logoUrl});
                        background-position: center;
                    }
                </style>";
            }
        );
    }

    /**
     * loginHeaderUrl
     *
     * Change logo link to homepage
     * @return void
     */
    private function loginHeaderUrl()
    {
        add_filter('login_headerurl', fn() => esc_url(site_url('/')));
    }

    /**
     * loginHeaderTitle
     *
     * Change home link title from 'Powered by WordPress' to site name
     * @return void
     */
    private function loginHeaderTitle()
    {
        add_filter('login_headertext', fn() => get_bloginfo('name'));
    }

    /**
     * hideLanguageDropdown
     *
     * Hide the language dropdown on login/registration pages
     * @return void
     */
    private function hideLanguageDropdown()
    {
        add_filter('login_display_language_dropdown', '__return_false');
    }

    /**
     * blockNonAdminMembers
     *
     * Prevents site members without required permissions from accessing
     * the dashboard.
     *
     * Whether a user needs the dashboard is determined by checking their
     * capabilities.
     *
     * If their role lacks the specified capability, they are redirected to
     * the specified url.
     *
     * @param  string $capability The capability to check for.
     * @param  string $redirectUrl The URL of the portal home to redirect to.
     * @return void
     */
    private function blockNonAdminMembers(string $capability, string $redirectUrl)
    {
        if (!$capability || !$redirectUrl) {
            return;
        }

        add_action('admin_init', function () use ($capability, $redirectUrl) {
            if (!defined('DOING_AJAX') || !DOING_AJAX) {
                $user = wp_get_current_user();

                if (isset($user->allcaps) && is_array($user->allcaps)) {
                    if (!array_key_exists($capability, $user->allcaps)) {
                        wp_safe_redirect($redirectUrl);
                        exit;
                    }
                }
            }
        });
    }

    /**
     * hideAdminBar
     *
     * Hide admin dashbar for members who don't have access to the dashboard.
     * @param  string $capability The capability to check for.
     * @return void
     */
    private function hideAdminBar(string $capability)
    {
        if (!$capability || !is_user_logged_in()) {
            return;
        }

        $user = wp_get_current_user();

        if (isset($user->allcaps) && is_array($user->allcaps)) {
            if (!array_key_exists($capability, $user->allcaps)) {
                show_admin_bar(false);
            }
        }
    }

    /**
     * setProperties
     *
     * Set shared properties needed by methods during class construction.
     * Must be run first in __construct().
     * @return void
     */
    private function setProperties()
    {
        // Set capability that allows access to dashboard.
        $this->capability = 'edit_posts';
        // Set the URL for users to be redirected to.
        $this->redirectUrl = home_url();
    }

    public function __construct()
    {
        // Must set properties first.
        $this->setProperties();

        $this->loginEnqueue();
        $this->loginHeaderUrl();
        $this->loginHeaderTitle();
        $this->hideLanguageDropdown();
        $this->blockNonAdminMembers($this->capability, $this->redirectUrl);
        $this->hideAdminBar($this->capability);
    }
}
