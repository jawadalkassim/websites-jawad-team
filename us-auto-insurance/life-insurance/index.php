<?php

session_start();
foreach($_GET as $key => $value){
	$_SESSION[$key] = $value;
}

$currentUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$baseUrl = strtok($currentUrl, '?');
$currentStep = parse_url($currentUrl, PHP_URL_FRAGMENT);
$current_file_path = __FILE__;
$folder_name = basename(dirname($current_file_path));
$insurance_type = 'life';

include_once(__DIR__.'/../components/header.php');
include_once(__DIR__.'/../resources/life-insurance/form-options.php');
include_once(__DIR__.'/../resources/life-insurance/funnel-config.php');

?>

	<main id="MainContainer" class="bg-white pb-6 grow flex items-start">

		<?php
	
		echo '<div class="jquery-page pb-6 ease-in-out duration-300 mx-auto">'.PHP_EOL;
		echo '<div class="jquery-page-container">'.PHP_EOL;
			
			$StepNumber = 0;
			$prerequisiteArray = array();

			foreach($funnel_config['steps'] as $key => $value){
				
				$StepNumber++;

				if($value['requirements']){
					$prerequisiteArray[$StepNumber] = $value['requirements'];
				}

				echo '<!--start step '.$StepNumber.'-->'.PHP_EOL;
				echo '<div id="Step'.$StepNumber.'" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 transition ease-in-out duration-75" data-jquery-page-name="'.$StepNumber.'">'.PHP_EOL;
				include(__DIR__.'/../components/funnel-parts/'.$value['file_name']);
				echo '</div>'.PHP_EOL;
				echo '<!--end step '.$StepNumber.'-->'.PHP_EOL;
			}			
				
		echo '</div>';
		echo '</div>';

		$jsonData = json_encode($prerequisiteArray);
		echo '<script id="prerequisitesData">var prerequisites = \''.$jsonData.'\';</script>';

		?>
				
	</main>
	
</div>	

<?php
include_once(__DIR__.'/../components/footer.php');
?>