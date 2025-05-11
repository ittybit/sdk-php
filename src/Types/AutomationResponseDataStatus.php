<?php

namespace Ittybit\Types;

enum AutomationResponseDataStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
    case Draft = "draft";
}
