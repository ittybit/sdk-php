<?php

namespace Ittybit\Types;

enum MediaResponseFilesItemKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
