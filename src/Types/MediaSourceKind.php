<?php

namespace Ittybit\Types;

enum MediaSourceKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
