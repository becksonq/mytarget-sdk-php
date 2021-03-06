<?php

namespace Koma136\MyTarget\Domain\V1\Targeting;

use Koma136\MyTarget\Mapper\Annotation\Field;

class Birthday
{
    /**
     * @var int
     * @Field(name="days_before", type="int", nullable=true)
     */
    private $daysBefore;

    /**
     * @var int
     * @Field(name="days_after", type="int", nullable=true)
     */
    private $daysAfter;

    /**
     * @param int $daysBefore
     * @param int $daysAfter
     */
    public function __construct($daysBefore, $daysAfter)
    {
        $this->daysBefore = $daysBefore;
        $this->daysAfter = $daysAfter;
    }

    /**
     * @return int
     */
    public function getDaysBefore()
    {
        return $this->daysBefore;
    }

    /**
     * @return int
     */
    public function getDaysAfter()
    {
        return $this->daysAfter;
    }
}
