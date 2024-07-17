<?php
/* Template Name: Music - Single */
get_header();
get_sidebar();
?>



<div class="music-single-container">
	<div class="audio-player-container-wraper">
	<div class="audio-player-container">

		<div class="play-track-name">

    		<div id="playButton" class="play-button">
    			<img
    			id="playButtonIcon"
    			class="play-button-icon"
    			src="<?php echo get_template_directory_uri(); ?>/img/icons/play-thin.svg"
    			alt="Play Button"
    			/>
    		</div>
    		
    		<h1 class="track-name"><?php the_title(); ?></h1>
    		<p class="music-style post-category-main"><?php echo the_tags('',' ',''); ?></p>
			
		
		</div>

		<div id="waveform" class="waveform">
			<div id="loading_flag">
			  <!-- content set by JS  -->			
			</div>
		</div>

		<span id="currentTime">00:00:00</span>

		<span id="totalDuration">00:00:00</span>


		<div class="volume-group">
			<div class="volume-button">
				<img
				id="volumeIcon"
				class="volume-icon"
				src="<?php echo get_template_directory_uri(); ?>/img/icons/speaker-high-thin.svg"
				alt="Volume"
				/>
			</div>

			<input
			id="volumeSlider"
			class="volume-slider"
			type="range"
			name="volume-slider"
			min="0"
			max="100"
			value="50"
			aria-label="Volume"
			/>
		</div>
		
		<a data-lightbox="post-image" class="music-single-cover" href="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ); ?>">
		<img src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'medium' ); ?>" alt="<? the_title(); ?>" >
		</a>

	</div>
	</div>
	<div class="buy-streaming-wraper">
		<div class="buy-streaming-container">
			<div class="buy">
				<a class="wp-block-button__link wp-element-button" href="<?php echo get_post_meta($post->ID, '%mp3_Buy', true); ?>" target="_blank"><?php include'img/icons/buy-thin.php'; ?> 
                    <?php
                    $networksiteid = get_current_blog_id();
                    if( $networksiteid == 1 ){
                        echo "Купить";
                    } else {
            	        echo "Buy";
                    }
                    ?>
				</a>
			</div>
			<div class="streaming">
				<a class="streaming-link" id="streaming-link-vk-music" href="<?php echo get_post_meta($post->ID, '%VK_Music_link', true); ?>" target="_blank"><img decoding="async" src="https://tiku.ru/wp-content/uploads/2023/02/social-media-icons-svg-vk-music-01.svg" alt="VK Музыка иконка логотип" class="wp-image-6869"></a>

				<a class="streaming-link" id="streaming-link-ya-music" href="<?php echo get_post_meta($post->ID, '%Yandex_Music_link', true); ?>" target="_blank"><img decoding="async" src="https://tiku.ru/wp-content/uploads/2023/02/social-media-icons-svg-ya-music-01.svg" alt="Яндекс Музыка  иконка логотип" class="wp-image-6867"></a>
				
				<a class="streaming-link" id="streaming-link-promo-dj" href="<?php echo get_post_meta($post->ID, '%Promo_DJ_link', true); ?>" target="_blank"><img decoding="async" src="https://tiku.ru/wp-content/uploads/2023/05/social-media-icons-svg-promo-dj-01.svg" alt="PromoDJ иконка логотип" class="wp-image-6867"></a> 

				<a class="streaming-link" id="streaming-link-soundcloud" href="<?php echo get_post_meta($post->ID, '%Soundcloud_link', true); ?>" target="_blank"><img decoding="async" src="https://tiku.ru/wp-content/uploads/2023/02/social-media-icons-svg-soundcloud-01.svg" alt="Soundcloud иконка логотип" class="wp-image-6871"></a>

				<a class="streaming-link" id="streaming-link-bandcamp" href="<?php echo get_post_meta($post->ID, '%Bandcamp_link', true); ?>" target="_blank"><img decoding="async" src="https://tiku.ru/wp-content/uploads/2023/03/social-media-icons-svg-bandcamp-01.svg" alt="Bandcamp иконка логотип" class="wp-image-8002"></a>

				<a class="streaming-link" id="streaming-link-beatport" href="<?php echo get_post_meta($post->ID, '%Beatport_link', true); ?>" target="_blank"><img decoding="async" src="https://tiku.ru/wp-content/uploads/2023/03/social-media-icons-svg-beatport-01.svg" alt="Beatport иконка логотип" class="wp-image-8161"></a>

				<a class="streaming-link" id="streaming-link-apple-music" href="<?php echo get_post_meta($post->ID, '%Apple_Music_link', true); ?>" target="_blank"><img decoding="async" src="https://tiku.ru/wp-content/uploads/2023/02/social-media-icons-svg-apple-01.svg" alt="Apple Music иконка логотип" class="wp-image-7120"></a>

				<a class="streaming-link" id="streaming-link-spotify" href="<?php echo get_post_meta($post->ID, '%Spotify_link', true); ?>" target="_blank"><img decoding="async" src="https://tiku.ru/wp-content/uploads/2023/03/social-media-icons-svg-spotify-01.svg" alt="Spotify иконка логотип" class="wp-image-8010"></a>

				<a class="streaming-link" id="streaming-link-youtube" href="<?php echo get_post_meta($post->ID, '%YouTube_Music_link', true); ?>" target="_blank"><img decoding="async" src="https://tiku.ru/wp-content/uploads/2023/02/social-media-icons-svg-youtube-01.svg" alt="YouTube Music иконка логотип" class="wp-image-6842"></a>

				<a class="streaming-link" id="streaming-link-amazon" href="<?php echo get_post_meta($post->ID, '%Amazon_link', true); ?>" target="_blank"><img decoding="async" src="https://tiku.ru/wp-content/uploads/2023/03/social-media-icons-svg-amazon-music-01.svg" alt="Amazon Music иконка логотип" class="wp-image-8009"></a>

				<a class="streaming-link" id="streaming-link-deezer" href="<?php echo get_post_meta($post->ID, '%Deezer_link', true); ?>" target="_blank"><img decoding="async" src="https://tiku.ru/wp-content/uploads/2023/03/social-media-icons-svg-deezer-01.svg" alt="Deezer иконка логотип" class="wp-image-8008"></a>
			</div>
		</div>
	</div>

	
	<div class="music-single-desc">
		<p><?php include'template-parts/likes-views.php'; ?> </p>
		<?php the_content(); ?>
		<p class="work-year"><?php the_date('j F Y'); ?></p>

		<?php
		include'template-parts/share.php';
		include'template-parts/author.php';
		?>
		
		<p><?php include'template-parts/next-post.php'; ?></p>
		<p><?php include'template-parts/tags.php'; ?></p>
		
	</div>
	
