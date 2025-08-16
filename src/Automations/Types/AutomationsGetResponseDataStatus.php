<?php

namespace Ittybit\Automations\Types;

enum AutomationsGetResponseDataStatus: string
{
    case Active = "active";
    case Paused = "paused";
}
