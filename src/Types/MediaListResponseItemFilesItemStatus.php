<?php

namespace Ittybit\Types;

enum MediaListResponseItemFilesItemStatus: string
{
    case Waiting = "waiting";
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
}
