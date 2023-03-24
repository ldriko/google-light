<?php

class Admin
{
    public static function new(
        string $name,
        string $color,
        array $keywords,
        ?Topic $topic = null
    ): TagData {
        # code...
    }

    public static function fromRequest(AdminTagRequest $adminTagRequest)
    {
        return new self([
            'name' => $adminTagRequest->get('name'),
            'color' => $adminTagRequest->get('color'),
            'keywords' => array_map(function (string $keyword) {
                return trim($keyword);
            }, explode(',', $adminTagRequest->get('keywords'))),
            'topic' => Topic::findOrFail($adminTagRequest->get('topic_id')),
        ]);
    }

    public function hasChanges(Tag $tag): bool
    {
        # code...
    }
}
