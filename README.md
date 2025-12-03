# Zavisoft Deployment Guide
## Prerequisites

- PHP >= 8.2
- Composer
- Node.js >= 16.x and npm
- MySQL database
- Web server (Apache/Nginx)

## Setup

### 1. Clone the Repository

```bash
https://github.com/steadfast-it/zavisoft.git
cd zavisoft
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 3. Environment Configuration

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

Edit the `.env` file and configure your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4. Database Setup

```bash
# Run migrations
php artisan migrate

# Seed the database
php artisan db:seed
```

### 5. Storage Link

Create a symbolic link for public storage access:

```bash
php artisan storage:link
```

### 6. Build Frontend Assets

```bash
# For development
npm run dev

# For production
npm run build
```

### 7. Set Permissions

```bash
# Set proper ownership
chown -R www-data:www-data storage bootstrap/cache

# Set proper permissions
chmod -R 775 storage bootstrap/cache
```

### 8. Optimize

```bash
# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache
```

### Clear Cache (if needed)

```bash
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear
```
