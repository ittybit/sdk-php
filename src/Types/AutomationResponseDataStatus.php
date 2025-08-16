<?php

namespace Ittybit\Types;

enum AutomationResponseDataStatus: string
{
    case Active = "active";
    case Paused = "paused";
}
