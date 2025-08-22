<?php

namespace Ittybit\Media\Types;

enum MediaGetResponseFilesItemStatus: string
{
    case Waiting = "waiting";
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
}
