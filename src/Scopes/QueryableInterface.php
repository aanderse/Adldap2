<?php

namespace Adldap\Scopes;

use Adldap\Schemas\ActiveDirectory;

interface QueryableInterface
{
    /**
     * Finds a record from AD.
     *
     * @param string $name
     * @param array  $fields
     *
     * @return bool|\Adldap\Models\Entry
     */
    public function find($name, $fields = []);

    /**
     * Get all of the records from AD.
     *
     * @param array     $fields
     * @param bool|true $sorted
     * @param string    $sortBy
     * @param string    $sortDirection
     *
     * @return \Doctrine\Common\Collections\ArrayCollection|bool
     */
    public function all($fields = [], $sorted = true, $sortBy = ActiveDirectory::COMMON_NAME, $sortDirection = 'desc');

    /**
     * Creates a new Search limited to the current classes object type.
     *
     * @return \Adldap\Query\Builder
     */
    public function search();
}
