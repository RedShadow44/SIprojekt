<?php
/**
 * Tag service interface.
 */

namespace App\Service;

use App\Entity\Tag;


/**
 * Interface TaskServiceInterface.
 */
interface TagServiceInterface{
    /**
     * Find by title.
     *
     * @param string $title Tag title
     *
     * @return Tag|null Tag entity
     */
    public function findOneByTitle(string $title): ?Tag;
    /**
     * Save entity.
     *
     * @param Tag $tag Tag entity
     */
    public function save(Tag $tag): void;
}