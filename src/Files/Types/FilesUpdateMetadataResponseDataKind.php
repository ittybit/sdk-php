<?php

namespace Ittybit\Files\Types;

enum FilesUpdateMetadataResponseDataKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
    case Document = "document";
    case Unknown = "unknown";
}
