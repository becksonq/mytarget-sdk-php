<?php

namespace Koma136\MyTarget\Domain\V1\Remarketing;

use Koma136\MyTarget\Domain\V1\Enum\RemarketingType;
use Koma136\MyTarget\Mapper\Annotation\Field;

class RemarketingInterval
{
    /**
     * @var int
     * @Field(type="int")
     */
    private $left;

    /**
     * @var int
     * @Field(type="int")
     */
    private $right;

    /**
     * @var RemarketingType
     * @Field(type="Koma136\MyTarget\Domain\V1\Enum\RemarketingType")
     */
    private $type;

    /**
     * @param int $left
     * @param int $right
     * @param RemarketingType $type
     */
    public function __construct($left, $right, RemarketingType $type)
    {
        $this->left = $left;
        $this->right = $right;
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * @return int
     */
    public function getRight()
    {
        return $this->right;
    }

    /**
     * @return RemarketingType
     */
    public function getType()
    {
        return $this->type;
    }
}
