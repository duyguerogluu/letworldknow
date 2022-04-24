<?php

namespace Modules\Dashboard\Repositories\Interfaces;

interface MemberRepositoryInterface
{
    public function find($id);

    public function getAll($id);

    public function create($data);

    public function update($id, $data);

    public function delete($id);
}
