<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utils\LoggerType;
use function App\Utils\createLogger;

class AvailabilityController extends Controller
{
    public function check(Request $request)
    {
        var_dump(LoggerType::APPLY);
        $logger = createLogger(LoggerType::APPLY);
        $logger->info('test');

        return response()->json($request->aids, 200);
    }
}
