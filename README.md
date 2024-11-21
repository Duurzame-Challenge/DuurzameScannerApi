<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
# Duurzame Scanner

## Overview

Duurzame Scanner is a web application designed to scan products and retrieve detailed information about their sustainability, allergens, alternatives, and more. The application uses Laravel for the backend and integrates with Pusher for real-time updates.

## Features

- Scan products by barcode
- Retrieve product details including user, category, brand, sustainabilities, allergens, and alternatives
- Real-time updates using Pusher
- API endpoints for product management
- Database seeding for initial data setup

## Getting Started

### Prerequisites

- PHP ^8.2
- Composer
- Node.js
- MySQL

### Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/your-repo/duurzame-scanner.git
    cd duurzame-scanner
    ```

2. Install dependencies:
    ```sh
    composer install
    npm install
    ```

3. Copy the `.env.example` file to `.env` and configure your environment variables:
    ```sh
    cp .env.example .env
    ```

4. Generate an application key:
    ```sh
    php artisan key:generate
    ```

5. Run migrations and seed the database:
    ```sh
    php artisan migrate --seed
    ```

6. Start the development server:
    ```sh
    php artisan serve
    npm run dev
    ```

## Usage

### API Endpoints

#### Get Product by Barcode

- **URL:** `/api/product-by-barcode`
- **Method:** `POST`
- **Parameters:**
  - `barcode` (string, required): The barcode of the product to retrieve.
- **Response:**
  - 200: Product details
  - 404: Product not found
  - 500: An error occurred

#### Get All Products Orders

- **URL:** `/api/products-orders`
- **Method:** `GET`
- **Response:**
  - 200: List of products orders

### Real-time Updates

The application uses Pusher for real-time updates. When a product is scanned, the details are broadcasted to the `products-orders` channel.

### Frontend Example

Create a separate HTML file (e.g., `scanned-product.html`) to display scanned product details in real-time:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scanned Product</title>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher("your-app-key", {
            cluster: "your-app-cluster",
        });

        var channel = pusher.subscribe("products-orders");
        channel.bind("App\\Events\\ProductScanned", function (data) {
            // Update the UI with the scanned product information
            document.getElementById("product-info").innerText = JSON.stringify(data.productOrder, null, 2);
        });

        // Function to fetch the latest scanned product
        async function fetchLatestScannedProduct() {
            try {
                const response = await fetch('/api/products-orders');
                const productsOrders = await response.json();
                if (productsOrders.length > 0) {
                    const latestProductOrder = productsOrders[productsOrders.length - 1];
                    document.getElementById("product-info").innerText = JSON.stringify(latestProductOrder, null, 2);
                }
            } catch (error) {
                console.error('Error fetching the latest scanned product:', error);
            }
        }

        // Fetch the latest scanned product on page load
        window.onload = fetchLatestScannedProduct;
    </script>
</head>
<body>
    <h1>Scanned Product</h1>
    <pre id="product-info">Waiting for scanned product...</pre>
</body>
</html>