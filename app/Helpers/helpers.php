<?php
use App\Service\AllConstants;

use App\Service\Database;
use App\Service\Form;


function render($pagePath, $arguments = null) {
    if ($arguments != null) {
        extract($arguments);
    }

    $input = array();

    if (isset($arguments['input'])) {
        $input = $arguments['input'];
    }
    $form = new Form($input);

    ob_start();
    require 'app/Views/'.$pagePath.'.php';
    $content = ob_get_clean();
    require 'app/Views/template.php';
} 





function asset($assetPath) {
    return AllConstants::$APP_URL."assets/".$assetPath;
}


function route($pagePath, $arguments = null) {
    if ($pagePath == "") {
        return AllConstants::$APP_URL;
    } else {
        $pagePath = $pagePath.'/';
        if ($arguments != null) {
            for ($i=0; $i < count($arguments) ; $i++) { 
                if ($i === 0) {
                    $pagePath = $pagePath.''.$arguments[$i]; 
                } else {
                    $pagePath = $pagePath.'-'.$arguments[$i]; 
                }
            }
        }
        return AllConstants::$APP_URL.$pagePath;
    }
}

function page_title(?string $title = null) : string{
    return $title ? $title.' > '.AllConstants::$APP_NAME : AllConstants::$APP_NAME;
}

function AllConstants() {
    return [
        "APP_URL" => AllConstants::$APP_URL,
    ];
}


function toDateSimple($date) {
    $dateNew = date_create($date);
    return date_format($dateNew ,"d/m/Y");
}


function checkInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


function getMonthShortById($id) {
    $month = "";
    switch ($id) {
        case 1: $month = "Janv";
            break;
        case 2: $month = "Févr";
            break;
        case 3: $month = "Mars";
            break;
        case 4: $month = "Avr";
            break;
        case 5: $month = "Mai";
            break;
        case 6: $month = "Juin";
            break;
        case 7: $month = "Juil";
            break;
        case 8: $month = "Aout";
            break;
        case 9: $month = "Sept";
            break;
        case 10: $month = "Oct";
            break;
        case 11: $month = "Nov";
            break;
        case 12: $month = "Déc";
            break;
    }
    return $month;
}
