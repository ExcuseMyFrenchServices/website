<section id="gallery" class=" initial-section container-fluid section">
		<h3>our world</h3>
    <div class="gallery-container col-sm-10 col-sm-offset-1">
		<!-- Php code that feed the last images from EMFServices instagram account -->
		
		<?php
		/*
			$access_token="1833056001.1677ed0.515c4005f1994b3b95ee75c7d98a5701";
			$photo_count=10;

			$json_link="https://api.instagram.com/v1/users/self/media/recent/?";
			$json_link.="access_token={$access_token}&count={$photo_count}";

			$json = file_get_contents($json_link);
			$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

			foreach ($obj['data'] as $post) {
			    $pic_text=$post['caption']['text'];

			    $pic_alt = strtolower($pic_text);
			    $pic_alt = substr($pic_alt,0,50);
			    $space = strrpos($pic_alt, "!");
			    $pic_alt = substr($pic_alt, 0, $space);
			    $unwanted_characters = array("!", "#", "@", ",", "'", '"');
			    $pic_alt = str_replace($unwanted_characters, "", $pic_alt);
			    $pic_alt = str_replace("  ", " ", $pic_alt);
			    
			    $pic_link=$post['link'];
			    $pic_src=str_replace("http://", "https://", $post['images']['low_resolution']['url']);

			    echo "<div class='insta-container col-md-2 col-sm-4 col-xs-6'>";        
			        echo "<a href='{$pic_link}' target='_blank'>";
			            echo "<img class='img-responsive' src='{$pic_src}' alt='image linked to instagram account and named: {$pic_alt}'>";
			           	echo "<div class='insta-comment hidden-xs'>";
			                echo "<p>{$pic_text}</p>";
			            echo "</div>";
			        echo "</a>";
			    echo "</div>";
			}
		*/
		?>

    </div> 	    
</section>

<!-- Add instagram API -->
<script type="text/javascript" src="{{ url(asset('/js/lib/ajax.js')) }}"></script>
<script type="text/javascript">
	AjaxGet('https://api.instagram.com/v1/users/self/media/recent/?access_token=1833056001.1677ed0.515c4005f1994b3b95ee75c7d98a5701&count=10', function(reponse){
		console.log(reponse);
	});
</script>