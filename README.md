# Initium.lv Website

A modern, responsive website for Initium, showcasing IT and web development services. Built with Laravel, Livewire, and Tailwind CSS.


## Tech Stack

- **Backend**: Laravel 12.x
- **Frontend**: 
  - Livewire 3.x
  - Tailwind CSS v4
  - Alpine.js
  - Heroicons
- **Languages**: PHP, JavaScript, HTML, CSS
- **Database**: MySQL/PostgreSQL

## Getting Started

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & NPM
- MySQL/PostgreSQL

### Installation

1. Clone the repository:
```bash
git clone https://github.com/initiumlv/initium.git
cd initium
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install NPM dependencies:
```bash
npm install
```

4. Create environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Configure your database in `.env`

7. Run migrations:
```bash
php artisan migrate
```

8. Build assets:
```bash
npm run build
```

9. Start the development server:
```bash
php artisan serve
```

## Development

### Running in Development Mode

```bash
npm run dev
php artisan serve
```

### Building for Production

```bash
npm run build
```

## License

This project is proprietary software. All rights reserved.

## Contact

- Website: [initium.lv](https://initium.lv)
- Email: kristians@initium.lv
- GitHub: [@initiumlv](https://github.com/initiumlv) 