<?php

namespace AcfService\Contracts;

interface FormHead
{
    /**
     * Used to process, validate and save the submitted form data created by
     * the acf_form() function. It will also enqueue all ACF related
     * scripts and styles for the form to display correctly.
     * This function must be placed before any HTML has been output,
     * preferably above the get_header() function of your theme file.
     *
     * @url https://www.advancedcustomfields.com/resources/acf_form_head/
     *
     * @return void
     */
    public function formHead(): void;
}
