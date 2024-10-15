<?php
    class AudioTrack
    {
        // defining class variables:
        public ?string $title = null;
        public ?string $author = null;
        // private mixed $special_information = null;
        public ?int $id = null;

        // defining constructor:
        // public function __construct(string $param_title)
        public function __construct()
        {
            // $this->title = $param_title;
        }

        // usual syntax for functions:
        public function update(string $new_title) : void
        {
            $this->title = $new_title;
        }

        // public function assignToPlaylist(Playlist $playlist)
        // {

        // }

        // public function getSpecialInformation() : string
        // {
        //     return $this->special_information;
        // }

        // public function setSpecialInformation(string|int|null $new_info) : void
        // {
        //     $this->special_information = $new_info;
        // }

    }

?>
