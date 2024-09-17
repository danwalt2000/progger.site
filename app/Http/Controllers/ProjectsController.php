<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public $prev;
     public $next;
     public $projects;

     public function __construct()
    {
        $this->projects = [
            [
                "title" =>  __('strings.proj_kursi'),
                "second_title" => "KursiValut",
                "link" => "kursivalut",
                "img" => "/content/kursivalut-mini.png"
            ],
            [
                "title" =>  __('strings.proj_trueconf_desc'),
                "second_title" => "TrueConf",
                "link" => "trueconf",
                "img" => "/content/trueconf-mini.png"
            ],
            [
                "title" =>  __('strings.proj_presta'),
                "second_title" => "Unitsolutions",
                "link" => "unit",
                "img" => "/content/unit-mini.png"
            ],
            [
                "title" =>  __('strings.proj_oc'),
                "second_title" => "CleverMic",
                "link" => "clevermic",
                "img" => "/content/clevermic-mini.png"
            ],
            [
                "title" => __('strings.proj_website'),
                "second_title" => __('strings.dev_port'),
                "link" => "my-port",
                "img" => "/content/myport-mini.png"
            ],
            [
                "title" =>  __('strings.proj_store'),
                "second_title" => __('strings.proj_novozar'),
                "link" => "novozarievka",
                "img" => "/content/novozar-mini.jpg"
            ],
            [
                "title" => __('strings.proj_store'),
                "second_title" => __('strings.proj_infoteh'),
                "link" => "infotech",
                "img" => "/content/infoteh-mini.png"
            ],
            [
                "title" => __('strings.proj_drive_desc'),
                "second_title" => 'Drive-don',
                "link" => "drive-don",
                "img" => "/content/drive-don.jpg"
            ],
            [
                "title" => __('strings.proj_store'),
                "second_title" => __('strings.proj_mebel'),
                "link" => "mebel",
                "img" => "/content/mebel-mini.png"
            ],

            [
                "title" => __('strings.proj_bus_desc'),
                "second_title" => 'Bustravel',
                "link" => "bustravel",
                "img" => "/content/bustravel.jpg"
            ],
            [
                "title" => __('strings.proj_game'),
                "second_title" => __('strings.proj_fift'),
                "link" => "15",
                "img" => "/content/15-preview.jpg"
            ],
            [
                "title" => __('strings.proj_provance_desc'),
                "second_title" => __('strings.proj_provance'),
                "link" => "provence",
                "img" => "/content/provence1.jpg"
            ],
            // [
            //     "title" => __('strings.proj_game'),
            //     "second_title" => __('strings.proj_sheeps'),
            //     "link" => "sheeps",
            //     "img" => "/content/sheeps.jpg",
            //     "locale" => "ru"
            // ]
            
        ];
    }

    public function index()
    {
        return view('index', [
            "projects" => array_slice($this->projects, 0, 3)
        ]);
    }
    public function projects()
    {
        return view('pages.projects', [
            "projects" => $this->projects
        ]);
    }
    public function single(Request $request)
    {
        $project_name = substr($request->path(), 9); // сегмент url после projects/
        foreach($this->projects as $index=>$project){
            if($project["link"] == $project_name){
                $prev_idx = $index - 1;
                $next_idx = $index + 1;
                $length = count($this->projects);
                
                if($prev_idx  < 0){
                    $prev_idx = $length - 1;
                } elseif($next_idx == $length){
                    $next_idx = 0;
                }

                $this->prev = $this->projects[$prev_idx]["link"];
                $this->next = $this->projects[$next_idx]["link"];
            }
        }

        return view('projects.' . $project_name, [
            "projects" => $this->projects,
            "prev" => $this->prev,
            "next" => $this->next
        ]);
    }
}
