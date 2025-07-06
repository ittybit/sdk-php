<?php

namespace Ittybit\Types;

enum WorkflowTaskStepKind: string
{
    case Video = "video";
    case Image = "image";
    case Audio = "audio";
    case Chapters = "chapters";
    case Subtitles = "subtitles";
    case Thumbnails = "thumbnails";
    case Speech = "speech";
    case Description = "description";
    case Nsfw = "nsfw";
    case Prompt = "prompt";
    case Outline = "outline";
    case Http = "http";
    case Ingest = "ingest";
    case Workflow = "workflow";
    case Conditions = "conditions";
}
