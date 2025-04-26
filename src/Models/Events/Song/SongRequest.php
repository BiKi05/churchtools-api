<?php

namespace CTApi\Models\Events\Song;

class SongRequest
{
    public static function all(bool $includeTags = false): array
    {
        if (!$includeTags)
            return (new SongRequestBuilder())->all();
        else 
            return (new SongRequestBuilder())->where("include", "tags")->get();
    }

    public static function where(string $key, $value): SongRequestBuilder
    {
        return (new SongRequestBuilder())->where($key, $value);
    }

    public static function orderBy(string $key, $orderAscending = true): SongRequestBuilder
    {
        return (new SongRequestBuilder())->orderBy($key, $orderAscending);
    }

    public static function findOrFail(int $id): Song
    {
        return (new SongRequestBuilder())->findOrFail($id);
    }

    public static function find(int $id): ?Song
    {
        return (new SongRequestBuilder())->find($id);
    }

    public static function update(Song $song)
    {
        (new SongUpdateRequestBuilder())->update($song);
    }

}
