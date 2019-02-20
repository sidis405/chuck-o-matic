<?php

namespace Sidis405\ChuckOMatic;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris counted to infinity... Twice.',
        'When the Boogeyman goes to sleep at night he checks his closet for Chuck Norris.',
        'Guns don\'t kill people. Chuck Norris kills People.'
    ];

    public function __construct($jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke() : string
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
