<?php

namespace Ittybit\Media\Types;

enum MediaCreateResponseDataFilesItemKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
