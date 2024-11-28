# Google Books Plugin

## Project Overview

The **Google Books Plugin** is a custom WordPress plugin designed to integrate seamlessly with the Google Books API, allowing website owners to fetch and display a list of books directly on their WordPress site. With this plugin, you can pull detailed book information such as titles, authors, descriptions, publisher details, and cover images from the Google Books API. It’s perfect for displaying books related to a specific query or category, all while optimizing performance through a caching mechanism to reduce unnecessary API calls.

This plugin offers flexible configuration settings for API key management, cache duration, and customization options for book display.

## Key Features

- **Seamless Integration with Google Books API**: Fetch and display book information such as title, author, description, publisher, page count, categories, and cover images.
- **Customizable Shortcodes**: Easily insert a list of books anywhere on your site using customizable shortcodes with options to specify the search query, number of results, and display layout.
- **Caching Support**: To improve performance, the plugin caches API responses, ensuring faster loading times and fewer API calls. Cache duration can be adjusted through the settings.
- **Responsive Display**: The book list can be displayed in various layouts (e.g., grid or list) and is fully responsive for both desktop and mobile devices.
- **User-Friendly Admin Settings**: Configure your API key, set cache expiration times, and customize display settings directly from the WordPress admin interface.

## Installation

Follow these steps to install and activate the plugin:

1. **Upload the Plugin**:
    - Download the plugin zip file.
    - Upload the plugin folder to your WordPress installation via FTP to `/wp-content/plugins/`.
    - Alternatively, you can upload the plugin from the **Plugins > Add New** page in the WordPress admin panel by clicking "Upload Plugin."
    
2. **Activate the Plugin**:
    - Go to **Plugins > Installed Plugins** in your WordPress admin panel.
    - Locate the **Google Books Plugin** and click "Activate."

## Configuration

Once the plugin is activated, you will need to configure the settings:

1. **Navigate to Plugin Settings**:
    - Go to **Settings > Google Books** in the WordPress admin dashboard.
   
2. **Enter Google Books API Key**:
    - In the settings page, you will find an input field where you need to enter your Google Books API Key. If you don't have an API key, you can obtain one from the [Google Developer Console](https://console.developers.google.com/).
   
3. **Set Cache Duration**:
    - Set the cache expiration time in the settings. This value determines how long the plugin will cache the API responses before making a new API request. This helps reduce the number of requests sent to Google Books and improves site performance.

## Usage

To display a list of books from the Google Books API on any page or post, simply use the following shortcode:


### Shortcode Attributes:

- **query** (optional): The search term to fetch books. Default is "programming".
- **max_results** (optional): The maximum number of books to display. Default is 5.
- **layout** (optional): The layout style of the book list (e.g., `grid` or `list`). Default is `grid`.

Example Usage:
```markdown
[book_list query="WordPress" max_results="10" layout="list"]

