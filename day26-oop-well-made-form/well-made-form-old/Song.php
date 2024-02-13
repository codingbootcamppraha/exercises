<?php

class Song
{
    public ?int $id = null;
    public ?string $name = null;
    public ?string $author = null;
    public ?int $length = 0;
    public ?string $album = null;

    public function save()
    {
        if ($this->id !== null) {
            update($this->id, $this);
        } else {
            $this->id = insert($this);
        }
    }
}