<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunFactController extends Controller
{
    public function show()
{
    $facts = [
        "Bananas are berries, but strawberries are not.",
        "Bees can recognize human faces.",
        "The shortest war in history lasted 38 minutes.",
        "The longest time between two twins being born is 87 days.",
        "An octopus has three hearts and blue blood.",
        "Honey never spoils. It can last for thousands of years.",
        "The Eiffel Tower can be 15 cm taller during the summer because metal expands in the heat.",
        "A day on Venus is longer than a year on Venus.",
        "There are more possible iterations of a game of chess than there are atoms in the known universe.",
        "Cows have best friends and can become stressed when they are separated.",
        "Hippo milk is pink.",
        "A group of flamingos is called a 'flamboyance'.",
        "Wombat poop is cube-shaped.",
        "A jiffy is an actual unit of time for 1/100th of a second.",
        "There are more fake flamingos in the world than real ones.",
        "The smell of freshly-cut grass is actually a plant distress call. It's their way of communicating to insects and other animals that harm is underway.",
        "Polar bears have black skin and although their fur appears white, it is actually transparent."
    ];
    

    $randomFact = $facts[array_rand($facts)];

    return response()->json(['fun_fact' => $randomFact]);
}

}
