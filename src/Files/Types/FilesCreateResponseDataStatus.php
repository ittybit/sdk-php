<?php

namespace Ittybit\Files\Types;

enum FilesCreateResponseDataStatus: string
{
    case Waiting = "waiting";
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
}
