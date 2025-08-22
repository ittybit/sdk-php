<?php

namespace Ittybit\Files\Types;

enum FilesUpdateResponseStatus: string
{
    case Waiting = "waiting";
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
}
