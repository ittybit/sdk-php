<?php

namespace Ittybit\Types;

enum AutomationStatus: string
{
    case Active = "active";
    case Paused = "paused";
}
