<?php

namespace Ittybit\Media\Types;

enum MediaGetResponseDataSourcesItemKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
    case Document = "document";
    case Unknown = "unknown";
}
