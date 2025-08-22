<?php

namespace Ittybit\Types;

enum MediaListResponseItemFilesItemKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
