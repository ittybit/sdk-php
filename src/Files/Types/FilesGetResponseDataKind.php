<?php

namespace Ittybit\Files\Types;

enum FilesGetResponseDataKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
