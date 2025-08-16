<?php

namespace Ittybit\Files\Types;

enum FilesListResponseDataItemStatus: string
{
    case Waiting = "waiting";
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
}
