<?php

namespace Ittybit\Types;

enum TaskListResponseDataItemKind: string
{
    case Ingest = "ingest";
    case Workflow = "workflow";
    case Speech = "speech";
    case Outline = "outline";
    case Chapters = "chapters";
    case Subtitles = "subtitles";
    case Thumbnails = "thumbnails";
    case Nsfw = "nsfw";
    case Summary = "summary";
    case Describe = "describe";
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
    case Http = "http";
    case Conditions = "conditions";
    case Store = "store";
    case Prompt = "prompt";
    case Tags = "tags";
}
