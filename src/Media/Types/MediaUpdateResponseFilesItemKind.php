<?php

namespace Ittybit\Media\Types;

enum MediaUpdateResponseFilesItemKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
