<?php

namespace Ittybit\Types;

enum AutomationListResponseDataItemStatus: string
{
    case Active = "active";
    case Inactive = "inactive";
    case Draft = "draft";
}
