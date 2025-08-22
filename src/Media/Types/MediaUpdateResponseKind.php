<?php

namespace Ittybit\Media\Types;

enum MediaUpdateResponseKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
