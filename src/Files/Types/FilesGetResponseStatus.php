<?php

namespace Ittybit\Files\Types;

enum FilesGetResponseStatus: string
{
    case Waiting = "waiting";
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
}
