<?php

namespace Ittybit\Media\Types;

enum MediaCreateResponseDataKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
