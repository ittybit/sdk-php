<?php

namespace Ittybit\Signatures\Types;

enum SignaturesCreateRequestMethod: string
{
    case Get = "get";
    case Put = "put";
    case Post = "post";
    case Delete = "delete";
}
