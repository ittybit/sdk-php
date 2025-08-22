<?php

namespace Ittybit\Types;

enum FileResponseKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
