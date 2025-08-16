<?php

namespace Ittybit\Media\Types;

enum MediaCreateResponseDataFilesItemOrientation: string
{
    case Landscape = "landscape";
    case Portrait = "portrait";
    case Square = "square";
}
