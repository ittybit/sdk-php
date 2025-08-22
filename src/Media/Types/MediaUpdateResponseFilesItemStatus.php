<?php

namespace Ittybit\Media\Types;

enum MediaUpdateResponseFilesItemStatus: string
{
    case Waiting = "waiting";
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
}
