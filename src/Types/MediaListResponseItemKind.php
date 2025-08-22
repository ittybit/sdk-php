<?php

namespace Ittybit\Types;

enum MediaListResponseItemKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
