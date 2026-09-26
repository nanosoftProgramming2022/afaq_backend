<?php

namespace Modules\Common\App\resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HistoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'day' => $this->day,
            'session_number' => $this->session_number,
            'semester' => $this->semester,
            'year' => $this->year,
            'student' => $this->student_name,
            'identity_number' => $this->student->identity_number,
            'subject' => $this->subject_name,
            'class' => $this->class_name,
            'teacher' => $this->teacher_name,
            'attendance_taken_by' => $this->attendance_taken_by_name,
            'school' => $this->school_name,
            'is_present' => $this->is_present,
            'created_at' => $this->created_at->format('Y-m-d h:i A'),
            'updated_at' => $this->updated_at->format('Y-m-d h:i A')
        ];
    }
}
