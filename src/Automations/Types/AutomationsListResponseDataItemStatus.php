<?php

namespace Ittybit\Automations\Types;

enum AutomationsListResponseDataItemStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
    case Draft = "draft";
}
