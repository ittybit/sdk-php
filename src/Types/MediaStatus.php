<?php

namespace Ittybit\Types;

enum MediaStatus: string
{
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
    case Pending = "pending";
}
