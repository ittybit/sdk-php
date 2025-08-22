<?php

namespace Ittybit\Media\Types;

enum MediaGetResponseKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
