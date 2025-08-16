<?php

namespace Ittybit\Types;

enum MediaResponseDataKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
