<?php

namespace Ittybit\Media\Types;

enum MediaGetResponseDataSourcesItemOrientation: string
{
    case Landscape = "landscape";
    case Portrait = "portrait";
    case Square = "square";
}
