<?php

namespace Ittybit\Types;

enum FileListResponseItemStatus: string
{
    case Waiting = "waiting";
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
}
