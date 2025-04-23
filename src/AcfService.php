<?php

namespace AcfService;

use AcfService\Contracts;

interface AcfService extends
    Contracts\AcfGetFields,
    Contracts\AddLocalFieldGroup,
    Contracts\AddOptionsPage,
    Contracts\AddOptionsSubPage,
    Contracts\DeleteField,
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
