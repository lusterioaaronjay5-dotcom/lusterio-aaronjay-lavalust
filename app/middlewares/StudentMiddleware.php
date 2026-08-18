<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle(Closure $next)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Unique access condition: must have visited /student first
        if (!isset($_SESSION['student_access']) || $_SESSION['student_access'] !== true) {
            // Not authorized — send back to student home with a message
            $_SESSION['access_denied_msg'] = 'Access denied: please visit the Student Home page first before viewing the profile.';
            redirect('student');
            return;
        }

        return $next();
    }
}