</div>


<?php
    include'template-parts/similar-pages.php';

?>

<?php if ( comments_open() ) { ?>
<div class="page-container width-940">
	<div class="page-content-container">
		<div><?php comments_template(); ?></div>
	</div>
</div>
<?php } ?>

<?php
	get_footer();
?>


<?php
$musicfile = get_post_meta($post->ID, '%mp3_URL', true);
$pcm = get_post_meta($post->ID, '%pcm', true);
?>
	
<script src="<?php echo get_template_directory_uri(); ?>/js/wavesurfer.js"></script>
<script>

/* utiluty functions */

const playButton = document.querySelector("#playButton")
const playButtonIcon = document.querySelector("#playButtonIcon")
const waveform = document.querySelector("#waveform")
const volumeIcon = document.querySelector("#volumeIcon")
const volumeSlider = document.querySelector("#volumeSlider")
const currentTime = document.querySelector("#currentTime")
const totalDuration = document.querySelector("#totalDuration")
// --------------------------------------------------------- //
/**
 * Initialize Wavesurfer
 * @returns a new Wavesurfer instance
 */
const initializeWavesurfer = () => {
  return WaveSurfer.create({
	backend: "MediaElement",
    container: "#waveform",
    responsive: true,
    height: 80,
    waveColor: "#9999ff",
    progressColor: "#3300ff",
	barWidth: 2,
	barHeight: 1,
	barGap: 2,
	barRadius: 2,
  })
}



// --------------------------------------------------------- //
// Functions
/**
 * Toggle play button
 */
const togglePlay = () => {
  wavesurfer.playPause()
  const isPlaying = wavesurfer.isPlaying()
  if (isPlaying) {
    playButtonIcon.src = "https://tiku.ru/wp-content/themes/Tiku/img/icons/pause-thin.svg"
  } else {
    playButtonIcon.src = "https://tiku.ru/wp-content/themes/Tiku/img/icons/play-thin.svg"
  }
}
/**
 * Handles changing the volume slider input
 * @param {event} e
 */
const handleVolumeChange = e => {
  // Set volume as input value divided by 100
  // NB: Wavesurfer only excepts volume value between 0 - 1
  const volume = e.target.value / 100
  wavesurfer.setVolume(volume)
  // Save the value to local storage so it persists between page reloads
  localStorage.setItem("audio-player-volume", volume)
}
/**
 * Retrieves the volume value from local storage and sets the volume slider
 */
const setVolumeFromLocalStorage = () => {
  // Retrieves the volume from local storage, or falls back to default value of 50
  const volume = localStorage.getItem("audio-player-volume") * 100 || 50
  volumeSlider.value = volume
}
/**
 * Formats time as HH:MM:SS
 * @param {number} seconds
 * @returns time as HH:MM:SS
 */
const formatTimecode = seconds => {
  return new Date(seconds * 1000).toISOString().substr(11, 8)
}
/**
 * Toggles mute/unmute of the Wavesurfer volume
 * Also changes the volume icon and disables the volume slider
 */
