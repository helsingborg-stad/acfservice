<?php

namespace AcfService\Contracts;

interface EnqueueUploader
{
    /**
     * Enqueue the ACF uploader scripts and styles.
     *
     * @url https://www.advancedcustomfields.com/resources/acf_enqueue_uploader/
     *
     * @return void
     */
    public function enqueueUploader(): void;
}
