<?php
namespace App\Service;
use App\Entity\Tag;
use App\Repository\TagRepository;


/**
 * Class TaskService.
 */
class TagService implements TagServiceInterface{
    /**
 * Constructor.
 *
 * @param TagRepository $tagRepository Tag repository

 */
    public function __construct(private readonly TagRepository $tagRepository)
    {
    }
    /**
     * Find by title.
     *
     * @param string $title Tag title
     *
     * @return Tag|null Tag entity
     */
    public function findOneByTitle(string $title): ?Tag
    {
        return $this->tagRepository->findOneByTitle($title);
    }
    /**
     * Save entity.
     *
     * @param Tag $tag Tag entity
     */
    public function save(Tag $tag): void
    {
        $this->tagRepository->save($tag);
    }

}
