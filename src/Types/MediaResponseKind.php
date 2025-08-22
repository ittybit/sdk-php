<?php

namespace Ittybit\Types;

enum MediaResponseKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
