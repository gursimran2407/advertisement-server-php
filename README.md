# AD Server in PHP

## Overview

This project is an Ad Server built with PHP. It serves advertisements to clients and tracks various metrics for analysis. The server is designed to be efficient and scalable, handling high traffic and providing relevant ads based on user data.

## Table of Contents

1. [Features](#features)
2. [Requirements](#requirements)
3. [Installation](#installation)
4. [Usage](#usage)
5. [API Endpoints](#api-endpoints)
6. [Database Schema](#database-schema)
7. [Contributing](#contributing)
8. [License](#license)

## Features

- **Ad Serving**: Serve relevant ads to users based on predefined criteria.
- **Tracking**: Track impressions, clicks, and other important metrics.
- **Reporting**: Generate reports on ad performance.
- **Scalable Architecture**: Designed to handle high traffic efficiently.

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache/Nginx web server

## Installation

1. **Clone the repository**:
    ```sh
    git clone https://github.com/gursimran2407/AD-SERVER-PHP.git
    cd AD-SERVER-PHP
    ```

2. **Set up the database**:
    - Import the provided SQL schema into your MySQL database.
    ```sh
    mysql -u username -p database_name < database/schema.sql
    ```

3. **Configure the application**:
    - Rename `config.sample.php` to `config.php`.
    - Update the database configuration in `config.php` with your database credentials.

4. **Install dependencies**:
    - If using Composer for dependency management, run:
    ```sh
    composer install
    ```

5. **Run the server**:
    - Ensure your web server is configured to serve the project directory.

## Usage

1. **Access the dashboard**:
    - Navigate to `http://your-server-url/dashboard` to access the admin dashboard.
    - Use the default admin credentials to log in:
        - Username: `admin`
        - Password: `password`

2. **Manage ads**:
    - Use the dashboard to create, edit, and delete ads.
    - Assign ads to different campaigns and track their performance.

3. **Serve ads**:
    - Integrate the ad-serving script into your client applications.
    - Use the provided API endpoints to fetch and display ads.

## API Endpoints

- **Get Ad**:
    - **URL**: `/api/getAd`
    - **Method**: `GET`
    - **Parameters**:
        - `userId` (optional): The ID of the user requesting the ad.
    - **Response**:
        ```json
        {
            "adId": 123,
            "content": "<ad-content>"
        }
        ```

- **Track Click**:
    - **URL**: `/api/trackClick`
    - **Method**: `POST`
    - **Parameters**:
        - `adId`: The ID of the clicked ad.
    - **Response**:
        ```json
        {
            "status": "success"
        }
        ```

- **Track Impression**:
    - **URL**: `/api/trackImpression`
    - **Method**: `POST`
    - **Parameters**:
        - `adId`: The ID of the displayed ad.
    - **Response**:
        ```json
        {
            "status": "success"
        }
        ```

## Database Schema

- **Ads**:
    - `id`: INT, primary key
    - `title`: VARCHAR(255)
    - `content`: TEXT
    - `campaign_id`: INT, foreign key
    - `created_at`: TIMESTAMP
    - `updated_at`: TIMESTAMP

- **Campaigns**:
    - `id`: INT, primary key
    - `name`: VARCHAR(255)
    - `budget`: DECIMAL
    - `start_date`: DATE
    - `end_date`: DATE
    - `created_at`: TIMESTAMP
    - `updated_at`: TIMESTAMP

- **Metrics**:
    - `id`: INT, primary key
    - `ad_id`: INT, foreign key
    - `impressions`: INT
    - `clicks`: INT
    - `created_at`: TIMESTAMP
    - `updated_at`: TIMESTAMP

## Contributing

1. **Fork the repository**:
    Click the 'Fork' button on the top right corner of this page.

2. **Create a new branch**:
    ```sh
    git checkout -b feature-branch
    ```

3. **Make your changes**:
    - Ensure your code follows the project's coding standards.
    - Include appropriate tests.

4. **Commit your changes**:
    ```sh
    git commit -m "Description of your changes"
    ```

5. **Push to your branch**:
    ```sh
    git push origin feature-branch
    ```

6. **Create a Pull Request**:
    Submit your pull request from your fork's branch to the main repository's `master` branch.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.
