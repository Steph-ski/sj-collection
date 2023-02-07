<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function testSuccessDisplayFilms()
    {
        $expected = '<div class="film_collection">
                        <article>
                            <div class="film_info1">
                                <img src="https://www.google.com" alt="stock image">
                            </div>
                            <div class="film_info2">
                                <h2>babe</h2>
                                <p> Year of Release: 1997</p>
                                <p> Main Character: Bob</p>
                                <p> Rating out of 10: 9</p>
                            </div>
                         </article>
                     </div>';
        $input = [
            ['imageURL'=> 'https://www.google.com', 'title'=>'babe', 'year'=>'1997','character'=>'Bob','rating'=>9]
        ];
        $case = displayFilms($input);
        $this->assertEquals($expected, $case);

    }
    public function testFailureDisplayFilms()
    {
        $expected = '<div class="film_collection">
                        <article>
                            <div class="film_info1">
                                <img src="https://www.google.com" alt="stock image">
                            </div>
                            <div class="film_info2">
                                <h2>babe</h2>
                                <p> Year of Release: 1997</p>
                                <p> Main Character: Bob</p>
                                <p> Rating out of 10: 9</p>
                            </div>
                         </article>
                     </div>';
        $expected .= '<div class="film_collection">
                        <article>
                            <div class="film_info1">
                                <img src="https://www.google.com" alt="stock image">
                            </div>
                            <div class="film_info2">
                                <h2>babe</h2>
                                <p> Year of Release: 1997</p>
                                <p> Main Character: Bob</p>
                                <p> Rating out of 10: 9</p>
                            </div>
                         </article>
                     </div>';

        $input = [
            ['imageURL'=> 'https://www.google.com', 'title'=>'babe', 'year'=>'1997','character'=>'Bob','rating'=>9],
            ['imageURL'=> 'https://www.google.com', 'year'=>'1997','character'=>'Bob','rating'=>9],
            ['title'=>'toy story', 'year'=>'2000','character'=>'Woody','rating'=>10],
            ['imageURL'=> 'https://www.google.com', 'title'=>'babe', 'year'=>'1997','character'=>'Bob','rating'=>9]
        ];
        $case = displayFilms($input);
        $this->assertEquals($expected, $case);

    }
}