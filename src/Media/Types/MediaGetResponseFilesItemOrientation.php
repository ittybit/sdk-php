<?php

namespace Ittybit\Media\Types;

enum MediaGetResponseFilesItemOrientation: string
{
    case Landscape = "landscape";
    case Portrait = "portrait";
    case Square = "square";
}
