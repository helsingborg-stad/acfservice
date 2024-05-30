<?php

namespace AcfService;

use AcfService\Contracts;

interface AcfService extends
    Contracts\AddOptionsPage,
    Contracts\AddLocalFieldGroup,
    Contracts\EnqueueUploader,
    Contracts\Form,
    Contracts\FormHead,
    Contracts\GetField,
    Contracts\GetFieldGroups,
    Contracts\GetFields,
    Contracts\RenderFieldSetting
{
}
