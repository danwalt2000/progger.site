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

     public $projects = [
        [
            "title" => "Сайт агрофирмы",
            "link" => "novozarievka",
            "second_title" => "Новозариевка",
            "img" => "/content/novozar.png"
        ],
        [
            "title" => "Сайт транспортной компании",
            "second_title" => 'Drive-don',
            "link" => "drive-don",
            "img" => "/content/drive-don.jpg"
        ],
        [
            "title" => "Интернет-магазин",
            "second_title" => 'ЧП "ИНФОТЕХ"',
            "link" => "infotech",
            "img" => "/content/infotech.jpg"
        ],
        [
            "title" => "Интернет-магазин",
            "second_title" => 'Мебель-Донецк',
            "link" => "mebel",
            "img" => "/content/mebel.jpg"
        ],
        [
            "title" => "Вебсайт",
            "second_title" => 'Портфолио',
            "link" => "my-port",
            "img" => "/content/portfolio.jpg"
        ],
        [
            "title" => "Транспортная компания",
            "second_title" => 'Bustravel',
            "link" => "bustravel",
            "img" => "/content/bustravel.jpg"
        ],
        [
            "title" => "Игра",
            "second_title" => 'Пятнашки',
            "link" => "15",
            "img" => "/content/15-preview.jpg"
        ],
        [
            "title" => "Игра",
            "second_title" => 'Волк и овцы',
            "link" => "sheeps",
            "img" => "/content/sheeps.jpg"
        ],
        [
            "title" => "Сайт салона штор",
            "second_title" => 'Прованс',
            "link" => "provence",
            "img" => "/content/provence1.jpg"
        ]
    ];

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
