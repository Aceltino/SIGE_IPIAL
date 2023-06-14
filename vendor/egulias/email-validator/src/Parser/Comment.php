<?php

namespace Egulias\EmailValidator\Parser;

use Egulias\EmailValidator\EmailLexer;
use Egulias\EmailValidator\Result\Result;
use Egulias\EmailValidator\Warning\QuotedPart;
use Egulias\EmailValidator\Result\InvalidEmail;
use Egulias\EmailValidator\Parser\CommentStrategy\CommentStrategy;
use Egulias\EmailValidator\Result\Reason\UnclosedComment;
use Egulias\EmailValidator\Result\Reason\UnOpenedComment;
use Egulias\EmailValidator\Warning\Comment as WarningComment;

class Comment extends PartParser
{
    /**
     * @var int
     */
    private $openedParenthesis = 0;

    /**
     * @var CommentStrategy
     */
    private $commentStrategy;

    public function __construct(EmailLexer $lexer, CommentStrategy $commentStrategy)
    {
        $this->lexer = $lexer;
        $this->commentStrategy = $commentStrategy;
    }

    public function parse(): Result
    {
<<<<<<< HEAD
        if ($this->lexer->current->isA(EmailLexer::S_OPENPARENTHESIS)) {
            $this->openedParenthesis++;
            if ($this->noClosingParenthesis()) {
                return new InvalidEmail(new UnclosedComment(), $this->lexer->current->value);
            }
        }

        if ($this->lexer->current->isA(EmailLexer::S_CLOSEPARENTHESIS)) {
            return new InvalidEmail(new UnOpenedComment(), $this->lexer->current->value);
=======
        if (((array) $this->lexer->token)['type'] === EmailLexer::S_OPENPARENTHESIS) {
            $this->openedParenthesis++;
            if($this->noClosingParenthesis()) {
                return new InvalidEmail(new UnclosedComment(), ((array) $this->lexer->token)['value']);
            }
        }

        if (((array) $this->lexer->token)['type'] === EmailLexer::S_CLOSEPARENTHESIS) {
            return new InvalidEmail(new UnOpenedComment(), ((array) $this->lexer->token)['value']);
>>>>>>> 1d002a34be5bf26a32fb28e3e6cd9084bb28d107
        }

        $this->warnings[WarningComment::CODE] = new WarningComment();

        $moreTokens = true;
        while ($this->commentStrategy->exitCondition($this->lexer, $this->openedParenthesis) && $moreTokens) {

            if ($this->lexer->isNextToken(EmailLexer::S_OPENPARENTHESIS)) {
                $this->openedParenthesis++;
            }
            $this->warnEscaping();
            if ($this->lexer->isNextToken(EmailLexer::S_CLOSEPARENTHESIS)) {
                $this->openedParenthesis--;
            }
            $moreTokens = $this->lexer->moveNext();
        }

<<<<<<< HEAD
        if ($this->openedParenthesis >= 1) {
            return new InvalidEmail(new UnclosedComment(), $this->lexer->current->value);
        }
        if ($this->openedParenthesis < 0) {
            return new InvalidEmail(new UnOpenedComment(), $this->lexer->current->value);
=======
        if($this->openedParenthesis >= 1) {
            return new InvalidEmail(new UnclosedComment(), ((array) $this->lexer->token)['value']);
        }
        if ($this->openedParenthesis < 0) {
            return new InvalidEmail(new UnOpenedComment(), ((array) $this->lexer->token)['value']);
>>>>>>> 1d002a34be5bf26a32fb28e3e6cd9084bb28d107
        }

        $finalValidations = $this->commentStrategy->endOfLoopValidations($this->lexer);

        $this->warnings = array_merge($this->warnings, $this->commentStrategy->getWarnings());

        return $finalValidations;
    }


    /**
     * @return bool
     */
    private function warnEscaping(): bool
    {
        //Backslash found
<<<<<<< HEAD
        if (!$this->lexer->current->isA(EmailLexer::S_BACKSLASH)) {
=======
        if (((array) $this->lexer->token)['type'] !== EmailLexer::S_BACKSLASH) {
>>>>>>> 1d002a34be5bf26a32fb28e3e6cd9084bb28d107
            return false;
        }

        if (!$this->lexer->isNextTokenAny(array(EmailLexer::S_SP, EmailLexer::S_HTAB, EmailLexer::C_DEL))) {
            return false;
        }

        $this->warnings[QuotedPart::CODE] =
<<<<<<< HEAD
            new QuotedPart($this->lexer->getPrevious()->type, $this->lexer->current->type);
=======
            new QuotedPart($this->lexer->getPrevious()['type'], ((array) $this->lexer->token)['type']);
>>>>>>> 1d002a34be5bf26a32fb28e3e6cd9084bb28d107
        return true;
    }

<<<<<<< HEAD
    private function noClosingParenthesis(): bool
=======
    private function noClosingParenthesis() : bool
>>>>>>> 1d002a34be5bf26a32fb28e3e6cd9084bb28d107
    {
        try {
            $this->lexer->find(EmailLexer::S_CLOSEPARENTHESIS);
            return false;
        } catch (\RuntimeException $e) {
            return true;
        }
    }
}
