<?php

namespace AcfService;

use AcfService\Contracts;

interface AcfService extends
    Contracts\AddLocalFieldGroup,
    Contracts\AddOptionsPage,
    Contracts\AddOptionsSubPage,
    Contracts\EnqueueUploader,
    Contracts\Form,
    Contracts\FormHead,
    Contracts\GetField,
    Contracts\GetFieldGroups,
    Contracts\GetFields,
    Contracts\RenderFieldSetting,
    Contracts\UpdateField
{
}
