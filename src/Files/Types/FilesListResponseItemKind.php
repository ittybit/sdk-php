<?php

namespace Ittybit\Files\Types;

enum FilesListResponseItemKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
