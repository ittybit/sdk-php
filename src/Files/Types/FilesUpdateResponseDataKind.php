<?php

namespace Ittybit\Files\Types;

enum FilesUpdateResponseDataKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
