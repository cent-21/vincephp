<?php
namespace App\Service; 

class FormValidator {

	public function validate($input = null, $rules = null) {

		$input = checkInput($input);


	    if ($input === null) {
            return "Veuillez remplir ce champs";
        } 

	    if ($rules === "password") {
	        if (strlen($input) < 6) {
	            return "Au moins 6 caractères";
	        }
	    }

	    if ($rules === "matricule") {
	    	if (strlen($input) === 8) {
	    		if (!is_numeric($input)) {
		    		return "Unqiuement les chiffres";
		    	}
	    	} else {
	    		return "Un matricule contient 8 chiffres";
	    	}
	    }
	    
	    if ($rules === "email") {
	        if (!filter_var($input, FILTER_VALIDATE_EMAIL)) {
	            return "Email incorrect";
	        }
	    }
	}
}