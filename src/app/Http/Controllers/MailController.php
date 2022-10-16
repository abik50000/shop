<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * contactMail
     */
    public function contactMail(Request $request)
    {
        // some mail logic

        return 'Mail has sent successfully';

        // return response()->json([
        //     'message' => 'Mail has sent successfully',
        //     'code' => 200
        // ]);
    }
}
