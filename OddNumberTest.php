<?php

function getOddNumber($srcValues)
{
    $arrayCount = array_count_values($srcValues);
    foreach($arrayCount as $key=>$count){
        if ($count % 2 == 1) {
            return $key;
        }
    }
}

class OddNumberTest extends PHPUnit\Framework\TestCase
{
    public function testOddNumber()
    {
        $result = getOddNumber([2,5,9,1,5,1,8,2,8]);
        $this->assertEquals(9,$result);
        $result = getOddNumber([2,3,4,3,1,4,5,1,4,2,5]);
        $this->assertEquals(4,$result);
    }
}
