<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\ApplicationStatus;

class ApplicationController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'posting_id' => 'required',
            'applicant_id' => 'required',
        ]);

        $application = Application::create(array_merge(
            $attributes,
            ['status' => ApplicationStatus::Pending]
        ));

        return redirect("/posting/{$application->posting_id}")->with('success', 'Applied succesfully');
    }
}
