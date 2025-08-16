<?php

namespace Ittybit\Types;

enum MediaListResponseDataItemKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
}
