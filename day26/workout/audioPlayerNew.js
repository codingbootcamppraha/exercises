class AudioPlayer {
    constructor(playlist, maxVolume = 10, minVolume = 0) {
        this.id = this.generateUniqueId();
        this.playlist = playlist;
        this.maxVolume = maxVolume;
        this.minVolume = minVolume;
        this.shuffle = false;
        this.repeatTrack = false;
        this.currenTrack = null;
        this.isPlaying = false;
        this.duration = null;
        this.timeStamp = null;
        this.volume = 5;
        this.displayingPlaylistInfo = false;
        this.isVisible = true;
    }

    generateUniqueId () {
        // return unique id
    }

    loadTrackData (track) {
        // take a track from the playlist
        // load its details
        // star playing it
    }

    togglePlaying () {
        // set playing to !playing
    }

    toggleSuffle () {
        // set shuffle to !shuffle
    }

    toggleRepeatTrack () {
        // set repeatTrack to !repeatTrack
    }

    toggleVisibility () {
        // set isVisible to !isVisible
    }

    playNextTrack() {
        // change the track to next one in playlist
    }

    playPreviousTrack () {
        // change the track to previous one in playlist
    }

    playSpecificTrack (track) {
        // get the new track's data and start playing it
    }

    adjustVolume (volumeValue) {
        // set volume to volumeValue
    }

    increaseVolume () {
        // increase volume by 1
    }

    decreaseVolume () {
        // decrease volume by 1
    }

    displayAllSongs () {
        // set displayPlayinglistInfo to !displayingPlaylistInfo
    }

    setTimeStamp (newTime) {
        // set timeStamp to newTime
    }
}