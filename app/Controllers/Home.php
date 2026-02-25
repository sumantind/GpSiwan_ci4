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
    public function principal_message(): string
    {
        return view('principal_message');
    }
    public function vision_and_mission(): string
    {
        return view('vision_and_mission');
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
}
