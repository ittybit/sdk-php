<?php

namespace Ittybit\Automations\Types;

enum AutomationsCreateRequestStatus: string
{
    case Active = "active";
    case Paused = "paused";
}
