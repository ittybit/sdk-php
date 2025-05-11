<?php

namespace Ittybit\Files\Types;

enum FilesCreateFromUrlResponseDataKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
    case Document = "document";
    case Unknown = "unknown";
}
