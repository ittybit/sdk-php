<?php

namespace Ittybit\Types;

enum MediaSourceStatus: string
{
    case Waiting = "waiting";
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
}
