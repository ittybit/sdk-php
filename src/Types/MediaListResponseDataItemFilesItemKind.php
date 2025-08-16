<?php

namespace Ittybit\Types;

enum MediaListResponseDataItemFilesItemKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
