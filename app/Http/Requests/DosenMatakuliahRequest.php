<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class DosenMatakuliahRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi = [
			'dosen'=>'required',
			'matakuliah'=>'required']; 
		
			return $validasi;
		}
	








}