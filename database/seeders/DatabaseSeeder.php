<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use App\Models\UserRole;
use App\Models\EventStatus;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'id' => 'usr_'.uniqid(),
            'nama' => 'SuperAdmin',
            'nim' => '0000000000',
            'nohp' => '000000000000',
            'email' => 'admin00@ccisummit.com',
            'sandi' => bcrypt('111222@123'),
            'kode_role' => 2,
        ]);

        User::create([
            'id' => 'usr_'.uniqid(),
            'nama' => 'Admin CCI Summi22',
            'nim' => '0000000001',
            'nohp' => '000000000001',
            'email' => 'admin01@ccisummit.com',
            'sandi' => bcrypt('111222@123'),
            'kode_role' => 1,
        ]);

        UserRole::create([
            'id' => 0,
            'nama_role' => 'User'
        ]);

        UserRole::create([
            'id' => 1,
            'nama_role' => 'Admin'
        ]);

        UserRole::create([
            'id' => 2,
            'nama_role' => 'Super Admin'
        ]);

        EventStatus::create([
            'id' => 0,
            'nama_status' => 'Coming Soon'
        ]);

        EventStatus::create([
            'id' => 1,
            'nama_status' => 'Sale Off'
        ]);

        EventStatus::create([
            'id' => 2,
            'nama_status' => 'On Sale'
        ]);

        EventStatus::create([
            'id' => 3,
            'nama_status' => 'Sold Out'
        ]);

        Event::create([
            'id' => 'evt_'.uniqid(),
            'nama_event' => 'Tech Week',
            'slug' => 'techweek2022',
            'harga' => 25000,

            'event_imgbg' => '/techweek/bg_evnt_techweek.png',
            'event_imgtitle' => '/techweek/summit_event_techweek_sm.png',
            
            'penyelenggara' => 'CCI Web Development Division',
            'deskripsi_singkat' => 'Workshop membuat web site dengan HTML, CSS, Java Script dan Framework React JS',
            'deskripsi_lengkap' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis maiores sit ratione obcaecati adipisci a ex sint in fugiat laborum corporis tenetur esse omnis, eius assumenda dolorem iure officiis quam ut dolor velit fuga dolore provident odio! Dolor minus dolore nulla, asperiores quidem a nemo. Ex nisi accusamus quas dolor, nesciunt voluptas. Incidunt quibusdam dolore, modi laudantium voluptatum nam tempore alias asperiores optio similique. Ut optio veniam necessitatibus dolores, eos unde minima placeat! Neque dignissimos numquam iure nobis quos laudantium quasi distinctio maiores unde, modi sint inventore voluptas tempora alias, omnis sequi id veniam enim et nostrum officiis voluptates dolorem recusandae est. Beatae, debitis in magni maxime recusandae aliquam labore a porro ut. Quia deserunt tempora obcaecati non! Placeat culpa modi sed dolores. Voluptates, magnam.',
            'lokasi' => 'Ruang P401, Gedung Deli, Fakultas Teknik Elektro, Telkom University',
            'gmap_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.0717678292963!2d107.62933282922586!3d-6.975417668506597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8a81b52ff1fe6d1e!2zNsKwNTgnMzEuNSJTIDEwN8KwMzcnNDcuNiJF!5e0!3m2!1sen!2sid!4v1652687722889!5m2!1sen!2sid" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
            'tanggal' => '2022-10-01',
            'opengate_start' => '08:00:00',
            'opengate_close' => '09:00:00',

            'wa_1' => '081349471340',
            'wa_2' => '081392481200',
            'line' => '@cciunitel',

            'speaker1_name' => 'Khulafaur Rasyidin',
            'speaker1_img' => '/techweek/ppl_0.png',
            'speaker1_desc' => 'Hackaton winner and webApp developer at Digital Inovative Louge',

            'speaker2_name' => 'Rakha Zulfan',
            'speaker2_img' => '/techweek/ppl_1.png',
            'speaker2_desc' => 'Web developer at Chomp Digital Solution Indonesia',

            'get_tak' => 1,
            'get_ecert' => 1,
            'get_modul' => 1,
            'get_snacks' => 1,
            'req_laptop' => 1,
            'req_ktm' => 1,
            'req_ticket' => 1,
            'kode_status' => 2
        ]);

        Event::create([
            'id' => 'evt_'.uniqid(),
            'nama_event' => 'UI/UX Design',
            'slug' => 'uiuxdesign2022',
            'event_imgtitle' => '/uiuxdesign/summit_event_uiux_sm.png',
            'penyelenggara' => 'CCI Desing Division',
            'line' => '@cciunitel',
            'get_tak' => 0,
            'get_ecert' => 0,
            'get_modul' => 0,
            'get_snacks' => 0,
            'req_laptop' => 0,
            'req_ktm' => 0,
            'req_ticket' => 0,
            'kode_status' => 0
        ]);

        Event::create([
            'id' => 'evt_'.uniqid(),
            'nama_event' => 'Net. Conf',
            'slug' => 'netconf2022',
            'event_imgtitle' => '/netconf/summit_event_netconf_sm.png',
            'penyelenggara' => 'CCI Network Division',
            'line' => '@cciunitel',
            'get_tak' => 0,
            'get_ecert' => 0,
            'get_modul' => 0,
            'get_snacks' => 0,
            'req_laptop' => 0,
            'req_ktm' => 0,
            'req_ticket' => 0,
            'kode_status' => 0
        ]);

        Event::create([
            'id' => 'evt_'.uniqid(),
            'nama_event' => 'Data Debunked Day',
            'slug' => 'datadebunk2022',
            'event_imgtitle' => '/datadebunked/summit_event_datadebunk_sm.png',
            'penyelenggara' => 'CCI Data Science Division',
            'line' => '@cciunitel',
            'get_tak' => 0,
            'get_ecert' => 0,
            'get_modul' => 0,
            'get_snacks' => 0,
            'req_laptop' => 0,
            'req_ktm' => 0,
            'req_ticket' => 0,
            'kode_status' => 0
        ]);

        Event::create([
            'id' => 'evt_'.uniqid(),
            'nama_event' => "Let's Talk With Modern Journalism",
            'slug' => 'talkjournalism2022',
            'event_imgtitle' => '/modernjournalism/summit_event_journalistalk_sm.png',
            'penyelenggara' => 'Student CCI',
            'line' => '@cciunitel',
            'get_tak' => 0,
            'get_ecert' => 0,
            'get_modul' => 0,
            'get_snacks' => 0,
            'req_laptop' => 0,
            'req_ktm' => 0,
            'req_ticket' => 0,
            'kode_status' => 0
        ]);
        Event::create([
            'id' => 'evt_'.uniqid(),
            'nama_event' => "CCI Royale League",
            'slug' => 'royaleleague2022',
            'event_imgtitle' => '/royaleleague/summit_event_royaleleague_sm.png',
            'penyelenggara' => 'CCI Games & Gadgets Division',
            'line' => '@cciunitel',
            'get_tak' => 0,
            'get_ecert' => 0,
            'get_modul' => 0,
            'get_snacks' => 0,
            'req_laptop' => 0,
            'req_ktm' => 0,
            'req_ticket' => 0,
            'kode_status' => 0
        ]);
    }
}
