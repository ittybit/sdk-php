<?php

namespace Ittybit\Media\Types;

enum MediaUpdateResponseDataKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
