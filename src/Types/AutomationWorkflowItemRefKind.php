<?php

namespace Ittybit\Types;

enum AutomationWorkflowItemRefKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
    case Chapters = "chapters";
    case Subtitles = "subtitles";
    case Thumbnails = "thumbnails";
    case Nsfw = "nsfw";
    case Speech = "speech";
    case Description = "description";
    case Outline = "outline";
    case Prompt = "prompt";
    case Http = "http";
}
