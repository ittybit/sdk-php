<?php

namespace Ittybit\Media\Types;

enum MediaGetResponseDataStatus: string
{
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
    case Pending = "pending";
}
