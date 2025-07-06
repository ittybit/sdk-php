<?php

namespace Ittybit\Types;

enum MediaKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
