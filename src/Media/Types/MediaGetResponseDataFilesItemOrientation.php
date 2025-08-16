<?php

namespace Ittybit\Media\Types;

enum MediaGetResponseDataFilesItemOrientation: string
{
    case Landscape = "landscape";
    case Portrait = "portrait";
    case Square = "square";
}
