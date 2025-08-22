<?php

namespace Ittybit\Types;

enum FileListResponseItemKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
