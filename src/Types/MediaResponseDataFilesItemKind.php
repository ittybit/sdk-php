<?php

namespace Ittybit\Types;

enum MediaResponseDataFilesItemKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
