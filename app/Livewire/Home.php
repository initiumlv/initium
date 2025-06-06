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
    public array $solutions = [];
    public array $menu = [];
    public array $technologies = [];
    public array $specializations = [];

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
                'title' => __('Home'),
                'icon' => 'home',
                'url' => '/'
            ],
            [
                'title' => __('Open Source'),
                'icon' => 'code-bracket-square',
                'url' => 'https://github.com/initiumlv'
            ]
        ];

        $this->specializations = [
            [
                'title' => __('Retail'),
                'description' => __('Point of sale systems, inventory management, and customer loyalty solutions'),
                'icon' => 'shopping-bag',
                'features' => [
                    __('POS Systems'),
                    __('Inventory Management'),
                    __('Customer Loyalty'),
                    __('E-commerce Integration')
                ]
            ],
            [
                'title' => __('Wholesale'),
                'description' => __('B2B platforms, order management, and supplier integration solutions'),
                'icon' => 'truck',
                'features' => [
                    __('Order Management'),
                    __('Supplier Portal'),
                    __('Price Management'),
                    __('Bulk Operations')
                ]
            ],
            [
                'title' => __('Warehouse'),
                'description' => __('Warehouse management systems, logistics, and inventory tracking'),
                'icon' => 'building-office',
                'features' => [
                    __('WMS Solutions'),
                    __('Inventory Tracking'),
                    __('Logistics Management'),
                    __('Barcode Systems')
                ]
            ],
        ];

        $this->technologies = [
            [
                'name' => 'Laravel',
                'description' => __('Modern PHP framework for web artisans'),
                'icon' => 'code-bracket-square',
                'category' => 'Backend'
            ],
            [
                'name' => 'Livewire',
                'description' => __('Full-stack framework for Laravel'),
                'icon' => 'bolt',
                'category' => 'Frontend'
            ],
            [
                'name' => 'Alpine.js',
                'description' => __('Lightweight JavaScript framework'),
                'icon' => 'code-bracket-square',
                'category' => 'Frontend'
            ],
            [
                'name' => 'Tailwind CSS',
                'description' => __('Utility-first CSS framework'),
                'icon' => 'paint-brush',
                'category' => 'Frontend'
            ],
            [
                'name' => 'NativePHP',
                'description' => __('Native mobile apps with Laravel'),
                'icon' => 'device-phone-mobile',
                'category' => 'Mobile'
            ],
            [
                'name' => 'MySQL',
                'description' => __('Relational database management system'),
                'icon' => 'circle-stack',
                'category' => 'Database'
            ],
            [
                'name' => 'Microsoft SQL Server',
                'description' => __('Enterprise database management system'),
                'icon' => 'circle-stack',
                'category' => 'Database'
            ],
            [
                'name' => 'Laravel Cloud',
                'description' => __('Managed hosting platform for Laravel applications'),
                'icon' => 'cloud',
                'category' => 'Cloud'
            ],
            [
                'name' => 'Filament',
                'description' => __('Admin panel & form builder for Laravel'),
                'icon' => 'adjustments-horizontal',
                'category' => 'Admin'
            ],
            [
                'name' => 'Laravel Nova',
                'description' => __('Premium administration panel for Laravel'),
                'icon' => 'sparkles',
                'category' => 'Admin'
            ],
            [
                'name' => 'PHP',
                'description' => __('Server-side scripting language for web development'),
                'icon' => 'code-bracket-square',
                'category' => 'Backend'
            ],
            [
                'name' => '.NET',
                'description' => __('Cross-platform framework for building modern applications'),
                'icon' => 'code-bracket-square',
                'category' => 'Backend'
            ],
        ];

        $this->services = [
            [
                'title' => __('Web Programming'),
                'description' => __('Custom web applications and websites built with modern technologies'),
                'icon' => 'code-bracket'
            ],
            [
                'title' => __('Mobile Development'),
                'description' => __('iOS and Android applications built with NativePHP'),
                'icon' => 'device-phone-mobile'
            ],
            [
                'title' => __('E-Commerce Development'),
                'description' => __('Custom e-commerce solutions with modern features and seamless payment integration'),
                'icon' => 'shopping-cart'
            ],
            [
                'title' => __('AI Integrations'),
                'description' => __('Intelligent solutions powered by artificial intelligence'),
                'icon' => 'cpu-chip'
            ],
            [
                'title' => __('Custom Applications'),
                'description' => __('Tailored software solutions for your specific needs'),
                'icon' => 'wrench-screwdriver'
            ],
            [
                'title' => __('Analytics (Power BI)'),
                'description' => __('Data-driven insights and visualizations with Power BI'),
                'icon' => 'chart-bar'
            ],
            [
                'title' => __('API Integrations'),
                'description' => __('Seamless integration with third-party services and ERP systems'),
                'icon' => 'arrow-path'
            ],
        ];

        $this->solutions = [
            [
                'title' => __('Search Engine Optimization'),
                'description' => __('Comprehensive SEO strategies to improve your online visibility and drive organic traffic'),
                'icon' => 'magnifying-glass',
                'features' => [
                    __('Technical SEO Optimization'),
                    __('Keyword Research & Strategy'),
                    __('Content Optimization'),
                    __('Performance Analytics')
                ]
            ],
            [
                'title' => __('Digital Marketing'),
                'description' => __('Strategic digital marketing solutions to reach and engage your target audience'),
                'icon' => 'megaphone',
                'features' => [
                    __('Social Media Marketing'),
                    __('Email Marketing Campaigns'),
                    __('PPC Advertising'),
                    __('Marketing Automation')
                ]
            ],
            [
                'title' => __('IT Support'),
                'description' => __('Comprehensive IT support and maintenance services to keep your systems running smoothly'),
                'icon' => 'wrench-screwdriver',
                'features' => [
                    __('24/7 Technical Support'),
                    __('System Maintenance'),
                    __('Security Updates'),
                    __('Performance Monitoring')
                ]
            ],
            [
                'title' => __('Analytics & Reporting'),
                'description' => __('Data-driven insights and comprehensive reporting to measure and optimize your digital performance'),
                'icon' => 'chart-bar',
                'features' => [
                    __('Performance Tracking'),
                    __('Conversion Analytics'),
                    __('Custom Reports'),
                    __('ROI Measurement')
                ]
            ],
        ];
    }

    public function submit(): void
    {
        $this->validate();

        Mail::raw(
            "Name: {$this->name}\nEmail: {$this->email}\nQuestion: {$this->question}",
            function ($message) {
                $message->to('kristians@initium.lv')
                        ->subject('New Question from Initium Landing Page');
            }
        );

        $this->reset(['name', 'email', 'question']);
        $this->sent = true;
    }

    public function render()
    {
        return view('livewire.home');
    }
}
