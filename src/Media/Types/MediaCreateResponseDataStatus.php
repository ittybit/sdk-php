<?php

namespace Ittybit\Media\Types;

enum MediaCreateResponseDataStatus: string
{
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
    case Pending = "pending";
}
