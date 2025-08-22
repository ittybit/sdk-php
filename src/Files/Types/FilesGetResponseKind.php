<?php

namespace Ittybit\Files\Types;

enum FilesGetResponseKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
