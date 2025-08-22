<?php

namespace Ittybit\Automations\Types;

enum AutomationsUpdateResponseStatus: string
{
    case Active = "active";
    case Paused = "paused";
}
