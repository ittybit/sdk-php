<?php

namespace Ittybit\Automations\Types;

enum AutomationsCreateResponseDataStatus: string
{
    case Active = "active";
    case Paused = "paused";
}
