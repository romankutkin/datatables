<?php

declare(strict_types=1);

namespace App\Entity;

use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

#[ORM\Entity]
#[ORM\Table(name: 'flashcards')]
class Flashcard
{
    #[ORM\Id]
    #[ORM\Column(type: 'uuid', unique: true)]
    private readonly Uuid $uuid;

    #[ORM\Column(type: 'string')]
    private string $question;

    #[ORM\Column(type: 'string')]
    private string $answer;

    #[ORM\Column(type: 'datetime_immutable')]
    private readonly DateTimeImmutable $createdAt;

    public function __construct(
        string $question,
        string $answer,
    ) {
        $this->uuid = Uuid::v4();
        $this->createdAt = new DateTimeImmutable();

        $this->question = $question;
        $this->answer = $answer;
    }

    public function getUuid(): Uuid
    {
        return $this->uuid;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function getAnswer(): string
    {
        return $this->answer;
    }

    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }
}
