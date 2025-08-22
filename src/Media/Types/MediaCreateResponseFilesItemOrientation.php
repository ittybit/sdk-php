<?php

namespace Ittybit\Media\Types;

enum MediaCreateResponseFilesItemOrientation: string
{
    case Landscape = "landscape";
    case Portrait = "portrait";
    case Square = "square";
}
