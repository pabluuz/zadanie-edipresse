<?php
/** @noinspection PhpInconsistentReturnPointsInspection */

class PostsRepository
{
    public function getHavingTags(int $count): array
    {
        $query = "query here";
        $result = $this->queryDatabase($query);

        //fill postDTO from result
        $posts[] = new PostDTO();


        return $posts;
    }

    private function queryDatabase($query): mysqli_result
    {
        $db = $this->connectDatabase();
        return mysqli_query($db, $query);
    }

    private function connectDatabase(): mysqli
    {
        //get params from some env
        return mysqli_connect();
    }
}