<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Consulta;

class FullCalendarController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
             $data = Consulta::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
             return response()->json($data);
        }
        return view('fullcalender',[   'teste'=>[
            'a'=>'dgsdfg',
            'b'=>'qwerty',
            'c'=>1 ]
        ]);
    }

    public function ajax(Request $request): JsonResponse
    {
        switch ($request->type) {
           case 'add':
              $event = Consulta::create([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
            //   dd($request); 

              return response()->json($event);
             break;

           case 'update':
              $event = Consulta::find($request->id)->update([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);

              return response()->json($event);
             break;

            case 'delete':
              $event = Consulta::find($request->id)->delete();
              return response()->json($event);
            break;
        }
    }
}
