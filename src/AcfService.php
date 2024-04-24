<?php

namespace AcfService;

use AcfService\Contracts;

interface AcfService extends
    Contracts\GetField,
    Contracts\GetFields,
    Contracts\RenderFieldSetting,
    Contracts\AddOptionsPage
{
}
