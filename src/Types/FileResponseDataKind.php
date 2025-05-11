<?php

namespace Ittybit\Types;

enum FileResponseDataKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
    case Document = "document";
    case Unknown = "unknown";
}
