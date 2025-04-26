<?php
namespace CTApi\Models\Groups\Group;

class GroupRequest
{

    public static function all(bool $includeTags = false): array
    {
        if (!$includeTags)
            return (new GroupRequestBuilder())->all();
        else
            return (new GroupRequestBuilder())->where("include", "tags")->get();
    }

    public static function where(string $key, $value): GroupRequestBuilder
    {
        return (new GroupRequestBuilder())->where($key, $value);
    }

    public static function orderBy(string $key, $orderAscending = true): GroupRequestBuilder
    {
        return (new GroupRequestBuilder())->orderBy($key, $orderAscending);
    }

    public static function findOrFail(int $id): Group
    {
        return (new GroupRequestBuilder())->findOrFail($id);
    }

    public static function find(int $id): ?Group
    {
        return (new GroupRequestBuilder())->find($id);
    }
}
