<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

#[Layout('layouts.app')]
class Home extends Component
{
    public array $services = [];
    public array $menu = [];
    public array $technologies = [];
    public array $specializations = [];
    public array $solutions = [];

    // Form fields


    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:100'],
            'question' => ['required', 'string', 'max:1000'],
        ];
    }

    public function mount()
    {
        $this->menu = [
            [
                'title' => __('Sākums'),
                'icon' => 'home',
                'url' => '/'
            ],
            [
                'title' => __('Atvērtais kods'),
                'icon' => 'code-bracket-square',
                'url' => 'https://github.com/initiumlv'
            ]
        ];

        $this->specializations = [
            [
                'title' => __('Mazumtirdzniecība'),
                'description' => __('Kases sistēmas, krājumu vadība un klientu lojalitātes risinājumi'),
                'icon' => 'shopping-bag',
                'features' => [
                    __('POS sistēmas'),
                    __('Krājumu vadība'),
                    __('Klientu lojalitāte'),
                    __('E-komercijas integrācija')
                ]
            ],
            [
                'title' => __('Vairumtirdzniecība'),
                'description' => __('B2B platformas, pasūtījumu vadība un piegādātāju integrācijas risinājumi'),
                'icon' => 'truck',
                'features' => [
                    __('Pasūtījumu vadība'),
                    __('Piegādātāju portāls'),
                    __('Cenu vadība'),
                    __('Lielapjoma operācijas')
                ]
            ],
            [
                'title' => __('Loģistika'),
                'description' => __('Loģistikas vadības sistēmas, loģistika un krājumu izsekošana'),
                'icon' => 'building-office',
                'features' => [
                    __('NVS risinājumi'),
                    __('Krājumu izsekošana'),
                    __('Loģistikas vadība'),
                    __('Svītrkodu sistēmas')
                ]
            ],
        ];

        $this->technologies = [
            [
                'name' => 'Laravel',
                'description' => __('Mūsdienīgs PHP ietvars web izstrādātājiem'),
                'icon' => 'code-bracket-square',
                'category' => 'Aizmugure'
            ],
            [
                'name' => 'Livewire',
                'description' => __('Pilnas funkcionalitātes ietvars Laravel projektiem'),
                'icon' => 'bolt',
                'category' => 'Saskarne'
            ],
            [
                'name' => 'Alpine.js',
                'description' => __('Viegls JavaScript ietvars'),
                'icon' => 'code-bracket-square',
                'category' => 'Saskarne'
            ],
            [
                'name' => 'Tailwind CSS',
                'description' => __('Utilītu orientēts CSS ietvars'),
                'icon' => 'paint-brush',
                'category' => 'Saskarne'
            ],
            [
                'name' => 'NativePHP',
                'description' => __('Natīvas mobilās aplikācijas ar Laravel'),
                'icon' => 'device-phone-mobile',
                'category' => 'Mobilās'
            ],
            [
                'name' => 'MySQL',
                'description' => __('Relāciju datu bāzes vadības sistēma'),
                'icon' => 'circle-stack',
                'category' => 'Datu bāzes'
            ],
            [
                'name' => 'Microsoft SQL Server',
                'description' => __('Uzņēmuma datu bāzes vadības sistēma'),
                'icon' => 'circle-stack',
                'category' => 'Datu bāzes'
            ],
            [
                'name' => 'Laravel Cloud',
                'description' => __('Pārvaldīta mitināšanas platforma Laravel aplikācijām'),
                'icon' => 'cloud',
                'category' => 'Mākonis'
            ],
            [
                'name' => 'Filament',
                'description' => __('Administratīvais panelis un formu veidotājs Laravel projektiem'),
                'icon' => 'adjustments-horizontal',
                'category' => 'Administrācija'
            ],
            [
                'name' => 'Laravel Nova',
                'description' => __('Profesionāls administratīvais panelis Laravel projektiem'),
                'icon' => 'sparkles',
                'category' => 'Administrācija'
            ],
            [
                'name' => 'PHP',
                'description' => __('Servera puses programmēšanas valoda web izstrādei'),
                'icon' => 'code-bracket-square',
                'category' => 'Aizmugure'
            ],
            [
                'name' => '.NET',
                'description' => __('Daudzplatformu ietvars mūsdienīgu aplikāciju veidošanai'),
                'icon' => 'code-bracket-square',
                'category' => 'Aizmugure'
            ],
        ];

        $this->services = [
            [
                'title' => __('Web un mobilās aplikācijas'),
                'description' => __('Pielāgotas web aplikācijas un mobilās lietotnes jebkurai nozarei'),
                'details' => __('Radām dinamiskas web aplikācijas kuras piemērotas jebkurai ierīcei, kā arī mobilās aplikācijas. Specializējamies e-komercijas platformu izstrādē ar integrētiem maksājumu un noliktavu risinājumiem.'),
                'icon' => 'code-bracket',
                'features' => [
                    __('Web aplikācijas'),
                    __('Mājas lapas'),
                    __('Mobilās aplikācijas'),
                    __('E-komercijas risinājumi'),
                    __('Pielāgots dizains jebkurai ierīcei'),
                    __('API izstrāde')
                ]
            ],
            [
                'title' => __('Risinājumi biznesam'),
                'description' => __('Pielāgotas programmatūras un biznesa procesu automatizācijas risinājumi'),
                'details' => __('Izstrādājam biznesam paredzētas aplikācijas un risinājumus, CRM/ERP integrācijas un automatizācijas risinājumus. Specializējamies mazumtirdzniecības, vairumtirdzniecības un noliktavu specifisko risinājumu radīšanā.'),
                'icon' => 'building-office-2',
                'features' => [
                    __('Pielāgotas biznesa aplikācijas'),
                    __('CRM/ERP integrācijas'),
                    __('Procesu automatizācija'),
                    __('Noliktavu vadības sistēmas'),
                    __('POS risinājumi')
                ]
            ],
            [
                'title' => __('Mākslīgais intelekts un Analītika'),
                'description' => __('Mākslīgā intelekta risinājumi un datu analītikas sistēmas biznesa izaugsmei'),
                'details' => __('Implementējam AI risinājumus biznesa procesu optimizācijai. Veidojam Power BI pārskatus un datu vizualizācijas, kas palīdz pieņemt datu vadītus lēmumus.'),
                'icon' => 'cpu-chip',
                'features' => [
                    __('Virtualie asistenti'),
                    __('Datu analīze un vizualizācija'),
                    __('Power BI'),
                    __('Datu prognozēšanas modeļi'),
                    __('Automatizēta datu apstrāde')
                ]
            ],
            [
                'title' => __('IT Atbalsts un Uzturēšana'),
                'description' => __('Pilnvērtīgs IT atbalsts un sistēmu uzturēšana 24/7 režīmā'),
                'details' => __('Nodrošinām nepārtrauktu IT atbalstu, sistēmu uzturēšanu un drošības atjauninājumus. Piedāvājam gan preventīvo uzturēšanu, gan operatīvo tehnisko atbalstu.'),
                'icon' => 'wrench-screwdriver',
                'features' => [
                    __('24/7 tehniskais atbalsts'),
                    __('Sistēmu uzturēšana'),
                    __('Drošības atjauninājumi'),
                    __('Rezerves kopīju risinājumi'),
                ]
            ],
            [
                'title' => __('Digitālais mārketings'),
                'description' => __('Pilna spektra digitālā mārketinga risinājumi un SEO optimizācija'),
                'details' => __('Palīdzam uzlabot jūsu tiešsaistes klātbūtni ar SEO optimizāciju, sociālo mediju mārketingu un datu vadītu reklāmu kampaņu vadību.'),
                'icon' => 'megaphone',
                'features' => [
                    __('SEO optimizācija'),
                    __('Sociālo mediju mārketings'),
                    __('PPC reklāmu vadība'),
                    __('E-pasta mārketings'),
                    __('Konversiju analīze')
                ]
            ],
            [
                'title' => __('Konsultācijas un Apmācības'),
                'description' => __('IT konsultācijas un komandas apmācības modernajās tehnoloģijās'),
                'details' => __('Piedāvājam tehnoloģiju konsultācijas, arhitektūras plānošanu un komandas apmācības vairākās tehnoloģijās. Atbalstām uzņēmumus jebkādos IT jautājumos - Windows, printeri, Excel problēmas un citas ikdienas tehnoloģiju vajadzības.'),
                'icon' => 'academic-cap',
                'features' => [
                    __('Tehnoloģiju konsultācijas'),
                    __('Sistēmu plānošana & ieviešana'),
                    __('Komandas apmācības'),
                ]
            ]
        ];

        $this->solutions = [
            [
                'id' => 'product-reports',
                'name' => __('Biznesa vadības centrs'),
                'description' => __('Profesionāls risinājums uzņēmuma datu analizēšanai, atskaišu veidošanai un datu importam uz jebkuru sistēmu.'),
                'fullDescription' => __('Atskaišu Pārvaldības Sistēma ir uz modernām tehnoloģijām balstīts risinājums, kas ļauj uzņēmumiem efektīvi pārvaldīt, analizēt un dalīties ar svarīgu biznesa informāciju. Sistēma ir īpaši izstrādāta, lai vienkāršotu sarežģītus datu apstrādes procesus un padarītu tos pieejamus ikvienam lietotājam ar nulles kļūdu līmeni un reāllaika piekļuvi datiem.'),
                'icon' => 'document-chart-bar',
                'image' => '/images/solutions/product-reports-dashboard.jpg', // Screenshot of the dashboard
                'features' => [
                    __('80% ātrāka atskaišu izveide'),
                    __('Individuālas atskaites katram uzņēmumam'),
                    __('Individuāli importi katram uzņēmumam'),
                    __('Daudzveidīgi datu avoti (Jumis, citas DB)'),
                    __('Daudformātu eksports (Excel, JSON)'),
                    __('Automātiskā e-pasta piegāde'),
                    __('Komandas sadarbība un koplietošana'),
                ],
                'technologies' => ['Jumis','Horizon','E-Komercija', 'Datubāzes', 'API'],
                'pricing' => __('Sākot no €29/mēnesī'),
                'implementationTime' => __('1 - 7 dienas, atkarībā no prasībām'),
                'support' => __('Pilns tehniskais atbalsts, apmācības, dokumentācija un regulāri atjauninājumi'),
                'demo_available' => true,
                'customizable' => true,
                'deployment_options' => [
                    'cloud' => __('Mākoņa versija - €29/mēnesī'),
                    'desktop' => __('Windows lietotne - €199 vienreizējs'),
                    'onpremise' => __('Lokāli izvietota - €499+')
                ],
                'key_benefits' => [
                    __('10+ stundu ietaupījums nedēļā'),
                    __('Tipiskā atmaksāšanās: 3-6 mēneši'),
                    __('Nulles kļūdu līmenis'),
                    __('Centralizēta datu pārvaldība')
                ]
            ]
        ];
    }



    public function render()
    {
        return view('livewire.home');
    }
}
