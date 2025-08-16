<?php

namespace Ittybit\Types;

enum MediaFilesItemStatus: string
{
    case Waiting = "waiting";
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
}
