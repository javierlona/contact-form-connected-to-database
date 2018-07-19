<?php
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['consultation_action']))):

	// Sanitize user information
	$personName = isset($_POST['person-name']) ? strip_tags($_POST['person-name']) : '';
	$personEmail = isset($_POST['person-email']) ? strip_tags($_POST['person-email']) : '';
	$personPhone = isset($_POST['person-phone']) ? strip_tags($_POST['person-phone']) : '';

	// Set a forms error variable
	$formsErrorsConsultation = false;

	// Validation via regular expressions
	if(!(preg_match("/\A[a-z ,.'-]+\Z/i", $personName))) :
		$err_fullnamePatternMatch = '<div class="alert alert-danger" role="alert">Only letters, spaces, commas, hyphens, and periods are accepted.</div>';
		$formsErrorsConsultation = true;
	endif;
	if(!(preg_match("/\A\d{3}[\-]\d{3}[\-]\d{4}\Z/", $personPhone))) :
    $err_phonePatternMatch = '<div class="alert alert-danger" role="alert">Enter phone number in format xxx-xxx-xxxx.</div>';
    $formsErrorsConsultation = true;
  endif;
	if(!(preg_match("/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i", $personEmail))) :
		$err_emailinvalid = '<div class="alert alert-danger" role="alert">A valid email is required.</div>';
		$formsErrorsConsultation = true;
	endif;

	// Dont proceed further if errors exist
	if(!($formsErrorsConsultation)) :

// process email body message
$text = <<<EOT
NAME:
$personName

EMAIL:
$personEmail

PHONE:
$personPhone
EOT;

    $to				= 	"javier@lonasites.com";
    $subject	=		"From $personName -- Lona Sites AdWords Page";
    $body			=		$text;
    $headers	=		"From: $personEmail \r\n".
                  "Reply-To: javier@lonasites.com \r\n";

		mail($to, $subject, $body, $headers);

		try {
			// Enter into Database
	    require_once 'dbconfig.php';

	    date_default_timezone_set('America/Chicago');
	    $currtime = time();
	    $datefordb = date('Y-m-d H:i:s', $currtime);

	    // Build database query
	    $wdFormQuery = "INSERT INTO person (
	      person_id,
	      submit_time_stamp,
	      person_name,
	      person_email,
	      person_phone
	    )
			VALUES(
				:person_id,
				:submit_time_stamp,
				:person_name,
				:person_email,
				:person_phone
				)";
			$stmt = $pdo->prepare($wdFormQuery);
			$stmt->execute([
											'person_id' => '0',
											'submit_time_stamp' => $datefordb,
											'person_name' => $personName,
											'person_email' => $personEmail,
											'person_phone' => $personPhone
										]);
			$msg = '<div class="alert alert-success" role="alert"><p>Your form has been processed. You will be hearing from us shortly, thanks.</p></div>';
		} catch (Exception $e) {
			$msg = '<div class="alert alert-danger" role="alert"><p>Problem connecting to database</p></div>';
		}

  endif; // check for form errors
endif; //form submitted
?>
