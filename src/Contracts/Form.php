<?php

namespace AcfService\Contracts;

interface Form
{
    /**
     * Used to create a new form to allow users to submit content to your website.
     *
     * @url https://www.advancedcustomfields.com/resources/acf_form/
     *
     * @return void
     */
    public function form(): void;
}
