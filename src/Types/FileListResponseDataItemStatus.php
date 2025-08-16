<?php

namespace Ittybit\Types;

enum FileListResponseDataItemStatus: string
{
    case Waiting = "waiting";
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
}
