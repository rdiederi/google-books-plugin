<?php if (!empty($books)): ?>
    <ul class="gbp-book-list">
        <?php foreach ($books as $book): ?>
            <li class="book-item">
                <!-- Book Image -->
                <?php if (!empty($book['volumeInfo']['imageLinks']['thumbnail'])): ?>
                    <img src="<?php echo esc_url($book['volumeInfo']['imageLinks']['thumbnail']); ?>" alt="<?php echo esc_attr($book['volumeInfo']['title']); ?>">
                <?php endif; ?>

                <!-- Book Title -->
                <h3><?php echo esc_html($book['volumeInfo']['title'] ?? 'Untitled'); ?></h3>

                <!-- Author -->
                <p><strong>Author(s):</strong> <?php echo esc_html(implode(', ', $book['volumeInfo']['authors'] ?? ['Unknown Author'])); ?></p>


                <!-- Publisher -->
                <p><strong>Publisher:</strong> <?php echo esc_html($book['volumeInfo']['publisher'] ?? 'Not available'); ?></p>

                <!-- Publish Date -->
                <p><strong>Published Date:</strong> <?php echo esc_html($book['volumeInfo']['publishedDate'] ?? 'Not available'); ?></p>

                <!-- Language -->
                <p><strong>Language:</strong> <?php echo esc_html($book['volumeInfo']['language'] ?? 'Not available'); ?></p>

                <!-- Page Count -->
                <p><strong>Page Count:</strong> <?php echo esc_html($book['volumeInfo']['pageCount'] ?? 'Not available'); ?></p>

                <!-- Categories -->
                <p><strong>Categories:</strong> <?php echo esc_html(implode(', ', $book['volumeInfo']['categories'] ?? [])); ?></p>

                <!-- Preview Link -->
                <?php if (!empty($book['volumeInfo']['previewLink'])): ?>
                    <p><a href="<?php echo esc_url($book['volumeInfo']['previewLink']); ?>" target="_blank">Preview this book</a></p>
                <?php endif; ?>

                <!-- Description -->
                <p><strong>Description:</strong> <?php echo esc_html($book['volumeInfo']['description'] ?? 'No description available.'); ?></p>

            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No books found.</p>
<?php endif; ?>
