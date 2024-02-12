<?php

class AudioTrack
{
    public ?int $id = null;
    public ?string $name = null;
    public ?Artist $artist = null;
    public int $length = 0; // in seconds
    public ?string $album = null;
    public ?string $date_of_release = null;

    public function __construct(int $track_id)
    {
        $this->id = $track_id;

        $this->loadInformation();
    }

    /**
     * takes the current $id property and loads all additional
     * information from the database
     */
    public function loadInformation(): void
    {

    }

    /**
     * saves the track with its current data into the database
     */
    public function save()
    {

    }

    /**
     * returns true if deletion was successful
     */
    public function delete(): bool
    {
        return true;
    }

    public function setAuthor(int|Author $author)
    {

    }

    public function addToFavorites(int $user_id)
    {
        // find the favorites list for the given user

        // add this song ($this->id) somehow to the list
    }

    /**
     * takes public data from this object and represents
     * it as JSON string
     */
    public function toJSON(): string
    {
        return json_encode([
            'name' => $this->name,
            'artist' => $this->artist,
            'length' => $this->getLengthInMinutes()
        ]);
    }

    /**
     * return length in MM:SS format
     */
    public function getLengthInMinutes(): string
    {
        return floor($this->length / 60) . ':' . ($this->length % 60);
    }
}