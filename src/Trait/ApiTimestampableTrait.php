<?php

namespace EnderLab\TimestampableBundle\Trait;

use ApiPlatform\Metadata\ApiProperty;
use DateTimeInterface;
use Symfony\Component\Serializer\Attribute\Groups;

trait ApiTimestampableTrait
{
    #[ApiProperty(readable: true, writable: false)]
    #[Groups('timestampable:read')]
    public ?DateTimeInterface $createdAt = null;

    #[ApiProperty(readable: true, writable: false)]
    #[Groups('timestampable:read')]
    public ?DateTimeInterface $updatedAt = null;
}
