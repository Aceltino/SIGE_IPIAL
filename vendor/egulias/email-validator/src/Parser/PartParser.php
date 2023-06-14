<?php

namespace Egulias\EmailValidator\Parser;

use Egulias\EmailValidator\EmailLexer;
use Egulias\EmailValidator\Result\InvalidEmail;
use Egulias\EmailValidator\Result\Reason\ConsecutiveDot;
use Egulias\EmailValidator\Result\Result;
use Egulias\EmailValidator\Result\ValidEmail;
use Egulias\EmailValidator\Warning\Warning;

abstract class PartParser
{
    /**
     * @var Warning[]
     */
    protected $warnings = [];

    /**
     * @var EmailLexer
     */
    protected $lexer;

    public function __construct(EmailLexer $lexer)
    {
        $this->lexer = $lexer;
    }

    abstract public function parse(): Result;

    /**
     * @return Warning[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    protected function parseFWS(): Result
    {
        $foldingWS = new FoldingWhiteSpace($this->lexer);
        $resultFWS = $foldingWS->parse();
        $this->warnings = array_merge($this->warnings, $foldingWS->getWarnings());
        return $resultFWS;
    }

    protected function checkConsecutiveDots(): Result
    {
<<<<<<< HEAD
        if ($this->lexer->current->isA(EmailLexer::S_DOT) && $this->lexer->isNextToken(EmailLexer::S_DOT)) {
            return new InvalidEmail(new ConsecutiveDot(), $this->lexer->current->value);
=======
        if (((array) $this->lexer->token)['type'] === EmailLexer::S_DOT && $this->lexer->isNextToken(EmailLexer::S_DOT)) {
            return new InvalidEmail(new ConsecutiveDot(), ((array) $this->lexer->token)['value']);
>>>>>>> 1d002a34be5bf26a32fb28e3e6cd9084bb28d107
        }

        return new ValidEmail();
    }

    protected function escaped(): bool
    {
        $previous = $this->lexer->getPrevious();

<<<<<<< HEAD
        return $previous->isA(EmailLexer::S_BACKSLASH)
            && !$this->lexer->current->isA(EmailLexer::GENERIC);
=======
        return $previous && $previous['type'] === EmailLexer::S_BACKSLASH
            &&
            ((array) $this->lexer->token)['type'] !== EmailLexer::GENERIC;
>>>>>>> 1d002a34be5bf26a32fb28e3e6cd9084bb28d107
    }
}
