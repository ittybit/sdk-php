<?php

namespace Ittybit\Types;

enum MediaResponseDataFilesItemStatus: string
{
    case Waiting = "waiting";
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
}
