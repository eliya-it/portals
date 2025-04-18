# Portals

This is a simple job listing application built with Laravel. It allows users to register, login, post job listings, edit and delete them, and also search , filters through existing job offers.

---

## 🚀 Features

-   User authentication (Register / Login / Logout)
-   CRUD for job listings
-   User-only job management
-   Blade templating with components
-   Form validation & flash messaging
-   Search and filter functionality
-   File upload support
-   Laravel relationship & authorization
-   Pagination

---

## 📂 Routes Overview

| Method | URI                        | Action                        | Middleware |
| ------ | -------------------------- | ----------------------------- | ---------- |
| GET    | `/`                        | Show all job listings         | Public     |
| GET    | `/listings/create`         | Show create listing form      | Auth       |
| POST   | `/listings`                | Store new listing             | Auth       |
| GET    | `/listings/manage`         | Manage user-specific listings | Auth       |
| GET    | `/listings/{listing}`      | Show single listing           | Public     |
| GET    | `/listings/{listing}/edit` | Show edit form                | Auth       |
| PUT    | `/listings/{listing}`      | Update listing                | Auth       |
| DELETE | `/listings/{listing}`      | Delete listing                | Auth       |
| GET    | `/register`                | Show registration form        | Guest      |
| POST   | `/users`                   | Create user                   | Guest      |
| GET    | `/login`                   | Show login form               | Guest      |
| POST   | `/users/auth`              | Authenticate user             | Guest      |
| POST   | `/logout`                  | Logout user                   | Auth       |

---

## 🛠️ Setup Instructions

### 1. Clone the Repo

```bash
git clone https://github.com/eliya-it/portals.git
cd portals
```

### 2. Set .env variables

Create .env file and set:

```
DB_USERNAME=database-username
DB_PASSWORD=database-password
```

### 3. Install Dependencies

composer install

```
npm install && npm run dev
```

### 4. Run Migrations & Seeders

php artisan migrate --seed

### 5. Serve the Application

```
php artisan serve
```

App will be running at: http://localhost:8000
