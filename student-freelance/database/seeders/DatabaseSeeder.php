<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Posting;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach (SeedData::$freelancers as $freelancer) {
            User::factory()->create([
                'name' => $freelancer['name'],
                'username' => $freelancer['username'],
                'bio' => $freelancer['bio'],
                'role' => UserRole::Freelancer,
            ]);
        }


        foreach (SeedData::$softwareCompanies as $company) {
            User::factory()->create([
                'name' => $company['name'],
                'username' => $company['username'],
                'bio' => $company['bio'],
                'role' => UserRole::Employer,
            ]);
        }

        foreach (SeedData::$jobPostings as $posting) {
            Posting::factory()->create([
                'title' => $posting['title'],
                'description' => $posting['description'],
            ]);
        }
    }
}

class SeedData
{
    static $softwareCompanies = [
        [
            'name' => 'Microsoft Corporation',
            'username' => 'microsoft',
            'bio' => 'Microsoft Corporation is an American multinational technology company that develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services. Its best-known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers.',
        ],
        [
            'name' => 'Apple',
            'username' => 'apple',
            'bio' => 'Apple is an American multinational technology company that designs, develops, and sells consumer electronics, computer software, and online services. The company is known for its hardware products like the iPhone smartphone, iPad tablet computer, Mac personal computer, Apple Watch, and Apple TV. Its software includes the iOS, macOS, iPadOS, watchOS, and tvOS operating systems, the iTunes media player, the Safari web browser, and various productivity and creativity apps.',
        ],
        [
            'name' => 'Google LLC',
            'username' => 'google',
            'bio' => 'Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware. Google is known for its search engine, but it offers a wide range of products and services, such as Google Ads, Google Cloud Platform, Google Workspace, Android operating system, Chrome web browser, and various hardware products like Pixel smartphones, Google Nest smart home devices, and more.',
        ],
        [
            'name' => 'Amazon',
            'username' => 'amazon',
            'bio' => 'Amazon is an American multinational technology company that focuses on e-commerce, cloud computing, digital streaming, and artificial intelligence. It is one of the Big Five companies in the U.S. information technology industry. Amazon is known for its online retail business, but it also operates Amazon Web Services (AWS), the world\'s largest cloud computing platform, and offers various hardware products like Amazon Kindle e-readers, Fire tablets, and Echo smart speakers.',
        ],
        [
            'name' => 'Facebook',
            'username' => 'facebook',
            'bio' => 'Facebook is an American social media conglomerate corporation. It is known for its various social networking services, including the Facebook platform, Instagram, WhatsApp, and Oculus VR. Facebook\'s platforms enable users to connect, share, discover, and communicate with others. The company also engages in hardware products like Oculus virtual reality headsets and Portal smart displays.',
        ],
    ];

    static $jobPostings = [
        [
            'title' => 'Freelance Web Developer',
            'description' => 'Looking for a skilled freelance web developer to create responsive and visually appealing websites. Projects involve frontend and backend development using HTML, CSS, JavaScript, and popular frameworks. Ability to work independently and meet project deadlines is essential.',
        ],
        [
            'title' => 'Remote Graphic Designer',
            'description' => 'We are seeking a remote graphic designer to create eye-catching designs for various digital and print media. Must have expertise in Adobe Creative Suite, exceptional creativity, and the ability to collaborate with clients to bring their vision to life.',
        ],
        [
            'title' => 'Freelance Content Writer',
            'description' => 'Hiring a freelance content writer to produce high-quality and engaging content across various niches. Responsibilities include creating articles, blog posts, social media content, and SEO-optimized web content. Excellent writing skills and adherence to deadlines are required.',
        ],
        [
            'title' => 'Freelance Mobile App Developer',
            'description' => 'Looking for a freelance mobile app developer experienced in iOS and Android app development. The role involves creating native or cross-platform mobile applications, testing, and ensuring a seamless user experience. Must have a portfolio of previous mobile app projects.',
        ],
        [
            'title' => 'Remote Social Media Manager',
            'description' => 'We are hiring a remote social media manager to develop and execute social media strategies for various clients. Responsibilities include content planning, community engagement, campaign analysis, and growing brand presence across platforms.',
        ],
        [
            'title' => 'Freelance Video Editor',
            'description' => 'Seeking a freelance video editor to edit and produce high-quality videos for online platforms. Must have experience in video editing software, storytelling skills, and the ability to create engaging video content that aligns with brand objectives.',
        ],
        [
            'title' => 'Remote SEO Consultant',
            'description' => 'We are looking for a remote SEO consultant to optimize website content and improve search engine rankings. Responsibilities include keyword research, on-page and off-page SEO, and providing recommendations to enhance website visibility and traffic.',
        ],
    ];

    static $freelancers = [
        [
            'name' => 'Alice Smith',
            'username' => 'alice_smith',
            'bio' => 'Alice Smith is a freelance web developer specializing in frontend and backend technologies. With a passion for creating responsive and user-friendly websites, she has worked on numerous projects and loves exploring new frameworks and technologies.',
        ],
        [
            'name' => 'John Doe',
            'username' => 'john_doe',
            'bio' => 'John Doe is a versatile freelance graphic designer known for his creativity and attention to detail. He has a broad portfolio spanning digital and print media, delivering unique and engaging designs that exceed client expectations.',
        ],
        [
            'name' => 'Emily Johnson',
            'username' => 'emily_johnson',
            'bio' => 'Emily Johnson is a freelance content writer with expertise in various niches. Her writing style is adaptable, and she excels in crafting compelling articles, blog posts, and web content that resonate with audiences.',
        ],
        [
            'name' => 'David Brown',
            'username' => 'david_brown',
            'bio' => 'David Brown is a freelance mobile app developer experienced in creating innovative iOS and Android applications. With a focus on user experience, he brings creativity and functionality to every project he undertakes.',
        ],
        [
            'name' => 'Sophia Lee',
            'username' => 'sophia_lee',
            'bio' => 'Sophia Lee is a freelance social media manager adept at developing and executing successful social media strategies. She has a keen understanding of audience engagement and leverages various platforms to boost brand visibility.',
        ],
    ];
}
