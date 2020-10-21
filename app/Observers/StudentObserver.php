<?php

namespace App\Observers;

use App\Models\Student;
use Illuminate\Support\Facades\Mail;

class StudentObserver
{
    /**
     * Handle the student "created" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function created(Student $student)
    {
        Mail::to($student->email)->send(new \SuccesfullyAddedStudentsMail($student->name));
    }

    /**
     * Handle the student "updated" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function updated(Student $student)
    {
        //
    }

    /**
     * Handle the student "deleted" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function deleted(Student $student)
    {
        //
    }

    /**
     * Handle the student "restored" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function restored(Student $student)
    {
        //
    }

    /**
     * Handle the student "force deleted" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function forceDeleted(Student $student)
    {
        //
    }
}
