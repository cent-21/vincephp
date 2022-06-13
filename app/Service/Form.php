<?php 
namespace App\Service;


class Form {

	private $data;

	public function __construct($data = array()) {
		$this->data = $data;
	}

	public function getValue($index) {
		return isset($this->data[$index]) ? $this->data[$index] : null;
	} 

	public function input($label, $name, $type = "text") {
		$class = "form-control". (($type === "file") ? "" : "-");
		return "
				<label for={$name}>{$label}</label>
				<input type={$type} class={$class} id={$name} value='{$this->getValue($name)}' name={$name}>
				<span class='error'>{$this->getValue('error_'.$name)}</span>
			";
	}

	public function input_group($label, $name, $icon, $type = "text") {
		return "
				<input type={$type} class='form-control border-0' placeholder='{$label}' id={$name} value='{$this->getValue($name)}' name={$name}>
				<label for={$name} class='input-group-text bg-white border-0'><i class='{$icon} text-secondary fs-5'></i></label> 
			";
	}


	public function submit($action = "Envoyer") {
		return "<input type='submit' value='{$action}' class='button'>";
	}


}