<?php

namespace Ittybit\Automations\Types;

enum AutomationsCreateResponseStatus: string
{
    case Active = "active";
    case Paused = "paused";
}
