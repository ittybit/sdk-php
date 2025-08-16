<?php

namespace Ittybit\Automations\Types;

enum AutomationsUpdateResponseDataStatus: string
{
    case Active = "active";
    case Paused = "paused";
}
