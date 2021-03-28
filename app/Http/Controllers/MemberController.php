<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class MemberController extends Controller
{
    private $Ticket;

    public function __construct(Ticket $Ticket)
    {
        $this->Ticket = $Ticket;
    }

    public function getMembers()
    {
        return $this->Ticket
            ->select('tickets.*','a.name as assignee','s.name as submitter')
            ->join('members as a','a.id','tickets.assignee_id')
            ->join('members as s','s.id','tickets.submitter_id')
            ->get();
    }
}
