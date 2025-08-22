<?php

namespace Ittybit\Types;

enum FileResponseStatus: string
{
    case Waiting = "waiting";
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
}
