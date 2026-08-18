<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        // Simulate a simple "login" — start session and grant access
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['student_access'] = true;

        $data['page_title'] = 'Aaronjay\'s Student Portal';
        $this->call->view('student/home', $data);
    }

    public function profile()
    {
        $student = [
            'student_id' => '2026-1042',
            'name'       => 'Aaronjay Lusterio',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => 'F5',
            'email'      => 'lusterioaaronjay5@gmail.com',
            'hobbies'    => 'Watch aniime, Badminton, Online Gaming'
        ];

        $this->call->view('student/profile', $student);
    }
}