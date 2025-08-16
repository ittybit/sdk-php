<?php

namespace Ittybit\Media\Types;

enum MediaUpdateResponseDataFilesItemKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
