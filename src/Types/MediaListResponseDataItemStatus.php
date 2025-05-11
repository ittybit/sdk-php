<?php

namespace Ittybit\Types;

enum MediaListResponseDataItemStatus: string
{
    case Processing = "processing";
    case Ready = "ready";
    case Failed = "failed";
    case Pending = "pending";
}
