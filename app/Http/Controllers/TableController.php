<?php

namespace App\Http\Controllers;

use App\Table;
use App\Classes;
use App\Material;
use App\Teachers;
use Session;
use DB;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Table::all();
        if($tables->count() == 0){
        DB::table('tables')->insert([ 
                ['class_name' => 'الأول', 'days' => 'السبت'  , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الأول', 'days' => 'الاحد'   , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الأول', 'days' => 'الاثنين' , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الأول', 'days' => 'الثلاثاء', 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الأول', 'days' => 'الاربعاء', 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الأول', 'days' => 'الخميس' , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
            
                ['class_name' => 'الثاني', 'days' => 'السبت'  , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الثاني', 'days' => 'الاحد'   , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الثاني', 'days' => 'الاثنين' , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الثاني', 'days' => 'الثلاثاء', 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الثاني', 'days' => 'الاربعاء', 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الثاني', 'days' => 'الخميس' , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
            
                ['class_name' => 'الثالث', 'days' => 'السبت'  , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الثالث', 'days' => 'الاحد'   , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الثالث', 'days' => 'الاثنين' , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الثالث', 'days' => 'الثلاثاء', 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الثالث', 'days' => 'الاربعاء', 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الثالث', 'days' => 'الخميس' , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
            
                ['class_name' => 'الرابع', 'days' => 'السبت'  , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الرابع', 'days' => 'الاحد'   , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الرابع', 'days' => 'الاثنين' , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الرابع', 'days' => 'الثلاثاء', 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الرابع', 'days' => 'الاربعاء', 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الرابع', 'days' => 'الخميس' , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
            
                ['class_name' => 'الخامس', 'days' => 'السبت'  , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الخامس', 'days' => 'الاحد'   , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الخامس', 'days' => 'الاثنين' , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الخامس', 'days' => 'الثلاثاء', 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الخامس', 'days' => 'الاربعاء', 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'الخامس', 'days' => 'الخميس' , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
            
                ['class_name' => 'السادس', 'days' => 'السبت'  , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'السادس', 'days' => 'الاحد'   , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'السادس', 'days' => 'الاثنين' , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'السادس', 'days' => 'الثلاثاء', 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'السادس', 'days' => 'الاربعاء', 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
                ['class_name' => 'السادس', 'days' => 'الخميس' , 'lesson' => '', 'material_name' => '', 'name' => '', 'time_from' => '', 'time_to' => '' ], 
            
            ]); 
        
        }
        $tables = Table::all();
        $classes = Classes::all();
        $material = Material::all();
        $teachers = Teachers::get('name');
        return view('tables',compact('classes', 'material', 'teachers', 'tables'));
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'class_name' => 'required',
            'days'       => 'required',
            'lesson'     => 'required'
        ],[
            'class_name.required' => 'يرجى ادخال الصف المعني',
            'days.required'       => 'يرجى ادخال اليوم',
            'lesson.required'     => 'يرجى ادخال رقم الدرس',
        ]);
/* الصف الأول */
        if( $request->class_name == 'الأول' && $request->days == 'السبت')
        {
            $form = ([
                        'lesson'         => $request->lesson,           // الدرس
                        'material_name'  => $request->material_name,    // المادة 
                        'name'           => $request->name,             // اسم المدرس   
                        'time_from'      => $request->time_from,        // من كذا وقت
                        'time_to'        => $request->time_to,          // الى كذا وقت
                    ]);
            Table::whereId(1)->update($form);
        } 
        elseif ( $request->class_name == 'الأول' && $request->days == 'الأحد') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(2)->update($form);
        }
        elseif ( $request->class_name == 'الأول' && $request->days == 'الأثنين') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(3)->update($form);
        }
        elseif ( $request->class_name == 'الأول' && $request->days == 'الثلاثاء') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(4)->update($form);
        }
        elseif ( $request->class_name == 'الأول' && $request->days == 'الاربعاء') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(5)->update($form);
        }
        elseif ( $request->class_name == 'الأول' && $request->days == 'الخميس') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(6)->update($form);
        }

/* الصف الثاني */
        if( $request->class_name == 'الثاني' && $request->days == 'السبت')
        {
            $form = ([
                        'lesson'         => $request->lesson,           // الدرس
                        'material_name'  => $request->material_name,    // المادة 
                        'name'           => $request->name,             // اسم المدرس   
                        'time_from'      => $request->time_from,        // من كذا وقت
                        'time_to'        => $request->time_to,          // الى كذا وقت
                    ]);
            Table::whereId(7)->update($form);
        } 
        elseif ( $request->class_name == 'الثاني' && $request->days == 'الأحد') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(8)->update($form);
        }
        elseif ( $request->class_name == 'الثاني' && $request->days == 'الأثنين') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(9)->update($form);
        }
        elseif ( $request->class_name == 'الثاني' && $request->days == 'الثلاثاء') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(10)->update($form);
        }
        elseif ( $request->class_name == 'الثاني' && $request->days == 'الاربعاء') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(11)->update($form);
        }
        elseif ( $request->class_name == 'الثاني' && $request->days == 'الخميس') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(12)->update($form);
        }

