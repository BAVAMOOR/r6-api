<?php

$config = array(
	"appcode" => getenv("APP_CODE"),
	"ubi-email" => getenv("UBI_EMAIL"),
	"ubi-password" => getenv("UBI_PASS"),
	"default-region" => "emea", // Regions: emea - ncsa - apac
	"default-stats" => "casualpvp_death,casualpvp_kdratio,casualpvp_kills", // All stats: https://gist.github.com/sidelux/c2724e64acb7e1b8921c11572800f8d4
	"default-platform" => "uplay", // Platforms: uplay - xbl - psn
	"default-progression" => "true", // Enabled: true - false
    'rank-images-png' => false // Rank image format: svg or png? Default: false -> svg
);
