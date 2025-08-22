<?php

namespace Ittybit\Media\Types;

enum MediaGetResponseFilesItemKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
