<?php


namespace Modules\Session\DTO;

class AttendanceDto
{
    public $session_id;
    public array $attendance;

    public function __construct($request)
    {
        if ($request->get('session_id'))
            $this->session_id = $request->get('session_id');
        if ($request->get('attendance'))
            $this->attendance = $request->get('attendance');
    }

    public function dataFromRequest()
    {
        $data = json_decode(json_encode($this), true);
        if ($this->session_id == null)
            unset($data['session_id']);
        if ($this->attendance == null)
            unset($data['attendance']);
        return $data;
    }
}

