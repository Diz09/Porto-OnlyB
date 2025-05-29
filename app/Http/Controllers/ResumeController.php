<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function show() 
    {
        return view('content.resume', 
        [
            'title' => 'My',
            'highlight' => 'History',
            'background' => 'Resume',
            'description' => 'This is my educational history and experience so far',

            'education' => [
                [
                    'institution' => 'Politeknik Negeri Jember - Information Technology',
                    'year' => '2022 - Now',
                    'description' => '6th semester student, focusing on web and mobile development'
                ],
                [
                    'institution' => 'SMA Negeri 1 Asembagus',
                    'year' => '2019 - 2022',
                    'description' => 'Mathematics and Natural Sciences Department, Active as a diligent and exemplary student'
                ],
            ],

            'experience' => [
                [
                    'place' => 'Term project',
                    'year' => '2022 - Now',
                    'description' => 'Carrying out desktop, web, mobile, etc. development by adapting to the client'
                ],
                [
                    'place' => 'DICODING - Pelatihan Artificial Intelligence (Event)',
                    'year' => '2025',
                    'description' => 'Attend intensive webinar-based training that discusses basic concepts to the latest trends in AI development.'
                ],
                [
                    'place' => 'DICODING - Promt Engineering untuk Software Developer (Academy)',
                    'year' => '2025 - Now',
                    'description' => 'Learn how to design effective prompts to optimize the results of AI models such as ChatGPT and other LLMs.'
                ],
                [
                    'place' => 'DICODING - Memulai Pemrograman dengan Python (Academy)',
                    'year' => '2025',
                    'description' => 'Learn the basics of Python syntax, data types, loops, functions, and their applications in basic programming.'
                ],
                [
                    'place' => 'DICODING - Belajar Dasar Structured Query Language (Academy)',
                    'year' => '2025',
                    'description' => 'Learn how to write SQL queries to manipulate and retrieve data from relational databases.'
                ],
                [
                    'place' => 'DICODING - Belajar Dasar Visualisasi Data (Academy)',
                    'year' => '2025',
                    'description' => 'Learn data visualization techniques using tools such as Matplotlib and Seaborn to present information informatively.'
                ],
                [
                    'place' => 'DICODING - Belajar Dasar Data Science (Academy)',
                    'year' => '2025',
                    'description' => 'Understand the stages of data science starting from data collection, cleaning data, to creating simple predictive models.'
                ],
                [
                    'place' => 'DICODING - Belajar Dasar AI (Academy)',
                    'year' => '2025',
                    'description' => 'Introduction to artificial intelligence, machine learning, and its application in software development.'
                ],
                [
                    'place' => 'Makrab & Kaprodi Cup - Equipment Committee',
                    'year' => '2023',
                    'description' => 'Responsible for the procurement and management of technical equipment during makrab activities and inter-study program competitions.'
                ],
            ]
        ]);
    }
}
