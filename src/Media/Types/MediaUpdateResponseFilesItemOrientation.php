<?php

namespace Ittybit\Media\Types;

enum MediaUpdateResponseFilesItemOrientation: string
{
    case Landscape = "landscape";
    case Portrait = "portrait";
    case Square = "square";
}
