<?php
class person {
var $name;
var $alamat;

	function set_name($new_name) {
		$this->name = $new_name;}
	function get_name() {
		return $this->name;
	}

	function set_alamat($new_alamat) {
		$this->alamat = $new_alamat;}
	function get_alamat() {
		return $this->alamat;
	}
	
	function set_jenisKelamin($new_jenisKelamin) {
		$this->jenisKelamin = $new_jenisKelamin;}
	function get_jenisKelamin() {
		return $this->jenisKelamin;
	}
	
	function set_hobby($new_hobby) {
		$this->hobby = $new_hobby;}
	function get_hobby() {
		return $this->hobby;
	}
	
	function set_citaCita($new_citaCita) {
		$this->citaCita = $new_citaCita;}
	function get_citaCita() {
		return $this->citaCita;
	}
}