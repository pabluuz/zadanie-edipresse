<?php

class PostService
{
    CONST MIN_POSTS = 5;

    private PostsRepository $postsRepository;

    /**
     * @param PostsRepository $postsRepository
     */
    public function __construct(PostsRepository $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }


    public function findWhenMoreThan()
    {
        //call repo
        $posts = $this->postsRepository->getHavingTags(self::MIN_POSTS);
        //iterate through an array and call castPostToJson for each of them
        //concat strings to get unified json
    }

    private function castPostToJson($post): string
    {
        //cast post to json
        //...
        return json_encode($post);
    }
}