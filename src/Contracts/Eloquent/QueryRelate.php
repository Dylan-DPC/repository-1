<?php
namespace CrCms\Repository\Contracts\Eloquent;

use Illuminate\Database\Eloquent\Builder;

interface QueryRelate
{
    /**
     * @param string $query
     * @return QueryRelate
     */
    public function union(Builder $query,bool $all = false) : QueryRelate;


    /**
     * @param QueryMagic $queryMagic
     * @return QueryRelate
     */
    public function magic(QueryMagic $queryMagic) : QueryRelate;

}