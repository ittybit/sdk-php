<?php

namespace Ittybit\Media\Types;

enum MediaCreateResponseDataSourcesItemOrientation: string
{
    case Landscape = "landscape";
    case Portrait = "portrait";
    case Square = "square";
}
