<?php

namespace Ittybit\Automations\Types;

enum AutomationsListResponseDataItemStatus: string
{
    case Active = "active";
    case Paused = "paused";
}
