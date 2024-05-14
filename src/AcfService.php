<?php

namespace AcfService;

use AcfService\Contracts;

interface AcfService extends
    Contracts\AddOptionsPage,
    Contracts\FormHead,
    Contracts\GetField,
    Contracts\GetFields,
    Contracts\RenderFieldSetting
{
}
