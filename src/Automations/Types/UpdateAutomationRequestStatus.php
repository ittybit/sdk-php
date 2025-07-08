<?php

namespace Ittybit\Automations\Types;

enum UpdateAutomationRequestStatus: string
{
    case Active = "active";
    case Paused = "paused";
}
