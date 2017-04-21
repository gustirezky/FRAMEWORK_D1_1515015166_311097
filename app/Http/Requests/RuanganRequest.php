<?php
namespace App\Http\Requests;

use App\Http\Requests\Requests;


class RuanganRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi = [
			'title'=>'required'];
			return $validasi;
		}
	








}