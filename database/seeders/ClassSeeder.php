<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Room;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            "name" => "Java Programming Class A",
            "description" => "Java is well-known for its high performance and flexibility, as it can be used to construct mobile and web-based applications, video games, and more. Through this course, you will learn about object-oriented programming and GUI in Java.",
            "calendar_embed_link" => "https://calendar.google.com/calendar/embed?src=7d1844mu281p8jus6toqqt9ego%40group.calendar.google.com&ctz=Asia%2FJakarta"
        ]);
        Room::create([
            "name" => "Java Programming Class B",
            "description" => "Java is well-known for its high performance and flexibility, as it can be used to construct mobile and web-based applications, video games, and more. Through this course, you will learn about object-oriented programming and GUI in Java.",
            "calendar_embed_link" => "https://calendar.google.com/calendar/embed?src=175ndfd0rvmtfgfoa3obbqafhg%40group.calendar.google.com&ctz=Asia%2FJakarta"
        ]);
        Room::create([
            "name" => "UI/UX Design",
            "description" => "More of a design person? Well, this course is just for you! Through this course, you will learn how to create a beautiful and user-friendly interface. Improve your sense of design through various researches to achieve the best user satisfaction.",
            "calendar_embed_link" => "https://calendar.google.com/calendar/embed?src=2ji7s516a5ehm4msbvnagai0fc%40group.calendar.google.com&ctz=Asia%2FJakarta"
        ]);
        Room::create([
            "name" => "Game Development",
            "description" => "Ever thought about developing your own games? By joining this course, you will be able to understand the process of making a game and gain the skills to stand out as a game developer. Turn your passion for gaming into your career!",
            "calendar_embed_link" => "https://calendar.google.com/calendar/embed?src=895m4e9k0ml1l1brv8ke7neauc%40group.calendar.google.com&ctz=Asia%2FJakarta"
        ]);
        Room::create([
            "name" => "Mobile Development Class A",
            "description" => "Ever considered mobile app development? In this course, you’ll learn how to develop android applications from scratch. This course is the perfect start for your journey to becoming a mobile apps developer!",
            "calendar_embed_link" => "https://calendar.google.com/calendar/embed?src=rb6jr0ra41j1ocl2247otrai6s%40group.calendar.google.com&ctz=Asia%2FJakarta"
        ]);
        Room::create([
            "name" => "Mobile Development Class B",
            "description" => "Ever considered mobile app development? In this course, you’ll learn how to develop android applications from scratch. This course is the perfect start for your journey to becoming a mobile apps developer!",
            "calendar_embed_link" => "https://calendar.google.com/calendar/embed?src=1ve61uemf4ij91kvp4o3llefmo%40group.calendar.google.com&ctz=Asia%2FJakarta"
        ]);
    }
}
