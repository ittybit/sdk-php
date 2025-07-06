<?php

namespace Ittybit\Types;

enum FileKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
