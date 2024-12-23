<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $team = [
            [
                'name'=> 'Dr. Laz Ude Eze',
                'image' => 'laz.jpeg',
                'position' => 'Chairman (2011, 2014-2018)',
            ],
            [
                'name'=> 'Mr. Agwu Uchenna Duke',
                'image' => 'agwu_uchenna.jpeg',
                'position' => 'Chairman (2011 - 2014)',
            ],
            [
                'name'=> 'Dr. Nnanna Agwu.',
                'image' => 'nnanna_agwu.jpeg',
                'position' => 'Chairman (2018 - 2022)',
            ],
            [
                'name'=> 'Mr. Daniel Ogbonnaya',
                'image' => 'daniel_ogbonnaya.jpeg',
                'position' => 'Chairman (2022 - till date)',
            ],
            [
                'name'=> 'Nnanna Ngene',
                'image' => 'nnanna_ngene.jpeg',
                'position' => 'Financial Secretary (2011 - 2024)',
            ],
            [
                'name'=> 'Ms. Precious O. Okoro',
                'image' => 'precious_okoro.jpeg',
                'position' => 'Secretary (2022 - till date)',
            ],
            [
                'name'=> 'Mr. Eze Nwani Eze',
                'image' => 'nwani_eze.jpeg',
                'position' => 'Publicity Secretary (2024)',
            ],
            [
                'name'=> 'Mr. Nnanna Enyi',
                'image' => 'nnanna_enyi.jpeg',
                'position' => '',
            ],
            [
                'name'=> 'Comrade Odii Okereke',
                'image' => 'chidi_okereke.jpeg',
                'position' => '',
            ],
            [
                'name'=> 'Mr. Chika Uneke.',
                'image' => 'chika_uneke.jpeg',
                'position' => '',
            ],
            [
                'name'=> 'Mr. Nnadozie Ezeaja',
                'image' => 'nnadozie_ezeaja.jpeg',
                'position' => '',
            ],
            [
                'name'=> 'Charles Ogbonna Nwevo',
                'image' => 'charles_ogbonna.jpeg',
                'position' => '',
            ]
        ];

        $props['team'] = $team;

        return Inertia::render('Public/Team/Index', $props);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
