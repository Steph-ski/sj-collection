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
            ['imageURL'=> 'https://www.google.com', 'title'=>'babe', 'year'=>'1997','character'=>'Bob','rating'=>9],
            ['imageURL'=> 'https://www.google.com', 'name'=>'babe', 'year'=>'1997','character'=>'Bob','rating'=>9]
        ];
        $case = displayFilms($input);
        $this->assertEquals($expected, $case);
    }
    public function testMalformedDisplayFilms()
    {
        $this->expectException(TypeError::class);
        $input = 'silly';
        $case = displayFilms($input);
    }

    /**
     * @dataProvider validateProvider
     */
    public function testValidateAddNewItem($title, $imageURL, $year, $mainCharacter, $rating, $expected)
    {
        $case = validateAddNewItem($title, $imageURL, $year, $mainCharacter, $rating);
        $this->assertEquals($expected, $case);
    }

    public function validateProvider(): array
    {
        return [
            'success new item' => ['Babe', 'https://www.google.com/', '1998', 'Dave', '7', true],
            'failure on title new item' => ['B@be*', 'https://www.google.com/', '1998', 'Dave', '7', false],
            'failure on img_url new item' => ['Babe', 'https://www.goo%^gle.com/', '1998', 'Dave', '7', false],
            'failure on year new item' => ['Babe', 'https://www.google.com/', '1598', 'Dave', '7', false],
            'failure on main_character new item' => ['Babe', 'https://www.google.com/', '1998', 'D@ve', '7', false],
            'failure on rating new item' => ['Babe', 'https://www.google.com/', '1998', 'Dave', '12', false],
        ];
    }

    /**
     * @dataProvider validateExceptionProvider
     */
    public function testMalformedValidateNewItem($title, $imageURL, $year, $mainCharacter, $rating, $expected)
    {
        $this->expectException($expected);
        $case = validateAddNewItem($title, $imageURL, $year, $mainCharacter, $rating);
    }

    public function validateExceptionProvider(): array
    {
        return [
            'title as array' => [['Babe 2'],'https://www.google.com/','2002', 'bilbo swaggins', '8', TypeError::class],
            'img_URL as array' => ['Babe 2',['https://www.google.com/'],'2002', 'bilbo swaggins', '8', TypeError::class],
            'year as array' => ['Babe 2','https://www.google.com/',['2002'], 'bilbo swaggins', '8', TypeError::class],
            'main_character as array' => ['Babe 2','https://www.google.com/','2002', ['bilbo swaggins'], '8', TypeError::class],
            'rating as array' => ['Babe 2','https://www.google.com/','2002', 'bilbo swaggins', ['8'], TypeError::class],
        ];
    }
}
