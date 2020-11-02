<?php

namespace Tests\L01TwoSum;

use Leetcode\L01TwoSum\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /** @var array[] */
    protected array $testData = [
        [
            'nums' => [1, 7, 5, 9, 2],
            'target' => 9,
            'answer' => [1, 4],
        ],
        [
            'nums' => [6, 7, 4, 9, 2],
            'target' => 10,
            'answer' => [0, 2],
        ],
    ];

    /**
     * Test.
     */
    public function testSolution(): void
    {
        $solution = new Solution();

        foreach ($this->testData as $data) {
            self::assertEqualsCanonicalizing(
                $data['answer'],
                $solution->twoSum($data['nums'], $data['target'])
            );
        }
    }
}
