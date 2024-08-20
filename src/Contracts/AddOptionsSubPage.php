<?php

namespace AcfService\Contracts;

interface AddOptionsSubPage
{
    /**
     * Adds an options sub page using the Advanced Custom Fields (ACF) plugin.
     *
     * This function is a wrapper for the `acf_add_options_sub_page` function provided by ACF.
     * It allows you to easily add an options sub page to an existing options page in the WordPress admin dashboard.
     *
     * @param array $options An array of options for the options sub page.
     *                       The options array should include the following keys:
     *                       - 'page_title' (string): The title of the options sub page.
     *                       - 'menu_title' (string): The title of the options sub page in the admin menu.
     *                       - 'parent_slug' (string): The slug of the parent options page.
     *                       - 'menu_slug' (string): The slug of the options sub page.
     *                       - 'capability' (string): The capability required to access the options sub page.
     *                       - 'position' (int): The position of the options sub page in the admin menu.
     *                       - 'icon_url' (string): The URL of the icon to be displayed in the admin menu.
     *
     * @return void
     */
    public function addOptionsSubPage(array $options): void;
}
