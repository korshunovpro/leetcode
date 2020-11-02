<?php

namespace Tests\L20ValidParentheses;

use Leetcode\L20ValidParentheses\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /** @var array[] */
    protected array $testData = [
        [
            'string' => '[]',
            'answer' => true,
        ],
        [
            'string' => '{',
            'answer' => false,
        ],
        [
            'string' => '[(())]',
            'answer' => true,
        ],
        [
            'string' => '[(()])',
            'answer' => false,
        ],
        [
            'string' => '[{{[]}}()[]]',
            'answer' => true,
        ],
        [
            'string' => '[{{[}}()[]]',
            'answer' => false,
        ],
        [
            'string' => '()',
            'answer' => true,
        ],
        [
            'string' => '()[]{}',
            'answer' => true,
        ],
        [
            'string' => '(]',
            'answer' => false,
        ],
        [
            'string' => '([)]',
            'answer' => false,
        ],
        [
            'string' => '{[]}',
            'answer' => true,
        ],
    ];

    /**
     * Test.
     */
    public function testSolution(): void
    {
        $solution = new Solution();

        foreach ($this->testData as $data) {
            self::assertEquals(
                $data['answer'],
                $solution->isValid($data['string'])
            );
        }
    }
}
