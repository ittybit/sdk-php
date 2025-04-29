<?php

namespace Ittybit\Tasks\Types;

enum TasksCreateRequestKind: string
{
    case Ingest = "ingest";
    case Workflow = "workflow";
    case Speech = "speech";
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
    case Summary = "summary";
    case Describe = "describe";
    case Chapters = "chapters";
    case Outline = "outline";
    case Subtitles = "subtitles";
    case Nsfw = "nsfw";
    case Thumbnails = "thumbnails";
}
