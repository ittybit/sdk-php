<?php

namespace Ittybit\Tasks\Types;

enum TasksCreateResponseKind: string
{
    case Ingest = "ingest";
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
    case Workflow = "workflow";
    case Conditions = "conditions";
    case Http = "http";
}
