<?php

namespace Tests\Feature;

use Tests\TestCase;

class CompanyProfileTest extends TestCase
{
    /**
     * Test home page renders successfully with proper content and layout.
     */
    public function test_home_page_renders_successfully(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('PT Mahardika Logam Persada', false);
        $response->assertSee('Mitra terpercaya perdagangan logam');
        $response->assertSee('Material yang kami tangani');
        $response->assertSee('assets/css/style.css');
        $response->assertSee('assets/js/main.js');
        $response->assertSee('assets/images/logo.png');
        $response->assertSee('assets/images/warehouse.jpg');
    }

    /**
     * Test about page renders successfully.
     */
    public function test_about_page_renders_successfully(): void
    {
        $response = $this->get(route('about'));

        $response->assertStatus(200);
        $response->assertSee('Tentang kami');
        $response->assertSee('Siapa kami');
        $response->assertSee('Visi dan misi');
        $response->assertSee('Nilai-nilai perusahaan');
        $response->assertSee('Perjalanan perusahaan');
    }

    /**
     * Test team page renders successfully with all team figures.
     */
    public function test_team_page_renders_successfully(): void
    {
        $response = $this->get(route('team'));

        $response->assertStatus(200);
        $response->assertSee('Tim dan manajemen');
        $response->assertSee('Komisaris Utama');
        $response->assertSee('Komisaris');
        $response->assertSee('Direktur Utama');
        $response->assertSee('Direktur');
        $response->assertSee('assets/images/team-1.jpg');
        $response->assertSee('assets/images/team-2.jpg');
        $response->assertSee('assets/images/team-3.jpg');
        $response->assertSee('assets/images/team-4.jpg');
    }

    /**
     * Test contact page renders successfully with contact info and form.
     */
    public function test_contact_page_renders_successfully(): void
    {
        $response = $this->get(route('contact'));

        $response->assertStatus(200);
        $response->assertSee('Hubungi kami');
        $response->assertSee('mahardikalogampersada4@gmail.com');
        $response->assertSee('0821 7402 6509');
        $response->assertSee('Buaran I RT 003 RW 008');
        $response->assertSee('Ceritakan kebutuhan Anda');
        $response->assertSee('Formulir Pesan &amp; Penawaran', false);
        $response->assertSee('Chat WhatsApp');
    }

    /**
     * Test contact form submission with valid data.
     */
    public function test_contact_form_submission_success(): void
    {
        $payload = [
            'nama' => 'Budi Pratama',
            'email' => 'budi@industri.co.id',
            'telepon' => '081234567890',
            'perusahaan' => 'PT Manufaktur Baja',
            'pesan' => 'Kami memerlukan penawaran scrap tembaga dan aluminium sebanyak 10 ton.',
        ];

        $response = $this->post(route('contact.send'), $payload);

        $response->assertRedirect(route('contact'));
        $response->assertSessionHas('success');
    }

    /**
     * Test contact form validation fails when required fields are missing.
     */
    public function test_contact_form_validation_errors(): void
    {
        $response = $this->post(route('contact.send'), [
            'nama' => '',
            'email' => 'bukan-email',
            'telepon' => '',
            'pesan' => '',
        ]);

        $response->assertSessionHasErrors(['nama', 'email', 'telepon', 'pesan']);
    }
}
