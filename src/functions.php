<?php

namespace Proengeno\EdiDescription;

function edifactDesciption($type) : array
{
    $descriptions = [
        'utilmd' => '/utilmd-description.php',
        'remadv' => '/remadv-description.php',
        'invoic' => '/invoic-description.php',
        'aperak' => '/aperak-description.php',
        'orders' => '/orders-description.php',
    ];

    $type = strtolower($type);

    if (isset($descriptions[$type])) {
        return include(__DIR__ . $descriptions[$type]);
    }

    throw new \InvalidArgumentException("No Descriptionfile for '$description'.");
}

function describe($descriptionType, $key, $value) : string
{
    return edifactDesciption($descriptionType)[$key][$value] ?? '';
}

function possibilities($descriptionType, $key) : array
{
    return edifactDesciption($descriptionType)[$key] ?? [];
}

function answerCode(string $energyType, int $checkId): string
{
    $answerCodes = include(__DIR__ . '/utilmd-answer-codes.php');

    return $answerCodes[$energyType][$checkId]
        ?? throw new \InvalidArgumentException("No Answer Code for '$energyType' with '$checkId'.");
}

function acceptedAnswers(string $answerCode): array
{
    $answers = include(__DIR__ . '/utilmd-accepted-answer-cluster.php');

    return $answers[$answerCode]
        ?? throw new \InvalidArgumentException("No Accpeted Answers Code '$answerCode'.");
}

function deniedAnswers(string $answerCode): array
{
    $answers = include(__DIR__ . '/utilmd-denied-answer-cluster.php');

    return $answers[$answerCode]
        ?? throw new \InvalidArgumentException("No Accpeted Answers Code '$answerCode'.");
}

function describeAnswer(string $answerCode, string $answer): string
{
    try {
        $answers = acceptedAnswers($answerCode);
        try {
            $answers = array_merge($answers, deniedAnswers($answerCode));
        } catch (\InvalidArgumentException) { }
    } catch (\InvalidArgumentException) {
        $answers = deniedAnswers($answerCode);
    }

    return $answers[$answer]
        ?? throw new \InvalidArgumentException("Answer '$answer' for '$answerCode' not found.");
}