const toggleMute = () => {
  wavesurfer.toggleMute()
  const isMuted = wavesurfer.getMute()
  if (isMuted) {
    volumeIcon.src = "https://tiku.ru/wp-content/themes/Tiku/img/icons/speaker-x-thin.svg"
    volumeSlider.disabled = true
  } else {
    volumeSlider.disabled = false
    volumeIcon.src = "https://tiku.ru/wp-content/themes/Tiku/img/icons/speaker-high-thin.svg"
  }
}
// --------------------------------------------------------- //
// Create a new instance and load the wavesurfer
	const wavesurfer = initializeWavesurfer()
	var musicFile = '<?php echo $musicfile; ?>'
	var pcm = <?php echo $pcm; ?>;
	wavesurfer.load(musicFile, pcm)
// --------------------------------------------------------- //
// Javascript Event listeners
window.addEventListener("load", setVolumeFromLocalStorage)
playButton.addEventListener("click", togglePlay)
volumeIcon.addEventListener("click", toggleMute)
volumeSlider.addEventListener("input", handleVolumeChange)
// --------------------------------------------------------- //
// Wavesurfer event listeners
wavesurfer.on("ready", () => {
  // Set wavesurfer volume
  wavesurfer.setVolume(volumeSlider.value / 100)
  // Set audio track total duration
  const duration = wavesurfer.getDuration()
  totalDuration.innerHTML = formatTimecode(duration)
})
// Sets the timecode current timestamp as audio plays
wavesurfer.on("audioprocess", () => {
  const time = wavesurfer.getCurrentTime()
  currentTime.innerHTML = formatTimecode(time)
})
// Resets the play button icon after audio ends
wavesurfer.on("finish", () => {
  playButtonIcon.src = "https://tiku.ru/wp-content/themes/Tiku/img/icons/play-thin.svg"
})


function UpdateLoadingFlag(Percentage) {
  if (document.getElementById("loading_flag")) {
  document.getElementById("loading_flag").innerText = "Загрузка " + Percentage + "%";
    if (Percentage >= 100) {1
      document.getElementById("loading_flag").style.display = "none";
    } else {
      document.getElementById("loading_flag").style.display = "block";
    }
  }
}
	

// show progress while loading sound
wavesurfer.on('loading', function(X, evt) {
  UpdateLoadingFlag(X);
});

// clean up etc., when wavesurfer fires the "ready" event
wavesurfer.on('ready', function() {
  console.log("ready fired");
});

document.getElementById("sun").onclick = function() {lightToDark()};

function lightToDark() {
  wavesurfer.setWaveColor('#ff9999');
  wavesurfer.setProgressColor('#ff6666');
}
document.getElementById("moon").onclick = function() {darkToLigh()};

function darkToLigh() {
  wavesurfer.setWaveColor('#9999ff');
  wavesurfer.setProgressColor('#3300ff');
}


if (document.getElementById("theme-link").href === "https://tiku.ru/wp-content/themes/Tiku/css/dark.css" || document.getElementById("theme-link").href === "https://tiku.ru/en/wp-content/themes/Tiku/css/dark.css") {
  wavesurfer.setWaveColor('#ff9999');
  wavesurfer.setProgressColor('#ff6666');
} else {
  wavesurfer.setWaveColor('#9999ff');
  wavesurfer.setProgressColor('#3300ff');
}



if(document.getElementById("streaming-link-amazon").getAttribute("href")!=="") {
	document.getElementById("streaming-link-amazon").style.display = "inline-block";
}
if(document.getElementById("streaming-link-vk-music").getAttribute("href")!=="") {
	document.getElementById("streaming-link-vk-music").style.display = "inline-block";
}
if(document.getElementById("streaming-link-ya-music").getAttribute("href")!=="") {
	document.getElementById("streaming-link-ya-music").style.display = "inline-block";
}
if(document.getElementById("streaming-link-soundcloud").getAttribute("href")!=="") {
	document.getElementById("streaming-link-soundcloud").style.display = "inline-block";
}
if(document.getElementById("streaming-link-bandcamp").getAttribute("href")!=="") {
	document.getElementById("streaming-link-bandcamp").style.display = "inline-block";
}
if(document.getElementById("streaming-link-beatport").getAttribute("href")!=="") {
	document.getElementById("streaming-link-beatport").style.display = "inline-block";
}
if(document.getElementById("streaming-link-apple-music").getAttribute("href")!=="") {
	document.getElementById("streaming-link-apple-music").style.display = "inline-block";
}
if(document.getElementById("streaming-link-spotify").getAttribute("href")!=="") {
	document.getElementById("streaming-link-spotify").style.display = "inline-block";
}
if(document.getElementById("streaming-link-youtube").getAttribute("href")!=="") {
	document.getElementById("streaming-link-youtube").style.display = "inline-block";
}
if(document.getElementById("streaming-link-deezer").getAttribute("href")!=="") {
	document.getElementById("streaming-link-deezer").style.display = "inline-block";
}
if(document.getElementById("streaming-link-promo-dj").getAttribute("href")!=="") {
	document.getElementById("streaming-link-promo-dj").style.display = "inline-block";
}

/*
wavesurfer.on('waveform-ready', () => {
	
	wavesurfer.exportPCM(1024, 10000, false);
	
})
*/

</script>