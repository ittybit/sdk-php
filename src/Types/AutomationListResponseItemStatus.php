<?php

namespace Ittybit\Types;

enum AutomationListResponseItemStatus: string
{
    case Active = "active";
    case Paused = "paused";
}
