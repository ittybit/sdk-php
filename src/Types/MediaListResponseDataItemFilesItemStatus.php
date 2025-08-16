<?php

namespace Ittybit\Types;

enum MediaListResponseDataItemFilesItemStatus: string
{
    case Waiting = "waiting";
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
}
