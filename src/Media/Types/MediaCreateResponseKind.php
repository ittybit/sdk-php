<?php

namespace Ittybit\Media\Types;

enum MediaCreateResponseKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
