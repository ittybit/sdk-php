<?php

namespace Ittybit\Media\Types;

enum MediaUpdateResponseDataFilesItemOrientation: string
{
    case Landscape = "landscape";
    case Portrait = "portrait";
    case Square = "square";
}
