<?php


class Hobi extends Eloquent {

	protected $table = 'hobi';

	protected $fillable = array('hobi');

	public function mahasiswa() {
		return $this->belongsToMany('mahasiswa', 'mahasiswa_hobi', 'id_hobi', 'id_mahasiswa');
	}

}