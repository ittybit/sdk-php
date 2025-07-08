<?php

namespace Ittybit\Automations\Types;

enum AutomationsUpdateRequestStatus: string
{
    case Active = "active";
    case Paused = "paused";
}
