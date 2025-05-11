<?php

namespace Ittybit\Automations\Types;

enum AutomationsUpdateResponseDataStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
    case Draft = "draft";
}
