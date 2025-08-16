<?php

namespace Ittybit\Types;

enum FileResponseDataStatus: string
{
    case Waiting = "waiting";
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
}
