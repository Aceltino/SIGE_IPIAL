<?php

namespace Egulias\EmailValidator\Parser;

use Egulias\EmailValidator\Result\Result;
use Egulias\EmailValidator\Result\InvalidEmail;
use Egulias\EmailValidator\Result\Reason\CommentsInIDRight;

class IDLeftPart extends LocalPart
{
    protected function parseComments(): Result
    {
<<<<<<< HEAD
        return new InvalidEmail(new CommentsInIDRight(), $this->lexer->current->value);
=======
       return new InvalidEmail(new CommentsInIDRight(), ((array) $this->lexer->token)['value']);
>>>>>>> 1d002a34be5bf26a32fb28e3e6cd9084bb28d107
    }
}