/* الصف الثالث */
        if( $request->class_name == 'الثالث' && $request->days == 'السبت')
        {
            $form = ([
                        'lesson'         => $request->lesson,           // الدرس
                        'material_name'  => $request->material_name,    // المادة 
                        'name'           => $request->name,             // اسم المدرس   
                        'time_from'      => $request->time_from,        // من كذا وقت
                        'time_to'        => $request->time_to,          // الى كذا وقت
                    ]);
            Table::whereId(13)->update($form);
        } 
        elseif ( $request->class_name == 'الثالث' && $request->days == 'الأحد') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(14)->update($form);
        }
        elseif ( $request->class_name == 'الثالث' && $request->days == 'الأثنين') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(15)->update($form);
        }
        elseif ( $request->class_name == 'الثالث' && $request->days == 'الثلاثاء') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(16)->update($form);
        }
        elseif ( $request->class_name == 'الثالث' && $request->days == 'الاربعاء') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(17)->update($form);
        }
        elseif ( $request->class_name == 'الثالث' && $request->days == 'الخميس') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(18)->update($form);
        }

/* الصف الرابع */
        if( $request->class_name == 'الرابع' && $request->days == 'السبت')
        {
            $form = ([
                        'lesson'         => $request->lesson,           // الدرس
                        'material_name'  => $request->material_name,    // المادة 
                        'name'           => $request->name,             // اسم المدرس   
                        'time_from'      => $request->time_from,        // من كذا وقت
                        'time_to'        => $request->time_to,          // الى كذا وقت
                    ]);
            Table::whereId(19)->update($form);
        } 
        elseif ( $request->class_name == 'الرابع' && $request->days == 'الأحد') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(20)->update($form);
        }
        elseif ( $request->class_name == 'الرابع' && $request->days == 'الأثنين') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(21)->update($form);
        }
        elseif ( $request->class_name == 'الرابع' && $request->days == 'الثلاثاء') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(22)->update($form);
        }
        elseif ( $request->class_name == 'الرابع' && $request->days == 'الاربعاء') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(23)->update($form);
        }
        elseif ( $request->class_name == 'الرابع' && $request->days == 'الخميس') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(24)->update($form);
        }

/* الصف الخامس */
        if( $request->class_name == 'الخامس' && $request->days == 'السبت')
        {
            $form = ([
                        'lesson'         => $request->lesson,           // الدرس
                        'material_name'  => $request->material_name,    // المادة 
                        'name'           => $request->name,             // اسم المدرس   
                        'time_from'      => $request->time_from,        // من كذا وقت
                        'time_to'        => $request->time_to,          // الى كذا وقت
                    ]);
            Table::whereId(25)->update($form);
        } 
        elseif ( $request->class_name == 'الخامس' && $request->days == 'الأحد') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(26)->update($form);
        }
        elseif ( $request->class_name == 'الخامس' && $request->days == 'الأثنين') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(27)->update($form);
        }
        elseif ( $request->class_name == 'الخامس' && $request->days == 'الثلاثاء') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(28)->update($form);
        }
        elseif ( $request->class_name == 'الخامس' && $request->days == 'الاربعاء') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(29)->update($form);
        }
        elseif ( $request->class_name == 'الخامس' && $request->days == 'الخميس') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(30)->update($form);
        }

/* الصف السادس */
        if( $request->class_name == 'السادس' && $request->days == 'السبت')
        {
            $form = ([
                        'lesson'         => $request->lesson,           // الدرس
                        'material_name'  => $request->material_name,    // المادة 
                        'name'           => $request->name,             // اسم المدرس   
                        'time_from'      => $request->time_from,        // من كذا وقت
                        'time_to'        => $request->time_to,          // الى كذا وقت
                    ]);
            Table::whereId(31)->update($form);
        } 
        elseif ( $request->class_name == 'السادس' && $request->days == 'الأحد') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(32)->update($form);
        }
        elseif ( $request->class_name == 'السادس' && $request->days == 'الأثنين') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(33)->update($form);
        }
        elseif ( $request->class_name == 'السادس' && $request->days == 'الثلاثاء') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(34)->update($form);
        }
        elseif ( $request->class_name == 'السادس' && $request->days == 'الاربعاء') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(35)->update($form);
        }
        elseif ( $request->class_name == 'السادس' && $request->days == 'الخميس') 
        {
            $form = ([
                'lesson'         => $request->lesson,           // الدرس
                'material_name'  => $request->material_name,    // المادة 
                'name'           => $request->name,             // اسم المدرس   
                'time_from'      => $request->time_from,        // من كذا وقت
                'time_to'        => $request->time_to,          // الى كذا وقت
            ]);
            Table::whereId(36)->update($form);
        }


         Session::flash('success','تم أضافة البيانات بنجاح');
         return redirect()->back();
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function show(Table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Table $table)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $table)
    {
        //
    }
}
