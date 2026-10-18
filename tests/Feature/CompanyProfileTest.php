<?php

namespace Tests\Feature;

use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;
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
     * Test about page renders successfully with legalitas section.
     */
    public function test_about_page_renders_successfully(): void
    {
        $response = $this->get(route('about'));

        $response->assertStatus(200);
        $response->assertSee('Tentang kami');
        $response->assertSee('Siapa kami');
        $response->assertSee('Legalitas perusahaan');
        $response->assertSee('1410260052481');
        $response->assertSee('1000000011527288');
        $response->assertSee('46799');
        $response->assertSee('Visi dan misi');
        $response->assertSee('Nilai-nilai perusahaan');
        $response->assertSee('Perjalanan perusahaan');
    }

    /**
     * Test BreadcrumbList schema and Organization schema render in JSON-LD.
     */
    public function test_schema_breadcrumblist_and_organization_render_correctly(): void
    {
        // Home page breadcrumb
        $homeResponse = $this->get(route('home'));
        $homeResponse->assertStatus(200);
        $homeResponse->assertSee('"@type":"BreadcrumbList"', false);
        $homeResponse->assertSee('"name":"Beranda"', false);
        $homeResponse->assertSee('"taxID":"1000000011527288"', false);
        $homeResponse->assertSee('"1410260052481"', false);

        // About page breadcrumb
        $aboutResponse = $this->get(route('about'));
        $aboutResponse->assertStatus(200);
        $aboutResponse->assertSee('"@type":"BreadcrumbList"', false);
        $aboutResponse->assertSee('"name":"Tentang Kami"', false);

        // Team page breadcrumb
        $teamResponse = $this->get(route('team'));
        $teamResponse->assertStatus(200);
        $teamResponse->assertSee('"@type":"BreadcrumbList"', false);
        $teamResponse->assertSee('"name":"Tim & Manajemen"', false);

        // Contact page breadcrumb
        $contactResponse = $this->get(route('contact'));
        $contactResponse->assertStatus(200);
        $contactResponse->assertSee('"@type":"BreadcrumbList"', false);
        $contactResponse->assertSee('"name":"Hubungi Kami"', false);
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
        $response->assertSee('mahardikalogampersada@gmail.com');
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
        Mail::fake();

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

        Mail::assertSent(ContactMessageMail::class, function (ContactMessageMail $mail) use ($payload) {
            return $mail->hasTo('mahardikalogampersada@gmail.com') &&
                   $mail->data['nama'] === $payload['nama'] &&
                   $mail->data['email'] === $payload['email'];
        });
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
