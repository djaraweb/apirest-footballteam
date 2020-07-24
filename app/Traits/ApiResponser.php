<?php

namespace App\Traits;


trait ApiResponser
{
	protected function messageCustom($arrayMsg){
		return response()->json($arrayMsg, 200);
	}

	protected function responseToError($message, $code=501){
		return response()->json(['message'=>$message,
								 'code'=>$code],
								$code);
    }

}
