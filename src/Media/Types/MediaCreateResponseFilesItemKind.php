<?php

namespace Ittybit\Media\Types;

enum MediaCreateResponseFilesItemKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
