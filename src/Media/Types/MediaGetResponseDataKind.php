<?php

namespace Ittybit\Media\Types;

enum MediaGetResponseDataKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
