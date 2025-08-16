<?php

namespace Ittybit\Types;

enum FileListResponseDataItemKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
