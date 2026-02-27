<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function history(): string
    {
        return view('history');
    }
    public function about_institute(): string
    {
        return view('about-institute');
    }
    public function about_the_principal() : string
    {
        return view('about_the_principal');
    }
    public function principal_message(): string
    {
        return view('principal_message');
    }
    public function vision_mission_and_POs(): string
    {
        return view('vision_mission_and_pos');
    }
    public function administration_and_nodal_officers() : string
    {
        return view('administration_and_nodal_officers');
    }
    public function academic_outrich(): string
    {
        return view('academic_outrich');
    }
    public function rules_and_regulations(): string
    {
        return view('rules_and_regulations');
    }
    public function examination(): string
    {
        return view('examination');
    }
    public function aicte(): string
    {
        return view('aicte');
    }
    public function rti(): string
    {
        return view('rti');
    }
    public function rule_book(): string
    {
        return view('rule_book');
    }
    public function anti_ragging(): string
    {
        return view('anti_ragging');
    }
    public function training_and_placement(): string
    {
        return view('training_and_placement');
    }
    public function mechanical_engineering()
    {
       return view('department/mechanical_engineering');
    }
    public function civil_engineering()
    {
       return view('department/civil_engineering.php');
    }
    public function electrical_engineering()
    {
       return view('department/electrical_engineering');
    }
    public function electronics_engineering()
    {
        return view('department/electronics_engineering');
    }
    public function cse_engineering()
    {
       return view('department/computer_science_and_engineering.php');
    }
}
