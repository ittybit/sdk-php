<?php

namespace Ittybit\Files\Types;

enum FilesCreateResponseKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
