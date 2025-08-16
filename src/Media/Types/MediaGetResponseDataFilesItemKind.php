<?php

namespace Ittybit\Media\Types;

enum MediaGetResponseDataFilesItemKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
