<?php

namespace Ittybit\Files\Types;

enum FilesCreateResponseDataKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
