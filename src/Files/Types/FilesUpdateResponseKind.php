<?php

namespace Ittybit\Files\Types;

enum FilesUpdateResponseKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
