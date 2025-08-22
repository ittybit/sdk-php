<?php

namespace Ittybit\Types;

enum AutomationResponseStatus: string
{
    case Active = "active";
    case Paused = "paused";
}
