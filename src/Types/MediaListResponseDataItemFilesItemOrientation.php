<?php

namespace Ittybit\Types;

enum MediaListResponseDataItemFilesItemOrientation: string
{
    case Landscape = "landscape";
    case Portrait = "portrait";
    case Square = "square";
}
