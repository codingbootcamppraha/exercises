class AudioPlayer {

    constructor(song_id) {

        // song
        this.song_id = song_id;
        this.song_name = null;
        this.artist = null;
        this.song_length = null;
        this.album = null;
        this.date_of_release = null;

        // playback
        this.is_playing = false;
        this.current_time = 0;
        this.song_index = null;
        this.play_mode = 'forward'; // forward|backward|shuffle
        this.repeat_mode = 'no-repeat'; // no-repeat|repeat-list|repeat-one
        this.volume = 50;
        this.is_minified = false;
        this.menu_is_open = false;
        this.playlist_is_open = false;

        this.playlist = new Playlist;
        this.favorites = new Playlist;

        // elements
        this.progress_bar = null;
        this.info_bar = null;
        this.shuffle_button = null;
        this.repeat_button = null;
        this.previous_button = null;
        this.next_button = null;
        this.play_button = null;
        this.stop_button = null;
        this.volume_button = null;
        this.menu_button = null;
    }

    play() {
        this.is_playing = true;
    }

    stop() {
        this.is_playing = false;
        this.current_time = 0;
    }

    pause() {
        this.is_playing = false;
    }

    openPlaylist() {
        this.playlist_is_open = true;
    }

    addSongToPlaylist(song_id) {

    }

    nextSong() {
        const next_song = this.playlist.getNextSong();

        this.song_id = next_song.id;

        this.song_index++;
    }

    setVolume(volume) {
        this.volume = Math.max(0, Math.min(100, volume));
    }

    shuffle() {
        this.play_mode = 'shuffle';
    }

    addToFavorites() {
        this.favorites.addSong(this.song_id);
    }

    /**
     * render the player's HTML inside another element
     */
    renderInElement(element) {

    }
}