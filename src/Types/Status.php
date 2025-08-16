<?php

namespace Ittybit\Types;

enum Status: string
{
    case Pending = "pending";
    case Waiting = "waiting";
    case Processing = "processing";
    case Ready = "ready";
    case Completed = "completed";
    case Failed = "failed";
    case Error = "error";
    case Cancelled = "cancelled";
}
