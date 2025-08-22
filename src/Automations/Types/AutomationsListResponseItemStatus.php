<?php

namespace Ittybit\Automations\Types;

enum AutomationsListResponseItemStatus: string
{
    case Active = "active";
    case Paused = "paused";
}
