<?php

namespace Ittybit\Signatures\Types;

enum SignaturesCreateRequestMethod: string
{
    case Get = "get";
    case Put = "put";
}
