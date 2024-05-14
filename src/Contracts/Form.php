<?php

namespace AcfService\Contracts;

interface Form
{
    /**
     * Used to create a new form to allow users to submit content to your website.
     *
     * @url https://www.advancedcustomfields.com/resources/acf_form/
     * @param string|array Array of settings or 'id' of a registered form.
     * @return void
     */
    public function form(string|array $settings = []): void;
}
