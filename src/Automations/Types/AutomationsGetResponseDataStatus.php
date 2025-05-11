<?php

namespace Ittybit\Automations\Types;

enum AutomationsGetResponseDataStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
    case Draft = "draft";
}
