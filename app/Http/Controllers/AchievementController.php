<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function show() 
    {
        return view('content.achievement',
        [
            'title' => 'My',
            'highlight' => 'Achievements',
            'background' => 'Merits',
            'description' => 'The following are the achievements that I have obtained as a result of my hard work.',

            'achievements' => [
                [
                    'image' => 'b1.jpg',
                    'name' => 'Memulai Pemrograman dengan Python',
                    'place' => 'DICODING Class, 2025',
                    'desk' => 'Introduction to the basics of programming using Python, including syntax, variables, branching, and looping.'
                ],
                [
                    'image' => 'b2.jpg',
                    'name' => 'Belajar Dasar Visualisasi Data',
                    'place' => 'DICODING Class, 2025',
                    'desk' => 'Learning the basic concepts of data visualization using Python and libraries such as Matplotlib and Seaborn to display data informatively.'
                ],
                [
                    'image' => 'b3.jpg',
                    'name' => 'Belajar Dasar Structured Query Language (SQL)',
                    'place' => 'DICODING Class, 2025',
                    'desk' => 'Learn the basics of using SQL to access, manipulate, and manage data in a relational database system.'
                ],
                [
                    'image' => 'b4.jpg',
                    'name' => 'Belajar Dasar Data Science',
                    'place' => 'DICODING Class, 2025',
                    'desk' => 'Understand the data science work process, from data collection, data cleaning, data analysis, to simple model creation.'
                ],
                [
                    'image' => 'b5.jpg',
                    'name' => 'Belajar Dasar AI',
                    'place' => 'DICODING Class, 2025',
                    'desk' => 'Introduction to basic concepts of artificial intelligence (AI), including supervised learning, unsupervised learning, and introduction to AI models.'
                ],
                [
                    'image' => 'b6.jpg',
                    'name' => 'Prompt Engineering untuk Software Developer',
                    'place' => 'DICODING Class, 2025',
                    'desk' => 'Training to create effective prompts to maximize the results of generative AI models such as ChatGPT in software development.'
                ],
                [
                    'image' => 'b7.jpg',
                    'name' => 'AI Praktis untuk Produktivitas',
                    'place' => 'DICODING Class, 2025',
                    'desk' => 'Optimizing the use of AI-based tools to improve daily work efficiency, such as task automation and content creation.'
                ],
                [
                    'image' => 'b8.jpg',
                    'name' => 'Belajar Penggunaan Generative AI',
                    'place' => 'DICODING Class, 2025',
                    'desk' => 'Understanding and utilizing generative AI technology to create text, images, and other content with a practical approach.'
                ],
                [
                    'image' => 'b0.jpg',
                    'name' => 'Harapan II Aplikasi - STAYAWAKE',
                    'place' => 'TIF Exhition Politeknik Negeri Jember , 2025',
                    'desk' => 'Award for innovative application work in the Informatics Engineering Department exhibition, demonstrating application analysis and development capabilities.'
                ],
            ]
        ]);
    }
}
