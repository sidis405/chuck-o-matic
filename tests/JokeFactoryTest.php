<?php

namespace Sidis\ChuckOMatic\Tests;

use PHPUnit\Framework\TestCase;
use Sidis405\ChuckOMatic\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke'
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $defaultJokes = [
            'Chuck Norris counted to infinity... Twice.',
            'When the Boogeyman goes to sleep at night he checks his closet for Chuck Norris.',
            'Guns don\'t kill people. Chuck Norris kills People.'
        ];

        $jokes = new JokeFactory;

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $defaultJokes);
    }

    /** @test */
    public function it_returns_a_given_amount_of_jokes()
    {
        $jokes = new JokeFactory;

        $jokes = $jokes->getRandomJokes(2);

        $this->assertEquals(2, count($jokes));
    }
}
