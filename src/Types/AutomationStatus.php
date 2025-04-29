<?php

namespace Ittybit\Types;

enum AutomationStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
    case Draft = "draft";
}
