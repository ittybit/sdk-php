<?php

namespace Ittybit\Types;

enum MediaFilesItemKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
