<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
   public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['student_access'] = true;

        $this->call->view('student/home');
    }

    public function profile()
    {
        // Load and run the middleware directly (no config file needed)
        $middleware = load_class('StudentMiddleware', 'middlewares');

        return $middleware->handle(function () {
            $student = [
                'student_id' => '00232',
                'name'       => 'Aaronjay Lusterio',
                'course'     => 'BS Information Technology',
                'year'       => '3rd Year',
                'section'    => 'F5',
                'email'      => 'lusterioaaronjay5@gmail.com',
                'hobbies'    => 'Watching Anime, Editing , Play OG'
            ];

            $this->call->view('student/profile', $student);
        });
    }
}