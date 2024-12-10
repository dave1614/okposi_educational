<?php

namespace Database\Seeders;

use App\Models\WebsiteContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebsiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WebsiteContent::create([
            'type' => 'mission',
            'content' => '
                <p>Our mission is to provide a quality education to all students in Okposi, ensuring that they are well-prepared for the challenges of a modern world.</p>
            '
        ]);

        WebsiteContent::create([
            'type' => 'about_us',
            'content' => '
                <p>In 2011, a group of dedicated professionals from Okposi united with a shared mission to elevate educational standards in their community to the highest possible level. This vision led to the inaugural meeting of the Okposi Education Initiative (OEI) on Sunday, April 24, 2011, held at Romic Hotel in Okposi under the leadership of Dr Laz Ude Eze. Sixteen young men attended the meeting, with nine remaining committed members of the organization to this day.</p>

                <p>Tragically, we lost one of our founding members, Ukpa Nwankwo Ukpa, an agricultural engineer, to a road accident just a week after our inaugural meeting. To honour his memory and commitment, we established a prize in agriculture in his name. His unwavering passion for quality education will always be remembered.</p>

                <p>Since inception, all our activities and programs have been funded entirely by out-of-pocket contributions from our members. We celebrate our members past and present for their sacrifices, dedication, and commitment.</p>

                <p>Over the past 13 years, our organization has proudly awarded prizes to the top three students in each class across all public secondary schools in Okposi through our flagship program, Reward for Academic Excellence (RACE). More than 1,500 students have benefited from RACE. Additionally, we have provided writing materials to secondary school teachers as a token of appreciation for their dedication. </p>

                <p>In March 2024, we conducted the State of Okposi Schools Survey to assess the available resources and needs of the 33 public primary and secondary schools in Okposi Ezin-asato. With the successful organising of the 1st Okposi Education Summit on 12th November 2024, we look forward to partnering with other groups and organisations with similar interests to advance education in our beloved community.</p>

            '
        ]);
    }
}
