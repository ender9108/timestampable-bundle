<?php

namespace EnderLab\TimestampableBundle\Trait;

use EnderLab\DddBundle\ApiPlatform\ApiResourceInterface;

trait ApiMapperTimestampableTrait
{
    public function setTimestampableToResource(ApiResourceInterface $dto, object $entity): ApiResourceInterface
    {
        $dto->createdAt = $entity->getCreatedAt() ?? null;
        $dto->updatedAt = $entity->getUpdatedAt() ?? null;

        return $dto;
    }
}
