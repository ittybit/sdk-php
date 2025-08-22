<?php

namespace Ittybit\Automations\Types;

enum AutomationsGetResponseStatus: string
{
    case Active = "active";
    case Paused = "paused";
}
