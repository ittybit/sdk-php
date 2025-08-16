<?php

namespace Ittybit\Types;

enum AutomationListResponseDataItemStatus: string
{
    case Active = "active";
    case Paused = "paused";
}
